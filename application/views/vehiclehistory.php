<?php include('header.php'); ?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-0px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Add Vehicle History</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a href="#" class="btn btn-secondary scroll-click" rel="content-y" role="button">Vehicle History List</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Add New Company -->
		<div class="pd-20 card-box mb-30">
			<form method="post" action="<?php echo base_url().'user/vehiclehistory'; ?>">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Vehicle Id*</label>
							<input type="number" name="vehicle_id" class="form-control" value="1234567890">
							<?php echo form_error('vehicle_id'); ?>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Employee Id*</label>
							<input type="number" name="employee_id" class="form-control" value="1234567890">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Remark*</label>
							<input type="text" name="remark" class="form-control" value="noremark">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Date Added*</label>
							<input type="date" name="date_added" class="form-control" value="">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Date Modified*</label>
							<input type="date" name="date_modified" class="form-control" value="">
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