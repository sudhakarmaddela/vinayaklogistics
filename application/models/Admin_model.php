<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Admin_model extends CI_model 
	{
		public function admin_login_check($username,$password)
		{
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where('contact_no',$username);
			$this->db->where('password',$password);
			$this->db->limit(1);
			$loginData = $this->db->get();
			$num = $loginData->num_rows();

			if ($num == 1) 
			{

				$row = $loginData->row_array();

				$ses_user = array(  "admin_id"               => $row['admin_id'],
									"admin_name"             => $row['name'],
									"admin_email"            => $row['email'],
									"user_logged_in"         => TRUE
				);
				$this->session->set_userdata($ses_user);
			}
			else 
			{
				$ses_user = array(  "admin_id"               => '',
									"admin_name"             => '',
									"admin_email"            => '',
									"user_logged_in"        => FALSE
				);
				$this->session->set_userdata($ses_user);
			}
		}
	}
