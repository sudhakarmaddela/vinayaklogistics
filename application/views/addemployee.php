<?php include('header.php'); ?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-0px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Add Employee</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a href="<?php echo base_url().'user/employeelist'; ?>" class="btn btn-secondary scroll-click" rel="content-y" role="button">All Employees</a>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		<div class="form-group row">
			<div class="col-md-6 col-sm-12">
				<div class="title">
					<?php if($this->session->flashdata('Success')){ ?>
					<div class="alert alert-success alert-dismissible mb-2" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<strong><?php echo $this->session->flashdata('Success'); ?></strong>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		
		<!-- Add Employee -->
		<div class="pd-20 card-box mb-30">
			<form method="post" action="<?php echo base_url().'user/addemployee'; ?>" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Name*</label>
							<input type="text" name="employee_name" class="form-control" value="sudhakar">
							<?php echo form_error('employee_name'); ?>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Surname*</label>
							<input type="text" name="employee_surname" class="form-control" value="maddela">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Middle Name*</label>
							<input type="text" name="employee_middle_name" class="form-control" value="rajesham">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Date of Birth*</label>
							<input type="date" name="birthdate" class="form-control" placeholder="Select Date">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Gender*</label>
							<select class="custom-select col-12" name="gender">
								<option disabled>Select...</option>
								<option selected="" value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Other">Other</option>
							</select>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Mobile No*</label>
							<input type="tel" name="mobileno" class="form-control" value="9876543210">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Education Qualification*</label>
							<select class="custom-select col-12" name="education_qualification">
								<option disabled>Select...</option>
								<option selected="" value="Secondary">Secondary</option>
								<option value="Higher Secondary">Higher Secondary</option>
								<option value="Other">Other</option>
							</select>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Identification Marks*</label>
							<input type="text" name="identification_marks" class="form-control" value="earmole">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Handicap*</label>
							<select class="custom-select col-12" name="handicap">
								<option disabled>Select...</option>
								<option selected="" value="Yes">Yes</option>
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
								<option disabled>Select...</option>
								<option selected="" value="Married">Married</option>
								<option value="Unmarried">Unmarried</option>
							</select>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Aadhar No*</label>
							<input type="number" name="aadhar_no" class="form-control" value="123456789012">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Bank Account No*</label>
							<input type="number" name="bank_account_no" class="form-control" value="12345678901234">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Bank Name*</label>
							<input type="text" name="bank_name" class="form-control" value="HDFC">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Bank Branch*</label>
							<input type="text" name="branch" class="form-control" value="Surat">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>IFSC Code*</label>
							<input type="text" name="ifsc_code" class="form-control" value="hdfc1234">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Nature of Work*</label>
							<input type="text" name="nature_of_work" class="form-control" value="test">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Area*</label>
							<input type="text" name="area" class="form-control" value="udhna">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Department*</label>
							<input type="text" name="department" class="form-control" value="test">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Department Code*</label>
							<input type="number" name="department_code" class="form-control" value="1234567">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Attendance Gate*</label>
							<input type="text" name="attendance_gate" class="form-control" value="1234567">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permission Gate*</label>
							<input type="text" name="permission_gate" class="form-control" value="1234567">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contractor Address*</label>
							<input type="text" name="contractor_address" class="form-control" value="surat">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contractor Mobile No*</label>
							<input type="tel" name="contractor_mobileno" class="form-control" value="1234567890">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contractor's Supervisor Name*</label>
							<input type="text" name="contractors_supervisor_name" class="form-control" value="sudhakar">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contractor Supervisor Address*</label>
							<input type="text" name="contractors_supervisor_address" class="form-control" value="udhna">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contractor Supervisor Mobile No*</label>
							<input type="tel" name="contractors_supervisor_mobileno" class="form-control" value="1234567890">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Present Address House No*</label>
							<input type="number" name="present_address_houseno" class="form-control" value="54">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Present Address Street*</label>
							<input type="text" name="present_address_street" class="form-control" value="udhna">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Present Address Town/Village*</label>
							<input type="text" name="present_address_town_village" class="form-control" value="surat">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Present Address Pincode*</label>
							<input type="number" name="present_address_pincode" class="form-control" value="123456">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Present Address Police Station*</label>
							<input type="text" name="present_address_police_station" class="form-control" value="limbayat">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Present Address District*</label>
							<input type="text" name="present_address_district" class="form-control" value="surat">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Present Address State*</label>
							<input type="text" name="present_address_state" class="form-control" value="gujarat">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permanent Address House No*</label>
							<input type="number" name="permanent_address_houseno" class="form-control" value="54">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permanent Address Street*</label>
							<input type="text" name="permanent_address_street" class="form-control" value="udhna">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permanent Address Town/Village*</label>
							<input type="text" name="permanent_address_town_village" class="form-control" value="surat">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permanent Address Pincode*</label>
							<input type="number" name="permanent_address_pincode" class="form-control" value="54">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permanent Address Police Station*</label>
							<input type="text" name="permanent_address_police_station" class="form-control" value="udhna">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permanent Address district*</label>
							<input type="text" name="permanent_address_district" class="form-control" value="surat">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permanent Address State*</label>
							<input type="text" name="permanent_address_state" class="form-control" value="Gujarat">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Domicile Village Town*</label>
							<input type="text" name="domicile_village_town" class="form-control" value="surat">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>No of Years Residing in Gujarat*</label>
							<input type="number" name="no_of_years_residing_in_gujarat" class="form-control" value="54">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Industries Worked Earlier In Gujarat*</label>
							<input type="text" name="industries_worked_earlier_in_gujarat" class="form-control" value="sudhakar">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Last Company Worked*</label>
							<input type="text" name="last_company_worked" class="form-control" value="sudhakar">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Last Company Address*</label>
							<input type="text" name="last_company_address" class="form-control" value="surat">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Intermidiate Person*</label>
							<input type="text" name="immediate_person" class="form-control" value="sudhakar">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Intermidiate Person Contact No*</label>
							<input type="tel" name="immediate_person_contactno" class="form-control" value="1234567890">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Signature*</label>
							<input type="file" name="signature" class="form-control-file form-control height-auto">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Right Thumb*</label>
							<input type="file" name="right_thumb" class="form-control-file form-control height-auto">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Left Thumb*</label>
							<input type="file" name="left_thumb" class="form-control-file form-control height-auto">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Photograph*</label>
							<input type="file" name="photograph" class="form-control-file form-control height-auto">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Current Vehicle Id*</label>
							<input type="number" name="curreent_vehicle_id" class="form-control height-auto" value="1234567890">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Is Active*</label>
							<select class="custom-select col-12" name="is_active">
								<option disabled>Select...</option>
								<option selected="" value="1">Yes</option>
								<option value="0">No</option>
							</select>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Date Added*</label>
							<input type="date" name="date_added" class="form-control" placeholder="Select Date">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Date Modified*</label>
							<input type="date" name="date_modified" class="form-control" placeholder="Select Date">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<input class="btn btn-primary" type="submit" value="Submit">
					</div>
				</div>
			</form>
		</div>
		<!-- End Add Employee -->
	</div>
</div>
<?php include('footer.php'); ?>