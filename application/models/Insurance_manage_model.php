<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insurance_manage_model extends CI_Model
{

	public function get_requested_cliam($post)
	{
		$injury_date_from_change = $this->input->post('injury_date_from');
		$injury_date_to = $this->input->post('injury_date_to');
		if ($this->input->post('submitted_date') != "") {
			$submitted_date = explode('/', $this->input->post('submitted_date'));
			$submitted_date = $submitted_date[2] . '-' . $submitted_date[0] . '-' . $submitted_date[1];
			$submitted_date_from = $submitted_date . " 00:00:00";
			$submitted_date_to = $submitted_date . " 23:59:59";
		}
		if ($this->input->post('injury_date_from') != "") {
			$startDate = date("m/d/Y", strtotime($injury_date_from_change));
			$startDate = explode('/', $startDate);
			$startDate = $startDate[2] . '-' . $startDate[0] . '-' . $startDate[1];
			$startDate .= " 00:00:00";
		}
		if ($this->input->post('injury_date_to') != "") {
			$endDate = date("m/d/Y", strtotime($injury_date_to));
			$endDate = explode('/', $endDate);
			$endDate = $endDate[2] . '-' . $endDate[0] . '-' . $endDate[1];
			$endDate .= " 23:59:59";
		}
		## Read value
		$draw = $post['draw'];
		$row = $post['start'];
		$rowperpage = $post['length']; // Rows display per page
		$columnIndex = $post['order'][0]['column']; // Column index
		$columnName = 'emp.id';
		$columnSortOrder = $post['order'][0]['dir']; // asc or desc
		$searchValue = $this->db->escape_str($post['search']['value']); // Search value

		## Search
		$searchQuery = " ";
		if ($searchValue != '') {
			$searchQuery = "(first_name like '%" . $searchValue . "%' or last_name like '%" . $searchValue . "%' or middle_name like'%" . $searchValue . "%' or full_name like '%" . $searchValue . "%') ";
		}

		## Total number of records with filtering
		$totalRecords = $this->db->count_all('employees');
		if ($searchValue != "" || $this->input->post('state') != "" || $this->input->post('status') != "" || $this->input->post('injury_date_from') != "" || $this->input->post('injury_date_to') != "" || $this->input->post('submitted_date') != "" || $this->input->post('firstname') != "" || $this->input->post('lastname') != "") {
			//set filter value in session
			// $filter_array = [
			// 		'injury_date_from'=> $this->input->post('injury_date_from'),
			// 		'injury_date_to'=>$this->input->post('injury_date_to'),
			// 		'state'=>$this->input->post('state'),
			// 		'status'=>$this->input->post('status'),
			// 		'submitted_date' =>$this->input->post('submitted_date'),
			// ];
			// $this->session->set_userdata($filter_array);
			$this->db->select('id');
			$this->db->from('employees');
			if ($searchQuery != "" && $searchQuery != NULL && $searchQuery != " ") $this->db->where($searchQuery);
			if (isset($startDate) && $startDate != "") $this->db->where("JSON_EXTRACT(details, '$.began_work')>=", $startDate);
			// if(isset($startDate) && $startDate != "")$this->db->where('time_of_injury >=',$startDate);
			// if(isset($endDate) && $endDate != "")$this->db->where('time_of_injury <=',$endDate);
			if (isset($endDate) && $endDate != "") $this->db->where("JSON_EXTRACT(details, '$.began_work')<=", $endDate);
			if ($this->input->post('state') != "") $this->db->where('state_id', $this->input->post('state'));
			if ($this->input->post('firstname') != "") $this->db->where('first_name', trim($this->input->post('firstname')));
			if ($this->input->post('lastname') != "") $this->db->where('last_name', trim($this->input->post('lastname')));
			/*if($this->input->post('status') != "")$this->db->where('status',$this->input->post('status'));
			if($this->input->post('submitted_date') != "")
				$this->db->where('created_at >=',$submitted_date_from)->where('created_at <=',$submitted_date_to);*/
			$totalRecordwithFilter = $this->db->get()->num_rows();
		} else {
			$totalRecordwithFilter =  $totalRecords;
		}

		#get data by making query;
		$this->db->select('emp.id,emp.first_name,emp.full_name,emp.last_name,emp.middle_name,emp.gender,emp.discipline,emp.time_of_injury,emp.state_id,s.name as state,emp.status,emp.created_at,emp.work_stop_date,emp.facility_name,emp.return_work_date,emp.details,JSON_EXTRACT(emp.details, "$.began_work") as began_date');
		$this->db->from('employees emp');
		if ($searchValue != "")
			$this->db->where($searchQuery);
		/*if ($this->input->post('status') != "")
			$this->db->where('emp.status',$this->input->post('status'));*/
		if ($this->input->post('state') != "")
			$this->db->where('s.id', $this->input->post('state'));
		if ($this->input->post('firstname') != "")
			$this->db->where('emp.first_name', trim($this->input->post('firstname')));
		if ($this->input->post('lastname') != "")
			$this->db->where('emp.last_name', trim($this->input->post('lastname')));
		if (isset($startDate) && $startDate != "")
			// $this->db->where('emp.time_of_injury >=',$startDate);
			$this->db->where("JSON_EXTRACT(emp.details, '$.began_work')>=", $startDate);
		if (isset($endDate) && $endDate != "") $this->db->where("JSON_EXTRACT(emp.details, '$.began_work')<=", $endDate);
		// if (isset($endDate) && $endDate != "")$this->db->where('emp.time_of_injury <=',$endDate);
		/*if($this->input->post('submitted_date') != "")
			$this->db->where('emp.created_at >=',$submitted_date_from)->where('emp.created_at <=',$submitted_date_to);	*/
		$this->db->order_by($columnName, $columnSortOrder);
		$this->db->limit($rowperpage, $row);
		$this->db->join('state s', 's.id = emp.state_id');
		$empRecords2 =  $this->db->get()->result_array();
		// echo $this->db->last_query();exit;
		$data = [];
		foreach ($empRecords2 as $key => $value) {
			# Checkbox
			$id  = 	'<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
						<input type="checkbox" class="group-checkable employee_id" value="' . $value['id'] . '">
						<span></span>
					</label>';

			# Status
			switch ($value['status']) {
				case '2':
					$status = '<select id="select_status_' . $value['id'] . '" class="form-control" onchange="status_change_fun(' . $value['id'] . ')" style="width:auto;padding:auto;"><option value="0"> Processing </option><option value="1"> Pending </option><option value="2" selected> Submitted </option></select>';
					break;
				case '1':
					$status = '<select id="select_status_' . $value['id'] . '" class="form-control" onchange="status_change_fun(' . $value['id'] . ')" style="width:auto;padding:auto;"><option value="0"> Processing </option><option value="1" selected> Pending </option><option value="2"> Submitted </option></select>';
					break;

				default:
					$status = '<select id="select_status_' . $value['id'] . '" class="form-control" onchange="status_change_fun(' . $value['id'] . ')" style="width:auto;padding:auto;"><option value="0"  selected> Processing </option><option value="1"> Pending </option><option value="2"> Submitted </option></select>';
					break;
			}

			# Work Stop Date
			if ($value['work_stop_date'] != '0000-00-00' || $value['work_stop_date'] != '' || $value['work_stop_date'] != NULL) {
				// $last_work_date = date('m/d/Y',strtotime($value['work_stop_date']));
				$last_work_date = database_to_datepicker_format($value['work_stop_date']);
			} else {
				$last_work_date = "";
			}
			# Return Stop Date
			if ($value['return_work_date'] != '0000-00-00') {
				$return_work_date = database_to_datepicker_format($value['return_work_date']);
			} else {
				$return_work_date = "";
			}

			# Action

			$action = '<a href="#" style="padding:6px 8px" class="btn btn-sm edit btn-success"><i class="fa fa-pencil"></i></a> ';

			switch ($value['state_id']) {
				case '1':
					$action .= '<a target="_blank" style="padding:5px 8px; max-width:35px;" class="btn btn-info" href="' . base_url('Insurance_manage/generate_newyork_pdf/' . $value['id'] . '/1') . '" title="View Order"><i class="fa fa-eye"></i></a> <a href="' . base_url('insurance_manage/new_york/' . $value['id']) . '" style="padding:6px 7px" class="btn btn-sm  btn-success"><i class="fa fa-edit"></i></a>';
					break;
				case '2':
					$action .= '<a target="_blank" style="padding:5px 8px; max-width:35px;" class="btn btn-info" href="' . base_url('Insurance_manage/generate_new_jeresy_pdf/' . $value['id'] . '/1') . '" title="View Order"><i class="fa fa-eye"></i></a><a href="' . base_url('insurance_manage/new_jersey/' . $value['id']) . '" style="padding:6px 7px" class="btn btn-sm  btn-success"><i class="fa fa-edit"></i></a>';
					break;
				case '3':
					$action .= '<a target="_blank" style="padding:5px 8px; max-width:35px;" class="btn btn-info" href="' . base_url('Insurance_manage/generate_maryland_pdf/' . $value['id'] . '/1') . '" title="View Order"><i class="fa fa-eye"></i></a><a href="' . base_url('insurance_manage/maryland/' . $value['id']) . '" style="padding:6px 7px" class="btn btn-sm  btn-success"><i class="fa fa-edit"></i></a>';
					break;
				case '4':
					$action .= '<a target="_blank" style="padding:5px 8px; max-width:35px;" class="btn btn-info" href="' . base_url('Insurance_manage/generate_connecticut_pdf/' . $value['id'] . '/1') . '" title="View Order"><i class="fa fa-eye"></i></a><a href="' . base_url('insurance_manage/connecticut/' . $value['id']) . '" style="padding:6px 7px" class="btn btn-sm  btn-success"><i class="fa fa-edit"></i></a>';
					break;
				case '5':
					$action .= '<a target="_blank" style="padding:5px 8px; max-width:35px;" class="btn btn-info" href="' . base_url('Insurance_manage/generate_pennsylvania_pdf/' . $value['id'] . '/1') . '" title="View Order"><i class="fa fa-eye"></i></a><a href="' . base_url('insurance_manage/pennsylvania/' . $value['id']) . '" style="padding:6px 7px" class="btn btn-sm  btn-success"><i class="fa fa-edit"></i></a>';
					break;
				case '6':
					$action .= '<a target="_blank" style="padding:5px 8px; max-width:35px;" class="btn btn-info" href="' . base_url('Insurance_manage/generate_southcarolina_pdf/' . $value['id'] . '/1') . '" title="View Order"><i class="fa fa-eye"></i></a><a href="' . base_url('insurance_manage/south_carolina/' . $value['id']) . '" style="padding:6px 7px" class="btn btn-sm  btn-success"><i class="fa fa-edit"></i></a>';
					break;
				case '7':
					$action .= '<a target="_blank" style="padding:5px 8px; max-width:35px;" class="btn btn-info" href="' . base_url('Insurance_manage/generate_missouri_pdf/' . $value['id'] . '/1') . '" title="View Order"><i class="fa fa-eye"></i></a><a href="' . base_url('insurance_manage/missouri/' . $value['id']) . '" style="padding:6px 7px" class="btn btn-sm  btn-success"><i class="fa fa-edit"></i></a>';
					break;
				case '8':
					$action .= '<a target="_blank" style="padding:5px 8px; max-width:35px;" class="btn btn-info" href="' . base_url('Insurance_manage/generate_columbia_pdf/' . $value['id'] . '/1') . '" title="View Order"><i class="fa fa-eye"></i></a><a href="' . base_url('insurance_manage/columbia/' . $value['id']) . '" style="padding:6px 7px" class="btn btn-sm  btn-success"><i class="fa fa-edit"></i></a>';
					break;
					// case 's'
				default:
					$action = "Something went Wrong";
					break;
			}
		
			if ($value['return_work_date'] != '0000-00-00' && $value['work_stop_date'] != '0000-00-00' && $value['work_stop_date'] != '') {

				$return_worked = date("Y/m/d", strtotime($value['return_work_date']));
				$stop_date = date("Y/m/d", strtotime($value['work_stop_date']));
				$return_worked = strtotime($return_worked);;
				$stop_date = strtotime($stop_date);
				$timeDiff = abs($return_worked - $stop_date);
				$numberDays = $timeDiff / 86400;  // 86400 seconds in one day
				// and you might want to convert to integer
				$numberDays = intval($numberDays); //exit;
				// $datediff = $return_worked - $stop_date;
				// $day_missed = round(@$datediff / (60 * 60 * 24));
			} else {
				$numberDays = '';
			}

			$json =  $value['details'];
			$detail = json_decode($json);
			if ($value['state_id'] == '1') {
				$prepare_name = @$detail->print_name;
				$part_body_affected = @$detail->list_body_part_affected;
			} else if ($value['state_id'] == '5') {
				$prepare_name = @$detail->person_name;
				$part_body_affected = @$detail->part_body_affected;
			} else {
				$prepare_name = @$detail->preparer_name;
				$part_body_affected = @$detail->part_body_affected;
			}
			// state name
			if ($value['state'] == 'New York') {
				$state = "NY";
			} else if ($value['state'] == 'New Jersey') {
				$state = "NJ";
			} else if ($value['state'] == 'Maryland') {
				$state = 'MD';
			} else if ($value['state'] == 'Connecticut') {
				$state = "CT";
			} else if ($value['state'] == 'Pennsylvania') {
				$state = 'PA';
			} else if ($value['state'] == 'South Carolina') {
				$state = 'SC';
			} else if ($value['state'] == 'Missouri') {
				$state = 'MO';
			} else if ($value['state'] == 'Columbia') {
				$state = 'DC';
			} else {
				$state = '';
			}
			if ($value['state_id'] == '5') {
				$time_of_injury = @$detail->date_of_injury;
				// $time_of_injury = @$time_of_injury = @$value['time_of_injury'];
			} else {
				$time_of_injury = @$value['time_of_injury'];
			}

			if ($detail->began_work != '') {
				$began_work = database_to_datepicker_format($detail->began_work);
			} else {
				$began_work = "";
			}

			$data[] = [
				"id_first" => '',
				"id" => $id,
				"full_name" => $value['last_name'],
				"last_name" => $value['first_name'],
				// "gender"=> ($value['gender'] == "1")?"Male":"Female",
				"discipline" => ucfirst($value['discipline']),
				"time_of_injury" => $began_work, //$value['time_of_injury'],
				// "time_of_injury" => database_to_datetimepicker(@$detail->began_work), //$value['time_of_injury'],
				"facility" => $value['facility_name'],
				// "submited_date" => date('m/d/Y',strtotime($value['created_at'])),
				"state" => $state,
				"body_part" => $part_body_affected,
				"type_of_injury" => @$detail->type_of_injury,
				"last_work_date" => $last_work_date,
				"return_to_work" => $return_work_date,
				"day_missed" => $numberDays,
				"claim_number" => @$detail->claim_number,
				"preparer_name" => @$detail->wc_contact_info,
				"insurance_company" => @$detail->insurance_company,
				// "status" => $status,
				"comments" => @$detail->additional_information,
				"action" => $action,
				// "action2" => $action,
				// "action3" => $action,
			];
		}
		
		## Response
		$response = array(
			"draw" => intval($draw),
			"iTotalRecords" => $totalRecords,
			"iTotalDisplayRecords" => $totalRecordwithFilter,
			"aaData" => $data,
		);
		return $response;
	}

	public function change_status($ins_data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('employees', $ins_data);
		return array('status' => true, 'name' => $this->db->get_where('employees', array('id' => $id))->result_array()[0]['full_name']);
	}

	public function get_employee_by_id($id)
	{
		// echo $id;exit;
		$this->db->select('emp.*,s.name as state_name,status as emp_status');
		$this->db->from('employees emp');
		$this->db->where('emp.id', $id);
		$this->db->join('state s', 's.id = emp.state_id');
		$data1 = $this->db->get()->result_array()[0];
		// echo $this->db->last_query();
		// echo '<pre>';
		// print_r($data1);
		// echo '</pre>';
		// exit();
		// if(array_key_exists(0,$data1)){
		// $data1 = $this->db->get()->result_array()[0];
		$data2 = (array)json_decode($data1['details']);
		unset($data1['details']);
		if (is_array($data1) && is_array($data2)) {
			$response = array('status' => true, 'data' => array_merge($data1, $data2));
		} else {
			$response = array('status' => false);
		}
		// }else{
		// 	$response = ["data"];
		// }
		// echo $this->db->last_query();exit;
		return $response;
	}

	public function update_employee_by_id($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('employees', $data);
		// echo $this->db->last_query();exit;
		return;
	}

	public function get_single_emp($id)
	{
		$this->db->select('state_id');
		$this->db->from('employees');
		$this->db->where('id', $id);
		return $this->db->get()->row_array();
	}

	public function getSingle_data($data, $table, $where = '')
	{
		$this->db->select($data);
		$this->db->from($table);
		if ($where != '') {
			$this->db->where($where);
		}
		$info = $this->db->get();
		return $info->row_array();
	}

	public function update($data, $table, $where)
	{
		$this->db->where($where);
		return $this->db->update($table, $data);
	}

	public function employeeList($id)
	{
		$this->db->select('emp.id,emp.first_name,emp.full_name,emp.last_name,emp.middle_name,emp.gender,emp.discipline,emp.time_of_injury,emp.state_id,state.name as state_name,emp.status,emp.created_at,emp.facility_name,emp.details,emp.work_stop_date,emp.return_work_date');
		$this->db->from('employees emp');
		$this->db->join('state', 'state.id = emp.state_id');
		$this->db->where_in('emp.id', json_decode($id));
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_excel_data($data)
	{
		#get data by making query;
		$this->db->select('emp.id,emp.first_name,emp.full_name,emp.last_name,emp.middle_name,emp.gender,emp.discipline,emp.time_of_injury,emp.state_id,state.name as state_name,emp.status,emp.created_at,emp.facility_name,emp.details,emp.work_stop_date,emp.return_work_date');
		$this->db->from('employees emp');
		if ($this->input->post('lname') != "")
			$this->db->where('emp.last_name', trim($this->input->post('lname')));
		if ($this->input->post('fname') != "")
			$this->db->where('emp.first_name', trim($this->input->post('fname')));
		// if ($this->input->post('status') != "")
		// 	$this->db->where('emp.status',$this->input->post('status'));
		if ($this->input->post('state') != "")
			$this->db->where('state.id', $this->input->post('state'));
		if ($this->input->post('injury_date_from'))
			$this->db->where("JSON_EXTRACT(emp.details, '$.began_work')>=", date("Y-m-d 00:00:00", strtotime($this->input->post('injury_date_from'))));
		//$this->db->where('emp.time_of_injury >=',date("Y-m-d 00:00:00",strtotime($this->input->post('injury_date_from'))));
		if ($this->input->post('injury_date_to')) $this->db->where("JSON_EXTRACT(emp.details, '$.began_work')<=", date("Y-m-d 23:59:59", strtotime($this->input->post('injury_date_to'))));
		// if($this->input->post('submitted_date') != "")
		// 	$this->db->where('emp.created_at >=',date("Y-m-d 00:00:00",strtotime($this->input->post('submitted_date'))))->where('emp.created_at <=',date("Y-m-d 23:59:59",strtotime($this->input->post('submitted_date'))));
		// $this->db->limit($rowperpage,$row);
		$this->db->join('state', 'state.id = emp.state_id');

		return  $empRecords2 =  $this->db->get()->result_array();
		// echo $this->db->last_query();exit;
		//
	}

	public function email_history($data)
	{
		$this->db->insert('email_history', $data);
	}

	public function getemail_employee_Data()
	{
		$this->db->select('employees.full_name,state.name as state_name,email_history.to,email_history.body,email_history.created_date');
		$this->db->from('email_history');
		$this->db->join('employees', 'email_history.emp_id = employees.id', 'inner');
		$this->db->join('state', 'state.id = email_history.state');
		// $this->db->where('email_history.emp_id',$id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function email_info($data)
	{
		$result = $this->db->insert('email_info', $data);
		return $result;
	}

	public function update_record($data)
	{


		$this->db->select('details');
		$this->db->from('employees');
		$this->db->where("id", $data['id']);
		$query = $this->db->get();
		$array = $query->row_array();

		// echo '<pre>';
		// print_r($this->db->last_query());
		// echo '</pre>';
		// exit();

		$old_json =  json_decode($array['details'], "true");

		// echo '<pre>';
		// print_r($old_json);
		// echo '</pre>';
		// exit();


		$json_data = [
			'state_injury' => $data['state_injury'],
			'claim_number' => $data['claim_number'],
			'wc_contact_info' => $data['contact_information'],
			'insurance_company' => $data['insurance_company'],
			'return_work_date' => datetimepiker_to_database($data['return_work_date']),
			'began_work' => datetimepiker_to_database($data['time_of_injury'])
		];
		// echo '<pre>';
		// print_r($json_data);
		// echo '</pre>';
		// exit();
		$final_json = json_encode(array_merge($old_json, $json_data));
		// echo $final_json;
		// exit;
		// echo
		// date('Y-m-d H:i:s', strtotime($data['time_of_injury']));
		// exit;
		$data_to_update = [
			'last_name' => $data['last_name'],
			'first_name' => $data['first_name'],
			// 'time_of_injury' => datetimepiker_to_database($data['time_of_injury']),
			'work_stop_date' => datetimepiker_to_database($data['work_stop_date']),
			'return_work_date' => datetimepiker_to_database($data['return_work_date']),
			'details' => $final_json
		];

		// echo '<pre>';
		// print_r($data_to_update);
		// echo '</pre>';
		// exit();

		$this->db->update('employees', $data_to_update, ["id" => $data['id']]);
		return true;
	}
}



/* End of file Insurance_manage_model.php */
/* Location: ./application/models/Insurance_manage_model.php */
