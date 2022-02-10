<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insurance_claim extends CI_Controller {

	public $data = [];
	
	public function __construct()
	{	
		parent::__construct();
		$this->load->model('Insurance_claim_model','Insurance_claim');
		$this->load->model('Insurance_manage_model','Insurance_manage');
		$this->load->helper('my_helper');
	}		

	public function index(){
		$this->data['state_type'] = "new_york";
		$this->load->view('insurance_claim/form',$this->data);	
	}
	public function new_york(){	
	
		$this->data['state_type'] = "new_york";
		if ($this->input->post()) {			
			$validation = [
				// Employee Information validation
				['field' => 'new_york[full_name]','label' => 'Employee Name','rules' => 'required'],
				['field' => 'new_york[gender]','label' => 'Gender','rules' => 'required'],
				['field' => 'new_york[discipline]','label' => 'Discipline','rules' => 'required'],
				['field' => 'new_york[facility_name]','label' => 'Facility Name','rules' => 'required'],
				// Employee Injury Or Illness				
				['field' => 'new_york[began_work]','label' => 'Time of day employee began work on date of injury / illness','rules' => 'required'],
				['field' => 'new_york[time_of_injury]','label' => 'Time of injury/illness','rules' => 'required'],
				['field' => 'new_york[where_did_the_injury]','label' => 'Where did the injury / illness happen','rules' => 'required'],
				['field' => 'new_york[location_where_worked]','label' => 'Was this location where the employee normally worked','rules' => 'required'],
				['field' => 'new_york[employee_supervisor]','label' => 'Employee’s supervisor','rules' => 'required'],
				['field' => 'new_york[supervisor_see_injury]','label' => 'Did the supervisor see injury happen?','rules' => 'required'],
				['field' => 'new_york[what_employee_doing]','label' => 'What was the employee doing when he/she was injured or became ill?','rules' => 'required'],
				['field' => 'new_york[how_did_the_injury]','label' => 'How did the injury/illness occur?','rules' => 'required'],
				['field' => 'new_york[list_body_part_affected]','label' => 'Explain fully the nature of the employees injury/illness; list body parts affected','rules' => 'required'],
				['field' => 'new_york[was_an_object]','label' => 'Was an object (e.g. forklift, hammer, acid) involved in the injury / illness','rules' => 'required'],
				['field' => 'new_york[was_the_injury_vehicle]','label' => 'Was the injury the result of the user or operation of a licensed motor vehicle','rules' => 'required'],				
				// retrurn work validation				
				['field' => 'new_york[did_stop_work]','label' => 'Did the employee stop work because of his injury/illness?','rules' => 'required'],				
				// employee work information validation				
				['field' => 'new_york[job_title]','label' => 'What was the employees job title?','rules' => 'required'],
				['field' => 'new_york[what_type_activities_work]','label' => 'What types of activities did the employee normally perform at work?','rules' => 'required'],
			];
			if (isset($this->input->post('new_york')['location_where_worked']) && $this->input->post('new_york')['location_where_worked'] ==  "no") {
				$validation[] = ['field' => 'new_york[why_employee_there]','label' => 'Why was the employee there?','rules' => 'required'];
			}
			if (isset($this->input->post('new_york')['anyone_see_injury']) && $this->input->post('new_york')['anyone_see_injury'] ==  "1") {
				$validation[] = ['field' => 'new_york[see_injury_happen_names]','label' => 'Give name(s)','rules' => 'required'];
			}
			if (isset($this->input->post('new_york')['was_an_object']) && $this->input->post('new_york')['was_an_object'] ==  "1") {
				$validation[] = ['field' => 'new_york[what_was_object]','label' => 'What was it','rules' => 'required'];
			}
			if (isset($this->input->post('new_york')['was_the_injury_vehicle']) && $this->input->post('new_york')['was_the_injury_vehicle'] ==  "1") {
				$validation[] = ['field' => 'new_york[whos_vehicle]','label' => 'Who’s vehicle','rules' => 'required'];
			}							
			if (isset($this->input->post('new_york')['did_the_death']) && $this->input->post('new_york')['did_the_death'] ==  "1") {
					$validation[] = ['field' => 'new_york[death_date]','label' => 'What was the date of death?','rules' => 'required'];
					$validation[] = ['field' => 'new_york[info_nearest_relative]','label' => 'Name and address of the nearest relative','rules' => 'required'];
			}
			if (isset($this->input->post('new_york')['did_stop_work']) && $this->input->post('new_york')['did_stop_work'] ==  "1") {
				$validation[] = ['field' => 'new_york[work_stop_date]','label' => 'What was the date of death?','rules' => 'required'];
			}						
			$this->form_validation->set_rules($validation);
			if ($this->form_validation->run() == FALSE)
			{
				$this->data['errors'] = $this->form_validation->error_array();
				$this->load->view('insurance_claim/form',$this->data);
			}
			else
			{				
				$details = [
					'state_injury' => @$this->input->post('new_york')['state_injury'],
					'contact_no' => @$this->input->post('new_york')['contact_no'],
					'preferred_contact_no' => @$this->input->post('new_york')['preferred_contact_no'],
					'preferred_email' => @$this->input->post('new_york')['preferred_email'],
					'preferred_contact' => @$this->input->post('new_york')['preferred_contact'],
					'began_work' => @$this->input->post('new_york')['began_work'],
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
				$first_name = (isset(explode(' ',$full_name)[0]) != "")?explode(' ',$full_name)[0]:'';
				$middle_name = (isset(explode(' ',$full_name)[1]) != "")?explode(' ', $full_name)[1]:'';
				$last_name = (isset(explode(' ',$full_name)[2]) != "")?explode(' ', $full_name)[2]:'';
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
					'time_of_injury' => datetimepiker_to_database(@$this->input->post('new_york')['time_of_injury']),
					'work_stop_date' => datepiker_to_database(@$this->input->post('new_york')['work_stop_date']),
					'return_work_date' => datepiker_to_database(@$this->input->post('new_york')['return_work_date']),
					'job_title' => @$this->input->post('new_york')['job_title'],
					'details' => json_encode($details),
					'state_id' => 1,
				];			
				
				$emp_id = $this->Insurance_claim->employee_insert($employee);

				if ($emp_id != "") {
					$this->session->set_flashdata('success', 'Claim Request Submmited');
					$insert_id =  $this->db->insert_id();
					$this->session->set_userdata('usertype','employee');
					redirect('Insurance_claim/pdf_download_view/'.base64_encode($insert_id));
					//redirect('','refresh');
				} else {
					$this->session->set_flashdata('error', 'Something Want Worng');
					redirect('','refresh');
				}
			}
		}else{
			$this->load->view('insurance_claim/form',$this->data);
		}
	}
	public function new_jersey(){
		
		$this->data['state_type'] = "new_jersey";
		if ($this->input->post()) {
			
			$validation = [
				// Employee/Wage
				['field' => 'new_jersey[full_name]','label' => 'Employee Name','rules' => 'required'],
				['field' => 'new_jersey[discipline]','label' => 'Discipline','rules' => 'required'],
				['field' => 'new_jersey[facility_name]','label' => 'Facility Name','rules' => 'required'],
				['field' => 'new_jersey[gender]','label' => 'Gender','rules' => 'required'],
				['field' => 'new_jersey[job_title]','label' => 'Occupation / Job Title','rules' => 'required'],
				['field' => 'new_jersey[employment_status]','label' => 'Employeement Status','rules' => 'required'],								
				['field' => 'new_jersey[began_work]','label' => 'Time Employee Began Work','rules' => 'required'],
				//['field' => 'new_jersey[state_injury]','label' => 'State of hire','rules' => 'required'],
				['field' => 'new_jersey[date_of_injury]','label' => 'Date of Injury / Illness','rules' => 'required'],
				['field' => 'new_jersey[time_of_injury]','label' => 'Time of Occurrence','rules' => 'required'],
				['field' => 'new_jersey[work_stop_date]','label' => 'Last Work Date','rules' => 'required'],
				['field' => 'new_jersey[date_notified]','label' => 'Date Employer Notified','rules' => 'required'],
				['field' => 'new_jersey[type_of_injury]','label' => 'Type of Injury / Illness','rules' => 'required'],
				['field' => 'new_jersey[part_body_affected]','label' => 'Part of Body Affected','rules' => 'required'],
				['field' => 'new_jersey[location_where_accident]','label' => 'Department or Location Where Accident or Illness occurred','rules' => 'required'],
				['field' => 'new_jersey[equipment_meterials]','label' => 'ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED','rules' => 'required'],
				['field' => 'new_jersey[activity_engaed]','label' => 'SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED','rules' => 'required'],
				['field' => 'new_jersey[work_process_emp_engade]','label' => 'WORK PROCESS THE EMPLOYEE WAS ENGAGED IN WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED','rules' => 'required'],
				['field' => 'new_jersey[how_injury_health_condition]','label' => 'HOW INJURY OR ILLNESS/ABNORMAL HEALTH CONDITION OCCURRED. DESCRIBE THE SEQUENCE OF EVENTS AND INCLUDE ANY OBJECTS OR SUBSTANCES THAT DIRECTLY INJURED THE EMPLOYEE OR MADE THE       EMPLOYEE ILL','rules' => 'required'],
			];			
			$this->form_validation->set_rules($validation);
			if ($this->form_validation->run() == FALSE)
			{
				$this->data['errors'] = $this->form_validation->error_array();
				$this->load->view('insurance_claim/form',$this->data);
			}
			else
			{	
				$details = [
					'employee_email' => @$this->input->post('new_jersey')['employee_email'],
					'state_injury' => @$this->input->post('new_jersey')['state_injury'],
					'marital_status' => @$this->input->post('new_jersey')['marital_status'],
					'employment_status' => @$this->input->post('new_jersey')['employment_status'],
					'day_worked' => @$this->input->post('new_jersey')['day_worked'],
					'full_pay' => @$this->input->post('new_jersey')['full_pay'],
					'salary_continue' => @$this->input->post('new_jersey')['salary_continue'],
					'began_work' => @$this->input->post('new_jersey')['began_work'],
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
					$first_name = (isset(explode(' ',$full_name)[0]) != "")?explode(' ',$full_name)[0]:'';
					$middle_name = (isset(explode(' ',$full_name)[1]) != "")?explode(' ', $full_name)[1]:'';
					$last_name = (isset(explode(' ',$full_name)[2]) != "")?explode(' ', $full_name)[2]:'';
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
						'time_of_injury' => datetimepiker_to_database(@$this->input->post('new_jersey')['time_of_injury']),
						'work_stop_date' => datepiker_to_database(@$this->input->post('new_jersey')['work_stop_date']),
						'return_work_date' => datepiker_to_database(@$this->input->post('new_jersey')['return_work_date']),
						'job_title' => @$this->input->post('new_jersey')['job_title'],
						'details' => json_encode($details),
						'state_id' => 2,
					];
								
				$emp_id = $this->Insurance_claim->employee_insert($employee);				
				if ($emp_id != "") {
					$this->session->set_flashdata('success', 'Claim Request Submmited');
					$this->session->set_userdata('usertype','employee');
					$insert_id =  $this->db->insert_id();
					redirect('Insurance_claim/pdf_download_view/'.base64_encode($insert_id));					
					//redirect('','refresh');
				} else {
					$this->session->set_flashdata('error', 'Something Want Worng');
					redirect('','refresh');
				}							
			}
		}else{
			$this->load->view('insurance_claim/form',$this->data);
		}
	}
	public function maryland(){

		$this->data['state_type'] = "maryland";
		if ($this->input->post()) {
			
			$validation = [
				// Employee/Wage
				['field' => 'maryland[full_name]','label' => 'Employee Name','rules' => 'required'],
				['field' => 'maryland[discipline]','label' => 'Discipline','rules' => 'required'],
				['field' => 'maryland[facility_name]','label' => 'Facility Name','rules' => 'required'],
				['field' => 'maryland[gender]','label' => 'Gender','rules' => 'required'],
				['field' => 'maryland[job_title]','label' => 'Occupation / Job Title','rules' => 'required'],				
				//['field' => 'maryland[employment_status]','label' => 'Employment Status','rules' => 'required'],
				['field' => 'maryland[began_work]','label' => 'Time Employee Began Work','rules' => 'required'],
				['field' => 'maryland[date_of_injury]','label' => 'Date of Injury / Illness','rules' => 'required'],
				['field' => 'maryland[time_of_injury]','label' => 'Time of Occurrence','rules' => 'required'],
				['field' => 'maryland[work_stop_date]','label' => 'Last Work Date','rules' => 'required'],
				['field' => 'maryland[date_notified]','label' => 'Date Employer Notified','rules' => 'required'],
				['field' => 'maryland[type_of_injury]','label' => 'Type of Injury / Illness','rules' => 'required'],
				['field' => 'maryland[part_body_affected]','label' => 'Part of Body Affected','rules' => 'required'],
				['field' => 'maryland[location_where_accident]','label' => 'Department or Location Where Accident or Illness occurred','rules' => 'required'],
				['field' => 'maryland[equipment_meterials]','label' => 'ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED','rules' => 'required'],
				['field' => 'maryland[activity_engaed]','label' => 'SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED','rules' => 'required'],
				['field' => 'maryland[work_process_emp_engade]','label' => 'WORK PROCESS THE EMPLOYEE WAS ENGAGED IN WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED','rules' => 'required'],
				['field' => 'maryland[how_injury_health_condition]','label' => 'HOW INJURY OR ILLNESS/ABNORMAL HEALTH CONDITION OCCURRED. DESCRIBE THE SEQUENCE OF EVENTS AND INCLUDE ANY OBJECTS OR SUBSTANCES THAT DIRECTLY INJURED THE EMPLOYEE OR MADE THE       EMPLOYEE ILL','rules' => 'required'],
			];
			$this->form_validation->set_rules($validation);
			if ($this->form_validation->run() == FALSE){
				$this->data['errors'] = $this->form_validation->error_array();				
				$this->load->view('insurance_claim/form',$this->data);
			}
			else{	
				
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
					'began_work' => timepicker_to_database(@$this->input->post('maryland')['began_work']),
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
				$last_name = (isset(explode(' ',$full_name)[0]) != "")?explode(' ',$full_name)[0]:'';
				$first_name = (isset(explode(' ',$full_name)[1]) != "")?explode(' ', $full_name)[1]:'';
				$middle_name = (isset(explode(' ',$full_name)[2]) != "")?explode(' ', $full_name)[2]:'';
				
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
				];
				echo "<pre>";
								print_r ($details);
								echo "</pre>";	exit;			
				$emp_id = $this->Insurance_claim->employee_insert($employee);				
				if ($emp_id != "") {					
					$this->session->set_flashdata('success', 'Claim Request Submmited');
					$this->session->set_userdata('usertype','employee');
					$insert_id =  $this->db->insert_id();
					redirect('Insurance_claim/pdf_download_view/'.base64_encode($insert_id));					
					//redirect('','refresh');
				} else {					
					$this->session->set_flashdata('error', 'Something Want Worng');
					redirect('','refresh');
				}
			}		
		}else{
			$this->load->view('insurance_claim/form',$this->data);
		}
	}
	public function connecticut(){
		
		$this->data['state_type'] = "connecticut";
		if ($this->input->post()) {
			
			$validation = [				
				['field' => 'connecticut[last_name]','label' => 'Employee Last Name','rules' => 'required'],
				['field' => 'connecticut[first_name]','label' => 'Employee First Name','rules' => 'required'],
				['field' => 'connecticut[middle_name]','label' => 'Employee Middle Name','rules' => 'required'],
				['field' => 'connecticut[gender]','label' => 'Gender','rules' => 'required'],
				['field' => 'connecticut[discipline]','label' => 'Discipline','rules' => 'required'],
				['field' => 'connecticut[facility_name]','label' => 'Facility Name','rules' => 'required'],
				['field' => 'connecticut[state_injury]','label' => 'State Of Injury','rules' => 'required'],
				['field' => 'connecticut[job_title]','label' => 'Occupation / Job Title','rules' => 'required'],
				['field' => 'connecticut[date_of_injury]','label' => 'Date of Injury / Illness','rules' => 'required'],
				//['field' => 'connecticut[town_of_injury]','lable' => 'Town of Injury / Illness','rules' => 'required'],
				//['field' => 'connecticut[began_work]','label' => 'Time Employee Began Work','rules' => 'required'],
				['field' => 'connecticut[time_of_injury]','label' => 'Time of Occurrence','rules' => 'required'],
				['field' => 'connecticut[date_notified]','label' => 'Date Employer Notified','rules' => 'required'],
				['field' => 'connecticut[date_disability_began]','label' =>'Date Disability Began','rules' => 'required'],
				['field' => 'connecticut[work_stop_date]','label' => 'Last Work Date','rules' => 'required'],
			];

			$this->form_validation->set_rules($validation);
			if ($this->form_validation->run() == FALSE)
			{
				$this->data['errors'] = $this->form_validation->error_array();
				$this->load->view('insurance_claim/form',$this->data);
			}
			else
			{
				$details = [					
					'state_injury' => @$this->input->post('connecticut')['state_injury'],
					'date_of_injury' => @$this->input->post('connecticut')['date_of_injury'],
					'town_of_injury' => @$this->input->post('connecticut')['town_of_injury'],
					'began_work' => @$this->input->post('connecticut')['began_work'],
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
					'full_name' => @$this->input->post('connecticut')['first_name'].' '.@$this->input->post('connecticut')['middle_name'].' '.@$this->input->post('connecticut')['last_name'],
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
				];				
				$emp_id = $this->Insurance_claim->employee_insert($employee);				
				if ($emp_id != "") {
					$this->session->set_flashdata('success', 'Claim Request Submmited');
					$this->session->set_userdata('usertype','employee');
					$insert_id =  $this->db->insert_id();
					redirect('Insurance_claim/pdf_download_view/'.base64_encode($insert_id));
					//redirect('','refresh');
				} else {
					$this->session->set_flashdata('error', 'Something Want Worng');
					redirect('','refresh');
				}
			}
		}else{
			$this->load->view('insurance_claim/form',$this->data);
		}
	}
	public function pennsylvania(){	
		
		$this->data['state_type'] = "pennsylvania";
		if ($this->input->post()) {
			$validation = [				
				['field' => 'pennsylvania[last_name]','label' => 'Employee Last Name','rules' => 'required'],
				['field' => 'pennsylvania[first_name]','label' => 'Employee First Name','rules' => 'required'],
				['field' => 'pennsylvania[gender]','label' => 'Gender','rules' => 'required'],
				['field' => 'pennsylvania[marital_status]','label' => 'Marital Status','rules' => 'required'],
				['field' => 'pennsylvania[discipline]','label' => 'Discipline','rules' => 'required'],
				['field' => 'pennsylvania[facility_name]','label' => 'Facility Name','rules' => 'required'],
				// ['field' => 'pennsylvania[job_title]','label' => 'Occupation / Job Title','rules' => 'required'],
				['field' => 'pennsylvania[type_of_injury]','label'=> 'Type of Injury or Illness','rules' => 'required'],
				['field' => 'pennsylvania[part_body_affected]','label' => 'Part of Body Affected','rules' => 'required'],
				['field' => 'pennsylvania[were_safeguards]','lable' => 'Were safeguards or safety equipment provided?','rules' => 'required'],
				['field' => 'pennsylvania[where_used_safaguard]','label' => 'Were safeguards or safety equipment used?','rules' => 'required'],
				['field' => 'pennsylvania[how_injury_health_condition]','label' => 'Date Employer Notified','rules' => 'required'],
				['field' => 'pennsylvania[hospital_or_off_site_treatment_checkboxs][]','label' =>'Date Disability Began','rules' => 'required'],			
			];

			$this->form_validation->set_rules($validation);
			if ($this->form_validation->run() == FALSE)
			{
				$this->data['errors'] = $this->form_validation->error_array();
				$this->load->view('insurance_claim/form',$this->data);
			}
			else
			{
				$details = [
					'address' => @$this->input->post('pennsylvania')['address'],
					'city' => @$this->input->post('pennsylvania')['city'],
					'state' => @$this->input->post('pennsylvania')['state'],
					'zip_code' => @$this->input->post('pennsylvania')['zip_code'],
					'employee_phone_number' => @$this->input->post('pennsylvania')['employee_phone_number'],
					'marital_status' => @$this->input->post('pennsylvania')['marital_status'],
					'employment_status' => @$this->input->post('pennsylvania')['employment_status'],
					'date_of_injury' => @$this->input->post('pennsylvania')['date_of_injury'],
					'began_work' => @$this->input->post('pennsylvania')['began_work'],
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
				];
				$employee = [
					'first_name' => @$this->input->post('pennsylvania')['first_name'],
					'last_name' => @$this->input->post('pennsylvania')['last_name'],
					'full_name' => @$this->input->post('pennsylvania')['first_name'].' '.@$this->input->post('pennsylvania')['last_name'],
					'gender' => @$this->input->post('pennsylvania')['gender'],
					'discipline' => @$this->input->post('pennsylvania')['discipline'],
					'dob' => datepiker_to_database(@$this->input->post('pennsylvania')['dob']),
					'facility_name' => @$this->input->post('pennsylvania')['facility_name'],
					'address' => @$this->input->post('pennsylvania')['address'].' '.@$this->input->post('pennsylvania')['city'].' '.@$this->input->post('pennsylvania')['state'].' '.@$this->input->post('pennsylvania')['zip_code'],
					'date_hire' => datepiker_to_database(@$this->input->post('pennsylvania')['date_hire']),
					// 'job_title' => @$this->input->post('pennsylvania')['job_title'],
					// 'time_of_injury' => database_to_timepicker(@$this->input->post('pennsylvania')['time_of_injury']),
					'time_of_injury' => @$this->input->post('pennsylvania')['time_of_injury'],
					'work_stop_date' => datepiker_to_database(@$this->input->post('pennsylvania')['work_stop_date']),
					'return_work_date' => datepiker_to_database(@$this->input->post('pennsylvania')['return_work_date']),
					'details' => json_encode($details),
					'state_id' => 5,
				];
				$emp_id = $this->Insurance_claim->employee_insert($employee);
				if ($emp_id != "") {
					$this->session->set_flashdata('success', 'Claim Request Submmited');
					$this->session->set_userdata('usertype','employee');
					$insert_id =  $this->db->insert_id();
					redirect('Insurance_claim/pdf_download_view/'.base64_encode($insert_id));
					//redirect('','refresh');
				} else {
					$this->session->set_flashdata('error', 'Something Want Worng');
					redirect('','refresh');
				}
			}
		}else{
			$this->load->view('insurance_claim/form',$this->data);
		}
	}	

	public function pdf_download_view($id){
		$this->data['id']= base64_decode($id);
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
		}
		
		$this->load->view('insurance_claim/download_pdf',$this->data);
	}
}
/* End of file Insurance_claim.php */
/* Location: ./application/controllers/Insurance_claim.php */