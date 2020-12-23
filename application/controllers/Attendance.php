<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Attendance extends CI_controller 
	{
		function __construct() 
		{
			parent::__construct();
			if($this->session->userdata('user_logged_in')!= TRUE){
				redirect('admin');
			}
			$this->load->model('attendance_model');
		}
		public function index() 
		{
			$data['attendanceview'] = $this->attendance_model->get_all_data();
			$data['vehicleview'] = GetAllCommon('vehicle');
			$this->load->view('attendancelist', $data);
		}

		public function filterattendance()
		{
			$attdate = $_POST['selectdate'];
			$vehid = $_POST['cmbVehicle'];

			$data['filterdata'] = $this->attendance_model->get_filter_data($attdate,$vehid);
			$data['attendanceview'] = $this->attendance_model->get_all_data();
			$data['vehicleview'] = GetAllCommon('vehicle');
			//echo "<pre>"; print_r($data); die();
			$this->load->view('attendancelist', $data);
		}
		
		// add attendance
		public function attendance()
		{
			//print_r($this->input->post('employee_name')); die();
			$this->load->view('attendance');

			$company_id = $this->input->post( 'company_id' );
   			$admin_id = $this->session->userdata('admin_id');
   			$attendance_date = $this->input->post( 'attendance_date' );
   			$equipment_description = $this->input->post( 'equipment_description' );
   			$vehicle_id = $this->input->post( 'vehicle_id' );
   			$employee_id = $this->input->post( 'employee_id' );
   			$start_date_time = $this->input->post( 'start_date_time' );
   			$end_date_time = $this->input->post( 'end_date_time' );
   			$net_hours = $this->input->post( 'net_hours' );
   			$extra_hours = $this->input->post( 'extra_hours' );
   			$break_down = $this->input->post( 'break_down' );
   			$start_km = $this->input->post( 'start_km' );
   			$end_km = $this->input->post( 'end_km' );
   			$type = $this->input->post( 'type' );
   			$diesel_in_litre = $this->input->post( 'diesel_in_litre' );
   			$remark = $this->input->post( 'remark' );
   			$date_added = $this->input->post( 'date_added' );
   			$date_modified = $this->input->post( 'date_modified' );

   			if ( ! empty($company_id) && ! empty($admin_id) )
   			{
   				 foreach ( $company_id as $key => $value ) 
   				 {
   				 	$data['company_id'] = $value;
		            $data['admin_id'] = $admin_id[$key];
		            $data['attendance_date'] = $attendance_date[$key];
		            $data['equipment_description'] = $equipment_description[$key];
		            $data['vehicle_id'] = $vehicle_id[$key];
		            $data['employee_id'] = $employee_id[$key];
		            $data['start_date_time'] = $start_date_time[$key];
		            $data['end_date_time'] = $end_date_time[$key];
		            $data['net_hours'] = $net_hours[$key];
		            $data['extra_hours'] = $extra_hours[$key];
		            $data['break_down'] = $break_down[$key];
		            $data['start_km'] = $start_km[$key];
		            $data['end_km'] = $end_km[$key];
		            $data['type'] = $type[$key];
		            $data['diesel_in_litre'] = $diesel_in_litre[$key];
		            $data['remark'] = $remark[$key];
		            $data['date_added'] = $date_added[$key];
		            $data['date_modified'] = $date_modified[$key];
		            $this->attendance_model->attendance($data);
		            redirect(base_url().'attendance');
   				 }
   			}
		}

		// edit attendance
		public function editattendance($attendanceId)
		{
			$attendance = $this->attendance_model->getattendance($attendanceId);
			$data = array();
			$data['attendance'] = $attendance;

			$this->load->library('form_validation');
			$this->form_validation->set_rules('company_id', 'company_id', 'required|min_length[5]|max_length[10]');

			if ($this->form_validation->run() == FALSE) {
				
				$this->load->view('editattendance', $data);
			}else {
				
				$fromArray = array();
				$fromArray['company_id'] = $this->input->post('company_id');
				$fromArray['admin_id'] = $this->session->userdata('admin_id');
				$fromArray['attendance_date'] = $this->input->post('attendance_date');
				$fromArray['equipment_description'] = $this->input->post('equipment_description');
				$fromArray['vehicle_id'] = $this->input->post('vehicle_id');
				$fromArray['employee_id'] = $this->input->post('employee_id');
				$fromArray['start_date_time'] = $this->input->post('start_date_time');
				$fromArray['end_date_time'] = $this->input->post('end_date_time');
				$fromArray['net_hours'] = $this->input->post('net_hours');
				$fromArray['extra_hours'] = $this->input->post('extra_hours');
				$fromArray['break_down'] = $this->input->post('break_down');
				$fromArray['start_km'] = $this->input->post('start_km');
				$fromArray['end_km'] = $this->input->post('end_km');
				$fromArray['type'] = $this->input->post('type');
				$fromArray['diesel_in_litre'] = $this->input->post('diesel_in_litre');
				$fromArray['remark'] = $this->input->post('remark');
				$fromArray['date_added'] = $this->input->post('date_added');
				$fromArray['date_modified'] = $this->input->post('date_modified');
				$this->attendance_model->updateattendance($attendanceId, $fromArray);
				redirect(base_url().'attendance');
			}

		}

		// delete attendance
		public function deleteatten($attendanceId)
		{
			$user = $this->attendance_model->deleteattendance($attendanceId);
			redirect(base_url().'attendance');
		}

	}