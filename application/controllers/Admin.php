<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_controller 
	{
		function __construct() 
	{
    	parent::__construct();
    	$this->load->model('admin_model');
	}

	public function index()
	{
		$this->load->view('adminlogin');
	}

	public function adminLoginCheck()
	{
		if($this->input->post('admin_name'))
		{
			$username = $this->input->post('admin_name');
			$password = md5($this->input->post('password'));

			$this->admin_model->admin_login_check($username,$password);
			if($this->session->userdata('user_logged_in') == TRUE)
			{
				//$token = $this->session->userdata('login_token');
				$this->session->set_flashdata('success','Login Successfully');
				redirect('dashboard');
			}
			else
			{
				$this->session->set_flashdata('error','Invalid Username and Password');
				redirect('admin');
			}
		}

		$this->load->view('adminlogin');
	}

	public function logout()
	{
		session_destroy();
		//$_SESSSION['login_token'] = '';
		redirect('admin');
	}
		
	}