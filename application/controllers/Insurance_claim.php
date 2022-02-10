<?php
defined('BASEPATH') or exit('No direct script access allowed');

use mikehaertl\pdftk\Pdf;

class Insurance_claim extends CI_Controller
{

	public $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Insurance_claim_model', 'Insurance_claim');
		$this->load->model('Insurance_manage_model', 'Insurance_manage');
		$this->load->helper('my_helper');
	}

	public function index()
	{
		$this->data['state_type'] = "new_york";
		$this->load->view('insurance_claim/form', $this->data);
	}


	//if ur $filename contains the full path
	//then $path = $filename
	function showThePDF($filename)
	{
		$path = FCPATH . 'upload/pdf/' . $filename;
		header('Content-Length: ' . filesize($path));
		header("Content-type: application/pdf");
		header("Content-disposition: inline; filename=$filename");
		readfile($path);
		// redirect(base_url());
	}


	function check_default($array)
	{

		if ($array == 'default') {
			$this->form_validation->set_message('check_default', 'This field is required.');
			return FALSE;
		} else {
			return TRUE;
		}
	}
	public function new_york()
	{

		$this->data['state_type'] = "new_york";
		if ($this->input->post()) {
			// Employee Information validation
			$this->form_validation->set_rules('new_york[state_injury]', "State Inquiry", 'required|callback_check_default');
			$this->form_validation->set_rules('new_york[full_name]', "Employee Name", 'required');
			$this->form_validation->set_rules('new_york[gender]', "Gender", 'required');
			// $this->form_validation->set_rules('new_york[address]',"Address", 'required');
			$this->form_validation->set_rules('new_york[discipline]', "Discipline Rules", 'required');
			$this->form_validation->set_rules('new_york[facility_name]', "Facility Name", 'required');
			// $this->form_validation->set_rules('new_york[contact_no]',"Contact", 'required');
			// $this->form_validation->set_rules('new_york[return_work_date]',"Return Work Date", 'required');

			// Employee Injury Or Illness
			$this->form_validation->set_rules('new_york[began_work]', "Began Work", 'required');
			$this->form_validation->set_rules('new_york[time_of_injury]', "Time of injury/illness", 'required');
			$this->form_validation->set_rules('new_york[where_did_the_injury]', "Where did the injury / illness happen", 'required');
			$this->form_validation->set_rules('new_york[location_where_worked]', "Was this location where the employee normally worked", 'required');
			$this->form_validation->set_rules('new_york[employee_supervisor]', "Employee’s supervisor", 'required');
			$this->form_validation->set_rules('new_york[supervisor_see_injury]', "Was this location where the employee normally worked", 'required');
			$this->form_validation->set_rules('new_york[what_employee_doing]', "What was the employee doing when he/she was injured or became ill?", 'required');
			$this->form_validation->set_rules('new_york[how_did_the_injury]', "How did the injury/illness occur?", 'required');
			$this->form_validation->set_rules('new_york[list_body_part_affected]', "Explain fully the nature of the employees injury/illness; list body parts affected", 'required');
			$this->form_validation->set_rules('new_york[was_an_object]', "Was an object (e.g. forklift, hammer, acid) involved in the injury / illness','rules", 'required');
			$this->form_validation->set_rules('new_york[was_the_injury_vehicle]', "Was the injury the result of the user or operation of a licensed motor vehicle", 'required');

			// retrurn work validation
			$this->form_validation->set_rules('new_york[job_title]', "What was the employees job title?", 'required');
			$this->form_validation->set_rules('new_york[what_type_activities_work]', "What types of activities did the employee normally perform at work?", 'required');


			if (isset($this->input->post('new_york')['location_where_worked']) && $this->input->post('new_york')['location_where_worked'] ==  "0") {
				$this->form_validation->set_rules('new_york[why_employee_there]', "Why was the employee there?", 'required');
				// $validation[] = ['field' => 'new_york[why_employee_there]','label' => 'Why was the employee there?','rules' => 'required'];
			}
			/*if (isset($this->input->post('new_york')['anyone_see_injury']) && $this->input->post('new_york')['anyone_see_injury'] ==  "1") {
				 $this->form_validation->set_rules('new_york[see_injury_happen_names]',"Give name(s)", 'required');
				// $validation[] = ['field' => 'new_york[see_injury_happen_names]','label' => 'Give name(s)','rules' => 'required'];
				}*/
			if (isset($this->input->post('new_york')['was_an_object']) && $this->input->post('new_york')['was_an_object'] ==  "1") {
				$this->form_validation->set_rules('new_york[what_was_object]', "What was it", 'required');
				// $validation[] = ['field' => 'new_york[what_was_object]','label' => 'What was it','rules' => 'required'];
			}
			if (isset($this->input->post('new_york')['was_the_injury_vehicle']) && $this->input->post('new_york')['was_the_injury_vehicle'] ==  "1") {
				$this->form_validation->set_rules('new_york[whos_vehicle]', "Who’s vehicle", 'required');
				// $validation[] = ['field' => 'new_york[whos_vehicle]','label' => 'Who’s vehicle','rules' => 'required'];
			}
			if (isset($this->input->post('new_york')['did_the_death']) && $this->input->post('new_york')['did_the_death'] ==  "1") {
				$this->form_validation->set_rules('new_york[death_date]', "What was the date of death?", 'required');
				$this->form_validation->set_rules('new_york[info_nearest_relative]', "Name and address of the nearest relative", 'required');
				// $validation[] = ['field' => 'new_york[death_date]','label' => 'What was the date of death?','rules' => 'required'];
				// $validation[] = ['field' => 'new_york[info_nearest_relative]','label' => 'Name and address of the nearest relative','rules' => 'required'];
			}
			if (isset($this->input->post('new_york')['did_stop_work']) && $this->input->post('new_york')['did_stop_work'] ==  "1") {
				$this->form_validation->set_rules('new_york[work_stop_date]', "What was the date of death?", 'required');
				// $validation[] = ['field' => 'new_york[work_stop_date]','label' => 'What was the date of death?','rules' => 'required'];
			}
			// $this->form_validation->set_rules($validation);
			if ($this->form_validation->run() == FALSE) {
				$this->data['errors'] = $this->form_validation->error_array();
				$this->load->view('insurance_claim/form', $this->data);
			} else {
				$details = [
					'state_injury' => @$this->input->post('new_york')['state_injury'],
					'contact_no' => @$this->input->post('new_york')['contact_no'],
					'preferred_contact_no' => @$this->input->post('new_york')['preferred_contact_no'],
					'preferred_email' => @$this->input->post('new_york')['preferred_email'],
					'preferred_contact' => @$this->input->post('new_york')['preferred_contact'],
					'began_work' => datetimepiker_to_database(@$this->input->post('new_york')['began_work']),
					'has_employee_notice' => @$this->input->post('new_york')['has_employee_notice'],
					'notice_given_to' => @$this->input->post('new_york')['notice_given_to'],
					'notice_date' => @$this->input->post('new_york')['notice_date'],
					'given_claimant_information' => @$this->input->post('new_york')['given_claimant_information'],
					'given_claimant_information_date' => @$this->input->post('new_york')['given_claimant_information_date'],
					'where_did_the_injury' => @$this->input->post('new_york')['where_did_the_injury'],
					'location_where_worked' => @$this->input->post('new_york')['location_where_worked'],
					'why_employee_there' => @$this->input->post('new_york')['why_employee_there'],
					'employee_supervisor' => @$this->input->post('new_york')['employee_supervisor'],
					'supervisor_see_injury' => @$this->input->post('new_york')['supervisor_see_injury'],
					'anyone_see_injury' => @$this->input->post('new_york')['anyone_see_injury'],
					'see_injury_happen_names' => @$this->input->post('new_york')['see_injury_happen_names'],
					'what_employee_doing' => @$this->input->post('new_york')['what_employee_doing'],
					'how_did_the_injury' => @$this->input->post('new_york')['how_did_the_injury'],
					'list_body_part_affected' => @$this->input->post('new_york')['list_body_part_affected'],
					'was_an_object' => @$this->input->post('new_york')['was_an_object'],
					'what_was_object' => @$this->input->post('new_york')['what_was_object'],
					'was_the_injury_vehicle' => @$this->input->post('new_york')['was_the_injury_vehicle'],
					'whos_vehicle' => @$this->input->post('new_york')['whos_vehicle'],
					'lincese_plate_number' => @$this->input->post('new_york')['lincese_plate_number'],
					'did_the_death' => @$this->input->post('new_york')['did_the_death'],
					'death_date' => @$this->input->post('new_york')['death_date'],
					'info_nearest_relative' => @$this->input->post('new_york')['info_nearest_relative'],
					'first_treatment' => @$this->input->post('new_york')['first_treatment'],
					'first_treatment_option' => @$this->input->post('new_york')['first_treatment_option'],
					'where_receive_first_treatment' => @$this->input->post('new_york')['where_receive_first_treatment'],
					'who_treated_where' => @$this->input->post('new_york')['who_treated_where'],
					'is_still_treated' => @$this->input->post('new_york')['is_still_treated'],
					'info_treate_doctor' => @$this->input->post('new_york')['info_treate_doctor'],
					'did_anothre_work_injury' => @$this->input->post('new_york')['did_anothre_work_injury'],
					'who_treated_doctor_previous' => @$this->input->post('new_york')['who_treated_doctor_previous'],
					'did_stop_work' => @$this->input->post('new_york')['did_stop_work'],
					'return_work_date' => @$this->input->post('new_york')['return_work_date'],
					'has_return_to_work' => @$this->input->post('new_york')['has_return_to_work'],
					'employment_status' => @$this->input->post('new_york')['employment_status'],
					'what_type_activities_work' => @$this->input->post('new_york')['what_type_activities_work'],
					'additional_information' => @$this->input->post('new_york')['additional_information'],
				];
				$full_name = preg_replace('!\s+!', ' ', @$this->input->post('new_york')['full_name']);
				$first_name = (isset(explode(' ', $full_name)[0]) != "") ? explode(' ', $full_name)[0] : '';
				$middle_name = (isset(explode(' ', $full_name)[1]) != "") ? explode(' ', $full_name)[1] : '';
				$last_name = (isset(explode(' ', $full_name)[2]) != "") ? explode(' ', $full_name)[2] : '';
				$date = date("Y-m-d");
				$time = $this->input->post('new_york')['time_of_injury'];
				$time_of_injury_time = date('Y-m-d H:i:s', strtotime("$date $time"));
				$employee = [
					'full_name' => $full_name,
					'first_name' => $first_name,
					'middle_name' => $middle_name,
					'last_name' => $last_name,
					'gender' => @$this->input->post('new_york')['gender'],
					'discipline' => @$this->input->post('new_york')['discipline'],
					'facility_name' => @$this->input->post('new_york')['facility_name'],
					'address' => @$this->input->post('new_york')['address'],
					'date_hire' => datepiker_to_database(@$this->input->post('new_york')['date_hire']),
					'time_of_injury' => datetimepiker_to_database(@$time_of_injury_time),
					// 'time_of_injury' => datetimepiker_to_database(@$this->input->post('new_york')['time_of_injury']),
					'work_stop_date' => datepiker_to_database(@$this->input->post('new_york')['work_stop_date']),
					'return_work_date' => datepiker_to_database(@$this->input->post('new_york')['return_work_date']),
					'job_title' => @$this->input->post('new_york')['job_title'],
					'details' => json_encode($details),
					'state_id' => 1,
					'question1' => @$this->input->post('question1'),
					'question2' => @$this->input->post('question2'),
					'question3' => @$this->input->post('question3'),
					'question4' => @$this->input->post('question4'),
					'emp_state' => @$this->input->post('NY_emp_state'),
				];

				$emp_id = $this->Insurance_claim->employee_insert($employee);
				if (isset($_POST['save_print'])) {

					if ($emp_id != "") {
						// $this->session->set_flashdata('success', 'Claim Request Submmited');
						$insert_id =  base64_encode($this->db->insert_id());
						$this->session->set_userdata('usertype', 'employee');
						// $this->session->set_flashdata('success', 'Form Save Successfully');
						$this->sendmail($emp_id);
						$this->generate_newyork_pdf($emp_id, "showpdf");
					} else {
						$this->session->set_flashdata('error', 'Something Want Worng');
						redirect('', 'refresh');
					}
				} else if (isset($_POST['onlysave'])) {

					if ($emp_id != "") {
						// $this->session->set_flashdata('success', 'Claim Request Submmited');
						$insert_id =  base64_encode($this->db->insert_id());
						$this->sendmail($emp_id);
						$this->session->set_userdata('usertype', 'employee');
						$this->session->set_flashdata('success', 'Form Save Successfully');
						redirect('Insurance_claim/pdf_download_view/' . $insert_id);
						// redirect('Insurance_claim/pdf_download_view/'.base64_encode($insert_id));
						//redirect('','refresh'	);
					} else {
						$this->session->set_flashdata('error', 'Something Want Worng');
						redirect('', 'refresh');
					}
				}
				// echo "fhfhfgh";exit;
			}
		} else {
			$this->load->view('insurance_claim/form', $this->data);
		}
	}

	public function maryland()
	{

		$this->data['state_type'] = "maryland";
		if ($this->input->post()) {

			$this->form_validation->set_rules('maryland[full_name]', "Employee Name", 'required');
			$this->form_validation->set_rules('maryland[discipline]', "Discipline", 'required');
			$this->form_validation->set_rules('maryland[facility_name]', "Facility Name", 'required');
			$this->form_validation->set_rules('maryland[gender]', "Gender", 'required');
			$this->form_validation->set_rules('maryland[job_title]', "Occupation / Job Title", 'required');
			$this->form_validation->set_rules('maryland[gender]', "Gender", 'required');
			$this->form_validation->set_rules('maryland[job_title]', "Occupation / Job Title", 'required');
			// $this->form_validation->set_rules('maryland[employment_status]',"Employment Status", 'required');
			$this->form_validation->set_rules('maryland[began_work]', "Date of Injury / Illness", 'required');
			$this->form_validation->set_rules('maryland[time_of_injury]', "Time of Occurrence", 'required');
			$this->form_validation->set_rules('maryland[work_stop_date]', "Last Work Date", 'required');
			$this->form_validation->set_rules('maryland[date_notified]', "Date Employer Notified", 'required');
			$this->form_validation->set_rules('maryland[type_of_injury]', "Date Employer Notified", 'required');
			$this->form_validation->set_rules('maryland[date_of_injury]', "Date of Injury / Illness", 'required');
			$this->form_validation->set_rules('maryland[location_where_accident]', "Department or Location Where Accident or Illness occurred", 'required');
			$this->form_validation->set_rules('maryland[part_body_affected]', "Part of Body Affected", 'required');
			$this->form_validation->set_rules('maryland[equipment_meterials]', "ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED', 'rules' => 'required", 'required');
			$this->form_validation->set_rules('maryland[activity_engaed]', "SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED", 'required');
			$this->form_validation->set_rules('maryland[work_process_emp_engade]', "WORK PROCESS THE EMPLOYEE WAS ENGAGED IN WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED", 'required');
			$this->form_validation->set_rules('maryland[how_injury_health_condition]', "HOW INJURY OR ILLNESS/ABNORMAL HEALTH CONDITION OCCURRED. DESCRIBE THE SEQUENCE OF EVENTS AND INCLUDE ANY OBJECTS OR SUBSTANCES THAT DIRECTLY INJURED THE EMPLOYEE OR MADE THE EMPLOYEE ILL", 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->data['errors'] = $this->form_validation->error_array();
				$this->load->view('insurance_claim/form', $this->data);
			} else {

				$details = [
					'employee_email' => @$this->input->post('maryland')['employee_email'],
					'state_injury' => @$this->input->post('maryland')['state_injury'],
					'marital_status' => @$this->input->post('maryland')['marital_status'],
					'employment_status' => @$this->input->post('maryland')['employment_status'],
					'day_worked' => @$this->input->post('maryland')['day_worked'],
					'full_pay' => @$this->input->post('maryland')['full_pay'],
					'did_salary_continue' => @$this->input->post('maryland')['did_salary_continue'],
					'date_of_injury' => @$this->input->post('maryland')['date_of_injury'],
					'date_notified' => @$this->input->post('maryland')['date_notified'],
					'date_disability_began' => @$this->input->post('maryland')['date_disability_began'],
					'type_of_injury' => @$this->input->post('maryland')['type_of_injury'],
					'began_work' => datetimepiker_to_database(@$this->input->post('maryland')['began_work']),
					// 'began_work' => timepicker_to_database(@$this->input->post('maryland')['began_work']),
					'part_body_affected' => @$this->input->post('maryland')['part_body_affected'],
					'did_injury_employer_permises' => @$this->input->post('maryland')['did_injury_employer_permises'],
					'location_where_accident' => @$this->input->post('maryland')['location_where_accident'],
					'equipment_meterials' => @$this->input->post('maryland')['equipment_meterials'],
					'activity_engaed' => @$this->input->post('maryland')['activity_engaed'],
					'work_process_emp_engade' => @$this->input->post('maryland')['work_process_emp_engade'],
					'how_injury_health_condition' => @$this->input->post('maryland')['how_injury_health_condition'],
					'if_fatal_give_date' => @$this->input->post('maryland')['if_fatal_give_date'],
					'were_safeguards' => @$this->input->post('maryland')['were_safeguards'],
					'were_they_used' => @$this->input->post('maryland')['were_they_used'],
					'physician_health_care_provider' => @$this->input->post('maryland')['physician_health_care_provider'],
					'hospital_or_off_site_treatment' => @$this->input->post('maryland')['hospital_or_off_site_treatment'],
					'hospital_or_off_site_treatment_checkboxs' => @$this->input->post('maryland')['hospital_or_off_site_treatment_checkboxs'],
					'witnesses' => @$this->input->post('maryland')['witnesses'],
					'witnesses_1' => @$this->input->post('maryland')['witnesses_1'],
					'witnesses_2' => @$this->input->post('maryland')['witnesses_2'],
					'date_administrator_notified' => @$this->input->post('maryland')['date_administrator_notified'],
					'date_prepared' => @$this->input->post('maryland')['date_prepared'],
					'preparer_name' => @$this->input->post('maryland')['preparer_name'],
					'phone_number' => @$this->input->post('maryland')['phone_number'],
				];
				$full_name = preg_replace('!\s+!', ' ', @$this->input->post('maryland')['full_name']);
				$last_name = (isset(explode(' ', $full_name)[0]) != "") ? explode(' ', $full_name)[0] : '';
				$first_name = (isset(explode(' ', $full_name)[1]) != "") ? explode(' ', $full_name)[1] : '';
				$middle_name = (isset(explode(' ', $full_name)[2]) != "") ? explode(' ', $full_name)[2] : '';

				$employee = [
					'full_name' => $full_name,
					'first_name' => $first_name,
					'middle_name' => $middle_name,
					'last_name' => $last_name,
					'gender' => @$this->input->post('maryland')['gender'],
					'discipline' => @$this->input->post('maryland')['discipline'],
					'facility_name' => @$this->input->post('maryland')['facility_name'],
					'address' => @$this->input->post('maryland')['address'],
					'date_hire' => datepiker_to_database(@$this->input->post('maryland')['date_hire']),
					'time_of_injury' => datetimepiker_to_database(@$this->input->post('maryland')['time_of_injury']),
					'work_stop_date' => datepiker_to_database(@$this->input->post('maryland')['work_stop_date']),
					'return_work_date' => datepiker_to_database(@$this->input->post('maryland')['return_work_date']),
					'job_title' => @$this->input->post('maryland')['job_title'],
					'details' => json_encode($details),
					'state_id' => 3,
					'question1' => @$this->input->post('question1'),
					'question2' => @$this->input->post('question2'),
					'question3' => @$this->input->post('question3'),
					'question4' => @$this->input->post('question4'),
					'emp_state' => @$this->input->post('ML_emp_state'),
				];
				$emp_id = $this->Insurance_claim->employee_insert($employee);

				if (isset($_POST['save_print'])) {

					if ($emp_id != "") {
						// $this->session->set_flashdata('success', 'Claim Request Submmited');
						$this->session->set_userdata('usertype', 'employee');
						$insert_id =  $this->db->insert_id();
						$this->sendmail($emp_id);
						$this->generate_maryland_pdf($emp_id, 'showpdf');
						// redirect('Insurance_claim/pdf_download_view/'.base64_encode($insert_id));
						//redirect('','refresh');
					} else {
						$this->session->set_flashdata('error', 'Something Want Worng');
						redirect('', 'refresh');
					}
				} else if (isset($_POST['onlysave'])) {

					if ($emp_id != "") {
						// $this->session->set_flashdata('success', 'Claim Request Submmited');
						$this->session->set_userdata('usertype', 'employee');
						$insert_id =  $this->db->insert_id();
						$this->sendmail($emp_id);
						redirect('Insurance_claim/pdf_download_view/' . base64_encode($insert_id));
						//redirect('','refresh');
					} else {
						$this->session->set_flashdata('error', 'Something Want Worng');
						redirect('', 'refresh');
					}
				}
			}
		} else {
			$this->load->view('insurance_claim/form', $this->data);
		}
	}
	public function connecticut()
	{
		// echo $this->input->post('connecticut')['did_injury_employer_permises'];exit;
		$this->data['state_type'] = "connecticut";

		if ($this->input->post()) {
			$this->form_validation->set_rules('connecticut[last_name]', "Employee Last Name", 'required');
			$this->form_validation->set_rules('connecticut[first_name]', "Employee First Name", 'required');
			$this->form_validation->set_rules('connecticut[middle_name]', "Employee Middle Name", 'required');
			$this->form_validation->set_rules('connecticut[gender]', "Gender", 'required');
			$this->form_validation->set_rules('connecticut[discipline]', "Discipline", 'required');
			$this->form_validation->set_rules('connecticut[facility_name]', "Facility Name", 'required');
			$this->form_validation->set_rules('connecticut[state_injury]', "State Of Injury", 'required');
			$this->form_validation->set_rules('connecticut[began_work]', "Time Employee Began Work", 'required');
			$this->form_validation->set_rules('connecticut[activity_engaed]', "SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED", 'required');
			$this->form_validation->set_rules('connecticut[job_title]', "Occupation / Job Title", 'required');
			$this->form_validation->set_rules('connecticut[did_injury_employer_permises]', "Did Injury / Illness / Exposure occur on employer’s premises?", 'required');
			$this->form_validation->set_rules('connecticut[part_body_affected]', " Part of Body Affected", 'required');
			$this->form_validation->set_rules('connecticut[type_of_injury]', "Type of Injury / Illness", 'required');
			$this->form_validation->set_rules('connecticut[town_of_injury]', "Town of Injury / Illness :", 'required');
			$this->form_validation->set_rules('connecticut[date_of_injury]', "Date of Injury / Illness", 'required');
			$this->form_validation->set_rules('connecticut[time_of_injury]', "Time of Occurrence", 'required');
			$this->form_validation->set_rules('connecticut[date_notified]', "Date Employer Notified", 'required');
			$this->form_validation->set_rules('connecticut[date_disability_began]', "Date Disability Began", 'required');
			$this->form_validation->set_rules('connecticut[work_stop_date]', "Last Work Date", 'required');
			$this->form_validation->set_rules('connecticut[hospital_or_off_site_treatment_checkboxs][]', " Initial treatment", 'required');
			$this->form_validation->set_rules('connecticut[how_injury_health_condition]', "How injury / illness occurred – describe the sequences of events, including any object or substances that directly injured the employee or made the employee il", 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->data['errors'] = $this->form_validation->error_array();
				// echo "<pre>";
				// print_r ($this->data['errors']);
				// echo "</pre>";;exit;
				$this->load->view('insurance_claim/form', $this->data);
			} else {

				$details = [
					'employee_email' => @$this->input->post('connecticut')['employee_email'],
					'state_injury' => @$this->input->post('connecticut')['state_injury'],
					'date_of_injury' => @$this->input->post('connecticut')['date_of_injury'],
					'town_of_injury' => @$this->input->post('connecticut')['town_of_injury'],
					'began_work' => datetimepiker_to_database(@$this->input->post('connecticut')['began_work']),
					'date_disability_began' => @$this->input->post('connecticut')['date_disability_began'],
					'if_fatal_give_date' => @$this->input->post('connecticut')['if_fatal_give_date'],
					'equipment_meterials' => @$this->input->post('connecticut')['equipment_meterials'],
					'activity_engaed' => @$this->input->post('connecticut')['activity_engaed'],
					'did_injury_employer_permises' => @$this->input->post('connecticut')['did_injury_employer_permises'],
					'type_of_injury' => @$this->input->post('connecticut')['type_of_injury'],
					'part_body_affected' => @$this->input->post('connecticut')['part_body_affected'],
					'were_safeguards' => @$this->input->post('connecticut')['were_safeguards'],
					'if_provided' => @$this->input->post('connecticut')['if_provided'],
					'how_injury_health_condition' => @$this->input->post('connecticut')['how_injury_health_condition'],
					'physician_health_care_provider' => @$this->input->post('connecticut')['physician_health_care_provider'],
					'hospital_address' => @$this->input->post('connecticut')['hospital_address'],
					'hospital_or_off_site_treatment_checkboxs' => @$this->input->post('connecticut')['hospital_or_off_site_treatment_checkboxs'],
					'contact_name' => @$this->input->post('connecticut')['contact_name'],
					'phone_number' => @$this->input->post('connecticut')['phone_number'],
					'date_administrator_notified' => @$this->input->post('connecticut')['date_administrator_notified'],
					'date_prepared' => @$this->input->post('connecticut')['date_prepared'],
					'preparer_name' => @$this->input->post('connecticut')['preparer_name'],
					'date_notified' => @$this->input->post('connecticut')['date_notified'],
					'rate_of_pay' => @$this->input->post('connecticut')['rate_of_pay'],
				];

				$employee = [
					'first_name' => @$this->input->post('connecticut')['first_name'],
					'last_name' => @$this->input->post('connecticut')['last_name'],
					'middle_name' => @$this->input->post('connecticut')['middle_name'],
					'full_name' => @$this->input->post('connecticut')['first_name'] . ' ' . @$this->input->post('connecticut')['middle_name'] . ' ' . @$this->input->post('connecticut')['last_name'],
					'gender' => @$this->input->post('connecticut')['gender'],
					'discipline' => @$this->input->post('connecticut')['discipline'],
					'facility_name' => @$this->input->post('connecticut')['facility_name'],
					'address' => @$this->input->post('connecticut')['address'],
					'date_hire' => datepiker_to_database(@$this->input->post('connecticut')['date_hire']),
					'job_title' => @$this->input->post('connecticut')['job_title'],
					'time_of_injury' => datetimepiker_to_database(@$this->input->post('connecticut')['time_of_injury']),
					'work_stop_date' => datepiker_to_database(@$this->input->post('connecticut')['work_stop_date']),
					'return_work_date' => datepiker_to_database(@$this->input->post('connecticut')['return_work_date']),
					'details' => json_encode($details),
					'state_id' => 4,
					'question1' => @$this->input->post('question1'),
					'question2' => @$this->input->post('question2'),
					'question3' => @$this->input->post('question3'),
					'question4' => @$this->input->post('question4'),
					'emp_state' => @$this->input->post('CT_emp_state'),
				];
				$emp_id = $this->Insurance_claim->employee_insert($employee);

				if (isset($_POST['save_print'])) {

					if ($emp_id != "") {
						// $this->session->set_flashdata('success', 'Claim Request Submmited');
						$this->session->set_userdata('usertype', 'employee');
						$insert_id =  $this->db->insert_id();
						$this->sendmail($emp_id);
						$this->generate_connecticut_pdf($emp_id, 'showpdf');
						//redirect('','refresh');
					} else {
						$this->session->set_flashdata('error', 'Something Want Worng');
						redirect('', 'refresh');
					}
				} else if (isset($_POST['onlysave'])) {

					if ($emp_id != "") {
						// $this->session->set_flashdata('success', 'Claim Request Submmited');
						$this->session->set_userdata('usertype', 'employee');
						$this->sendmail($emp_id);
						$insert_id =  $this->db->insert_id();
						redirect('Insurance_claim/pdf_download_view/' . base64_encode($insert_id));
						//redirect('','refresh');
					} else {
						$this->session->set_flashdata('error', 'Something Want Worng');
						redirect('', 'refresh');
					}
				}
			}
		} else {
			$this->load->view('insurance_claim/form', $this->data);
		}
	}
	public function pennsylvania()
	{

		$this->data['state_type'] = "pennsylvania";
		if ($this->input->post()) {
			$validation = [
				['field' => 'pennsylvania[last_name]', 'label' => 'Employee Last Name', 'rules' => 'required'],
				['field' => 'pennsylvania[first_name]', 'label' => 'Employee First Name', 'rules' => 'required'],
				['field' => 'pennsylvania[gender]', 'label' => 'Gender', 'rules' => 'required'],
				['field' => 'pennsylvania[marital_status]', 'label' => 'Marital Status', 'rules' => 'required'],
				['field' => 'pennsylvania[discipline]', 'label' => 'Discipline', 'rules' => 'required'],
				['field' => 'pennsylvania[facility_name]', 'label' => 'Facility Name', 'rules' => 'required'],
				// ['field' => 'pennsylvania[job_title]','label' => 'Occupation / Job Title','rules' => 'required'],
				['field' => 'pennsylvania[type_of_injury]', 'label' => 'Type of Injury or Illness', 'rules' => 'required'],
				['field' => 'pennsylvania[part_body_affected]', 'label' => 'Part of Body Affected', 'rules' => 'required'],
				['field' => 'pennsylvania[were_safeguards]', 'lable' => 'Were safeguards or safety equipment provided?', 'rules' => 'required'],
				['field' => 'pennsylvania[where_used_safaguard]', 'label' => 'Were safeguards or safety equipment used?', 'rules' => 'required'],
				['field' => 'pennsylvania[how_injury_health_condition]', 'label' => 'Date Employer Notified', 'rules' => 'required'],
				['field' => 'pennsylvania[hospital_or_off_site_treatment_checkboxs][]', 'label' => 'Date Disability Began', 'rules' => 'required'],
			];

			$this->form_validation->set_rules($validation);
			if ($this->form_validation->run() == FALSE) {
				$this->data['errors'] = $this->form_validation->error_array();
				$this->load->view('insurance_claim/form', $this->data);
			} else {
				$details = [
					'employee_email' => @$this->input->post('pennsylvania')['employee_email'],
					'address' => @$this->input->post('pennsylvania')['address'],
					'city' => @$this->input->post('pennsylvania')['city'],
					'state' => @$this->input->post('pennsylvania')['state'],
					'zip_code' => @$this->input->post('pennsylvania')['zip_code'],
					'employee_phone_number' => @$this->input->post('pennsylvania')['employee_phone_number'],
					'marital_status' => @$this->input->post('pennsylvania')['marital_status'],
					'employment_status' => @$this->input->post('pennsylvania')['employment_status'],
					'date_of_injury' => @$this->input->post('pennsylvania')['date_of_injury'],
					'began_work' => datetimepiker_to_database(@$this->input->post('pennsylvania')['began_work']),
					'date_disability_began' => @$this->input->post('pennsylvania')['date_disability_began'],
					'date_notified' => @$this->input->post('pennsylvania')['date_notified'],
					'contact_first_name' => @$this->input->post('pennsylvania')['contact_first_name'],
					'contact_last_name' => @$this->input->post('pennsylvania')['contact_last_name'],
					'contact_phone_number' => @$this->input->post('pennsylvania')['contact_phone_number'],
					'type_of_injury' => @$this->input->post('pennsylvania')['type_of_injury'],
					'part_body_affected' => @$this->input->post('pennsylvania')['part_body_affected'],
					'did_injury_employer_permises' => @$this->input->post('pennsylvania')['did_injury_employer_permises'],
					'out_of_state_injury' => @$this->input->post('pennsylvania')['out_of_state_injury'],
					'were_safeguards' => @$this->input->post('pennsylvania')['were_safeguards'],

					'where_used_safaguard' => @$this->input->post('pennsylvania')['where_used_safaguard'],
					'equipment_meterials' => @$this->input->post('pennsylvania')['equipment_meterials'],
					'how_injury_health_condition' => @$this->input->post('pennsylvania')['how_injury_health_condition'],
					'if_fatal_give_date' => @$this->input->post('pennsylvania')['if_fatal_give_date'],
					'physician_health_care_provider' => @$this->input->post('pennsylvania')['physician_health_care_provider'],
					'hospital_or_off_site_treatment_checkboxs' => @$this->input->post('pennsylvania')['hospital_or_off_site_treatment_checkboxs'],
					'witness_first_name' => @$this->input->post('pennsylvania')['witness_first_name'],
					'witness_last_name' => @$this->input->post('pennsylvania')['witness_last_name'],
					'witness_phone_number' => @$this->input->post('pennsylvania')['witness_phone_number'],
					'person_name' => @$this->input->post('pennsylvania')['person_name'],
					'person_title' => @$this->input->post('pennsylvania')['person_title'],
					'person_phone' => @$this->input->post('pennsylvania')['person_phone'],
					'date_prepared' => @$this->input->post('pennsylvania')['date_prepared'],
					'physician_first_name' => @$this->input->post('pennsylvania')['physician_first_name'],
					'physician_last_name' => @$this->input->post('pennsylvania')['physician_last_name'],
					'physician_street' => @$this->input->post('pennsylvania')['physician_street'],
					'physician_state' => @$this->input->post('pennsylvania')['physician_state'],
					'physician_zip' => @$this->input->post('pennsylvania')['physician_zip'],
					'physician_hospital_name' => @$this->input->post('pennsylvania')['physician_hospital_name'],
					'physician_hospital_street' => @$this->input->post('pennsylvania')['physician_hospital_street'],
					'physician_hospital_city' => @$this->input->post('pennsylvania')['physician_hospital_city'],
					'physician_hospital_state' => @$this->input->post('pennsylvania')['physician_hospital_state'],
				];
				$employee = [
					'first_name' => @$this->input->post('pennsylvania')['first_name'],
					'last_name' => @$this->input->post('pennsylvania')['last_name'],
					'full_name' => @$this->input->post('pennsylvania')['first_name'] . ' ' . @$this->input->post('pennsylvania')['last_name'],
					'gender' => @$this->input->post('pennsylvania')['gender'],
					'discipline' => @$this->input->post('pennsylvania')['discipline'],
					// 'dob' => datepiker_to_database(@$this->input->post('pennsylvania')['dob']),
					'facility_name' => @$this->input->post('pennsylvania')['facility_name'],
					'address' => @$this->input->post('pennsylvania')['address'] . ' ' . @$this->input->post('pennsylvania')['city'] . ' ' . @$this->input->post('pennsylvania')['state'] . ' ' . @$this->input->post('pennsylvania')['zip_code'],
					'date_hire' => datepiker_to_database(@$this->input->post('pennsylvania')['date_hire']),
					// 'job_title' => @$this->input->post('pennsylvania')['job_title'],
					// 'time_of_injury' => database_to_timepicker(@$this->input->post('pennsylvania')['time_of_injury']),
					'time_of_injury' => datetimepiker_to_database(@$this->input->post('pennsylvania')['time_of_injury']),
					'work_stop_date' => datepiker_to_database(@$this->input->post('pennsylvania')['work_stop_date']),
					'return_work_date' => datepiker_to_database(@$this->input->post('pennsylvania')['return_work_date']),
					'details' => json_encode($details),
					'state_id' => 5,
					'question1' => @$this->input->post('question1'),
					'question2' => @$this->input->post('question2'),
					'question3' => @$this->input->post('question3'),
					'question4' => @$this->input->post('question4'),
					'emp_state' => @$this->input->post('PL_emp_state'),
				];
				// echo "<pre>";
				// print_r ($employee);
				// echo "</pre>";exit;
				$emp_id = $this->Insurance_claim->employee_insert($employee);
				if (isset($_POST['save_print'])) {

					if ($emp_id != "") {
						// $this->session->set_flashdata('success', 'Claim Request Submmited');
						$this->session->set_userdata('usertype', 'employee');
						$insert_id =  $this->db->insert_id();
						$this->sendmail($emp_id);
						$this->generate_pennsylvania_pdf($emp_id, 'showpdf');
						// redirect('Insurance_claim/pdf_download_view/'.base64_encode($insert_id));
						// redirect('','refresh');
					} else {
						$this->session->set_flashdata('error', 'Something Want Worng');
						redirect('', 'refresh');
					}
				} else if (isset($_POST['onlysave'])) {

					if ($emp_id != "") {
						// $this->session->set_flashdata('success', 'Claim Request Submmited');
						$this->session->set_userdata('usertype', 'employee');
						$insert_id =  $this->db->insert_id();
						$this->sendmail($emp_id);
						redirect('Insurance_claim/pdf_download_view/' . base64_encode($insert_id));
						//redirect('','refresh');
					} else {
						$this->session->set_flashdata('error', 'Something Want Worng');
						redirect('', 'refresh');
					}
				}
			}
		} else {
			$this->load->view('insurance_claim/form', $this->data);
		}
	}
	public function new_jersey()
	{

		$this->data['state_type'] = "new_jersey";
		if ($this->input->post()) {
			// Employee/Wage
			$this->form_validation->set_rules('new_jersey[full_name]', "Employee Name", 'required');
			$this->form_validation->set_rules('new_jersey[discipline]', "Discipline", 'required|callback_check_default');
			$this->form_validation->set_rules('new_jersey[facility_name]', "Facility Name", 'required');
			$this->form_validation->set_rules('new_jersey[gender]', "Gender", 'required');
			$this->form_validation->set_rules('new_jersey[job_title]', "Occupation / Job Title", 'required');
			// $this->form_validation->set_rules('new_jersey[employment_status]',"Employeement Status", 'required');
			$this->form_validation->set_rules('new_jersey[began_work]', "Time Employee Began Work", 'required');
			$this->form_validation->set_rules('new_jersey[date_of_injury]', "Date of Injury / Illness", 'required');
			$this->form_validation->set_rules('new_jersey[time_of_injury]', "Time of Occurrence", 'required');
			$this->form_validation->set_rules('new_jersey[work_stop_date]', "Last Work Date", 'required');
			$this->form_validation->set_rules('new_jersey[type_of_injury]', "Type of Injury / Illness", 'required');
			$this->form_validation->set_rules('new_jersey[date_notified]', "Date Employer Notified", 'required');
			$this->form_validation->set_rules('new_jersey[part_body_affected]', "Part of Body Affected", 'required');
			$this->form_validation->set_rules('new_jersey[location_where_accident]', "Department or Location Where Accident or Illness occurred", 'required');
			$this->form_validation->set_rules('new_jersey[equipment_meterials]', "ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED", 'required');
			$this->form_validation->set_rules('new_jersey[activity_engaed]', "SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED", 'required');
			$this->form_validation->set_rules('new_jersey[work_process_emp_engade]', "WORK PROCESS THE EMPLOYEE WAS ENGAGED IN WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED", 'required');
			$this->form_validation->set_rules('new_jersey[how_injury_health_condition]', "HOW INJURY OR ILLNESS/ABNORMAL HEALTH CONDITION OCCURRED. DESCRIBE THE SEQUENCE OF EVENTS AND INCLUDE ANY OBJECTS OR SUBSTANCES THAT DIRECTLY INJURED THE EMPLOYEE OR MADE THE       EMPLOYEE ILL", 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->data['errors'] = $this->form_validation->error_array();
				$this->load->view('insurance_claim/form', $this->data);
			} else {
				$date = date("Y-m-d");
				$begantime = $this->input->post('new_jersey')['began_work'];
				$began_work_time = date('Y-m-d H:i:s', strtotime("$date $begantime"));

				$details = [
					'employee_email' => @$this->input->post('new_jersey')['employee_email'],
					'state_injury' => @$this->input->post('new_jersey')['state_injury'],
					'marital_status' => @$this->input->post('new_jersey')['marital_status'],
					'employment_status' => @$this->input->post('new_jersey')['employment_status'],
					'day_worked' => @$this->input->post('new_jersey')['day_worked'],
					'full_pay' => @$this->input->post('new_jersey')['full_pay'],
					'salary_continue' => @$this->input->post('new_jersey')['salary_continue'],
					'began_work' => datetimepiker_to_database(@$began_work_time),
					// 'began_work' => datetimepiker_to_database(@$this->input->post('new_jersey')['began_work']),
					'date_of_injury' => @$this->input->post('new_jersey')['date_of_injury'],
					'date_notified' => @$this->input->post('new_jersey')['date_notified'],
					'date_disability_began' => @$this->input->post('new_jersey')['date_disability_began'],
					'type_of_injury' => @$this->input->post('new_jersey')['type_of_injury'],
					'part_body_affected' => @$this->input->post('new_jersey')['part_body_affected'],
					'injury_permises' => @$this->input->post('new_jersey')['injury_permises'],
					'location_where_accident' => @$this->input->post('new_jersey')['location_where_accident'],
					'equipment_meterials' => @$this->input->post('new_jersey')['equipment_meterials'],
					'activity_engaed' => @$this->input->post('new_jersey')['activity_engaed'],
					'work_process_emp_engade' => @$this->input->post('new_jersey')['work_process_emp_engade'],
					'how_injury_health_condition' => @$this->input->post('new_jersey')['how_injury_health_condition'],
					'if_fatel_death_date' => @$this->input->post('new_jersey')['if_fatel_death_date'],
					'where_safeguards' => @$this->input->post('new_jersey')['where_safeguards'],
					'where_used_safaguard' => @$this->input->post('new_jersey')['where_used_safaguard'],
					'physician_provider' => @$this->input->post('new_jersey')['physician_provider'],
					'hospital_treatment' => @$this->input->post('new_jersey')['hospital_treatment'],
					'hospital_initial_treatment' => @$this->input->post('new_jersey')['hospital_initial_treatment'],
					'witnesses' => @$this->input->post('new_jersey')['witnesses'],
					'witnesses_1' => @$this->input->post('new_jersey')['witnesses_1'],
					'witnesses_2' => @$this->input->post('new_jersey')['witnesses_2'],
					'date_administrator_notified' => @$this->input->post('new_jersey')['date_administrator_notified'],
					'date_prepared' => @$this->input->post('new_jersey')['date_prepared'],
					'preparer_name' => @$this->input->post('new_jersey')['preparer_name'],
					'phone_number' => @$this->input->post('new_jersey')['phone_number'],
				];
				$full_name = preg_replace('!\s+!', ' ', @$this->input->post('new_jersey')['full_name']);
				$last_name = (isset(explode(' ', $full_name)[0]) != "") ? explode(' ', $full_name)[0] : '';
				$first_name = (isset(explode(' ', $full_name)[1]) != "") ? explode(' ', $full_name)[1] : '';
				$middle_name = (isset(explode(' ', $full_name)[2]) != "") ? explode(' ', $full_name)[2] : '';

				$date = date("Y-m-d");
				$time = $this->input->post('new_jersey')['time_of_injury'];
				$time_of_injury_time = date('Y-m-d H:i:s', strtotime("$date $time"));


				$employee = [
					'full_name' => $full_name,
					'first_name' => $first_name,
					'middle_name' => $middle_name,
					'last_name' => $last_name,
					'gender' => @$this->input->post('new_jersey')['gender'],
					'discipline' => @$this->input->post('new_jersey')['discipline'],
					'facility_name' => @$this->input->post('new_jersey')['facility_name'],
					'address' => @$this->input->post('new_jersey')['address'],
					'date_hire' => datepiker_to_database(@$this->input->post('new_jersey')['date_hire']),
					'time_of_injury' => datetimepiker_to_database(@$time_of_injury_time),
					// 'time_of_injury' => datetimepiker_to_database(@$this->input->post('new_jersey')['time_of_injury']),
					'work_stop_date' => datepiker_to_database(@$this->input->post('new_jersey')['work_stop_date']),
					'return_work_date' => datepiker_to_database(@$this->input->post('new_jersey')['return_work_date']),
					'job_title' => @$this->input->post('new_jersey')['job_title'],
					'details' => json_encode($details),
					'state_id' => 2,
					'question1' => @$this->input->post('question1'),
					'question2' => @$this->input->post('question2'),
					'question1' => @$this->input->post('question1'),
					'question2' => @$this->input->post('question2'),
					'question3' => @$this->input->post('question3'),
					'question4' => @$this->input->post('question4'),
					'emp_state' => @$this->input->post('NJ_emp_state'),
				];


				$emp_id = $this->Insurance_claim->employee_insert($employee);
				if (isset($_POST['save_print'])) {

					if ($emp_id != "") {
						// $this->session->set_flashdata('success', 'Claim Request Submmited');
						$this->session->set_userdata('usertype', 'employee');
						$insert_id =  $this->db->insert_id();
						$this->sendmail($emp_id);
						$this->generate_new_jeresy_pdf($emp_id, 'showpdf');
						//redirect('','refresh');
					} else {
						$this->session->set_flashdata('error', 'Something Want Worng');
						redirect('', 'refresh');
					}
				} else if (isset($_POST['onlysave'])) {

					if ($emp_id != "") {
						// $this->session->set_flashdata('success', 'Claim Request Submmited');
						$this->session->set_userdata('usertype', 'employee');
						$insert_id =  $this->db->insert_id();
						$this->sendmail($emp_id);
						redirect('Insurance_claim/pdf_download_view/' . base64_encode($insert_id));
						//redirect('','refresh');
					} else {
						$this->session->set_flashdata('error', 'Something Want Worng');
						redirect('', 'refresh');
					}
				}
			}
		} else {
			$this->load->view('insurance_claim/form', $this->data);
		}
	}
	public function south_carolina()
	{

		$this->data['state_type'] = "southcarolina";
		if ($this->input->post()) {
			// Employee/Wage
			$this->form_validation->set_rules('south_carolina[full_name]', "Employee Name", 'required');
			$this->form_validation->set_rules('south_carolina[discipline]', "Discipline", 'required|callback_check_default');
			$this->form_validation->set_rules('south_carolina[facility_name]', "Facility Name", 'required');
			$this->form_validation->set_rules('south_carolina[gender]', "Gender", 'required');
			$this->form_validation->set_rules('south_carolina[job_title]', "Occupation / Job Title", 'required');
			// $this->form_validation->set_rules('south_carolina[employment_status]',"Employeement Status", 'required');
			$this->form_validation->set_rules('south_carolina[began_work]', "Time Employee Began Work", 'required');
			$this->form_validation->set_rules('south_carolina[date_of_injury]', "Date of Injury / Illness", 'required');
			$this->form_validation->set_rules('south_carolina[time_of_injury]', "Time of Occurrence", 'required');
			$this->form_validation->set_rules('south_carolina[work_stop_date]', "Last Work Date", 'required');
			$this->form_validation->set_rules('south_carolina[type_of_injury]', "Type of Injury / Illness", 'required');
			$this->form_validation->set_rules('south_carolina[date_notified]', "Date Employer Notified", 'required');
			$this->form_validation->set_rules('south_carolina[part_body_affected]', "Part of Body Affected", 'required');
			$this->form_validation->set_rules('south_carolina[location_where_accident]', "Department or Location Where Accident or Illness occurred", 'required');
			$this->form_validation->set_rules('south_carolina[equipment_meterials]', "ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED", 'required');
			$this->form_validation->set_rules('south_carolina[activity_engaed]', "SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED", 'required');
			$this->form_validation->set_rules('south_carolina[work_process_emp_engade]', "WORK PROCESS THE EMPLOYEE WAS ENGAGED IN WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED", 'required');
			$this->form_validation->set_rules('south_carolina[how_injury_health_condition]', "HOW INJURY OR ILLNESS/ABNORMAL HEALTH CONDITION OCCURRED. DESCRIBE THE SEQUENCE OF EVENTS AND INCLUDE ANY OBJECTS OR SUBSTANCES THAT DIRECTLY INJURED THE EMPLOYEE OR MADE THE       EMPLOYEE ILL", 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->data['errors'] = $this->form_validation->error_array();
				$this->load->view('insurance_claim/form', $this->data);
			} else {
				$date = date("Y-m-d");
				$begantime = $this->input->post('south_carolina')['began_work'];
				$began_work_time = date('Y-m-d H:i:s', strtotime("$date $begantime"));

				$details = [
					'employee_email' => @$this->input->post('south_carolina')['employee_email'],
					'state_injury' => @$this->input->post('south_carolina')['state_injury'],
					'marital_status' => @$this->input->post('south_carolina')['marital_status'],
					'employment_status' => @$this->input->post('south_carolina')['employment_status'],
					'day_worked' => @$this->input->post('south_carolina')['day_worked'],
					'full_pay' => @$this->input->post('south_carolina')['full_pay'],
					'salary_continue' => @$this->input->post('south_carolina')['salary_continue'],
					'began_work' => datetimepiker_to_database(@$began_work_time),
					// 'began_work' => datetimepiker_to_database(@$this->input->post('south_carolina')['began_work']),
					'date_of_injury' => @$this->input->post('south_carolina')['date_of_injury'],
					'date_notified' => @$this->input->post('south_carolina')['date_notified'],
					'date_disability_began' => @$this->input->post('south_carolina')['date_disability_began'],
					'type_of_injury' => @$this->input->post('south_carolina')['type_of_injury'],
					'part_body_affected' => @$this->input->post('south_carolina')['part_body_affected'],
					'injury_permises' => @$this->input->post('south_carolina')['injury_permises'],
					'location_where_accident' => @$this->input->post('south_carolina')['location_where_accident'],
					'equipment_meterials' => @$this->input->post('south_carolina')['equipment_meterials'],
					'activity_engaed' => @$this->input->post('south_carolina')['activity_engaed'],
					'work_process_emp_engade' => @$this->input->post('south_carolina')['work_process_emp_engade'],
					'how_injury_health_condition' => @$this->input->post('south_carolina')['how_injury_health_condition'],
					'if_fatel_death_date' => @$this->input->post('south_carolina')['if_fatel_death_date'],
					'where_safeguards' => @$this->input->post('south_carolina')['where_safeguards'],
					'where_used_safaguard' => @$this->input->post('south_carolina')['where_used_safaguard'],
					'physician_provider' => @$this->input->post('south_carolina')['physician_provider'],
					'hospital_treatment' => @$this->input->post('south_carolina')['hospital_treatment'],
					'hospital_initial_treatment' => @$this->input->post('south_carolina')['hospital_initial_treatment'],
					'witnesses' => @$this->input->post('south_carolina')['witnesses'],
					'witnesses_1' => @$this->input->post('south_carolina')['witnesses_1'],
					'witnesses_2' => @$this->input->post('south_carolina')['witnesses_2'],
					'date_administrator_notified' => @$this->input->post('south_carolina')['date_administrator_notified'],
					'date_prepared' => @$this->input->post('south_carolina')['date_prepared'],
					'preparer_name' => @$this->input->post('south_carolina')['preparer_name'],
					'phone_number' => @$this->input->post('south_carolina')['phone_number'],
				];
				$full_name = preg_replace('!\s+!', ' ', @$this->input->post('south_carolina')['full_name']);
				$last_name = (isset(explode(' ', $full_name)[0]) != "") ? explode(' ', $full_name)[0] : '';
				$first_name = (isset(explode(' ', $full_name)[1]) != "") ? explode(' ', $full_name)[1] : '';
				$middle_name = (isset(explode(' ', $full_name)[2]) != "") ? explode(' ', $full_name)[2] : '';

				$date = date("Y-m-d");
				$time = $this->input->post('south_carolina')['time_of_injury'];
				$time_of_injury_time = date('Y-m-d H:i:s', strtotime("$date $time"));


				$employee = [
					'full_name' => $full_name,
					'first_name' => $first_name,
					'middle_name' => $middle_name,
					'last_name' => $last_name,
					'gender' => @$this->input->post('south_carolina')['gender'],
					'discipline' => @$this->input->post('south_carolina')['discipline'],
					'facility_name' => @$this->input->post('south_carolina')['facility_name'],
					'address' => @$this->input->post('south_carolina')['address'],
					'date_hire' => datepiker_to_database(@$this->input->post('south_carolina')['date_hire']),
					'time_of_injury' => datetimepiker_to_database(@$time_of_injury_time),
					// 'time_of_injury' => datetimepiker_to_database(@$this->input->post('south_carolina')['time_of_injury']),
					'work_stop_date' => datepiker_to_database(@$this->input->post('south_carolina')['work_stop_date']),
					'return_work_date' => datepiker_to_database(@$this->input->post('south_carolina')['return_work_date']),
					'job_title' => @$this->input->post('south_carolina')['job_title'],
					'details' => json_encode($details),
					'state_id' => 6,
					'question1' => @$this->input->post('question1'),
					'question2' => @$this->input->post('question2'),
					'question1' => @$this->input->post('question1'),
					'question2' => @$this->input->post('question2'),
					'question3' => @$this->input->post('question3'),
					'question4' => @$this->input->post('question4'),
					'emp_state' => @$this->input->post('NJ_emp_state'),
				];


				$emp_id = $this->Insurance_claim->employee_insert($employee);
				if (isset($_POST['save_print'])) {

					if ($emp_id != "") {
						// $this->session->set_flashdata('success', 'Claim Request Submmited');
						$this->session->set_userdata('usertype', 'employee');
						$insert_id =  $this->db->insert_id();
						// echo '<pre>';
						// print_r($insert_id);
						// echo '</pre>';
						// exit();
						$this->sendmail($emp_id);
						$this->generate_south_carolina_pdf($emp_id, 'showpdf');
						//redirect('','refresh');
					} else {
						$this->session->set_flashdata('error', 'Something Want Worng');
						redirect('', 'refresh');
					}
				} else if (isset($_POST['onlysave'])) {

					if ($emp_id != "") {
						// $this->session->set_flashdata('success', 'Claim Request Submmited');
						$this->session->set_userdata('usertype', 'employee');
						$insert_id =  $this->db->insert_id();
						$this->sendmail($emp_id);
						redirect('Insurance_claim/pdf_download_view/' . base64_encode($insert_id));
						//redirect('','refresh');
					} else {
						$this->session->set_flashdata('error', 'Something Want Worng');
						redirect('', 'refresh');
					}
				}
			}
		} else {
			$this->load->view('insurance_claim/form', $this->data);
		}
	}

	public function missouri()
	{
		$this->data['state_type'] = "missouri";
		if ($this->input->post()) {
			// Employee/Wage
			$this->form_validation->set_rules('missouri[full_name]', "Employee Name", 'required');
			$this->form_validation->set_rules('missouri[discipline]', "Discipline", 'required|callback_check_default');
			$this->form_validation->set_rules('missouri[facility_name]', "Facility Name", 'required');
			$this->form_validation->set_rules('missouri[gender]', "Gender", 'required');
			$this->form_validation->set_rules('missouri[job_title]', "Occupation / Job Title", 'required');
			// $this->form_validation->set_rules('missouri[employment_status]',"Employeement Status", 'required');
			$this->form_validation->set_rules('missouri[began_work]', "Time Employee Began Work", 'required');
			$this->form_validation->set_rules('missouri[date_of_injury]', "Date of Injury / Illness", 'required');
			$this->form_validation->set_rules('missouri[time_of_injury]', "Time of Occurrence", 'required');
			$this->form_validation->set_rules('missouri[work_stop_date]', "Last Work Date", 'required');
			$this->form_validation->set_rules('missouri[type_of_injury]', "Type of Injury / Illness", 'required');
			$this->form_validation->set_rules('missouri[date_notified]', "Date Employer Notified", 'required');
			$this->form_validation->set_rules('missouri[part_body_affected]', "Part of Body Affected", 'required');
			$this->form_validation->set_rules('missouri[location_where_accident]', "Department or Location Where Accident or Illness occurred", 'required');
			$this->form_validation->set_rules('missouri[equipment_meterials]', "ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED", 'required');
			$this->form_validation->set_rules('missouri[activity_engaed]', "SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED", 'required');
			$this->form_validation->set_rules('missouri[work_process_emp_engade]', "WORK PROCESS THE EMPLOYEE WAS ENGAGED IN WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED", 'required');
			$this->form_validation->set_rules('missouri[how_injury_health_condition]', "HOW INJURY OR ILLNESS/ABNORMAL HEALTH CONDITION OCCURRED. DESCRIBE THE SEQUENCE OF EVENTS AND INCLUDE ANY OBJECTS OR SUBSTANCES THAT DIRECTLY INJURED THE EMPLOYEE OR MADE THE       EMPLOYEE ILL", 'required');
			/*$this->form_validation->set_rules('missouri[rate_of_pay]', "Rate Of Pay", 'required');*/


			if ($this->form_validation->run() == FALSE) {
				$this->data['errors'] = $this->form_validation->error_array();
				$this->load->view('insurance_claim/form', $this->data);

			} else {
				// echo "DGsdsa";
				// exit;
				$date = date("Y-m-d");
				$begantime = $this->input->post('missouri')['began_work'];
				$began_work_time = date('Y-m-d H:i:s', strtotime("$date $begantime"));

				$details = [
					'employee_email' => @$this->input->post('missouri')['employee_email'],
					'state_injury' => @$this->input->post('missouri')['state_injury'],
					'marital_status' => @$this->input->post('missouri')['marital_status'],
					'employment_status' => @$this->input->post('missouri')['employment_status'],
					'day_worked' => @$this->input->post('missouri')['day_worked'],
					'full_pay' => @$this->input->post('missouri')['full_pay'],
					'salary_continue' => @$this->input->post('missouri')['salary_continue'],
					'began_work' => datetimepiker_to_database(@$began_work_time),
					// 'began_work' => datetimepiker_to_database(@$this->input->post('missouri')['began_work']),
					'date_of_injury' => @$this->input->post('missouri')['date_of_injury'],
					'date_notified' => @$this->input->post('missouri')['date_notified'],
					'date_disability_began' => @$this->input->post('missouri')['date_disability_began'],
					'type_of_injury' => @$this->input->post('missouri')['type_of_injury'],
					'part_body_affected' => @$this->input->post('missouri')['part_body_affected'],
					'injury_permises' => @$this->input->post('missouri')['injury_permises'],
					'location_where_accident' => @$this->input->post('missouri')['location_where_accident'],
					'equipment_meterials' => @$this->input->post('missouri')['equipment_meterials'],
					'activity_engaed' => @$this->input->post('missouri')['activity_engaed'],
					'work_process_emp_engade' => @$this->input->post('missouri')['work_process_emp_engade'],
					'how_injury_health_condition' => @$this->input->post('missouri')['how_injury_health_condition'],
					'if_fatel_death_date' => @$this->input->post('missouri')['if_fatel_death_date'],
					'where_safeguards' => @$this->input->post('missouri')['where_safeguards'],
					'where_used_safaguard' => @$this->input->post('missouri')['where_used_safaguard'],
					'physician_provider' => @$this->input->post('missouri')['physician_provider'],
					'hospital_treatment' => @$this->input->post('missouri')['hospital_treatment'],
					'hospital_initial_treatment' => @$this->input->post('missouri')['hospital_initial_treatment'],
					'witnesses' => @$this->input->post('missouri')['witnesses'],
					'witnesses_1' => @$this->input->post('missouri')['witnesses_1'],
					'witnesses_2' => @$this->input->post('missouri')['witnesses_2'],
					'date_administrator_notified' => @$this->input->post('missouri')['date_administrator_notified'],
					'date_prepared' => @$this->input->post('missouri')['date_prepared'],
					'preparer_name' => @$this->input->post('missouri')['preparer_name'],
					'phone_number' => @$this->input->post('missouri')['phone_number'],
					//'rate_of_pay' => @$this->input->post('missouri')['rate_of_pay'],
				];
				$full_name = preg_replace('!\s+!', ' ', @$this->input->post('missouri')['full_name']);
				$last_name = (isset(explode(' ', $full_name)[0]) != "") ? explode(' ', $full_name)[0] : '';
				$first_name = (isset(explode(' ', $full_name)[1]) != "") ? explode(' ', $full_name)[1] : '';
				$middle_name = (isset(explode(' ', $full_name)[2]) != "") ? explode(' ', $full_name)[2] : '';

				$date = date("Y-m-d");
				$time = $this->input->post('missouri')['time_of_injury'];
				$time_of_injury_time = date('Y-m-d H:i:s', strtotime("$date $time"));


				$employee = [
					'full_name' => $full_name,
					'first_name' => $first_name,
					'middle_name' => $middle_name,
					'last_name' => $last_name,
					'gender' => @$this->input->post('missouri')['gender'],
					'discipline' => @$this->input->post('missouri')['discipline'],
					'facility_name' => @$this->input->post('missouri')['facility_name'],
					'address' => @$this->input->post('missouri')['address'],
					'date_hire' => datepiker_to_database(@$this->input->post('missouri')['date_hire']),
					'time_of_injury' => datetimepiker_to_database(@$time_of_injury_time),
					// 'time_of_injury' => datetimepiker_to_database(@$this->input->post('missouri')['time_of_injury']),
					'work_stop_date' => datepiker_to_database(@$this->input->post('missouri')['work_stop_date']),
					'return_work_date' => datepiker_to_database(@$this->input->post('missouri')['return_work_date']),
					'job_title' => @$this->input->post('missouri')['job_title'],
					'details' => json_encode($details),
					'state_id' => 7,
					'question1' => @$this->input->post('question1'),
					'question2' => @$this->input->post('question2'),
					'question3' => @$this->input->post('question3'),
					'question4' => @$this->input->post('question4'),
					'emp_state' => @$this->input->post('MO_emp_state'),
				];

				// echo '<pre>';
				// print_r($employee);
				// echo '</pre>';
				// exit();
				$emp_id = $this->Insurance_claim->employee_insert($employee);
				if (isset($_POST['save_print'])) {
					// echo "Dfsdss"; exit;
					if ($emp_id != "") {
						// $this->session->set_flashdata('success', 'Claim Request Submmited');
						$this->session->set_userdata('usertype', 'employee');
						$insert_id =  $this->db->insert_id();
						$this->sendmail($emp_id);
						// echo '<pre>';
						// print_r($insert_id);
						// echo '</pre>';
						// exit();
						$this->generate_missouri_pdf($emp_id, 'showpdf');
						//redirect('','refresh');
					} else {
						$this->session->set_flashdata('error', 'Something Want Worng');
						redirect('', 'refresh');
					}
				} else if (isset($_POST['onlysave'])) {
						// echo "Dfs"; exit;
					// exit;
					if ($emp_id != "") {
						// $this->session->set_flashdata('success', 'Claim Request Submmited');
						$this->session->set_userdata('usertype', 'employee');
						$insert_id =  $this->db->insert_id();
						$this->sendmail($emp_id);
						redirect('Insurance_claim/pdf_download_view/' . base64_encode($insert_id));
						//redirect('','refresh');
					} else {
						$this->session->set_flashdata('error', 'Something Want Worng');
						redirect('', 'refresh');
					}
				}
			}
		} else {
			// echo "SDG";
			// exit;
			$this->load->view('insurance_claim/form', $this->data);
		}
	}



	//  columbia
	public function columbia()
	{

		$this->data['state_type'] = "columbia";
		if ($this->input->post()) {
			// Employee Information validation
			$this->form_validation->set_rules('columbia[gender]', "Gender", 'required');
			// Employee Injury Or Illness
			$this->form_validation->set_rules('columbia[time_of_injury]', "Time of injury/illness", 'required');
			$this->form_validation->set_rules('columbia[starting_time]', "Starting Time", 'required');
			$this->form_validation->set_rules('columbia[return_to_work_date]', "When Employee back to work", 'required');
			$this->form_validation->set_rules('columbia[wage]', "WHat Wage", 'required');
			$this->form_validation->set_rules('columbia[injured_paid_full_day]', "Injured paid in full for this day?", 'required');
			$this->form_validation->set_rules('columbia[was_injured]', "Was the injured given", 'required');
			// retrurn work validation
			/*if (isset($this->input->post('new_york')['location_where_worked']) && $this->input->post('new_york')['location_where_worked'] ==  "0") {
				$this->form_validation->set_rules('new_york[why_employee_there]', "Why was the employee there?", 'required');
				// $validation[] = ['field' => 'new_york[why_employee_there]','label' => 'Why was the employee there?','rules' => 'required'];
			}

			if (isset($this->input->post('new_york')['did_the_death']) && $this->input->post('new_york')['did_the_death'] ==  "1") {
				$this->form_validation->set_rules('new_york[death_date]', "What was the date of death?", 'required');
				$this->form_validation->set_rules('new_york[info_nearest_relative]', "Name and address of the nearest relative", 'required');
			}*/

			// $this->form_validation->set_rules($validation);
			if ($this->form_validation->run() == FALSE) {
				$this->data['errors'] = $this->form_validation->error_array();
				$this->load->view('insurance_claim/form', $this->data);
			} else {

				$details = [
					// 'state_injury' => @$this->input->post('columbia')['state_injury'],
					'emp_phone' => @$this->input->post('columbia')['emp_phone'],
					'insurer_name' => @$this->input->post('columbia')['insurer_name'],
					'no_of_day_worked' => @$this->input->post('columbia')['no_of_day_worked'],
					'starting_time' => database_to_timepicker(@$this->input->post('columbia')['starting_time']),
					'wage' => @$this->input->post('columbia')['wage'],
					'death_date' => @$this->input->post('columbia')['death_date'],
					'date_disability' => database_to_datepicker(@$this->input->post('columbia')['date_disability']),
					'injured_paid_full_day' => @$this->input->post('columbia')['injured_paid_full_day'],
					'was_injured' => @$this->input->post('columbia')['was_injured'],
					'foreman' => @$this->input->post('columbia')['foreman'],
					'foremean_first_injury' => @$this->input->post('columbia')['foremean_first_injury'],
					'dob' => database_to_datepicker(@$this->input->post('columbia')['dob']),
					'occupation_injured' => @$this->input->post('columbia')['occupation_injured'],
					'regular_occupation' => @$this->input->post('columbia')['regular_occupation'],
					'emp_department' => @$this->input->post('columbia')['emp_department'],
					'injured_hired_dc' => @$this->input->post('columbia')['injured_hired_dc'],
					'how_long_employee' => @$this->input->post('columbia')['how_long_employee'],
					'piece_time_worker' => @$this->input->post('columbia')['piece_time_worker'],
					'hourly_wage' => @$this->input->post('columbia')['hourly_wage'],
					'hour_work_day' => @$this->input->post('columbia')['hour_work_day'],
					'daily_wages' => @$this->input->post('columbia')['daily_wages'],
					'day_worked_week' => @$this->input->post('columbia')['day_worked_week'],
					'avrge_weekly_earnings' => @$this->input->post('columbia')['avrge_weekly_earnings'],
					'estimated_value_per_day' => @$this->input->post('columbia')['estimated_value_per_day'],
					'employee_business_function' => @$this->input->post('columbia')['employee_business_function'],
					'insurance_policy_no' => @$this->input->post('columbia')['insurance_policy_no'],
					'accident_location' => @$this->input->post('columbia')['accident_location'],
					'emp_permisses' => @$this->input->post('columbia')['emp_permisses'],
					'employee_body_affected' => @$this->input->post('columbia')['employee_body_affected'],
					'witnesses' => @$this->input->post('columbia')['witnesses'],
					'department_branch' => @$this->input->post('columbia')['department_branch'],
					'address_of_phisician' => @$this->input->post('columbia')['address_of_phisician'],
				];
				$full_name = preg_replace('!\s+!', ' ', @$this->input->post('columbia')['full_name']);
				$first_name = (isset(explode(' ', $full_name)[0]) != "") ? explode(' ', $full_name)[0] : '';
				$middle_name = (isset(explode(' ', $full_name)[1]) != "") ? explode(' ', $full_name)[1] : '';
				$last_name = (isset(explode(' ', $full_name)[2]) != "") ? explode(' ', $full_name)[2] : '';
				$date = date("Y-m-d");
				$time = $this->input->post('columbia')['time_of_injury'];
				$time1 = $this->input->post('columbia')['return_to_work_date'];
				$time_of_injury_time = date('Y-m-d H:i:s', strtotime("$date $time"));
				$employee = [
					'full_name' => $full_name,
					'first_name' => $first_name,
					'middle_name' => $middle_name,
					'last_name' => $last_name,
					'gender' => @$this->input->post('columbia')['gender'],
					// 'discipline' => @$this->input->post('columbia')['discipline'],
					// 'facility_name' => @$this->input->post('columbia')['facility_name'],
					'address' => @$this->input->post('columbia')['address'],
					// 'date_hire' => datepiker_to_database(@$this->input->post('columbia')['date_hire']),
					'time_of_injury' => datetimepiker_to_database(@$time),
					// 'time_of_injury' => datetimepiker_to_database(@$this->input->post('columbia')['time_of_injury']),
					// 'work_stop_date' => datepiker_to_database(@$this->input->post('columbia')['work_stop_date']),
					'return_work_date' => datepiker_to_database(@$time1),
					// 'job_title' => @$this->input->post('columbia')['job_title'],
					'details' => json_encode($details),
					'state_id' => 8,
					'question1' => @$this->input->post('question1'),
					'question2' => @$this->input->post('question2'),
					'question3' => @$this->input->post('question3'),
					'question4' => @$this->input->post('question4'),
					'emp_state' => @$this->input->post('CL_emp_state'),
				];

				$emp_id = $this->Insurance_claim->employee_insert($employee);
				if (isset($_POST['save_print'])) {

					if ($emp_id != "") {
						$insert_id =  base64_encode($this->db->insert_id());
						$this->session->set_userdata('usertype', 'employee');
						$this->sendmail($emp_id);
						$this->generate_columbia_pdf($emp_id, "showpdf");
					} else {
						$this->session->set_flashdata('error', 'Something Want Worng');
						redirect('', 'refresh');
					}
				} else if (isset($_POST['onlysave'])) {

					if ($emp_id != "") {
						// $this->session->set_flashdata('success', 'Claim Request Submmited');
						$insert_id =  base64_encode($this->db->insert_id());
						$this->sendmail($emp_id);
						$this->session->set_userdata('usertype', 'employee');
						$this->session->set_flashdata('success', 'Form Save Successfully');
						redirect('Insurance_claim/pdf_download_view/' . $insert_id);
						// redirect('Insurance_claim/pdf_download_view/'.base64_encode($insert_id));
						//redirect('','refresh'	);
					} else {
						$this->session->set_flashdata('error', 'Something Want Worng');
						redirect('', 'refresh');
					}
				}
				// echo "fhfhfgh";exit;
			}
		} else {
			$this->load->view('insurance_claim/form', $this->data);
		}
	}


	//create pdf of NewYork
	public function generate_newyork_pdf($id, $type = '')
	{
		$response = $this->Insurance_manage->get_employee_by_id($id);
		$res_data = $response['data'];
		if (!empty($res_data)) {


			if (isset($res_data['emp_day_of_week'])) {
				foreach ($res_data['emp_day_of_week'] as $key => $value) {
					switch ($value) {
						case '0':
							$temp0 = "0";
							break;
						case '1':
							$temp1 = "1";
							break;
						case '2':
							$temp2 = "2";
							break;
						case '3':
							$temp3 = "3";
							break;
						case '4':
							$temp4 = "4";
							break;
						case '5':
							$temp5 = "5";
							break;
						case '6':
							$temp6 = "6";
							break;
						case '6':
							$temp6 = "6";
							break;
					}
				}
			}
			$time_of_injury = explode(' ', database_to_datetimepicker($res_data['time_of_injury']));
			$dob = explode("/", database_to_datepicker($res_data['dob']));
			$began_work = date_explode($res_data['began_work']);
			$date_begam_am = date("h:i A", strtotime($began_work[1]));
			$notice_date = explode('/', $res_data['notice_date']);
			$claimant_date = explode('/', $res_data['given_claimant_information_date']);
			$death_date = explode('/', $res_data['death_date']);
			$first_treatment = explode('/', $res_data['first_treatment']);
			$work_stop_date = explode('/', database_to_datepicker($res_data['work_stop_date']));
			$return_work_date = explode('/', $res_data['return_work_date']);
			$date_hire = explode('/', database_to_datepicker($res_data['date_hire']));
			$aditionn_date = explode('/', date("m/d/Y"));
			$date_injury_illness_date = explode('/', database_to_datepicker($began_work[0]));
			$began_am_data = explode(' ', trim($date_begam_am));
			$time_began_work = explode('/', database_to_datetimepicker($began_work[0]));
			if ($work_stop_date[0] == '0000' && $work_stop_date[1] == '00' && $work_stop_date[2] == '00') {
				$work_stop_date[0] = '';
				$work_stop_date[1] = '';
				$work_stop_date[2] = '';
			}
			if ($date_hire[0] == '0000' && $date_hire[1] == '00' && $date_hire[2] == '00') {
				$date_hire[0] = '';
				$date_hire[1] = '';
				$date_hire[2] = '';
			}
			if ($res_data['where_receive_first_treatment'] == 'Doctor’s office') {
				$res_data['where_receive_first_treatment'] = "Doctors office";
			}
			$data = [
				'1 Name' => @$res_data['full_name'],
				'employee_dob' => date('d-M-yyyy', strtotime(@$res_data['dob'])),
				'dob_month' => @$dob[0],
				'dob_date' => @$dob[1],
				'dob_year' => @$dob[2],
				'3 Mailing Address' => @$res_data['address'],
				'4 Social Security Number' => @$res_data['social_security_num'],
				'Contact_num' => @$res_data['contact_no'],
				'gender' => @$res_data['gender'],
				'began_work' => @$date_injury_illness_date[0] . '/' . $date_injury_illness_date[1] . '/' . $date_injury_illness_date[2] . '-' . $began_am_data[0],
				'begun_work_meridiem' => @$began_am_data[1],
				'time_of_injury' => @$time_of_injury[2],
				'time_of_injury_meridian' => @$time_of_injury[3],
				'time_of_injury_m' => @$date_injury_illness_date[0],
				'time_of_injury_d' => @$date_injury_illness_date[1],
				'time_of_injury_y' => @$date_injury_illness_date[2],
				'has_employee_notice' => @$res_data['has_employee_notice'],
				'has_employee notice' => @$res_data['notice_given_to'],
				'notice_date_month' => @$notice_date[0],
				'notice_date_day' => @$notice_date[1],
				'notice_date_year' => @$notice_date[2],
				'given_claimant_information' => @$res_data['given_claimant_information'],
				'given_claimant_information_month' => @$claimant_date[0],
				'given_claimant_information_day' => @$claimant_date[1],
				'given_claimant_information_year' => @$claimant_date[2],
				'where_did_the_injury' => @$res_data['where_did_the_injury'],
				'location_where_worked' => @$res_data['location_where_worked'],
				'why_employee_there' => @$res_data['why_employee_there'],
				'employee_supervisor' => @$res_data['employee_supervisor'],
				'supervisor_see_injury' => @$res_data['supervisor_see_injury'],
				'anyone_see_injury' => @$res_data['anyone_see_injury'],
				'anyone_see_injury_name' => @$res_data['see_injury_happen_names'],
				'what_employee_doing' => @$res_data['what_employee_doing'],
				'how_did_the_injury' => @$res_data['how_did_the_injury'],
				'list_body_part_affected' => @$res_data['list_body_part_affected'],
				'was_an_object' => @$res_data['was_an_object'],
				'what_was_object_name' => @$res_data['what_was_object'],
				'was_the_injury_vehicle' => @$res_data['was_the_injury_vehicle'],
				'whos_vehicle' => @$res_data['whos_vehicle'],
				'lincese_plate_number' => @$res_data['lincese_plate_number'],
				'did_the_death' => @$res_data['did_the_death'],
				'death_date_m' => @$death_date[0],
				'death_date_d' => @$death_date[1],
				'death_date_y' => @$death_date[2],
				'info_nearest_relative' => @$res_data['info_nearest_relative'],
				'first_treatment_m' => @$first_treatment[0],
				'first_treatment_d' => @$first_treatment[1],
				'first_treatment_y' => @$first_treatment[2],
				'first_treatment_option' => @$res_data['first_treatment_option'],
				'first_treatment' => @$res_data['where_receive_first_treatment'],
				'who_treated_where' => @$res_data['who_treated_where'],
				'is_still_treated' => @$res_data['is_still_treated'],
				'info_treate_doctor' => @$res_data['info_treate_doctor'],
				'did_anothre_work_injury' => @$res_data['did_anothre_work_injury'],
				'Doctor_name' => @$res_data['who_treated_doctor_previous'],
				'did_stop_work' => @$res_data['did_stop_work'],
				'work_stop_date_m' => @$work_stop_date[0],
				'work_stop_date_d' => @$work_stop_date[1],
				'work_stop_date_y' => @$work_stop_date[2],
				'has_return_to_work' => @$res_data['has_return_to_work'],
				'has_return_to_work_m' => @$return_work_date[0],
				'has_return_to_work_d' => @$return_work_date[1],
				'has_return_to_work_y' => @$return_work_date[2],
				'employment_status' => @$res_data['employment_status'],
				'date_hire_m' => @$date_hire[0],
				'date_hire_d' => @$date_hire[1],
				'date_hire_y' => @$date_hire[2],
				'job_title' => @$res_data['job_title'],
				'what_type_activities_work' => @$res_data['what_type_activities_work'],
				'emp_gross_pay' => number_format(@$res_data['emp_gross_pay'], 2),
				'addition_pay' => @$res_data['addition_pay'],
				'describ' => @$res_data['describ'],
				'monday' => @$temp1,
				'tuesday' => @$temp2,
				'wednesday' => @$temp3,
				'thursday' => @$temp4,
				'friday' => @$temp5,
				'saturday' => @$temp6,
				'sunday' => @$temp0,
				// 'sunday'=>@$temp7,
				'emp_full_pay' => @$res_data['emp_full_pay'],
				'emp_pay_after_injury' => @$res_data['emp_pay_after_injury'],
				'employment_job_was' => @$res_data['employment_job_was'],
				'addition_date_m' => @$aditionn_date[0],
				'addition_date_d' => @$aditionn_date[1],
				'addition_date_y' => @$aditionn_date[2],
				'1_3' => @$res_data['additional_information'],

			];

			$pdf = new Pdf(
				APPPATH . 'libraries/WC_NewYork_new.pdf',
				[
					'useExec' => true,
				]
			);
			$result = $pdf->fillForm($data)
				->flatten()
				->needAppearances()
				->saveAs(FCPATH . 'upload/pdf/WC_NewYork_new' . $id . '.pdf');
			// ->download('filled.pdf');

			/* // Always check for errors
        if ($result == false) {
            $error = $pdf->getError();
        } else {
            $error = '';
            $pdf->send('WC_NewYork_new'.$id.'.pdf');
        }*/
			$fileName = 'WC_NewYork_new' . $id . '.pdf';

			if ($type == 'showpdf') {

				$this->showThePDF($fileName);
			} else {

				$this->download($fileName);
			}
			/* $fileName = 'WC_NewYork_1'.$id.'.pdf';
        $file = realpath (APPPATH .'libraries/pdf/') . "\\" . 'WC_NewYork_1'.$id.'.pdf';
	    // check file exists
	    if (file_exists ( $file )) {
	     // get file content
	     $data_file = file_get_contents ( $file );
	     //force download
	     force_download ( $fileName, $data_file );
	    } else {
	     // Redirect to base url
	     redirect ( base_url () );
	 }*/
			// print_r($error);exit();
			// <a href="http://example.com/files/myfile.pdf" target="_blank">Download</a>
			/* require APPPATH . 'libraries/PdfForm.php';
        $pdf = new PdfForm(APPPATH . 'libraries/WC_NewYork_1.pdf',$data);

        $pdf->flatten()
            ->save(FCPATH."upload/pdf/output".$id.".pdf")
            ->download();*/
			// $pdf->flatten()->save(FCPATH."upload/pdf/output".$id.".pdf");
			// if($pdf) { redirect('insurance_manage/mail/'.$id);  }
			// $pdf->flatten()->save('output'.$id.".pdf")->download();
		}
	}


	//create pdf of newjeresy
	public function generate_new_jeresy_pdf($id, $type = '')
	{
		$response = $this->Insurance_manage->get_employee_by_id($id);
		$res_data = $response['data'];
		$began_work = date_explode($res_data['began_work']);
		$began_work_AM_data = date("h:i A", strtotime($began_work[1]));
		$began_work_AM_val = explode(" ", trim($began_work_AM_data));
		$time_began_work = explode('/', database_to_datetimepicker($began_work[0]));
		$time_of_injury = explode(' ', database_to_datetimepicker($res_data['time_of_injury']));
		if ($res_data['employment_status'] == '1') {
			$EmploymentStatus = 'FULL TIME';
		} else if ($res_data['employment_status'] == '0') {
			$EmploymentStatus = 'PART TIME';
		} else {
			$EmploymentStatus = '';
		}


		if ($res_data['witnesses_1'] != '' && $res_data['witnesses'] != '' && $res_data['witnesses_2'] != '') {
			$witness_data = @$res_data['witnesses'] . ' , ' . @$res_data['witnesses_1'] . ' , ' . @$res_data['witnesses_2'];
		} else if ($res_data['witnesses'] != '' && $res_data['witnesses_2'] != '') {
			$witness_data = @$res_data['witnesses'] . ' , ' . @$res_data['witnesses_2'];
		} else if ($res_data['witnesses_1'] != '' && $res_data['witnesses_2'] != '') {
			$witness_data = @$res_data['witnesses_1'] . ' , ' . @$res_data['witnesses_2'];
		} else if ($res_data['witnesses_1'] != '' && $res_data['witnesses'] != '') {
			$witness_data = @$res_data['witnesses'] . ' , ' . @$res_data['witnesses_1'];
		} else if ($res_data['witnesses'] != '') {
			$witness_data = @$res_data['witnesses'];
		} else if ($res_data['witnesses_1'] != '') {
			$witness_data = @$res_data['witnesses_1'];
		} else if ($res_data['witnesses_2'] != '') {
			$witness_data = @$res_data['witnesses_2'];
		} else {
			$witness_data = '';
		}
		if (!empty(@$res_data['hospital_initial_treatment'])) {
			foreach ($res_data['hospital_initial_treatment'] as $key => $value) {
				switch ($value) {
					case '0':
						$temp1 = "0";
						break;
					case '1':
						$temp2 = "1";
						break;
					case '2':
						$temp3 = "2";
						break;
					case '3':
						$temp4 = "3";
						break;
					case '4':
						$temp5 = "4";
						break;
					case '5':
						$temp6 = "5";
						break;
					case '6':
						$temp7 = "6";
						break;
				}
			}
		}
		$began_work = date_explode(@$res_data['began_work']);
		$data = '';
		$data = [
			'DN45b' => @$res_data['full_name'],
			'DN52' => database_to_datepicker(@$res_data['dob']),
			'DN42' => @$res_data['social_security_num'],
			'DN61' => database_to_datepicker(@$res_data['date_hire']),
			'Text25' => @$res_data['state_injury'],
			'DN46' => @$res_data['address'],
			'DN53a' => @$res_data['gender'],
			// 'DN53b' => '',
			// 'Check Box60' => '',
			'Check Box61' => @$res_data['marital_status'],
			// 'Check Box62' => '',
			// 'Check Box63' => '',
			// 'Check Box64' => '',
			'Check Box80' => $res_data['where_safeguards'],
			'Check Box81' => $res_data['where_used_safaguard'],
			'Check Box69' => $res_data['full_pay'],
			'DN60' => @$res_data['job_title'],
			'Text28' => @$EmploymentStatus,
			'DN51' => '',
			'DN64' => @$res_data['day_worked'],
			'Text31' => @$res_data['full_pay'],
			'Text32' => database_to_timepicker(@$began_work[1]),
			// 'Text32' => database_to_datepicker(@$began_work[1])." ".@$began_work_AM_val[0],
			'Check Box73' => @$began_work_AM_val[1],
			'DN31' => @$res_data['date_of_injury'],
			'DN32' => @$time_of_injury[2],
			'Check Box76' => @$time_of_injury[3],
			'DN65' => database_to_datepicker(@$res_data['work_stop_date']),
			'DN40' => @$res_data['date_notified'],
			'DN56' => @$res_data['date_disability_began'],
			'DN35' => @$res_data['type_of_injury'],
			'DN36a' => @$res_data['part_body_affected'],
			'Check Box78' => $res_data['injury_permises'],
			// 'Check Box79' => '',
			'DN121' => @$res_data['location_where_accident'],
			'Text42' => @$res_data['equipment_meterials'],
			'Text43' => @$res_data['activity_engaed'],
			'Text44' => @$res_data['work_process_emp_engade'],
			'Text1' => @$res_data['how_injury_health_condition'],
			'DN68' => database_to_datepicker(@$res_data['return_work_date']),
			'DN57' => @$res_data['if_fatel_death_date'],
			'DN176' => @$res_data['physician_provider'],
			'Text50' => @$res_data['hospital_treatment'],
			'Check Box84' => @$temp1,
			'Check Box86' => @$temp2,
			'Check Box87' => @$temp3,
			'Check Box88' => @$temp4,
			'Check Box89' => @$temp5,
			'Check Box90' => @$temp6,
			'Check Box91' => @$temp7,
			'Text52' => @$witness_data,
			'DN41' => @$res_data['date_administrator_notified'],
			'Text54' => @$res_data['date_prepared'],
			'Text55' => @$res_data['preparer_name'],
			'Text56' => @$res_data['phone_number'],

		];
		$pdf = new Pdf(APPPATH . 'libraries/WC_NJ_new.pdf');
		$result = $pdf->fillForm($data)
			->flatten()
			->needAppearances()
			->saveAs(FCPATH . 'upload/pdf/WC_NJ_new' . $id . '.pdf');

		$fileName = 'WC_NJ_new' . $id . '.pdf';

		if ($type == 'showpdf') {

			$this->showThePDF($fileName);
		} else {

			$this->download($fileName);
		}
		/*  require APPPATH . 'libraries/PdfForm.php';
        $pdf = new PdfForm(APPPATH . 'libraries/WC_NJ.pdf', $data);

        //$fdf = $pdf->'',makeFdf($data);
        $pdf->flatten()
            ->save('output.pdf')
            ->download();*/
	}

	//create pdf od maryland
	public function generate_maryland_pdf($id, $type = '')
	{

		$response = $this->Insurance_manage->get_employee_by_id($id);
		$res_data = $response['data'];

		$began_work = date_explode($res_data['began_work']);
		$began_work_AM_data = date("h:i A", strtotime($began_work[1]));
		$began_work_AM_val = explode(" ", trim($began_work_AM_data));
		$time_of_injury = explode(' ', database_to_datetimepicker($res_data['time_of_injury']));
		if ($res_data['gender'] == '0') {
			$gender = "Female";
		} else if ($res_data['gender'] == '1') {
			$gender = "Male";
		} else {
			$gender = '';
		}

		switch (isset($res_data['marital_status'])) {
			case '0':
				$Maritalstatus = 'UNMARRIED SINGLE / DIVORCED ';
				break;
			case '1':
				$Maritalstatus = 'MARRIED';
				break;
			case '2':
				$Maritalstatus = 'SEPARATED';
				break;
			case '3':
				$Maritalstatus = 'UNKNOWN';
				break;
			default:
				$Maritalstatus = '';
				break;
		}
		if ($res_data['employment_status'] == '0') {
			$Empstatus = "Part Time";
		} else if ($res_data['employment_status'] == '1') {
			$Empstatus = "Full Time";
		} else {
			$Empstatus = '';
		}

		if (@$res_data['did_injury_employer_permises'] == 0) {
			$tmp1 = 'YES';
		} else {
			$temp1 = 'NO';
		}
		if ($res_data['marital_status'] == '0') {
			$marital = 'UNMARRIED SINGLE / DIVORCED';
		} else if ($res_data['marital_status'] == '1') {
			$marital = 'MARRIED';
		} else if ($res_data['marital_status'] == '2') {
			$marital = 'SEPARATED';
		} else if ($res_data['marital_status'] == '3') {
			$marital = 'UNKNOWN';
		} else {
			$marital = '';
		}
		if (isset($res_data['hospital_or_off_site_treatment_checkboxs'])) {
			foreach ($res_data['hospital_or_off_site_treatment_checkboxs'] as $key => $value) {
				switch ($value) {
					case '0':
						$temp0 = "0";
						break;
					case '1':
						$temp1 = "1";
						break;
					case '2':
						$temp2 = "2";
						break;
					case '3':
						$temp3 = "3";
						break;
					case '4':
						$temp4 = "4";
						break;
					case '5':
						$temp5 = "5";
						break;
					case '6':
						$temp6 = "6";
						break;
					case '6':
						$temp6 = "6";
						break;
				}
			}
		}
		if ($res_data['return_work_date'] == '0000-00-00' || $res_data['return_work_date'] == '') {
			$res_data['return_work_date'] = '';
		}
		if ($res_data['witnesses_1'] != '' && $res_data['witnesses'] != '' && $res_data['witnesses_2'] != '') {
			$witness_data = @$res_data['witnesses'] . ' , ' . @$res_data['witnesses_1'] . ' , ' . @$res_data['witnesses_2'];
		} else if ($res_data['witnesses'] != '' && $res_data['witnesses_2'] != '') {
			$witness_data = @$res_data['witnesses'] . ' , ' . @$res_data['witnesses_2'];
		} else if ($res_data['witnesses_1'] != '' && $res_data['witnesses_2'] != '') {
			$witness_data = @$res_data['witnesses_1'] . ' , ' . @$res_data['witnesses_2'];
		} else if ($res_data['witnesses_1'] != '' && $res_data['witnesses'] != '') {
			$witness_data = @$res_data['witnesses'] . ' , ' . @$res_data['witnesses_1'];
		} else if ($res_data['witnesses'] != '') {
			$witness_data = @$res_data['witnesses'];
		} else if ($res_data['witnesses_1'] != '') {
			$witness_data = @$res_data['witnesses_1'];
		} else if ($res_data['witnesses_2'] != '') {
			$witness_data = @$res_data['witnesses_2'];
		} else {
			$witness_data = '';
		}
		$data = [
			'employer details' => 'Tender Touch Rehab Service,685 River Ave,Lakewood, Maryland, 08701',
			'EMPLOYER FEIN' => 'FEIN – 26-142-8916',
			'NAME LAST FIRST MIDDLE' => @$res_data['full_name'],
			//'PHONE_2' =>@$res_data['']
			'DATE OF BIRTH' => database_to_datepicker(@$res_data['dob']),
			'SOCIAL SECURITY NUMBER' => @$res_data['social_security_num'],
			'DATE HIRED' => database_to_datepicker(@$res_data['date_hire']),
			'STATE OF HIRE' => @$res_data['state_injury'],
			'ADDRESS INCL ZIP' => @$res_data['address'],
			'SEX' => @$gender,
			'MARITAL STASIS' => @$marital,
			'OCCUPATION TITLE' => @$res_data['job_title'],
			'EMPLOYMENT STATUS' => @$Empstatus,
			'time_of_occurance' => @$time_of_injury[0] . " " . $time_of_injury[2],
			//' OF DEPENDENTS' =>@$res_data['']
			'DAYS WORKEDWEEK' => @$res_data['day_worked'],
			'salary_continue' => @$res_data['did_salary_continue'],
			'beganwork' => date("m-d-Y h:i A", strtotime(@$began_work[0])),
			'beganwork_AMPPM' => @$began_work_AM_val[1],
			'DATE OF INJURYILLNESS' => @$res_data['date_of_injury'],
			'how_injury_ill' => @$res_data['how_injury_health_condition'],
			// 'DATE OF INJURYILLNESS'=>@$time_of_injury[0].''.$time_of_injury[1].''.$time_of_injury[2],
			// 'time_of_injury_meridian'=>@$time_of_injury[3],
			'time_of_occurence_meridian' => @$time_of_injury[3],
			'FULL PAY FOR DAY OF INJURY' => @$res_data['full_pay'],
			'LAST WORK DATE' => database_to_datepicker(@$res_data['work_stop_date']),
			'DATE EMPLOYER NOTIFIED' => @$res_data['date_notified'],
			'DATE DISABILITY BEGAN' => @$res_data['date_disability_began'],
			'TYPE OF INJURYILLNESS' => @$res_data['type_of_injury'],
			'PART OF BODY AFFECTED' => @$res_data['part_body_affected'],
			'INJURYILLNESS OCCUR' => @$res_data['did_injury_employer_permises'],
			'LOCATION ACCIDENT EXPOSURE OCCURRED' => @$res_data['location_where_accident'],
			'equipment_meterials' => @$res_data['equipment_meterials'],
			'activity_engaed' => @$res_data['activity_engaed'],
			'work_process_emp_engade' => @$res_data['work_process_emp_engade'],
			'DATE RETURNED TO WORK' => @$res_data['return_work_date'],
			'IF FATAL GIVE DATE OF DEATH' => @$res_data['if_fatal_give_date'],
			'were_safeguards' => @$res_data['were_safeguards'],
			'were_they_used' => @$res_data['were_they_used'],
			'name&address' => @$res_data['physician_health_care_provider'],
			'HOSPITAL NAME  ADDRESS' => @$res_data['hospital_or_off_site_treatment'],
			'WITNESSES NAME  PHONE' => @$witness_data,
			'DATE ADMINISTRATOR NOTIFIED' => @$res_data['date_administrator_notified'],
			'DATE PREPARED' => @$res_data['date_prepared'],
			'PREPARERS NAME AND TITLE' => @$res_data['preparer_name'],
			'PHONE NUMBER' => @$res_data['phone_number'],
			'NO MEDICAL TREATMENT' => @$temp0,
			'MINOR BY EMPLOYER' => @$temp1,
			'MINOR CLINIC/HOSP' => @$temp2,
			'EMERGENCY CARE' => @$temp3,
			'HOSPITALIZED 24 HOURS' => @$temp4,
			'FUTURE MAJOR MEDICAL' => @$temp5,
			'LOST TIME ANTICIPATED' => @$temp6,

		];

		$pdf = new Pdf(APPPATH . 'libraries/MARYLAND-FROI.pdf');
		$result = $pdf->fillForm($data)
			->flatten()
			->needAppearances()
			->saveAs(FCPATH . 'upload/pdf/MARYLAND-FROI' . $id . '.pdf');

		$fileName = 'MARYLAND-FROI' . $id . '.pdf';

		if ($type == 'showpdf') {

			$this->showThePDF($fileName);
		} else {

			$this->download($fileName);
		}

		/*require APPPATH . 'libraries/PdfForm.php';
        $pdf = new PdfForm(APPPATH . 'libraries/MARYLAND-FROI.pdf', $data);

        //$fdf = $pdf->'',makeFdf($data);
        $pdf->flatten()
            ->save('output.pdf')
            ->download();*/
	}

	//Create pdf of pennsylvania
	public function generate_pennsylvania_pdf($id, $type = '')
	{
		$response = $this->Insurance_manage->get_employee_by_id($id);
		$res_data = $response['data'];

		if ($res_data['began_work'] != '' || !empty($res_data['began_work'])) {

			$began_work = date_explode($res_data['began_work']);
			$began_work_AM_data = date("h:i A", strtotime($began_work[1]));
			$began_work_AM_val = explode(" ", trim($began_work_AM_data));
		} else {
			$began_work = '';
			$began_work_AM_data = '';
			$began_work_AM_val = '';
		}
		$time_of_injury = explode(' ', database_to_datetimepicker($res_data['time_of_injury']));
		if (isset($res_data['hospital_or_off_site_treatment_checkboxs'])) {
			foreach ($res_data['hospital_or_off_site_treatment_checkboxs'] as $key => $value) {
				switch ($value) {
					case '0':
						$temp1 = "0";
						break;
					case '1':
						$temp2 = "1";
						break;
					case '2':
						$temp3 = "2";
						break;
					case '3':
						$temp4 = "3";
						break;
					case '4':
						$temp5 = "4";
						break;
					case '5':
						$temp6 = "5";
						break;
					case '6':
						$temp7 = "6";
						break;
				}
			}
		}
		if ($res_data['employment_status'] == '1') {
			$EmploymentStatus = 'FT';
		} else if ($res_data['employment_status'] == '0') {
			$EmploymentStatus = 'PT';
		} else {
			$EmploymentStatus = '';
		}
		$data = [
			'Date of Injury' => @$res_data['date_of_injury'],
			'SSN' => @$res_data['social_security_num'],
			'First Name' => @$res_data['first_name'],
			'Last Name' => @$res_data['last_name'],
			'Street Address' => @$res_data['address'],
			'State' => @$res_data['state'],
			'Zip COde' => @$res_data['zip_code'],
			'City' => @$res_data['city'],
			'County' => '',
			'Phone Number' => @$res_data['employee_phone_number'],
			'Check Box15' => @$res_data['gender'],
			'gender' => @$res_data['gender'],
			'Check Box16' => @$res_data['marital_status'],
			'Check Box17' => @$res_data['marital_status'],
			'DOB' => database_to_datepicker(@$res_data['dob']),
			'Text18' => '',
			'Text20' => '',
			'Employment Status' => @$EmploymentStatus,
			'Tender Touch Rehab' => 'Tender Touch Rehab',
			'TT Address' => '685 River Ave',
			'TT City' => 'Lakewood',
			'Text27' => 'PA',
			'Text28' => '08701',
			'Phone Number2' => '732-987-3817',
			'County2' => '',
			'Check Box4' => '',
			'Check Box8' => '',
			'Text2' => database_to_datepicker(@$began_work[0]) . ' ' . @$began_work_AM_val[0],
			'Check Box3' => @$began_work_AM_val[1],
			'2016' => @$time_of_injury[2],
			'Check Box6' => @$time_of_injury[3],
			// 'Check Box6' => @$time_of_injury[3],
			'Text5' => database_to_datepicker(@$res_data['work_stop_date']),
			'DDB' => database_to_datepicker(@$res_data['date_disability_began']),
			'Text10' => @$res_data['date_notified'],
			'Text9' => database_to_datepicker(@$res_data['return_work_date']),
			'DOH' => database_to_datepicker(@$res_data['date_hire']),
			'Contact Name' => @$res_data['contact_first_name'],
			'Contact Phone Number' => @$res_data['contact_phone_number'],
			'Contact Last' => @$res_data['contact_last_name'],
			'Text21' => @$res_data['type_of_injury'],
			'Text22' => @$res_data['part_body_affected'],
			// 'Text23'=>'',
			'Check Box24' => @$res_data['did_injury_employer_permises'],
			'Text26' => @$res_data['out_of_state_injury'],
			'Check Box28' => @$res_data['were_safeguards'],
			'Check Box29' => @$res_data['where_used_safaguard'],
			'tx' => @$res_data['equipment_meterials'],
			'X4' => @$res_data['how_injury_health_condition'],
			'Text33' => @$res_data['if_fatal_give_date'],
			'Text34' => @$res_data['physician_health_care_provider'],
			'Check Box62' => @$temp1,
			'Check Box63' => @$temp2,
			'Check Box64' => @$temp3,
			'Check Box65' => @$temp4,
			'Check Box66' => @$temp5,
			'Check Box67' => @$temp6,
			'Check Box68' => @$temp7,
			'WFN' => @$res_data['witness_first_name'],
			'WLN' => @$res_data['witness_last_name'],
			'WPN' => @$res_data['witness_phone_number'],
			'Text48' => @$res_data['person_name'],
			'Text49' => @$res_data['person_title'],
			'Text50' => @$res_data['person_phone'],
			'Text58' => @$res_data['date_prepared'],
			'LDW' => database_to_datepicker(@$res_data['work_stop_date']),
			'Check Box1' => database_to_datepicker(@$res_data['did_injury_employer_permises']),
			'Out Of State' => $res_data['out_of_state_injury'],
			// 'Physician/ Health Care Name' => $res_data['physician_health_care_provider'],
			'physician_first_name' => @$res_data['physician_first_name'],
			'physician_last_name' => @$res_data['physician_last_name'],
			'physician_state' => @$res_data['physician_state'],
			'physician_zip' => @$res_data['physician_zip'],
			'physician_street' => @$res_data['physician_street'],
			'physician_hospital_city' => @$res_data['physician_hospital_city'],
			'physician_hospital_name' => @$res_data['physician_hospital_name'],
			'physician_hospital_state' => @$res_data['physician_hospital_state'],
			'physician_hospital_street' => @$res_data['physician_hospital_street'],
		];
		$pdf = new Pdf(APPPATH . 'libraries/WC_PA_SWIF.pdf');
		$result = $pdf->fillForm($data)
			->flatten()
			->needAppearances()
			->saveAs(FCPATH . 'upload/pdf/WC_PA_SWIF' . $id . '.pdf');

		$fileName = 'WC_PA_SWIF' . $id . '.pdf';

		if ($type == 'showpdf') {

			$this->showThePDF($fileName);
		} else {

			$this->download($fileName);
		}
		/* require APPPATH . 'libraries/PdfForm.php';
        $pdf = new PdfForm(APPPATH . 'libraries/WC_PA_SWIF.pdf', $data);

        $pdf->flatten()
            ->save('output.pdf')
            ->download();*/
	}

	//Create connecticut pdf
	public function generate_connecticut_pdf($id, $type = '')
	{
		$response = $this->Insurance_manage->get_employee_by_id($id);
		$res_data = $response['data'];

		$began_work = date_explode($res_data['began_work']);
		$began_work_AM_data = date("h:i A", strtotime($began_work[1]));
		$began_work_AM_val = explode(" ", trim($began_work_AM_data));
		$time_of_injury = explode(' ', database_to_datetimepicker($res_data['time_of_injury']));
		if (isset($res_data['hospital_or_off_site_treatment_checkboxs'])) {
			foreach ($res_data['hospital_or_off_site_treatment_checkboxs'] as $key => $value) {
				if ($value == '0') {
					$temp1 = "0";
				}
				if ($value == '1') {
					$temp2 = "1";
				}
				if ($value == '2') {
					$temp3 = "2";
				}
				if ($value == '3') {
					$temp4 = "3";
				}
				if ($value == '4') {
					$temp5 = "4";
				}
				if ($value == '5') {
					$temp6 = "5";
				}
			}
		}
		$data = [
			'Employer Phone' => '732-987-3817',
			'Employer Name' => 'Tender Touch Rehab',
			'Employer Address' => 'CT 685 River Ave',
			'Employer City' => 'Lakewood',
			'Employer State' => 'NJ',
			'Employer Zip' => '08701',
			'FEIN' => '38-4006375',
			'Employee Last Name' => @$res_data['last_name'],
			'Employee First Name' => @$res_data['first_name'],
			'Employee Middle Name' => @$res_data['middle_name'],
			'DOB' => database_to_datepicker(@$res_data['dob']),
			'Employee Phone' => @$res_data['emp_phone_number'],
			'Employee Address 1' => @$res_data['address'],
			// 'Employee City' =>@$res_data[''],
			// 'Employee State' =>@$res_data[''],
			// 'Employee Zip' =>@$res_data[''],
			'gender' => @$res_data['gender'],
			'Date Hired' => database_to_datepicker(@$res_data['date_hire']),
			'State of Hire' => @$res_data['state_injury'],
			'Occupation  Job Title' => @$res_data['job_title'],
			//'Rate Pay' =>@$res_data[''],
			'rate_pay_type' => @$res_data['rate_of_pay'],
			'Date of Injury' => database_to_datepicker(@$res_data['date_of_injury']),
			'Town of Injury  Illness' => @$res_data['town_of_injury'],
			'Time Began Work' => database_to_datepicker(@$began_work[0]) . ' ' . @$began_work_AM_val[0],
			'Time Began_AM_PM' => @$began_work_AM_val[1],
			'injury_occurs' => @$res_data['did_injury_employer_permises'],
			'Time Occurrence' => @$time_of_injury[0] . ' ' . @$time_of_injury[1] . ' ' . @$time_of_injury[2],
			'Time Occurrence_AMPM' => @$time_of_injury[3],
			'Type of Injury Illness' => @$res_data['type_of_injury'],
			'Date Employer Notified MMDDYY' => @$res_data['date_notified'],
			'Part of Body Affected' => @$res_data['part_body_affected'],
			'Date Disability Began MMDDYY' => @$res_data['date_disability_began'],
			'Date Last Worked MMDDYY' => database_to_datepicker(@$res_data['work_stop_date']),
			'Date Returned to Work MMDDYY' => database_to_datepicker(@$res_data['return_work_date']),
			'were_safegarde_provide' => @$res_data['were_safeguards'],
			'if_safegarde_provided' => @$res_data['if_provided'],
			'If Fatal Date of Death MMDDYY' => @$res_data['if_fatal_give_date'],
			'All equipment' => @$res_data['equipment_meterials'],
			'Specific activity' => @$res_data['activity_engaed'],
			'How Injury' => @$res_data['how_injury_health_condition'],
			'Contact Name' => @$res_data['contact_name'],
			'Contact Phone' => @$res_data['Contact Phone'],
			'Physician' => @$res_data['physician_health_care_provider'],
			'Hospital' => @$res_data['hospital_address'],
			'InitialTreatment1' => @$temp1,
			'InitialTreatment2' => @$temp2,
			'InitialTreatment3' => @$temp3,
			'InitialTreatment4' => @$temp4,
			'InitialTreatment5' => @$temp5,
			'InitialTreatment6' => @$temp6,
			'Date Administrator' => @$res_data['date_administrator_notified'],
			'Date Prepared' => @$res_data['date_prepared'],
			'Preparer Phone' => @$res_data['phone_number'],
			'Preparer Name' => @$res_data['preparer_name'],
		];
		$pdf = new Pdf(APPPATH . 'libraries/WC_Connecticut.pdf');
		$result = $pdf->fillForm($data)
			->flatten()
			->needAppearances()
			->saveAs(FCPATH . 'upload/pdf/WC_Connecticut' . $id . '.pdf');

		$fileName = 'WC_Connecticut' . $id . '.pdf';
		if ($type == 'showpdf') {

			$this->showThePDF($fileName);
		} else {

			$this->download($fileName);
		}
		/*require APPPATH . 'libraries/PdfForm.php';
        $pdf = new PdfForm(APPPATH . 'libraries/WC_Connecticut.pdf', $data);

        $pdf->flatten()
            ->save('output.pdf')
            ->download();*/
	}

	//sc pdf
	//create pdf of newjeresy
	public function generate_south_carolina_pdf($id, $type = '')
	{

		$response = $this->Insurance_manage->get_employee_by_id($id);

		$res_data = $response['data'];
		$began_work = date_explode($res_data['began_work']);
		$began_work_AM_data = date("A", strtotime($began_work[1]));
		$began_work_date = date("d-m-Y", strtotime($began_work[1]));
		$time_of_began = explode(' ', database_to_datetimepicker($res_data['began_work']));

		switch ($began_work_AM_data) {
			case "AM":
				$is_am = "1";
				break;
			case "PM":
				$is_am = "0";
				break;
		}

		$began_work_AM_val = explode(" ", trim($began_work_AM_data));
		$time_began_work = explode('/', database_to_datetimepicker($began_work[0]));
		$time_of_injury = explode(' ', database_to_datetimepicker($res_data['time_of_injury']));


		switch ($time_of_injury[3]) {
			case "AM":
				$toi_is_am = "1";
				break;
			case "PM":
				$toi_is_am = "0";
				break;
		}

		$return_work = date_explode($res_data['return_work_date']);
		$return_work_AM_data = date("A", strtotime($return_work[1]));
		if($res_data['return_work_date'] != '0000-00-00')
		{
			$return_work_date = date("m/d/Y", strtotime($res_data['return_work_date']));
		}
		else{
			$return_work_date = '';
		}

		if($res_data['date_disability_began'] != '')
		{
			$date_disability_began = date("m/d/Y", strtotime($res_data['date_disability_began']));
		}
		else{
			$date_disability_began = '';
		}

		if($res_data['if_fatel_death_date'] != '')
		{
			$if_fatel_death_date = date("m/d/Y", strtotime($res_data['if_fatel_death_date']));
		}
		else{
			$if_fatel_death_date = '';
		}


		if ($res_data['employment_status'] == '1') {
			$EmploymentStatus = 'FULL TIME';
		} else if ($res_data['employment_status'] == '0') {
			$EmploymentStatus = 'PART TIME';
		} else {
			$EmploymentStatus = '';
		}

		if($res_data['date_hire'] != '0000-00-00')
		{
			$date_hire = date("m/d/Y", strtotime($res_data['date_hire']));
		}
		else{
			$date_hire = '';
		}


		if ($res_data['witnesses_1'] != '' && $res_data['witnesses'] != '' && $res_data['witnesses_2'] != '') {
			$witness_data = @$res_data['witnesses'] . ' , ' . @$res_data['witnesses_1'] . ' , ' . @$res_data['witnesses_2'];
		} else if ($res_data['witnesses'] != '' && $res_data['witnesses_2'] != '') {
			$witness_data = @$res_data['witnesses'] . ' , ' . @$res_data['witnesses_2'];
		} else if ($res_data['witnesses_1'] != '' && $res_data['witnesses_2'] != '') {
			$witness_data = @$res_data['witnesses_1'] . ' , ' . @$res_data['witnesses_2'];
		} else if ($res_data['witnesses_1'] != '' && $res_data['witnesses'] != '') {
			$witness_data = @$res_data['witnesses'] . ' , ' . @$res_data['witnesses_1'];
		} else if ($res_data['witnesses'] != '') {
			$witness_data = @$res_data['witnesses'];
		} else if ($res_data['witnesses_1'] != '') {
			$witness_data = @$res_data['witnesses_1'];
		} else if ($res_data['witnesses_2'] != '') {
			$witness_data = @$res_data['witnesses_2'];
		} else {
			$witness_data = '';
		}
		if (!empty(@$res_data['hospital_initial_treatment'])) {
			foreach ($res_data['hospital_initial_treatment'] as $key => $value) {
				switch ($value) {
					case '0':
						$temp0 = "0";
						break;
					case '1':
						$temp1 = "1";
						break;
					case '2':
						$temp2 = "2";
						break;
					case '3':
						$temp3 = "3";
						break;
					case '4':
						$temp4 = "4";
						break;
					case '5':
						$temp5 = "5";
						break;
					case '6':
						$temp6 = "6";
						break;
				}
			}
		}

		if(@$res_data['marital_status'] == '0'){
			$MARRIED = '0';
		} else if(@$res_data['marital_status'] == '1'){
			$MARRIED = '1';
		}
		else if(@$res_data['marital_status'] == '2'){
			$MARRIED = '2';
		} else if(@$res_data['marital_status'] == '3'){
			$MARRIED = '3';
		}

		$began_work = date_explode(@$res_data['began_work']);
		$data = '';
		$data = [
			'NAME_LAST_FIRST_MIDDLE' => @$res_data['full_name'],
			'DATE_OF_BIRTH' => @$res_data['dob'],
			'SOCIAL_SECURITY_NUMBER' => @$res_data['social_security_num'],
			'DATE_HIRED' => @$date_hire,
			'STATE_OF_HIRE' => @$res_data['state_injury'],
			'ADDRESS_INCL_ZIP' => @$res_data['address'],
			'STATE  HIRE' => @$res_data['state_injury'],
			'SEX' => (@$res_data['gender'] == "1" ?  "1" : "2"),
			'UnmarriedSingleDivorced' => @$MARRIED,
			'Married' => (@$res_data['marital_status'] == "1" ?  "1" : "0"),
			'Separated' => (@$res_data['marital_status'] == "2" ?  "1" : "0"),
			'Unknow' => (@$res_data['marital_status'] == "3" ?  "1" : "0"),
			'OCCUPATIONJOB TITLE' => @$res_data['job_title'],
			'EMPLOYMENT STATUS' => @$EmploymentStatus,
			'DAYS WORKEDWEEK' =>  @$res_data['day_worked'],
			'undefined_2' => (@$res_data['full_pay'] == "1" ? "1" : "0"),
			'salary_continued' => (@$res_data['salary_continue'] == "1" ? "1" : "0"),
			'salary_notcontinue' => (@$res_data['salary_continue'] == "0" ? "1" : "0"),
			'AM' => @$is_am,
			'PM' => @$is_am,
			'AM_2' =>@$toi_is_am,
			'begand_work_time' => @$time_of_began[2],
			'time_of_occurance' => @$time_of_injury[2],
			'DATE OF INJURYILLNESS' =>date("m/d/Y", strtotime($res_data['date_of_injury'])),
			'Check Box76' => @($toi_is_am == "1") ? "1" : "0",
			'Check Box77' => @($toi_is_am == "0") ? "1" : "0",
			'LAST WORK DATE' => date("m/d/Y", strtotime($res_data['work_stop_date'])),
			'DATE EMPLOYER NOTIFIED DATE DISABILITY BEGAN' => @$res_data['date_notified'],
			'date_disability_began' => @$date_disability_began,
			'date_notified' => date("m/d/Y", strtotime($res_data['date_notified'])),
			'TYPE OF INJURYILLNESS' => @$res_data['type_of_injury'],
			'OCCUR ON EMPLOYERS PREMISES' => @($res_data['injury_permises'] == "1") ? "YES" : "NO",
			/*'TYPE OF ILLNESS' => @$res_data['type_of_injury'],*/
			'PART OF BODY AFFECTED' => @$res_data['part_body_affected'],
			'DEPARTMENT OR LOCATION WHERE ACCIDENT OR ILLNESS EXPOSURE OCCURRED' => @$res_data['location_where_accident'],
			'ALL EQUIPMENT MATERIALS OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED' => @$res_data['equipment_meterials'],
			'SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED' => @$res_data['activity_engaed'],
			'WORK PROCESS THE EMPLOYEE WAS ENGAGED IN WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED' => @$res_data['work_process_emp_engade'],
			'HOW INJURY OR ILLNESSABNORMAL HEALTH CONDITION OCCURRED DESCRIBE THE SEQUENCE OF EVENTS AND INCLUDE ANY OBJECTS OR SUBSTANCES THAT DIRECTLY INJURED THE EMPLOYEE OR MADE THE EMPLOYEE ILL' => @$res_data['how_injury_health_condition'],
			'DATE RETURNED TO WORK' => @$return_work_date,
			'IF FATAL GIVE DATE OF DEATH' => @$if_fatel_death_date,
			'WERE SAFEGUARDS OR SAFETY EQUIPMENT PROVIDED' => @($res_data['where_safeguards'] == "1") ? "YES" : "NO",
			'WHERE THEY USED' => @($res_data['where_used_safaguard'] == "1") ? "YES" : "NO",
			'PHYSICIANHEALTH CARE PROVIDER NAME  ADDRESS' => @$res_data['physician_provider'],
			'HOSPITAL OR OFF SITE TREATMENT NAME  ADDRESS' => @$res_data['hospital_treatment'],
			'initial_treatment0' => @$temp0,
			'initial_treatment1' => @$temp1,
			'initial_treatment2' => @$temp2,
			'initial_treatment3' => @$temp3,
			'initial_treatment4' => @$temp4,
			'initial_treatment5' => @$temp5,
			'initial_treatment6' => @$temp6,
			'FUTURE MAJOR MEDICAL LOST TIME ANTICIPATED' => @$temp7,
			'WITNESSES NAME  PHONE' => @$witness_data,
			'DATE ADMINISTRATOR NOTIFIED' => date("m/d/Y", strtotime($res_data['date_administrator_notified'])),
			'DATE PREPARED' =>date("m/d/Y", strtotime($res_data['date_prepared'])),
			'PREPARERS NAME  TITLE' => @$res_data['preparer_name'],
			'PHONE NUMBER' => @$res_data['phone_number'],


		];


		$pdf = new Pdf(APPPATH . 'libraries/WC_SC_new_change.pdf');
		$result = $pdf->fillForm($data)
			->flatten()
			->needAppearances()
			->saveAs(FCPATH . 'upload/pdf/WC_SC_new' . $id . '.pdf');

		$fileName = 'WC_SC_new' . $id . '.pdf';


		if ($type == 'showpdf') {
			$this->showThePDF($fileName);
		} else {
			$this->download($fileName);
		}
		
		/*  require APPPATH . 'libraries/PdfForm.php';
        $pdf = new PdfForm(APPPATH . 'libraries/WC_NJ.pdf', $data);

        //$fdf = $pdf->'',makeFdf($data);
        $pdf->flatten()
            ->save('output.pdf')
            ->download();*/
	}

	public function generate_missouri_pdf($id, $type = '')
	{
		$response = $this->Insurance_manage->get_employee_by_id($id);

		$res_data = $response['data'];
		$began_work = date_explode($res_data['began_work']);
		$began_work_AM_data = date("A", strtotime($began_work[1]));
		$began_work_date = date("d-m-Y", strtotime($began_work[1]));
		$time_of_began = explode(' ', database_to_datetimepicker($res_data['began_work']));

		switch ($began_work_AM_data) {
			case "AM":
				$is_am = "1";
				break;
			case "PM":
				$is_am = "0";
				break;
		}

		$began_work_AM_val = explode(" ", trim($began_work_AM_data));
		$time_began_work = explode('/', database_to_datetimepicker($began_work[0]));
		$time_of_injury = explode(' ', database_to_datetimepicker($res_data['time_of_injury']));


		switch ($time_of_injury[3]) {
			case "AM":
				$toi_is_am = "1";
				break;
			case "PM":
				$toi_is_am = "0";
				break;
		}


		if ($res_data['employment_status'] == '1') {
			$EmploymentStatus = 'FULL TIME';
		} else if ($res_data['employment_status'] == '0') {
			$EmploymentStatus = 'PART TIME';
		} else {
			$EmploymentStatus = '';
		}

		if($res_data['date_hire'] != '0000-00-00')
		{
			$date_hire = date("m/d/Y", strtotime($res_data['date_hire']));
		}
		else{
			$date_hire = '';
		}

		$return_work = date_explode($res_data['return_work_date']);
		$return_work_AM_data = date("A", strtotime($return_work[1]));
		if($res_data['return_work_date'] != '0000-00-00')
		{
			$return_work_date = date("m/d/Y", strtotime($res_data['return_work_date']));
		}
		else{
			$return_work_date = '';
		}

		if($res_data['if_fatel_death_date'] != '')
		{
			$if_fatel_death_date = date("m/d/Y", strtotime($res_data['if_fatel_death_date']));
		}
		else{
			$if_fatel_death_date = '';
		}


		if ($res_data['witnesses_1'] != '' && $res_data['witnesses'] != '' && $res_data['witnesses_2'] != '') {
			$witness_data = @$res_data['witnesses'] . ' , ' . @$res_data['witnesses_1'] . ' , ' . @$res_data['witnesses_2'];
		} else if ($res_data['witnesses'] != '' && $res_data['witnesses_2'] != '') {
			$witness_data = @$res_data['witnesses'] . ' , ' . @$res_data['witnesses_2'];
		} else if ($res_data['witnesses_1'] != '' && $res_data['witnesses_2'] != '') {
			$witness_data = @$res_data['witnesses_1'] . ' , ' . @$res_data['witnesses_2'];
		} else if ($res_data['witnesses_1'] != '' && $res_data['witnesses'] != '') {
			$witness_data = @$res_data['witnesses'] . ' , ' . @$res_data['witnesses_1'];
		} else if ($res_data['witnesses'] != '') {
			$witness_data = @$res_data['witnesses'];
		} else if ($res_data['witnesses_1'] != '') {
			$witness_data = @$res_data['witnesses_1'];
		} else if ($res_data['witnesses_2'] != '') {
			$witness_data = @$res_data['witnesses_2'];
		} else {
			$witness_data = '';
		}
		if (!empty(@$res_data['hospital_initial_treatment'])) {
			foreach ($res_data['hospital_initial_treatment'] as $key => $value) {
				switch ($value) {
					case '0':
						$temp1 = "0";
						break;
					case '1':
						$temp2 = "1";
						break;
					case '2':
						$temp3 = "2";
						break;
					case '3':
						$temp4 = "3";
						break;
					case '4':
						$temp5 = "4";
						break;
					case '5':
						$temp6 = "5";
						break;
					case '6':
						$temp7 = "6";
						break;
				}
			}
		}
		$began_work = date_explode(@$res_data['began_work']);
		$data = '';
		$data = [
			/*'EMPLOYER NAME ADDRESS INCL ZIP CODE' => @$res_data['full_name'] . " " . @$res_data['state_name'],*/
			'NAME LAST FIRST MIDDLE' => @$res_data['full_name'],
			'DATE_OF_BIRTH' => @$res_data['dob'],
			'SOCIAL_SECURITY_NUMBER' => @$res_data['social_security_num'],
			'DATE HIRED' => @$date_hire,
			'STATE OF HIRE' => @$res_data['state_injury'],
			'ADDRESS INCLUDE ZIP' => @$res_data['address'],
			'STATE  HIRE' => @$res_data['state_injury'],
			'gender' => (@$res_data['gender'] == "1" ?  "1" : "0"),
			'MALE' => (@$res_data['gender'] == '1' ? "Male" : "Female"),
			'FEMALE' => (@$res_data['gender'] == '0' ? "1" : "0"),
			'UNKNOWN' => (@$res_data['gender'] != '1' || @$res_data['gender'] != "0" ? "1" : "0"),
			'UNMARRIED' => (@$res_data['marital_status'] == "0" ?  "1" : "0"),
			'MARRIED' => (@$res_data['marital_status'] == "1" ?  "1" : "0"),
			'SEPARATED' => (@$res_data['marital_status'] == "2" ?  "1" : "0"),
			'UNKNOWN_2' => (@$res_data['marital_status'] == "3" ?  "1" : "0"),
			'OCCUPATION JOB TITLE' => @$res_data['job_title'],
			'EMPLOYMENT STATUS' => @$EmploymentStatus,
			'day_rate' => (@$res_data['rate_of_pay'] == 'Day' ? "1" : "0"),
			'MONTH' => (@$res_data['rate_of_pay'] == 'Month' ? "1" : "0"),
			'WEEK' => (@$res_data['rate_of_pay'] == 'Week' ? "1" : "0"),
			'OTHER' => (@$res_data['rate_of_pay'] == 'Other' ? "1" : "0"),
			'FULL PAY FOR DAY OF INJURY' => @$res_data['day_worked'],
			'YES' => @$res_data['full_pay'] == '1' ? "1" : "0",
			'NO' => @$res_data['full_pay'] == '0' ? "1" : "0",
			'YES_2' => (@$res_data['salary_continue'] == "1" ? "1" : "0"),
			'NO_2' => (@$res_data['salary_continue'] == "0" ? "1" : "0"),
			'AM' => @$is_am,
			//'PM' => @$is_pm,
			'AM_2' =>@$toi_is_am,
			'LAST WORK DATE' => date("m/d/Y", strtotime($res_data['work_stop_date'])),
			'DATE EMPLOYER NOTIFIED' => @$res_data['date_notified'],
			'DATE DISABILITY BEGAN' => @$res_data['date_disability_began'],
			'begand_work_time' => @$time_of_began[2],
			'time_of_occurance' => @$time_of_injury[2],
			'TYPE OF INJURY ILLNESS' => @$res_data['type_of_injury'],
			'DATE OF INJURYILLNESS' => date("m/d/Y", strtotime($res_data['date_of_injury'])),
			'PART OF BODY AFFECTED' => @$res_data['part_body_affected'],
			'YES_3' => @($res_data['injury_permises'] == "1") ? "1" : "0",
			'NO_3' => @($res_data['injury_permises'] == "0") ? "1" : "0",
			'ZIP CODE OF THE LOCATION WHERE THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED' => @$res_data['location_where_accident'],
			'ALL EQUIPMENT MATERIALS OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED' => @$res_data['equipment_meterials'],
			'SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED' => @$res_data['activity_engaed'],
			'WORK PROCESS THE EMPLOYEE WAS ENGAGED IN WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED' => @$res_data['work_process_emp_engade'],
			'HOW INJURY OR ILLNESSABNORMAL HEALTH CONDITION OCCURRED DESCRIBE THE SEQUENCE OF EVENTS AND INCLUDE ANY OBJECTS OR SUBSTANCES THAT DIRECTLY INJURED THE EMPLOYEE OR MADE THE EMPLOYEE ILL' => @$res_data['how_injury_health_condition'],
			'DATE RETURN TO WORK' => @$return_work_date,
			'WERE SAFEGUARDS OR SAFETY EQUIPMENT PROVIDED' => @$if_fatel_death_date,
			'YES_4' => @($res_data['where_safeguards'] == "1") ? "1" : "0",
			'NO_4' => @($res_data['where_safeguards'] == "1") ? "1" : "0",
			'YES_5' => @($res_data['where_used_safaguard'] == "1") ? "1" : "0",
			'NO_5' => @($res_data['where_used_safaguard'] == "0") ? "1" : "0",
			'were_safe' => @($res_data['where_safeguards'] == "1") ? "1" : "0",
			'were_used' =>@($res_data['where_used_safaguard'] == "1") ? "1" : "0",
			'PHYSICIAN HEALTH CARE PROVIDER NAME  ADDRESS' => @$res_data['physician_provider'],
			'HOSPITAL NAME  ADDRESS' => @$res_data['hospital_treatment'],
			'0 NO MEDICAL TREATMENT' => @$temp1,
			'1  MINOR BY EMPLOYER' => @$temp2,
			'2  MINOR CLINIC HOSPITAL' => @$temp3,
			'3  EMERGENCY CASE' => @$temp4,
			'4  HOSPITALIZED  24 HOURS' => @$temp5,
			'5  FUTURE MAJ MED LOST TIME ANTICIPATED' => @$temp6,
			'6  FUTURE MAJ MED LOST TIME ANTICIPATED' => @$temp7,
			'WITNESS NAME  PHONE' => @$witness_data,
			'DATE ADMINISTRATOR NOTIFIED' => @$res_data['date_administrator_notified'],
			'DATE PREPARED' => @$res_data['date_prepared'],
			'PREPARERS NAME  TITLE' => @$res_data['preparer_name'],
			'PHONE NUMBER' => @$res_data['phone_number'],
		];
		$pdf = new Pdf(APPPATH . 'libraries/WC_MO.pdf');
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit();

		$result = $pdf->fillForm($data)
			->flatten()
			->needAppearances()
			->saveAs(FCPATH . 'upload/pdf/WC_MO_new' . $id . '.pdf');

		$fileName = 'WC_MO_new' . $id . '.pdf';

		// echo $fileName;exit;
		if ($type == 'showpdf') {
			$this->showThePDF($fileName);
		} else {
			$this->download($fileName);
		}
	}


	public function generate_columbia_pdf($id, $type = '')
	{
		$response = $this->Insurance_manage->get_employee_by_id($id);
		$res_data = $response['data'];
		// echo "<pre>";
		// print_r ($res_data);
		// echo "</pre>";exit;
		if (!empty($res_data)) {


			/*if (isset($res_data['emp_day_of_week'])) {
				foreach ($res_data['emp_day_of_week'] as $key => $value) {
					switch ($value) {
						case '0':
							$temp0 = "0";
							break;
						case '1':
							$temp1 = "1";
							break;
						case '2':
							$temp2 = "2";
							break;
						case '3':
							$temp3 = "3";
							break;
						case '4':
							$temp4 = "4";
							break;
						case '5':
							$temp5 = "5";
							break;
						case '6':
							$temp6 = "6";
							break;
						case '6':
							$temp6 = "6";
							break;
					}
				}
			}
			$time_of_injury = explode(' ', database_to_datetimepicker($res_data['time_of_injury']));
			$dob = explode("/", database_to_datepicker($res_data['dob']));
			$began_work = date_explode($res_data['began_work']);
			$date_begam_am = date("h:i A", strtotime($began_work[1]));
			$notice_date = explode('/', $res_data['notice_date']);
			$claimant_date = explode('/', $res_data['given_claimant_information_date']);
			$death_date = explode('/', $res_data['death_date']);
			$first_treatment = explode('/', $res_data['first_treatment']);
			$work_stop_date = explode('/', database_to_datepicker($res_data['work_stop_date']));
			$return_work_date = explode('/', $res_data['return_work_date']);
			$date_hire = explode('/', database_to_datepicker($res_data['date_hire']));
			$aditionn_date = explode('/', date("m/d/Y"));
			$date_injury_illness_date = explode('/', database_to_datepicker($began_work[0]));
			$began_am_data = explode(' ', trim($date_begam_am));
			$time_began_work = explode('/', database_to_datetimepicker($began_work[0]));
			if ($work_stop_date[0] == '0000' && $work_stop_date[1] == '00' && $work_stop_date[2] == '00') {
				$work_stop_date[0] = '';
				$work_stop_date[1] = '';
				$work_stop_date[2] = '';
			}
			if ($date_hire[0] == '0000' && $date_hire[1] == '00' && $date_hire[2] == '00') {
				$date_hire[0] = '';
				$date_hire[1] = '';
				$date_hire[2] = '';
			}
			if ($res_data['where_receive_first_treatment'] == 'Doctor’s office') {
				$res_data['where_receive_first_treatment'] = "Doctors office";
			}*/
			$return_work = date_explode($res_data['return_work_date']);
			$return_work_AM_data = date("A", strtotime($return_work[1]));
			$return_work_date = date("d-m-Y", strtotime($return_work[1]));
			$time_of_injury = explode(' ', database_to_datetimepicker($res_data['time_of_injury']));
			$return_worked = explode(' ', database_to_datepicker($res_data['return_work_date']));
			$date_disablity = database_to_datepicker($res_data['date_disability']);

			$data = [
				'full_name' => @$res_data['full_name'],
				'address' => @$res_data['address'],
				'insurer_name' => @$res_data['insurer_name'],
				'no_of_day_worked' => @$res_data['no_of_day_worked'],
				'time_of_injury' => @$time_of_injury[0]. " ". $time_of_injury[2]. " ". $time_of_injury[3],
				'starting_time' => @$res_data['starting_time'],
				'return_to_work_date' => @$return_worked[0]. " ". $return_worked[2]. " ". $return_worked[3],
				'wage' => @$res_data['wage'],
				'death_date' => @$res_data['death_date'],
				'date_disability' => @$res_data['date_disability'],
				'injured_paid_full_day' => @$res_data['injured_paid_full_day'],
				'was_injured' => @$res_data['was_injured'],
				'foreman' => @$res_data['foreman'],
				'foremean_first_injury' => @$res_data['foremean_first_injury'],
				// 'gender' => '1',
				'gender' => (@$res_data['gender'] == '1' ? "1" : "0"),
				'dob' => @$res_data['dob'],
				'emp_phone' => @$res_data['emp_phone'],
				'occupation_injured' => @$res_data['occupation_injured'],
				'regular_occupation' => @$res_data['regular_occupation'],
				'emp_department' => @$res_data['emp_department'],
				'injured_hired_dc' => @$res_data['injured_hired_dc'],
				'how_long_employee' => @$res_data['how_long_employee'],
				'piece_time_worker' => @$res_data['piece_time_worker'],
				'hourly_wage' => @$res_data['hourly_wage'],
				'hour_work_day' => @$res_data['hour_work_day'],
				'daily_wages' => @$res_data['daily_wages'],
				'day_worked_week' => @$res_data['day_worked_week'],
				'avrge_weekly_earnings' => @$res_data['avrge_weekly_earnings'],
				'estimated_value_per_day' => @$res_data['estimated_value_per_day'],
				'employee_business_function' => @$res_data['employee_business_function'],
				// 'Employers Telephone No' => "",
				'insurance_policy_no' => @$res_data['insurance_policy_no'],
				'accident_location' => @$res_data['accident_location'],
				'emp_permisses' => @$res_data['emp_permisses'],
				'employee_body_affected' => @$res_data['employee_body_affected'],
				'witnesses_name' => @$res_data['witnesses'],
				'department_branch' => @$res_data['department_branch'],
				'address_of_phisician' => @$res_data['address_of_phisician'],
			];

			$pdf = new Pdf(APPPATH . 'libraries/DC_WC_injury2.pdf',
				[
					'useExec' => true,
				]);
			// echo "<pre>";
			// print_r ($pdf);
			// echo "</pre>";exit;


			$result = $pdf->fillForm($data)
				->flatten()
				->needAppearances()
				->saveAs(FCPATH . 'upload/pdf/DC_WC_injury2_new' . $id . '.pdf');

			$fileName = 'DC_WC_injury2_new' . $id . '.pdf';

			// echo $fileName;exit;
			if ($type == 'showpdf') {
				$this->showThePDF($fileName);
			} else {
				$this->download($fileName);
			}


			/*$pdf = new Pdf(APPPATH . 'libraries/DC_WC_injury.pdf');
			$result = $pdf->fillForm($data)
				->flatten()
				->needAppearances()
				->saveAs(FCPATH . 'upload/pdf/DC_WC_injury' . $id . '.pdf');
			// ->download('filled.pdf');

				echo FCPATH . 'upload/pdf/DC_WC_injury' . $id . '.pdf'; exit;
			$fileName = 'DC_WC_injury' . $id . '.pdf';
			echo $fileName;exit;
			if ($type == 'showpdf') {

				$this->showThePDF($fileName);
			} else {

				$this->download($fileName);
			}*/

		}
	}



	public function pdf_download_view($id)
	{
		$this->data['id'] = base64_decode($id);
		$response = $this->Insurance_manage->get_single_emp(base64_decode($id));
		switch ($response['state_id']) {
			case '1':
				$this->data['state_name'] = "generate_newyork_pdf";
				break;
			case '2':
				$this->data['state_name'] = "generate_new_jeresy_pdf";
				break;
			case '3':
				$this->data['state_name'] = "generate_maryland_pdf";
				break;
			case '4':
				$this->data['state_name'] = "generate_connecticut_pdf";
				break;
			case '5':
				$this->data['state_name'] = "generate_pennsylvania_pdf";
				break;
			case '6':
				$this->data['state_name'] = "generate_south_carolina_pdf";
				break;
			case '7':
				$this->data['state_name'] = "generate_missouri_pdf";
				break;
			case '8':
				$this->data['state_name'] = "generate_columbia_pdf";
				break;
		}

		$this->load->view('insurance_claim/download_pdf', $this->data);
	}

	public function download($fileName = "")
	{
		$this->load->helper('download');
		if ($fileName) {
			$file = realpath(FCPATH . 'upload/pdf/') . "/" . $fileName;
			// check file exists
			if (file_exists($file)) {
				// get file content
				$data = file_get_contents($file);
				//force download
				force_download($fileName, $data);
			} else {
				// Redirect to base url
				redirect(base_url());
			}
		}
		return true;
	}


	/**
	 * Send mail on each claim request
	 *
	 * @param int $emp_id
	 * @return boolean return the status for the  mail send or not
	 */
	public function sendmail($emp_id)
	{
		$data = $this->Insurance_manage->getSingle_data('*', 'employees', array('id' => $emp_id));
		$state = $this->Insurance_manage->getSingle_data('*', 'state', array('id' => $data['state_id']));



		$this->load->library('email');
		$this->email->from('yuganda3@gmail.com');
		// $this->email->to("bhimani.rutvik1211@gmail.com");
		$this->email->to("benefits@tendertouch.com");

		$html = "Employee name : " . $data['full_name'] . "\n" . "State : " . $state['name'] . "\nCheck here : https://wc.tendertouch.com/Insurance_manage/ ";

		$this->email->subject('New Incident Reported');
		$this->email->message($html);

		$result = $this->email->send();
		if ($result) {
			$this->session->set_flashdata('success', 'Email Sent Successfully.');
			// redirect('insurance_manage');
			echo "mail send";
		} else {
			$this->session->set_flashdata('error', 'Email Sent Failed.');
			// redirect('insurance_manage/new_york' . $id);
			echo "Something went wrong";
		}
	}
}
    /* End of file Insurance_claim.php */
/* Location: ./application/controllers/Insurance_claim.php */
