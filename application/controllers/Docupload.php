<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Docupload extends CI_controller 
	{
		function __construct() 
		{
			parent::__construct();
			if($this->session->userdata('user_logged_in')!= TRUE){
				redirect('admin');
			}
			$this->load->model('docupload_model');
		}

		public function index() 
		{
		}
	}