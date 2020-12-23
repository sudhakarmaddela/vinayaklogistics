<?php
defined('BASEPATH') OR exit('No direct script access allowed'); {

	/**
	 *  add employee
	 */
	class User_model extends CI_model
	{
		//insert employees
		public function addemployee($fromArray)
		{
			$this->db->insert('employee', $fromArray);
		}

		//employee list
		public function employeelist()
		{
			return $users = $this->db->get('employee')->result_array();
		}

		public function employeecount()
		{
			$this->db->limit(1);
			$this->db->order_by('employee_id','DESC');
			return $users = $this->db->get('employee')->result_array();
		}

		//get employee for edit
		function getUser($userId)
		{
			$this->db->where('employee_id', $userId);
			return $user = $this->db->get('employee')->row_array();
		}

		//update employee
		function updateUser($userId,$fromArray)
		{
			$this->db->where('employee_id',$userId);
			$this->db->update('employee',$fromArray);
		}

		//delete employee
		function deleteUser($userId)
		{
			$this->db->where('employee_id',$userId);
			$this->db->delete('employee');
		}

		//employee View
		public function employeeview($employee_id)
		{
			$this->db->where('employee_id', $employee_id);
			return $users = $this->db->get('employee')->result_array();
		}
		
		//insert company
		public function addcompany($fromArray)
		{
			$this->db->insert('company', $fromArray);
		}

		//company list
		public function companylist()
		{
			return $users = $this->db->get('company')->result_array();
		}
		//get company
		public function getcompany($companyId)
		{
			$this->db->where('company_id', $companyId);
			return $company = $this->db->get('company')->row_array();
		}
		//update company
		public function updatecompany($companyId,$fromArray)
		{
			$this->db->where('company_id', $companyId);
			$this->db->update('company', $fromArray);
		}
		//delete company
		public function deletecompany($companyId)
		{
			$this->db->where('company_id', $companyId);
			$this->db->delete('company');
		}
		//insert Vehicle
		public function addvehicle($fromArray)
		{
			$this->db->insert('vehicle', $fromArray);
		}
		//vehile list
		public function vehiclelist()
		{
			return $users = $this->db->get('vehicle')->result_array();
		}
		//get Vehicle
		public function getvehicle($vehicleId)
		{
			$this->db->where('vehicle_id', $vehicleId);
			return $vehicle = $this->db->get('vehicle')->row_array();
		}
		//update Vehicle
		function updatevehicle($vehicleId,$fromArray)
		{
			$this->db->where('vehicle_id',$vehicleId);
			$this->db->update('vehicle',$fromArray);
		}
		//delete Vehicle
		public function deletevehicle($vehicleId)
		{
			$this->db->where('vehicle_id', $vehicleId);
			$this->db->delete('vehicle');
		}
		//insert Vehicle History
		public function vehiclehistory($fromArray)
		{
			$this->db->insert('vehicle_history', $fromArray);
		}

		// add admin
		public function addadmin($fromArray)
		{
			$this->db->insert('admin', $fromArray);
		}
		// admin list
		public function adminlist()
		{
			return $users = $this->db->get('admin')->result_array();
		}
		// get admin
		public function getadmin($adminId)
		{
			$this->db->where('admin_id', $adminId);
			return $adminget = $this->db->get('admin')->row_array();
		}
		// update admin
		public function updateadmin($adminId,$fromArray)
		{
			$this->db->where('admin_id',$adminId);
			$this->db->update('admin',$fromArray);
		}
		// delete admin
		public function deleteadmin($adminId)
		{
			$this->db->where('admin_id', $adminId);
			$this->db->delete('admin');
		}

		// add role
		public function addrole($fromArray)
		{
			$this->db->insert('role', $fromArray);
		}
		// role list
		public function rolelist()
		{
			return $users = $this->db->get('role')->result_array();
		}
		// get role
		public function getrole($roleId)
		{
			$this->db->where('role_id', $roleId);
			return $adminrole = $this->db->get('role')->row_array();
		}
		// update role
		public function updaterole($roleId,$fromArray)
		{
			$this->db->where('role_id', $roleId);
			$this->db->update('role', $fromArray);
		}
		// delete role
		public function deleterole($roleId)
		{
			$this->db->where('role_id', $roleId);
			$this->db->delete('role');
		}


		public function getdocument()
		{
			$this->db->where('for_employee', 1);
			return $this->db->get('document')->result_array();
		}
		// role list
		public function doclist($employee_id)
		{
			$this->db->join('employee', 'employee.employee_id=document_history.employee_id');
			$this->db->where('document_history.employee_id',$employee_id);
			return $empyloyeedocs = $this->db->get('document_history')->result_array();
		}
	}
}