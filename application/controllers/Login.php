<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public $data;

	public function __construct(){
        parent::__construct();        
        $this->load->model('Auth_model', 'auth');
    }

    // login function
	public function index()
	{		
		if($this->session->userdata('email')){
		    redirect('dashbord/','refresh');
		}
		if ($this->input->post()) {
			$validation = [
							[ 'field' => 'email','label' => 'Email','rules' => 'trim|required|valid_email'],
							[ 'field' => 'password','label' => 'Password','rules' => 'required|min_length[8]|max_length[16]'],
						];
			$this->form_validation->set_rules($validation);
			
			if ($this->form_validation->run() == FALSE) {
				$this->data['errors'] = $this->form_validation->error_array();				
				$this->data['country_list'] = $this->auth->get_country();
				$this->load->view('login_page/login',$this->data,FALSE);
			}else{
				$email = $this->input->post('email');
				$pass = md5($this->input->post('password'));
				$check_email = $this->auth->check_email_exist($email);

				if ($check_email == true) {
					$data = $this->auth->login_attempt($email,$pass);

					if ($data['status'] == TRUE) {
						$this->session->set_userdata($data['data'][0]);
						redirect('dashbord','refresh');
					}else{
						$this->session->set_flashdata('error', 'Please Enter Valid Password');
						$this->data['country_list'] = $this->auth->get_country();
						$this->load->view('login_page/login',$this->data,FALSE);
					}					
				}else{
					$this->session->set_flashdata('error', 'Please Check Your Email Id');
					$this->data['country_list'] = $this->auth->get_country();
					$this->load->view('login_page/login',$this->data,FALSE);
				}
				
			}
		}else{
			$this->data['country_list'] = $this->auth->get_country();		
			$this->load->view('login_page/login',$this->data,FALSE);
		}		
	}

	// logout function
	public function logout()
	{		
		$this->session->sess_destroy();
		redirect('login/','refresh');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */