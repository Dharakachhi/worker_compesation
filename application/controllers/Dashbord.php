<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord extends CI_Controller {
	public $data = [];

	public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('email')){
		    redirect('login/','refresh');
		}
    }

	public function index()
	{
		$this->load->view('admin/dashbord/header', $this->data, FALSE);
		$this->load->view('admin/dashbord/sidebar', $this->data, FALSE);
		$this->load->view('admin/dashbord/dashbord', $this->data, FALSE);
		$this->load->view('admin/dashbord/footer', $this->data, FALSE);
	}

}

/* End of file Dashbord.php */
/* Location: ./application/controllers/Dashbord.php */