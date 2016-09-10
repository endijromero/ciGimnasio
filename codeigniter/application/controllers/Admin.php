<?php

/**
* 
*/
class Admin extends MY_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library(['session']);
	}

	public function index()
	{
		$this->load->model(array ('CI_auth',  'CI_menu'));

		$data = array(
			'menu_top' => $this->CI_menu->menu_top(),
		);

		$this->load->view('', $data);
	}

	

	public function logeout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('admin');
	}

}