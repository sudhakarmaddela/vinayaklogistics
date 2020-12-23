<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends CI_controller 
	{
		function __construct() 
		{
			parent::__construct();
			if($this->session->userdata('user_logged_in')!= TRUE){
				redirect('admin');
			}
			$this->load->model('user_model');
		}
		public function index() 
		{
			//echo 'arjun';
		}
		
		public function addemployee() 
		{

			$this->load->model('User_model');

			$this->load->library('form_validation');
			$this->form_validation->set_rules('employee_name', 'name', 'required|min_length[5]|max_length[12]');

			if ($this->form_validation->run() == FALSE) 
			{
	
				$this->load->view('addemployee');

			} else 
			{
				$totalemp = $this->User_model->employeecount();
				$toalempinc = $totalemp[0]['employee_id'] + 1;
				if (!is_dir('public/upload/employee_'.$toalempinc))
			    {
			        mkdir('public/upload/employee_'.$toalempinc, 0777, true);
			    }
				// Signature Image
				if ($_FILES['signature']['name'] != '')
				{
					$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/vinayaklogistics/public/upload/employee_'.$toalempinc;
					$config['allowed_types'] = 'gif|jpg|jpeg|png';
					$config['max_size']    = '10240';
					//echo"<pre>"; print_r($config); die;
					$this->load->library('upload');
					$this->upload->initialize($config);

					if (!$this->upload->do_upload('signature'))
					{
						// case - failure
						$upload_error = array('error' => $this->upload->display_errors());
						print_r($upload_error);
					} 
					else
					{
						$fromArray["signature"] = $this->upload->file_name;

						$data = $this->upload->data();
						$upload_data = $this->upload->data();
						
						$this->load->library('image_lib',$config);
						$this->image_lib->resize(); 
					}	
				}
				// Right Thumb Image
				if ($_FILES['right_thumb']['name'] != '')
				{
					$config2['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/vinayaklogistics/public/upload/employee_'.$toalempinc;
					$config2['allowed_types'] = 'gif|jpg|jpeg|png';
					$config2['max_size']    = '10240';
					//echo"<pre>"; print_r($config); die;
					$this->load->library('upload');
					$this->upload->initialize($config2);

					if (!$this->upload->do_upload('right_thumb'))
					{
						// case - failure
						$upload_error = array('error' => $this->upload->display_errors());
						print_r($upload_error);
					} 
					else
					{
						$fromArray["right_thumb"] = $this->upload->file_name;

						$data = $this->upload->data();
						$upload_data = $this->upload->data();
						
						$this->load->library('image_lib',$config2);
						$this->image_lib->resize(); 
					   
					}	
				}
				// left Thumb Image
				if ($_FILES['left_thumb']['name'] != '')
				{
					$config3['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/vinayaklogistics/public/upload/employee_'.$toalempinc;
					$config3['allowed_types'] = 'gif|jpg|jpeg|png';
					$config3['max_size']    = '10240';
					//echo"<pre>"; print_r($config); die;
					$this->load->library('upload');
					$this->upload->initialize($config3);

					if (!$this->upload->do_upload('left_thumb'))
					{
						// case - failure
						$upload_error = array('error' => $this->upload->display_errors());
						print_r($upload_error);
					} 
					else
					{
						$fromArray["left_thumb"] = $this->upload->file_name;

						$data = $this->upload->data();
						$upload_data = $this->upload->data();
						
						$this->load->library('image_lib',$config3);
						$this->image_lib->resize(); 
					   
					}	
				}
				// left Thumb Image
				if ($_FILES['photograph']['name'] != '')
				{
					$config4['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/vinayaklogistics/public/upload/employee_'.$toalempinc;
					$config4['allowed_types'] = 'gif|jpg|jpeg|png';
					$config4['max_size']    = '10240';
					//echo"<pre>"; print_r($config4); die;
					$this->load->library('upload');
					$this->upload->initialize($config4);

					if (!$this->upload->do_upload('photograph'))
					{
						// case - failure
						$upload_error = array('error' => $this->upload->display_errors());
						print_r($upload_error);
					} 
					else
					{
						$fromArray["photograph"] = $this->upload->file_name;

						$data = $this->upload->data();
						$upload_data = $this->upload->data();
						
						$this->load->library('image_lib',$config4);
						$this->image_lib->resize(); 
					   
					}	
				}
			
				$fromArray = array (

				'employee_name' => $this->input->post('employee_name'),
				'employee_surname' => $this->input->post('employee_surname'),
				'employee_middle_name' => $this->input->post('employee_middle_name'),
				'birthdate' => $this->input->post('birthdate'),
				'gender' => $this->input->post('gender'),
				'mobileno' => $this->input->post('mobileno'),
				'education_qualification' => $this->input->post('education_qualification'),
				'identification_marks' => $this->input->post('identification_marks'),
				'handicap' => $this->input->post('handicap'),
				'designation' => $this->input->post('designation'),
				'aadhar_no' => $this->input->post('aadhar_no'),
				'bank_account_no' => $this->input->post('bank_account_no'),
				'bank_name' => $this->input->post('bank_name'),
				'branch' => $this->input->post('branch'),
				'ifsc_code' => $this->input->post('ifsc_code'),
				'nature_of_work' => $this->input->post('nature_of_work'),
				'area' => $this->input->post('area'),
				'department' => $this->input->post('department'),
				'department_code' => $this->input->post('department_code'),
				'attendance_gate' => $this->input->post('attendance_gate'),
				'permission_gate' => $this->input->post('permission_gate'),
				'contractor_address' => $this->input->post('contractor_address'),
				'contractor_mobileno' => $this->input->post('contractor_mobileno'),
				'contractors_supervisor_name' => $this->input->post('contractors_supervisor_name'),
				'contractors_supervisor_address' => $this->input->post('contractors_supervisor_address'),
				'contractors_supervisor_mobileno' => $this->input->post('contractors_supervisor_mobileno'),
				'present_address_houseno' => $this->input->post('present_address_houseno'),
				'present_address_street' => $this->input->post('present_address_street'),
				'present_address_town_village' => $this->input->post('present_address_town_village'),
				'present_address_pincode' => $this->input->post('present_address_pincode'),
				'present_address_police_station' => $this->input->post('present_address_police_station'),
				'present_address_district' => $this->input->post('present_address_district'),
				'present_address_state' => $this->input->post('present_address_state'),
				'permanent_address_houseno' => $this->input->post('permanent_address_houseno'),
				'permanent_address_street' => $this->input->post('permanent_address_street'),
				'permanent_address_town_village' => $this->input->post('permanent_address_town_village'),
				'permanent_address_pincode' => $this->input->post('permanent_address_pincode'),
				'permanent_address_police_station' => $this->input->post('permanent_address_police_station'),
				'permanent_address_district' => $this->input->post('permanent_address_district'),
				'permanent_address_state' => $this->input->post('permanent_address_state'),
				'domicile_village_town' => $this->input->post('domicile_village_town'),
				'no_of_years_residing_in_gujarat' => $this->input->post('no_of_years_residing_in_gujarat'),
				'industries_worked_earlier_in_gujarat' => $this->input->post('industries_worked_earlier_in_gujarat'),
				'last_company_worked' => $this->input->post('last_company_worked'),
				'last_company_address' => $this->input->post('last_company_address'),
				'immediate_person' => $this->input->post('immediate_person'),
				'immediate_person_contactno' => $this->input->post('immediate_person_contactno'),
				'signature' => $this->upload->file_name,
				'right_thumb' => $this->upload->file_name,
				'left_thumb' => $this->upload->file_name,
				'photograph' => $this->upload->file_name,
				'curreent_vehicle_id' => $this->input->post('curreent_vehicle_id'),
				'is_active' => $this->input->post('is_active'),
				'date_added' => $this->input->post('date_added'),
				'date_modified' => $this->input->post('date_modified'),
				);

				$this->User_model->addemployee($fromArray);
				$this->session->set_flashdata('Success', 'Record Added Sucessfully.');
				redirect(base_url().'user/addemployee');
			}
		}
		
		public function employeelist()	
		{
			$this->load->model('User_model');
			$users = $this->User_model->employeelist();
			$data = array();
			$data['users'] = $users;
			$this->load->view('employeelist', $data);
		}
		
		public function edit($userId)
		{
			$this->load->model('User_model');
			$user = $this->User_model->getUser($userId);
			//echo "<pre>"; print_r($user); die();
			$data = array();
			$data['user'] = $user;

			$this->load->library('form_validation');
			$this->form_validation->set_rules('employee_name', 'employee_name', 'required|min_length[5]|max_length[12]');

			if ($this->form_validation->run() == FALSE) 
			{
				$this->load->view('edit',$data);
			}
			else
			{
				$fromArray = array();
				$fromArray['employee_name'] = $this->input->post('employee_name');
				$fromArray['employee_surname'] = $this->input->post('employee_surname');
				$fromArray['employee_middle_name'] = $this->input->post('employee_middle_name');
				$fromArray['birthdate'] = $this->input->post('birthdate');
				$fromArray['gender'] = $this->input->post('gender');
				$fromArray['mobileno'] = $this->input->post('mobileno');
				$fromArray['education_qualification'] = $this->input->post('education_qualification');
				$fromArray['identification_marks'] = $this->input->post('identification_marks');
				$fromArray['handicap'] = $this->input->post('handicap');
				$fromArray['designation'] = $this->input->post('designation');
				$fromArray['aadhar_no'] = $this->input->post('aadhar_no');
				$fromArray['bank_account_no'] = $this->input->post('bank_account_no');
				$fromArray['bank_name'] = $this->input->post('bank_name');
				$fromArray['branch'] = $this->input->post('branch');
				$fromArray['ifsc_code'] = $this->input->post('ifsc_code');
				$fromArray['nature_of_work'] = $this->input->post('nature_of_work');
				$fromArray['area'] = $this->input->post('area');
				$fromArray['department'] = $this->input->post('department');
				$fromArray['department_code'] = $this->input->post('department_code');
				$fromArray['attendance_gate'] = $this->input->post('attendance_gate');
				$fromArray['permission_gate'] = $this->input->post('permission_gate');
				$fromArray['contractor_address'] = $this->input->post('contractor_address');
				$fromArray['contractor_mobileno'] = $this->input->post('contractor_mobileno');
				$fromArray['contractors_supervisor_name'] = $this->input->post('contractors_supervisor_name');
				$fromArray['contractors_supervisor_address'] = $this->input->post('contractors_supervisor_address');
				$fromArray['contractors_supervisor_mobileno'] = $this->input->post('contractors_supervisor_mobileno');
				$fromArray['present_address_houseno'] = $this->input->post('present_address_houseno');
				$fromArray['present_address_street'] = $this->input->post('present_address_street');
				$fromArray['present_address_town_village'] = $this->input->post('present_address_town_village');
				$fromArray['present_address_pincode'] = $this->input->post('present_address_pincode');
				$fromArray['present_address_police_station'] = $this->input->post('present_address_police_station');
				$fromArray['present_address_district'] = $this->input->post('present_address_district');
				$fromArray['present_address_state'] = $this->input->post('present_address_state');
				$fromArray['permanent_address_houseno'] = $this->input->post('permanent_address_houseno');
				$fromArray['permanent_address_street'] = $this->input->post('permanent_address_street');
				$fromArray['permanent_address_town_village'] = $this->input->post('permanent_address_town_village');
				$fromArray['permanent_address_pincode'] = $this->input->post('permanent_address_pincode');
				$fromArray['permanent_address_police_station'] = $this->input->post('permanent_address_police_station');
				$fromArray['permanent_address_district'] = $this->input->post('permanent_address_district');
				$fromArray['permanent_address_state'] = $this->input->post('permanent_address_state');
				$fromArray['domicile_village_town'] = $this->input->post('domicile_village_town');
				$fromArray['no_of_years_residing_in_gujarat'] = $this->input->post('no_of_years_residing_in_gujarat');
				$fromArray['industries_worked_earlier_in_gujarat'] = $this->input->post('industries_worked_earlier_in_gujarat');
				$fromArray['last_company_worked'] = $this->input->post('last_company_worked');
				$fromArray['last_company_address'] = $this->input->post('last_company_address');
				$fromArray['immediate_person'] = $this->input->post('immediate_person');
				$fromArray['immediate_person_contactno'] = $this->input->post('immediate_person_contactno');
				$fromArray['signature'] = $this->input->post('signature');
				$fromArray['right_thumb'] = $this->input->post('right_thumb');
				$fromArray['left_thumb'] = $this->input->post('left_thumb');
				$fromArray['photograph'] = $this->input->post('photograph');
				$fromArray['curreent_vehicle_id'] = $this->input->post('curreent_vehicle_id');
				$fromArray['is_active'] = $this->input->post('is_active');
				$fromArray['date_added'] = $this->input->post('date_added');
				$fromArray['date_modified'] = $this->input->post('date_modified');
				$this->User_model->updateUser($userId, $fromArray);
				$this->session->set_flashdata('Sucess', 'Record Updated Sucessfully.');
				redirect(base_url().'user/employeelist');
			}
		}

		public function delete($userId)
		{
			$this->load->model('User_model');
			$user = $this->User_model->deleteUser($userId);
			if (empty($users)) {
				$this->session->set_flashdata('Failure', 'Record Not Found.');
				redirect(base_url().'user/employeelist');
			}
			else {
				$this->User_model->deleteUser($userId);
				$this->session->set_flashdata('Success', 'Record Deleted.');
				redirect(base_url().'user/employeelist');
			}
		}

		// View Employee
		public function empview($userId)
		{
			$this->load->model('User_model');
			$data['user'] = $this->User_model->employeeview($userId);
			$this->load->view('viewemployee', $data);
		}


		// https://stackoverflow.com/questions/24340898/insert-array-values-with-foreach-using-codeigniter
		// 
		

		/*public function attendancelist()
		{
			$this->load->model('User_model');
			$users = $this->User_model->attendancelist();
			$data = array();
			$data['users'] = $users;
			$this->load->view('attendancelist', $data);
		}*/

		public function addcompany()
		{
			$this->load->model('User_model');

			$this->load->library('form_validation');
			$this->form_validation->set_rules('company_code', 'company_code', 'required|min_length[5]|max_length[10]');

			if ($this->form_validation->run() == FALSE) 
			{
	
				$this->load->view('addcompany');

			} else 
			{

				$fromArray = array (

				'company_code' => $this->input->post('company_code'),
				'company_name' => $this->input->post('company_name'),
				'company_address' => $this->input->post('company_address'),
				'state' => $this->input->post('state'),
				'gstin' => $this->input->post('gstin'),
				'pancard' => $this->input->post('pancard'),
				'contact_person' => $this->input->post('contact_person'),
				'contact_number' => $this->input->post('contact_number'),
				'is_active' => $this->input->post('is_active'),
				'date_added' => $this->input->post('date_added'),
				'date_modified' => $this->input->post('date_modified'),
				);

				$this->User_model->addcompany($fromArray);
				redirect(base_url().'user/companylist');
			}
		}

		public function companylist()
		{
			$this->load->model('User_model');
			$users = $this->User_model->companylist();
			$data = array();
			$data['users'] = $users;
			$this->load->view('companylist', $data);
		}

		public function editcompany($companyId)
		{
			$this->load->model('User_model');
			$company = $this->User_model->getcompany($companyId);
			$data = array();
			$data['company'] = $company;

			$this->load->library('form_validation');
			$this->form_validation->set_rules('company_code', 'company_code', 'required|min_length[5]|max_length[20]');

			if ($this->form_validation->run() == FALSE) {

				$this->load->view('editcompany', $data);
				
			} else
			{
				$fromArray = array();
				$fromArray['company_code'] = $this->input->post('company_code');
				$fromArray['company_name'] = $this->input->post('company_name');
				$fromArray['company_address'] = $this->input->post('company_address');
				$fromArray['state'] = $this->input->post('state');
				$fromArray['gstin'] = $this->input->post('gstin');
				$fromArray['pancard'] = $this->input->post('pancard');
				$fromArray['contact_person'] = $this->input->post('contact_person');
				$fromArray['contact_number'] = $this->input->post('contact_number');
				$fromArray['is_active'] = $this->input->post('is_active');
				$fromArray['date_added'] = $this->input->post('date_added');
				$fromArray['date_modified'] = $this->input->post('date_modified');
				$this->User_model->updatecompany($companyId, $fromArray);
				redirect(base_url().'user/companylist');
			}
		}
		public function deletecompany($companyId)
		{
			$this->load->model('User_model');
			$user = $this->User_model->deletecompany($companyId);
			redirect(base_url().'user/companylist');
		}

		public function addvehicle()
		{
			$this->load->model('User_model');

			$this->load->library('form_validation');
			$this->form_validation->set_rules('vehicle_name', 'Vehicle Name', 'required|min_length[5]|max_length[20]');
			if ($this->form_validation->run() == FALSE)
			{	
				$this->load->view('addvehicle');
			}else
			{
				$fromArray = array(
					'vehicle_name' => $this->input->post('vehicle_name'),
					'vehicle_registration_number' => $this->input->post('vehicle_registration_number'),
					'vehicle_engine_no' => $this->input->post('vehicle_engine_no'),
					'is_active' => $this->input->post('is_active'),
				);
					$this->User_model->addvehicle($fromArray);
					redirect(base_url().'user/addvehicle');
			}
		}

		public function vehiclelist()
		{
			$this->load->model('User_model');
			$users = $this->User_model->vehiclelist();
			$data[] = array();
			$data['users'] = $users;
			$this->load->view('vehiclelist', $data);
		}

		public function editvehicle($vehicleId)
		{
			$this->load->model('User_model');
			$vehicle = $this->User_model->getvehicle($vehicleId);
			$data = array();
			$data['vehicle'] = $vehicle;

			$this->load->library('form_validation');
			$this->form_validation->set_rules('vehicle_name', 'vehicle_name', 'required|min_length[5]|max_length[20]');
			

			if ($this->form_validation->run() == FALSE) {

				$this->load->view('editvehicle', $data);

			}else
			{
				$fromArray = array();
					$fromArray['vehicle_name'] = $this->input->post('vehicle_name');
					$fromArray['vehicle_registration_number'] = $this->input->post('vehicle_registration_number');
					$fromArray['vehicle_engine_no'] = $this->input->post('vehicle_engine_no');
					$fromArray['is_active'] = $this->input->post('is_active');
				
					$this->User_model->updatevehicle($vehicleId, $fromArray);
					redirect(base_url().'user/vehiclelist');
			}
		}

		public function deletevehicle($vehicleId)
		{
			$this->load->model('User_model');
			$user = $this->User_model->deletevehicle($vehicleId);
			redirect(base_url().'user/vehiclelist');
		}

		public function vehiclehistory()
		{
			$this->load->model('User_model');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('vehicle_id', 'Vehicle Id', 'required|min_length[5]|max_length[10]');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('vehiclehistory');
			}else
			{
				$fromArray = array(
					'vehicle_id' => $this->input->post('vehicle_id'),
					'employee_id' => $this->input->post('employee_id'),
					'remark' => $this->input->post('remark'),
					'date_added' => $this->input->post('date_added'),
					'date_modified' => $this->input->post('date_modified'),
				);
					$this->User_model->vehiclehistory($fromArray);
					redirect(base_url().'user/vehiclehistory');
			}
		}

		public function addadmin()
		{
			$this->load->model('User_model');

			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Admin Name', 'required|min_length[3]|max_length[10]');

			if ( $this->form_validation->run() == FALSE ) {

				$this->load->view('addadmin');

			}else
			{
				$fromArray = array(

					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password'),
					'contact_no' => $this->input->post('contact_no'),
					'role_id' => $this->input->post('role_id'),
					'is_active' => $this->input->post('is_active'),
					'date_added' => $this->input->post('date_added'),
					'date_modified' => $this->input->post('date_modified'),
				);
					$this->User_model->addadmin($fromArray);
					redirect(base_url().'user/addadmin');
			}
		}

		public function adminlist()
		{
			$this->load->model('User_model');
			$users = $this->User_model->adminlist();
			$data = array();
			$data['users'] = $users;
			$this->load->view('adminlist', $data);
		}

		public function editadmin($adminId)
		{
			$this->load->model('User_model');
			$adminget = $this->User_model->getadmin($adminId);
			$data = array();
			$data['adminget'] = $adminget;

			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Admin Name', 'required|min_length[3]|max_length[20]');

			if ($this->form_validation->run() == FALSE) {
				
				$this->load->view('editadmin', $data);

			}else
			{
				$fromArray = array();
				$fromArray['name'] = $this->input->post('name');
				$fromArray['email'] = $this->input->post('email');
				$fromArray['password'] = $this->input->post('password');
				$fromArray['contact_no'] = $this->input->post('contact_no');
				$fromArray['role_id'] = $this->input->post('role_id');
				$fromArray['is_active'] = $this->input->post('is_active');
				$fromArray['date_added'] = $this->input->post('date_added');
				$fromArray['date_modified'] = $this->input->post('date_modified');

				$this->User_model->updateadmin($adminId, $fromArray);
				redirect(base_url().'user/adminlist');
			}
		}

		public function deleteadmin($adminId)
		{
			$this->load->model('User_model');
			$users = $this->User_model->deleteadmin($adminId);
			redirect(base_url().'user/adminlist');
		}

		public function addrole()
		{
			$this->load->model('User_model');

			$this->load->library('form_validation');
			$this->form_validation->set_rules('role_name', 'Role Name', 'required|min_length[3]|max_length[10]');

			if ($this->form_validation->run() == FALSE) {
				
				$this->load->view('addrole');
			}else
			{
				$fromArray = array(
					'role_name' => $this->input->post('role_name'),
				);
				$this->User_model->addrole($fromArray);
				redirect(base_url().'user/addrole');
			}
		}

		public function rolelist()
		{
			$this->load->model('User_model');
			$users = $this->User_model->rolelist();
			$data = array();
			$data['users'] = $users;
			$this->load->view('rolelist', $data);
		}

		public function editrole($roleId)
		{
			$this->load->model('User_model');
			$adminrole = $this->User_model->getrole($roleId);
			$data = array();
			$data['adminrole'] = $adminrole;

			$this->load->library('form_validation');
			$this->form_validation->set_rules('role_name', 'Role Name', 'required|min_length[3]|max_length[20]');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('editrole', $data);
			} else
			{
				$fromArray = array();
				$fromArray['role_name'] = $this->input->post('role_name');
				
				$this->User_model->updaterole($roleId, $fromArray);
				redirect(base_url().'user/rolelist');
			}
		}
		
		public function deleterole($roleId)
		{
			$this->load->model('User_model');
			$users = $this->User_model->deleterole($roleId);
			redirect(base_url().'user/rolelist');
		}

		public function adddocument()
		{
			$eid = $this->session->userdata('emp_id');
			$data['doclist'] = $this->user_model->getdocument();
			if ($this->input->post('save')) {
			
			$no=0;
				for($i=0;$i<count($_POST['txtDocumentName']);$i++)
				{

					$target_dir = $_SERVER['DOCUMENT_ROOT'].'/vinayaklogistics/public/upload/employee_'.$eid.'/';
		 			$file = $_FILES['txtDocImg']['name'][$i];
	 				$path = pathinfo($file);
	 				$filename = $path['filename'];
	 				$ext = $path['extension'];
	 				$temp_name = $_FILES['txtDocImg']['tmp_name'][$i];
	 				$path_filename_ext = $target_dir.$filename.".".$ext;
	 				move_uploaded_file($temp_name,$path_filename_ext);

					$data_invoice_detail = array(
						'employee_id' => $eid,
						'document_id' => $_POST['hdnDocId'][$i],
						'document_name' => $_POST['txtDocumentName'][$i],
						'document_number' => $_POST['txtDocumentNumber'][$i],
						'document_image' => $filename.".".$ext,
						'document_valid_from' => $_POST['start_date'][$i],
						'document_valid_to' => $_POST['end_date'][$i],
						'date_added' => date('Y-m-d')
					);
					if($this->db->insert('document_history',$data_invoice_detail) == true);
					{
						$no++;
					}
				}
			}
			$this->load->view('add_document', $data);
		}

		public function doclist($employee_id)
		{
			$this->load->model('User_model');
			$this->session->set_userdata('emp_id',$employee_id);
			$empyloyeedocs = $this->User_model->doclist($employee_id);
			$data = array();
			$data['empyloyeedocs'] = $empyloyeedocs;
			$this->load->view('document_list', $data);
		}
	}