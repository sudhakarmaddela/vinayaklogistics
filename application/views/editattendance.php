<?php include('header.php'); ?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-0px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Update Attendance</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a class="btn btn-secondary" href="<?php echo base_url().'attendance'; ?>" role="button">
								Attendance List
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Add Employee -->
		<div class="pd-20 card-box mb-30">
			<form method="post" action="<?php echo base_url().'attendance/editattendance/'.$attendance['id']; ?>">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Company Id*</label>
							<input type="number" name="company_id" value="<?php echo set_value('company_id',$attendance['company_id']); ?>" class="form-control">
							<?php echo form_error('company_id'); ?>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Admin Id*</label>
							<input type="text" name="admin_id" class="form-control" value="<?php echo set_value('admin_id',$this->session->userdata('admin_name')); ?>" readonly>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Attendance Date*</label>
							<input type="date" name="attendance_date" class="form-control" value="<?php echo set_value('attendance_date',$attendance['attendance_date']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Equipment Desc*</label>
							<input type="text" name="equipment_description" value="<?php echo set_value('equipment_description',$attendance['equipment_description']); ?>" class="form-control">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Vehicle Id*</label>
							<input type="number" name="vehicle_id" class="form-control" value="<?php echo set_value('vehicle_id',$attendance['vehicle_id']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Employee Id*</label>
							<input type="number" name="employee_id" class="form-control" value="<?php echo set_value('employee_id',$attendance['employee_id']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Start Date Time*</label>
							<input type="datetime-local" name="start_date_time" value="<?php echo set_value('start_date_time',$attendance['start_date_time']); ?>" class="form-control">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>End Date Time*</label>
							<input type="datetime-local" name="end_date_time" class="form-control" value="<?php echo set_value('end_date_time',$attendance['end_date_time']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Net Hours*</label>
							<input type="number" name="net_hours" class="form-control" value="<?php echo set_value('net_hours',$attendance['net_hours']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Extra Hours*</label>
							<input type="number" name="extra_hours" value="<?php echo set_value('extra_hours',$attendance['extra_hours']); ?>" class="form-control">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Break Down*</label>
							<input type="text" name="break_down" class="form-control" value="<?php echo set_value('break_down',$attendance['break_down']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Start KM*</label>
							<input type="number" name="start_km" class="form-control" value="<?php echo set_value('start_km',$attendance['start_km']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>End KM*</label>
							<input type="number" name="end_km" value="<?php echo set_value('end_km',$attendance['end_km']); ?>" class="form-control">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Type*</label>
							<input type="text" name="type" class="form-control" value="<?php echo set_value('type',$attendance['type']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Diesel In Litre*</label>
							<input type="number" name="diesel_in_litre" class="form-control" value="<?php echo set_value('diesel_in_litre',$attendance['diesel_in_litre']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Remark*</label>
							<input type="text" name="remark" value="<?php echo set_value('remark',$attendance['remark']); ?>" class="form-control">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Date Added*</label>
							<input type="date" name="date_added" class="form-control" value="<?php echo set_value('date_added',$attendance['date_added']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Date Modified*</label>
							<input type="date" name="date_modified" class="form-control" value="<?php echo set_value('date_modified',$attendance['date_modified']); ?>">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<input class="btn btn-primary" type="submit" value="Update">
						<a class="btn btn-secondary" href="<?php echo base_url().'attendance'; ?>" role="button">Cancel</a>
					</div>
				</div>
			</form>
		</div>
		<!-- End Add Employee -->
	</div>
</div>


<?php include('footer.php'); ?>