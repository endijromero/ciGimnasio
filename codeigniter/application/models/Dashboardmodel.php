<?php
/**
* 
*/
class Dashboardmodel extends CI_Model
{
	
	public function user_detail($data){

		return $this->db->insert('user_detail', $data);
	}

	public function all_member_list()
	{
		$q = $this->db->select(['dt_first_name','dt_gender'])
						->from('user_detail')
						->get();

		return $q->result(); 
	}
}