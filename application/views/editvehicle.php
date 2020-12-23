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
							<a class="btn btn-secondary" href="<?php echo base_url().'user/editvehicle'; ?>" role="button">
								Vehicles List
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Add Employee -->
		<div class="pd-20 card-box mb-30">
			<form method="post" action="<?php echo base_url().'user/editvehicle/'.$vehicle['vehicle_id']; ?>">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Vehicle Name*</label>
							<input type="text" name="vehicle_name" value="<?php echo set_value('vehicle_name',$vehicle['vehicle_name']); ?>" class="form-control">
							<?php echo form_error('vehicle_name'); ?>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Vehicle Registration Number*</label>
							<input type="text" name="vehicle_registration_number" class="form-control" value="<?php echo set_value('vehicle_registration_number',$vehicle['vehicle_registration_number']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Vehicle Engnine No.*</label>
							<input type="text" name="vehicle_engine_no" class="form-control" value="<?php echo set_value('vehicle_engine_no',$vehicle['vehicle_engine_no']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
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
				</div>
				
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<input class="btn btn-primary" type="submit" value="Update">
						<a class="btn btn-secondary" href="<?php echo base_url().'user/vehiclelist'; ?>" role="button">Cancel</a>
					</div>
				</div>
			</form>
		</div>
		<!-- End Add Employee -->
	</div>
</div>


<?php include('footer.php'); ?>