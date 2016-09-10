<?php
/**
* 
*/
class Loginmodel extends CI_Model
{
	public function login_valid( $email, $password )
	{
		$q = $this->db->where(['email'=>$email, 'password'=>$password])
							->get('user_signin');

		if($q->num_rows()){

			return $q->row()->id;

		}else{

			return FALSE;
		}
	}
	
}