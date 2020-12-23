<?php include('header.php'); ?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-0px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Update Employee</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a class="btn btn-secondary" href="<?php echo base_url().'user/employeelist'; ?>" role="button">
								All Employees
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Add Employee -->
		<div class="pd-20 card-box mb-30">
			<form method="post" action="<?php echo base_url().'user/edit/'.$user['employee_id']; ?>">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Name*</label>
							<input type="text" name="employee_name" value="<?php echo set_value('employee_name',$user['employee_name']); ?>" class="form-control">
							<?php echo form_error('employee_name'); ?>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Surname*</label>
							<input type="text" name="employee_surname" class="form-control" value="<?php echo set_value('employee_surname',$user['employee_surname']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Middle Name*</label>
							<input type="text" name="employee_middle_name" class="form-control" value="<?php echo set_value('employee_middle_name',$user['employee_middle_name']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Date of Birth*</label>
							<input type="date" name="birthdate" class="form-control" placeholder="Select Date" value="<?php echo set_value('birthdate',$user['birthdate']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Gender*</label>
							<select class="custom-select col-12" name="gender">
								<option selected="">Select...</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Other">Other</option>
							</select>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Mobile No*</label>
							<input type="text" name="mobileno" class="form-control" value="<?php echo set_value('mobileno',$user['mobileno']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Education Qualification*</label>
							<select class="custom-select col-12" name="education_qualification">
								<option selected="">Select...</option>
								<option value="Secondary">Secondary</option>
								<option value="Higher Secondary">Higher Secondary</option>
								<option value="Other">Other</option>
							</select>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Identification Marks*</label>
							<input type="text" name="identification_marks" class="form-control" value="<?php echo set_value('identification_marks',$user['identification_marks']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Handicap*</label>
							<select class="custom-select col-12" name="handicap">
								<option selected="">Select...</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Marital Status*</label>
							<select class="custom-select col-12" name="designation">
								<option selected="">Select...</option>
								<option value="Married">Married</option>
								<option value="Unmarried">Unmarried</option>
							</select>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Aadhar No*</label>
							<input type="number" name="aadhar_no" class="form-control" value="<?php echo set_value('aadhar_no',$user['aadhar_no']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Bank Account No*</label>
							<input type="number" name="bank_account_no" class="form-control" value="<?php echo set_value('bank_account_no',$user['bank_account_no']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Bank Name*</label>
							<input type="text" name="bank_name" class="form-control" value="<?php echo set_value('bank_name',$user['bank_name']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Bank Branch*</label>
							<input type="text" name="branch" class="form-control" value="<?php echo set_value('branch',$user['branch']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>IFSC Code*</label>
							<input type="text" name="ifsc_code" class="form-control" value="<?php echo set_value('ifsc_code',$user['ifsc_code']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Nature of Work*</label>
							<input type="text" name="nature_of_work" class="form-control" value="<?php echo set_value('nature_of_work',$user['nature_of_work']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Area*</label>
							<input type="text" name="area" class="form-control" value="<?php echo set_value('area',$user['area']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Department*</label>
							<input type="text" name="department" class="form-control" value="<?php echo set_value('department',$user['department']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Department Code*</label>
							<input type="number" name="department_code" class="form-control" value="<?php echo set_value('department_code',$user['department_code']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Attendance Gate*</label>
							<input type="text" name="attendance_gate" class="form-control" value="<?php echo set_value('attendance_gate',$user['attendance_gate']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permission Gate*</label>
							<input type="text" name="permission_gate" class="form-control" value="<?php echo set_value('permission_gate',$user['permission_gate']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contractor Address*</label>
							<input type="text" name="contractor_address" class="form-control" value="<?php echo set_value('contractor_address',$user['contractor_address']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contractor Mobile No*</label>
							<input type="tel" name="contractor_mobileno" class="form-control" value="<?php echo set_value('contractor_mobileno',$user['contractor_mobileno']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contractor's Supervisor Name*</label>
							<input type="text" name="contractors_supervisor_name" class="form-control" value="<?php echo set_value('contractors_supervisor_name',$user['contractors_supervisor_name']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contractor Supervisor Address*</label>
							<input type="text" name="contractors_supervisor_address" class="form-control" value="<?php echo set_value('contractors_supervisor_address',$user['contractors_supervisor_address']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contractor Supervisor Mobile No*</label>
							<input type="tel" name="contractors_supervisor_mobileno" class="form-control" value="<?php echo set_value('contractors_supervisor_mobileno',$user['contractors_supervisor_mobileno']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Present Address House No*</label>
							<input type="number" name="present_address_houseno" class="form-control" value="<?php echo set_value('present_address_houseno',$user['present_address_houseno']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Present Address Street*</label>
							<input type="text" name="present_address_street" class="form-control" value="<?php echo set_value('present_address_street',$user['present_address_street']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Present Address Town/Village*</label>
							<input type="text" name="present_address_town_village" class="form-control" value="<?php echo set_value('present_address_town_village',$user['present_address_town_village']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Present Address Pincode*</label>
							<input type="number" name="present_address_pincode" class="form-control" value="<?php echo set_value('present_address_pincode',$user['present_address_pincode']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Present Address Police Station*</label>
							<input type="text" name="present_address_police_station" class="form-control" value="<?php echo set_value('present_address_police_station',$user['present_address_police_station']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Present Address District*</label>
							<input type="text" name="present_address_district" class="form-control" value="<?php echo set_value('present_address_district',$user['present_address_district']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Present Address State*</label>
							<input type="text" name="present_address_state" class="form-control" value="<?php echo set_value('present_address_state',$user['present_address_state']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permanent Address House No*</label>
							<input type="number" name="permanent_address_houseno" class="form-control" value="<?php echo set_value('permanent_address_houseno',$user['permanent_address_houseno']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permanent Address Street*</label>
							<input type="text" name="permanent_address_street" class="form-control" value="<?php echo set_value('permanent_address_street',$user['permanent_address_street']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permanent Address Town/Village*</label>
							<input type="text" name="permanent_address_town_village" class="form-control" value="<?php echo set_value('permanent_address_town_village',$user['permanent_address_town_village']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permanent Address Pincode*</label>
							<input type="number" name="permanent_address_pincode" class="form-control" value="<?php echo set_value('permanent_address_pincode',$user['permanent_address_pincode']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permanent Address Police Station*</label>
							<input type="text" name="permanent_address_police_station" class="form-control" value="<?php echo set_value('permanent_address_police_station',$user['permanent_address_police_station']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permanent Address district*</label>
							<input type="text" name="permanent_address_district" class="form-control" value="<?php echo set_value('permanent_address_district',$user['permanent_address_district']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permanent Address State*</label>
							<input type="text" name="permanent_address_state" class="form-control" value="<?php echo set_value('permanent_address_state',$user['permanent_address_state']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Domicile Village Town*</label>
							<input type="text" name="domicile_village_town" class="form-control" value="<?php echo set_value('domicile_village_town',$user['domicile_village_town']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>No of Years Residing in Gujarat*</label>
							<input type="number" name="no_of_years_residing_in_gujarat" class="form-control" value="<?php echo set_value('no_of_years_residing_in_gujarat',$user['no_of_years_residing_in_gujarat']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Industries Worked Earlier In Gujarat*</label>
							<input type="text" name="industries_worked_earlier_in_gujarat" class="form-control" value="<?php echo set_value('industries_worked_earlier_in_gujarat',$user['industries_worked_earlier_in_gujarat']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Last Company Worked*</label>
							<input type="text" name="last_company_worked" class="form-control" value="<?php echo set_value('last_company_worked',$user['last_company_worked']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Last Company Address*</label>
							<input type="text" name="last_company_address" class="form-control" value="<?php echo set_value('last_company_address',$user['last_company_address']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Intermidiate Person*</label>
							<input type="text" name="immediate_person" class="form-control" value="<?php echo set_value('immediate_person',$user['immediate_person']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Intermidiate Person Contact No*</label>
							<input type="tel" name="immediate_person_contactno" class="form-control" value="<?php echo set_value('immediate_person_contactno',$user['immediate_person_contactno']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Signature*</label>
							<input type="file" name="signature" class="form-control-file form-control height-auto" value="<?php echo set_value('signature',$user['signature']); ?>">
							<img src="<?php echo base_url(); ?>public/upload/employee_<?= $user['employee_id']?>/<?= $user['signature']; ?> " style="height:50px;">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Right Thumb*</label>
							<input type="file" name="right_thumb" class="form-control-file form-control height-auto" value="<?php echo set_value('right_thumb',$user['right_thumb']); ?>">
							<img src="<?php echo base_url(); ?>public/upload/employee_<?= $user['employee_id']?>/<?= $user['right_thumb']; ?> " style="height:50px;">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Left Thumb*</label>
							<input type="file" name="left_thumb" class="form-control-file form-control height-auto" value="<?php echo set_value('left_thumb',$user['left_thumb']); ?>">
							<img src="<?php echo base_url(); ?>public/upload/employee_<?= $user['employee_id']?>/<?= $user['left_thumb']; ?> " style="height:50px;">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Photograph*</label>
							<input type="file" name="photograph" class="form-control-file form-control height-auto" value="<?php echo set_value('photograph',$user['photograph']); ?>">
							<img src="<?php echo base_url(); ?>public/upload/employee_<?= $user['employee_id']?>/<?= $user['photograph']; ?> " style="height:50px;">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Current Vehicle Id*</label>
							<input type="number" name="curreent_vehicle_id" class="form-control height-auto" value="<?php echo set_value('curreent_vehicle_id',$user['curreent_vehicle_id']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Is Active*</label>
							<select class="custom-select col-12" name="is_active">
								<option selected="">Select...</option>
								<option value="1">Yes</option>
								<option value="0">No</option>
							</select>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Date Added*</label>
							<input type="date" name="date_added" class="form-control" placeholder="Select Date" value="<?php echo set_value('date_added',$user['date_added']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Date Modified*</label>
							<input type="date" name="date_modified" class="form-control" placeholder="Select Date" value="<?php echo set_value('date_modified',$user['date_modified']); ?>">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<input class="btn btn-primary" type="submit" value="Update">
						<a class="btn btn-secondary" href="<?php echo base_url().'user/employeelist'; ?>" role="button">Cancel</a>
					</div>
				</div>
			</form>
		</div>
		<!-- End Add Employee -->
	</div>
</div>


<?php include('footer.php'); ?>