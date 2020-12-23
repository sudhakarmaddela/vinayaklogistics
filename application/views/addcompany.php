<?php include('header.php'); ?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-0px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Add Company</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a href="<?php echo base_url().'user/companylist'; ?>" class="btn btn-secondary scroll-click" rel="content-y" role="button">Company List</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Add New Company -->
		<div class="pd-20 card-box mb-30">
			<form method="post" action="<?php echo base_url().'user/addcompany'; ?>">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Company Code*</label>
							<input type="number" name="company_code" class="form-control" value="12345890">
							<?php echo form_error('company_code'); ?>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Company Name*</label>
							<input type="text" name="company_name" class="form-control" value="gnhub">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Company Address*</label>
							<input type="text" name="company_address" class="form-control" value="surat gujarat">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>State*</label>
							<input type="text" name="state" class="form-control" value="gujarat">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>GSTIN*</label>
							<input type="text" name="gstin" class="form-control" value="10AABCU9603R1Z2">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Pancard*</label>
							<input type="text" name="pancard" class="form-control" value="10AABCU960">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contact Person*</label>
							<input type="text" name="contact_person" class="form-control" value="sudhakar">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contact Number*</label>
							<input type="number" name="contact_number" class="form-control" value="1231231231">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Is Active*</label>
							<select class="custom-select col-12" name="is_active">
								<option selected="" disabled>Select...</option>
								<option value="1">Yes</option>
								<option value="0">No</option>
							</select>
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