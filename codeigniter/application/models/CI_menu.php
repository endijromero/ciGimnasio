<?php
/**
* 
*/
class CI_menu extends CI_Model
{
	
	function __construct(argument)
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
		$this->load->helper('url');
		$this->load->model(array('CI_auth'));
	}
}