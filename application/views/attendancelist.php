<?php $this->load->view('header'); ?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Attendance List</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a class="btn btn-secondary" href="<?php echo base_url().'attendance/attendance'; ?>" role="button">
								Add Attendance
							</a>
						</div>
					</div>
				</div>
			</div>
			<form method="post" name="attendanceview" id="attendanceview" action="<?= base_url(); ?>attendance/filterattendance">
				<div class="page-header">
					<div class="row">
						<div class="col-md-1 col-sm-12">
							<div class="title">
								<label class="control-label">Date</label>
							</div>
						</div>
						<div class="col-md-3 col-sm-12">
							<div class="title">
								<input type="date" name="selectdate" id="selectdate" class="form-control" value="<?= date('Y-m-d'); ?>">
							</div>
						</div>
						<div class="col-md-1 col-sm-12">
							<div class="title">
								<label class="control-label">Vehicle</label>
							</div>
						</div>
						<div class="col-md-3 col-sm-12">
							<select name="cmbVehicle" id="cmbVehicle" class="form-control">
								<option value="">Select Vehicle</option>
								<?php foreach( $vehicleview as $vehicle) {?>
									<option value="<?= $vehicle['vehicle_id'] ?>"><?= $vehicle['vehicle_name'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col-md-4 col-sm-12">
							<div class="title">
								<input type="submit" name="btnfilter" id="btnfilter" class="btn btn-primary" value="Filter">
							</div>
						</div>
					</div>
				</div>
			</form>
			<!-- Checkbox select Datatable start -->
			<div class="card-box mb-30">
				<div class="pd-20">
					<div class="row">
					<div class="col-md-6 col-sm-12">
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
						<a href="#"><button type="button" class="btn btn-info">Edit</button></a>
					</div>
				</div>
				</div>
				<div class="pb-20" style="overflow-x:auto;">
					<table class="checkbox-datatable table hover table-bordered nowrap">
						<thead>
							<tr>
								<th>Sr No.</th>
								<th>Company Id</th>
								<th>Admin Id</th>
								<th>Attendance Date</th>
								<th>Equipment Desc</th>
								<th>Vehicle Id</th>
								<th>Employee Id</th>
								<th>Start Date Time</th>
								<th>End Date Time</th>
								<th>Net Hours</th>
								<th>Extra Hours</th>
								<th>Break Down</th>
								<th>Start KM</th>
								<th>End KM</th>
								<th>Type</th>
								<th>Diesel In Litre</th>
								<th>Remark</th>
								<th>Date Added</th>
								<th>Date Modified</th>
							</tr>
						</thead>
						<?php if(!empty($filterdata)){ ?>
							<tbody>
							<?php $j=1; foreach($filterdata as $filter) { ?>
				          	<tr>
					            <td><?php echo $j; ?></td>
					            <td><?php echo $filter['company_id'] ?></td>
					            <td><?php echo $filter['admin_id'] ?></td>
					            <td><?php echo $filter['attendance_date'] ?></td>
					            <td><?php echo $filter['equipment_description'] ?></td>
					            <td><?php echo $filter['vehicle_id'] ?></td>
					            <td><?php echo $filter['employee_id'] ?></td>
					            <td><?php echo $filter['start_date_time'] ?></td>
					            <td><?php echo $filter['end_date_time'] ?></td>
					            <td><?php echo $filter['net_hours'] ?></td>
					            <td><?php echo $filter['extra_hours'] ?></td>
					            <td><?php echo $filter['break_down'] ?></td>
					            <td><?php echo $filter['start_km'] ?></td>
					            <td><?php echo $filter['end_km'] ?></td>
					            <td><?php echo $filter['type'] ?></td>
					            <td><?php echo $filter['diesel_in_litre'] ?></td>
					            <td><?php echo $filter['remark'] ?></td>
					            <td><?php echo $filter['date_added'] ?></td>
					            <td><?php echo $filter['date_modified'] ?></td>
								<td>
									<div class="dropdown">
										<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
											<i class="dw dw-more"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

											<!-- view button -->
											<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>

											<!-- edit button -->
											<a class="dropdown-item" href="<?php echo base_url().'attendance/editattendance/'.$filter['id']; ?>"><i class="dw dw-edit2"></i> Edit</a>
											
											<!-- delete button -->
											<a class="dropdown-item"  href="#" onclick="javascript : deleteConfirm('<?php echo base_url().'attendance/deleteatten/'.$filter['id']; ?>')"><i class="dw dw-delete-3"></i> Delete</a>
										</div>
									</div>
								</td>
				          	</tr>
					          	<?php $j++; } ?>
						</tbody>
						<?php }else{ ?>
						<tbody>
							<?php $i=1; foreach($attendanceview as $user){ ?>
				          	<tr>
					            <td><?php echo $i; ?></td>
					            <td><?php echo $user['company_name'] ?></td>
					            <td><?php echo $this->session->userdata('admin_name'); ?></td>
					            <td><?php echo $user['attendance_date'] ?></td>
					            <td><?php echo $user['equipment_description'] ?></td>
					            <td><?php echo $user['vehicle_name'] ?></td>
					            <td><?php echo $user['employee_name'] ?></td>
					            <td><?php echo date('d-m-Y h:i A',strtotime($user['start_date_time'])); ?></td>
					            <td><?php echo date('d-m-Y h:i A',strtotime($user['end_date_time'])); ?></td>
					            <td><?php echo $user['net_hours'] ?></td>
					            <td><?php echo $user['extra_hours'] ?></td>
					            <td><?php echo $user['break_down'] ?></td>
					            <td><?php echo $user['start_km'] ?></td>
					            <td><?php echo $user['end_km'] ?></td>
					            <td><?php echo $user['type'] ?></td>
					            <td><?php echo $user['diesel_in_litre'] ?></td>
					            <td><?php echo $user['remark'] ?></td>
					            <td><?php echo $user['date_added'] ?></td>
					            <td><?php echo $user['date_modified'] ?></td>
								<td>
									<div class="dropdown">
										<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
											<i class="dw dw-more"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

											<!-- view button -->
											<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>

											<!-- edit button -->
											<a class="dropdown-item" href="<?php echo base_url().'attendance/editattendance/'.$user['id']; ?>"><i class="dw dw-edit2"></i> Edit</a>
											
											<!-- delete button -->
											<a class="dropdown-item"  href="#" onclick="javascript : deleteConfirm('<?php echo base_url().'attendance/deleteatten/'.$user['id']; ?>')"><i class="dw dw-delete-3"></i> Delete</a>
										</div>
									</div>
								</td>
				          	</tr>
					          	<?php $i++; } ?>
						</tbody>
						<?php } ?>
					</table>
				</div>
			</div>
			<!-- Checkbox select Datatable End -->
		</div>
	</div>
</div>

<?php $this->load->view('footer'); ?>