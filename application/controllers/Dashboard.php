<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends CI_controller 
	{
		function __construct() 
	{
    	parent::__construct();
    	if($this->session->userdata('user_logged_in')!= TRUE){
			redirect('admin');
		}
    	$this->load->model('dashboard_model');
	}

	public function index()
	{
		$arrdata['totalemployees'] = GetAllCommon('employee');
		$arrdata['totalcompanies'] = GetAllCommon('company');
		$this->load->view('dashboard', $arrdata);
	}

		
	}