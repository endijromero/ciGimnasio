<?php

/**
* 
*/
class Dashboard extends MY_Controller
{
	
	public function index()
	{
		if($this->session->userdata('user_id')){

			$this->load->view('admin/dashboard');
		}else{
			return redirect('admin');
		}
	}

	public function addmember()
	{
		if($this->session->userdata('user_id')){

			$this->load->view('admin/add_member');
		}else{
			return redirect('admin');
		}	
	}

	public function add_user_detail()
	{
		$data = $this->input->post();
		unset($data['submit']);

		$this->load->model('dashboardmodel', 'dbmodel');
		$this->dbmodel->user_detail($data);
	}

	public function allmember()
	{
		if($this->session->userdata('user_id')){

			$this->load->model('dashboardmodel', 'dbmodel');
			$allmembers = $this->dbmodel->all_member_list();

			$this->load->view('admin/all_member', ['allmembers'=>$allmembers]);
		}else{
			return redirect('admin');
		}
	}
}