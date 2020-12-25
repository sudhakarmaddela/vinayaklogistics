<?php $this->load->view('header'); ?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Employees List</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a class="btn btn-secondary" href="<?php echo base_url().'user/addemployee'; ?>" role="button" data-toggle="tooltip" data-placement="top" title="Add Employee"> <i class="icon-copy fa fa-user-plus" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
				
			<!-- Checkbox select Datatable start -->
			<div class="card-box mb-30">
				<div class="pd-20">
					<div class="row">
						<div class="col-md-6 col-sm-12">
						</div>
					</div>
				</div>
				<div class="pb-20" style="overflow-x:auto;">
					<table class="checkbox-datatable table table-hover table-bordered nowrap">
						<thead>
							<tr>
								<th>Sr. No.</th>
								<th>Name</th>
								<th>Surname</th>
								<th>Middle Name</th>
								<th>Birth Date</th>
								<th>Gender</th>
								<th>Mobile No</th>
								<th>Education Qualification</th>
								<th>Identification Marks</th>
								<th>Handicap</th>
								<th>Marital Status</th>
								<th>Aadhar No</th>
								<th>Bank Account No</th>
								<th>Bank Name</th>
								<th>Bank Branch</th>
								<th>IFSC Code</th>
								<th>Nature of Work</th>
								<th>Area</th>
								<th>Department</th>
								<th>Department Code</th>
								<th>Attendance Gate</th>
								<th>Permission Gate</th>
								<th>Contractor Address</th>
								<th>Contractor Mobile No</th>
								<th>Contractor's Supervisor Name</th>
								<th>Contractor Supervisor Address</th>
								<th>Contractor Supervisor Mobile No</th>
								<th>Present Address House No</th>
								<th>Present Address Street</th>
								<th>Present Address Town/Village</th>
								<th>Present Address Pincode</th>
								<th>Present Address Police Station</th>
								<th>Present Address District</th>
								<th>Present Address State</th>
								<th>Permanent Address House No</th>
								<th>Permanent Address Street</th>
								<th>Permanent Address Town/Village</th>
								<th>Permanent Address Pincode</th>
								<th>Permanent Address Police Station</th>
								<th>Permanent Address district</th>
								<th>Permanent Address State</th>
								<th>Domicile Village Town</th>
								<th>No of Years Residing in Gujarat</th>
								<th>Industries Worked Earlier In Gujarat</th>
								<th>Last Company Worked</th>
								<th>Last Company Address</th>
								<th>Intermidiate Person</th>
								<th>Intermidiate Person Contact No</th>
								<th>Signature</th>
								<th>Right Thumb</th>
								<th>Left Thumb</th>
								<th>Photograph</th>
								<th>Current Vehicle Id</th>
								<th>Is Active</th>
								<th>Date Added</th>
								<th>Date Modified</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!empty($users)) { foreach($users as $user) {?>
				          	<tr>
					            <td><?php echo $user['employee_id'] ?></td>
					            <td><?php echo $user['employee_name'] ?></td>
					            <td><?php echo $user['employee_surname'] ?></td>
					            <td><?php echo $user['employee_middle_name'] ?></td>
					            <td><?php echo $user['birthdate'] ?></td>
					            <td><?php echo $user['gender'] ?></td>
					            <td><?php echo $user['mobileno'] ?></td>
					            <td><?php echo $user['education_qualification'] ?></td>
					            <td><?php echo $user['identification_marks'] ?></td>
					            <td><?php echo $user['handicap'] ?></td>
					            <td><?php echo $user['designation'] ?></td>
					            <td><?php echo $user['aadhar_no'] ?></td>
					            <td><?php echo $user['bank_account_no'] ?></td>
					            <td><?php echo $user['bank_name'] ?></td>
					            <td><?php echo $user['branch'] ?></td>
					            <td><?php echo $user['ifsc_code'] ?></td>
					            <td><?php echo $user['nature_of_work'] ?></td>
					            <td><?php echo $user['area'] ?></td>
					            <td><?php echo $user['department'] ?></td>
					            <td><?php echo $user['department_code'] ?></td>
					            <td><?php echo $user['attendance_gate'] ?></td>
					            <td><?php echo $user['permission_gate'] ?></td>
					            <td><?php echo $user['contractor_address'] ?></td>
					            <td><?php echo $user['contractor_mobileno'] ?></td>
					            <td><?php echo $user['contractors_supervisor_name'] ?></td>
					            <td><?php echo $user['contractors_supervisor_address'] ?></td>
					            <td><?php echo $user['contractors_supervisor_mobileno'] ?></td>
					            <td><?php echo $user['present_address_houseno'] ?></td>
					            <td><?php echo $user['present_address_street'] ?></td>
					            <td><?php echo $user['present_address_town_village'] ?></td>
					            <td><?php echo $user['present_address_pincode'] ?></td>
					            <td><?php echo $user['present_address_police_station'] ?></td>
					            <td><?php echo $user['present_address_district'] ?></td>
					            <td><?php echo $user['present_address_state'] ?></td>
					            <td><?php echo $user['permanent_address_houseno'] ?></td>
					            <td><?php echo $user['permanent_address_street'] ?></td>
					            <td><?php echo $user['permanent_address_town_village'] ?></td>
					            <td><?php echo $user['permanent_address_pincode'] ?></td>
					            <td><?php echo $user['permanent_address_police_station'] ?></td>
					            <td><?php echo $user['permanent_address_district'] ?></td>
					            <td><?php echo $user['permanent_address_state'] ?></td>
					            <td><?php echo $user['domicile_village_town'] ?></td>
					            <td><?php echo $user['no_of_years_residing_in_gujarat'] ?></td>
					            <td><?php echo $user['industries_worked_earlier_in_gujarat'] ?></td>
					            <td><?php echo $user['last_company_worked'] ?></td>
					            <td><?php echo $user['last_company_address'] ?></td>
					            <td><?php echo $user['immediate_person'] ?></td>
					            <td><?php echo $user['immediate_person_contactno'] ?></td>
					            <td><?php echo $user['signature'] ?></td>
					            <td><?php echo $user['right_thumb'] ?></td>
					            <td><?php echo $user['left_thumb'] ?></td>
					            <td><?php echo $user['photograph'] ?></td>
					            <td><?php echo $user['curreent_vehicle_id'] ?></td>
					            <td><?php echo $user['is_active'] ?></td>
					            <td><?php echo $user['date_added'] ?></td>
					            <td><?php echo $user['date_modified'] ?></td>
								<td>
									<div class="dropdown">
										<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
											<i class="dw dw-more"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
											<!-- view button -->
											<a class="dropdown-item" href="<?php echo base_url().'user/empview/'.$user['employee_id']; ?>"><i class="dw dw-eye"></i> View</a>
											<!-- upload button -->
											<a class="dropdown-item" href="<?php echo base_url().'user/doclist/'.$user['employee_id']; ?>"><i class="dw dw-image1"></i> Upload Doc</a>
											<!-- edit button -->
											<a class="dropdown-item" href="<?php echo base_url().'user/edit/'.$user['employee_id']; ?>"><i class="dw dw-edit2"></i> Edit</a>
											<!-- delete button -->
											<!--<a class="dropdown-item" href="<?php /*echo base_url().'user/delete/'.$user['employee_id']; */ ?>"><i class="dw dw-delete-3"></i> Delete</a>-->
											<a class="dropdown-item"  href="#" onclick="javascript : deleteConfirm('<?php echo base_url().'user/delete/'.$user['employee_id']; ?>')"><i class="dw dw-delete-3"></i> Delete</a>
										</div>
									</div>
								</td>
				          	</tr>
					          	<?php } } else { ?>
				            <tr>
				              	<td>Norecords Found</td>
				            </tr>
				          		<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- Checkbox select Datatable End -->
		</div>
	</div>
</div>


<?php $this->load->view('footer'); ?>