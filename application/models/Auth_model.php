<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function get_country()
	{
		$query = $this->db->select('id,name')->from('state')->get();
		return $query->result_array();
	}

	public function check_email_exist($email)
	{
		$check = $this->db->select('id')->from('users')->where('email',$email)->where('role_id','2')->get()->num_rows();
		if ($check == 1) {
			return true;
		}else{
			return false;
		}			
	}
	public function login_attempt($email,$pass){
		$query = $this->db->select('u.id,u.first_name,u.last_name,u.middle_name,u.email,u.gender,u.phone_no,r.name as role')
						  ->from('users u')
						  ->where('email',$email)
						  ->where('password',$pass)
						  ->join('role r','u.role_id = r.id')
						  ->join('state s','u.state_id = s.id')
						  ->get();

		if ($query->num_rows() == 1) {
			return array('status' => TRUE,'data' => $query->result_array());
		}else{
			return array('status' => FALSE);
		}
	}

}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */