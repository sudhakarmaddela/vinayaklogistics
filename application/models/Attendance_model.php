<?php
defined('BASEPATH') OR exit('No direct script access allowed'); {

	/**
	 *  add employee
	 */
	class Attendance_model extends CI_model
	{
		public function get_filter_data($attdate,$vehid)
		{
			$this->db->select('*');
			$this->db->from('attendance');
			$this->db->where('attendance_date',$attdate);
			$this->db->where('vehicle_id',$vehid);
			$data = $this->db->get();
			return $data->result_array();
		}

		public function get_all_data()
		{
			$this->db->select('*');
			$this->db->from('attendance a');
			$this->db->join('company c', 'c.company_id = a.company_id', 'LEFT');
			$this->db->join('vehicle v', 'v.vehicle_id = a.vehicle_id', 'LEFT');
			$this->db->join('employee e', 'e.employee_id = a.employee_id', 'LEFT');
			$data = $this->db->get();
			return $data->result_array();
		}

		//insert new attendance
		function attendance($data)
		{
	      	$this->db->insert('attendance', $data);
		}

		//attendance list
		/*public function attendancelist()
		{
			return $users = $this->db->get('attendance')->result_array();
		}*/

		//get attendance
		public function getattendance($attendanceId)
		{
			$this->db->where('id', $attendanceId);
			return $attendance = $this->db->get('attendance')->row_array();
		}
		//update attendance
		public function updateattendance($attendanceId,$fromArray)
		{
			$this->db->where('id', $attendanceId);
			$this->db->update('attendance', $fromArray);
		}
		//delete attendance
		public function deleteattendance($attendanceId)
		{
			$this->db->where('id',$attendanceId);
			$this->db->delete('attendance');
		}
	}


}