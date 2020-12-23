<?php include('header.php'); ?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-0px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>View Employee</h4>
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
		
		<!-- Add Employee -->
		<div class="pd-20 card-box mb-30">
			<form method="post" action="<?php echo base_url().'user/employeelist'; ?>" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Name: <?php echo $user[0]['employee_surname'] ?>&nbsp;<?php echo $user[0]['employee_name'] ?>&nbsp;<?php echo $user[0]['employee_middle_name'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>DOB: <?php echo $user[0]['birthdate'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Gender: <?php echo $user[0]['gender'] ?></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Mobile No: <?php echo $user[0]['mobileno'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Education Qualification: <?php echo $user[0]['education_qualification'] ?></label>
							</select>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Identification Marks: <?php echo $user[0]['identification_marks'] ?></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Handicap: <?php echo $user[0]['handicap'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Marital Status: <?php echo $user[0]['designation'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Aadhar No: <?php echo $user[0]['aadhar_no'] ?></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Bank Account No: <?php echo $user[0]['bank_account_no'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Bank Name: <?php echo $user[0]['bank_name'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Bank Branch: <?php echo $user[0]['branch'] ?></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>IFSC Code: <?php echo $user[0]['ifsc_code'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Nature of Work: <?php echo $user[0]['nature_of_work'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Area: <?php echo $user[0]['area'] ?></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Department: <?php echo $user[0]['department'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Department Code: <?php echo $user[0]['department_code'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Attendance Gate: <?php echo $user[0]['attendance_gate'] ?></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permission Gate: <?php echo $user[0]['permission_gate'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contractor Address: <?php echo $user[0]['contractor_address'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contractor Mobile No: <?php echo $user[0]['contractor_mobileno'] ?></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contractor's Supervisor Name: <?php echo $user[0]['contractors_supervisor_name'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contractor Supervisor Address: <?php echo $user[0]['contractors_supervisor_address'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contractor Supervisor Mobile No: <?php echo $user[0]['contractors_supervisor_mobileno'] ?></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Present Address: <?php echo $user[0]['present_address_houseno'] ?>&nbsp;<?php echo $user[0]['present_address_street'] ?>&nbsp;<?php echo $user[0]['present_address_town_village'] ?>&nbsp;<?php echo $user[0]['present_address_pincode'] ?>&nbsp;<?php echo $user[0]['present_address_police_station'] ?>&nbsp;<?php echo $user[0]['present_address_district'] ?>&nbsp;<?php echo $user[0]['present_address_state'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Permanent Address: <?php echo $user[0]['permanent_address_houseno'] ?>&nbsp;<?php echo $user[0]['permanent_address_street'] ?>&nbsp;<?php echo $user[0]['permanent_address_town_village'] ?>&nbsp;<?php echo $user[0]['permanent_address_pincode'] ?>&nbsp;<?php echo $user[0]['permanent_address_police_station'] ?>&nbsp;<?php echo $user[0]['permanent_address_district'] ?>&nbsp;<?php echo $user[0]['permanent_address_state'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Domicile Village Town: <?php echo $user[0]['domicile_village_town'] ?></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>No of Years Residing in Gujarat: <?php echo $user[0]['no_of_years_residing_in_gujarat'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Industries Worked Earlier In Gujarat: <?php echo $user[0]['industries_worked_earlier_in_gujarat'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Last Company Worked: <?php echo $user[0]['last_company_worked'] ?></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Intermidiate Person: <?php echo $user[0]['last_company_worked'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Intermidiate Person Contact No: <?php echo $user[0]['immediate_person_contactno'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Date Modified: <?php echo $user[0]['date_modified'] ?></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Current Vehicle Id: <?php echo $user[0]['curreent_vehicle_id'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Is Active: <?php echo $user[0]['is_active'] ?></label>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Date Added: <?php echo $user[0]['date_added'] ?></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<div class="form-group">
							<label>Signature: <br><img src="<?php echo base_url();?>public/upload/employee_<?= $user[0]['employee_id']?>/<?= $user[0]['signature'] ?>" style="width:100px;"></label>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="form-group">
							<label>Right Thumb: <br><img src="<?php echo base_url();?>public/upload/employee_<?= $user[0]['employee_id']?>/<?= $user[0]['right_thumb'] ?>" style="width:100px;"></label>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="form-group">
							<label>Left Thumb: <br><img src="<?php echo base_url();?>public/upload/employee_<?= $user[0]['employee_id']?>/<?= $user[0]['left_thumb'] ?>" style="width:100px;"></label>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="form-group">
							<label>Photograph: <br><img src="<?php echo base_url();?>public/upload/employee_<?= $user[0]['employee_id']?>/<?= $user[0]['photograph'] ?>" style="width:100px;"></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<input class="btn btn-secondary" type="submit" value="Go Back">
					</div>
				</div>
			</form>
		</div>
		<!-- End Add Employee -->
	</div>
</div>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="">
			<div class="row clearfix">
				<!-- Large modal -->
				<div class="col-md-4 col-sm-12 mb-30">
					<div class="pd-20 height-100-p">
						<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">
											<div class="pd-20 card-box mb-30">
												<form method="post" action="<?php echo base_url().'user/edit/'.$user['employee_id']; ?>">
													<div class="row">
														<div class="col-md-4 col-sm-12">
															<div class="form-group">
																<label>Name: <?php echo $user[0]['employee_surname'] ?>&nbsp;<?php echo $user[0]['employee_name'] ?>&nbsp;<?php echo $user[0]['employee_middle_name'] ?></label>
															</div>
														</div>
														<div class="col-md-4 col-sm-12">
															<div class="form-group">
																<label>DOB: <?php echo $user[0]['birthdate'] ?></label>
															</div>
														</div>
														<div class="col-md-4 col-sm-12">
															<div class="form-group">
																<label>Gender: <?php echo $user[0]['gender'] ?></label>
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
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>