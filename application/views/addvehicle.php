<?php include('header.php'); ?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-0px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Add Vehicle</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a href="<?php echo base_url().'user/vehiclelist'; ?>" class="btn btn-secondary scroll-click" rel="content-y" role="button">Vehicle List</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Add New Company -->
		<div class="pd-20 card-box mb-30">
			<form method="post" action="<?php echo base_url().'user/addvehicle'; ?>">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Vehicle Name*</label>
							<input type="text" name="vehicle_name" class="form-control" value="">
							<?php echo form_error('vehicle_name'); ?>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Vehicle Registration Number*</label>
							<input type="text" name="vehicle_registration_number" class="form-control" value="424234">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Vehicle Engine No.*</label>
							<input type="text" name="vehicle_engine_no" class="form-control" value="23423424">
						</div>
					</div>
				</div>
				<div class="row">
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
				</div>
				
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<input class="btn btn-primary" type="submit" value="Submit">
					</div>
				</div>
			</form>
		</div>
		<!-- End Add New Company -->
	</div>
</div>
<?php include('footer.php'); ?>