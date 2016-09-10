<?php

/**
* 
*/
class Signinmodel extends CI_Model{
	
	public function admin_signin($data)
	{
		// print_r($data); exit;
		return $this->db->insert('user_signin', $data);
	}
}