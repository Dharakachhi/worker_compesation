<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insurance_claim_model extends CI_Model {

	public function employee_insert($data)
	{
		$this->db->insert('employees',$data);
		 // echo $this->db->last_query();exit;
		return $this->db->insert_id();
	}
	public function new_york_insert($data)
	{
		$this->db->insert('new_york',$data);
		// echo $this->db->last_query(),'</br>';
		return $this->db->insert_id();
	}
	public function new_jersey_insert($data)
	{
		$this->db->insert('new_jersey',$data);
		// echo $this->db->last_query(),'</br>';
		return $this->db->insert_id();
	}

}

/* End of file Insurance_claim_model.php */
/* Location: ./application/models/Insurance_claim_model.php */