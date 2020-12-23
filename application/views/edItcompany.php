<?php include('header.php'); ?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-0px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Update Company</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a class="btn btn-secondary" href="<?php echo base_url().'user/companylist'; ?>" role="button">
								Company List
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Add Employee -->
		<div class="pd-20 card-box mb-30">
			<form method="post" action="<?php echo base_url().'user/editcompany/'.$company['company_id']; ?>">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Company Code*</label>
							<input type="text" name="company_code" value="<?php echo set_value('company_code',$company['company_code']); ?>" class="form-control">
							<?php echo form_error('company_code'); ?>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Company Name*</label>
							<input type="text" name="company_name" class="form-control" value="<?php echo set_value('company_name',$company['company_name']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Company Address*</label>
							<input type="text" name="company_address" class="form-control" value="<?php echo set_value('company_address',$company['company_address']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>State*</label>
							<input type="text" name="state" value="<?php echo set_value('state',$company['state']); ?>" class="form-control">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>GSTIN*</label>
							<input type="text" name="gstin" class="form-control" value="<?php echo set_value('gstin',$company['gstin']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Pancard*</label>
							<input type="text" name="pancard" class="form-control" value="<?php echo set_value('pancard',$company['pancard']); ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contact Person*</label>
							<input type="text" name="contact_person" value="<?php echo set_value('contact_person',$company['contact_person']); ?>" class="form-control">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contact Number*</label>
							<input type="text" name="contact_number" class="form-control" value="<?php echo set_value('contact_number',$company['contact_number']); ?>">
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
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Date Added*</label>
							<input type="date" name="date_added" value="<?php echo set_value('date_added',$company['date_added']); ?>" class="form-control">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Date Modified*</label>
							<input type="date" name="date_modified" class="form-control" value="<?php echo set_value('date_modified',$company['date_modified']); ?>">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<input class="btn btn-primary" type="submit" value="Update">
						<a class="btn btn-secondary" href="<?php echo base_url().'user/companylist'; ?>" role="button">Cancel</a>
					</div>
				</div>
			</form>
		</div>
		<!-- End Add Employee -->
	</div>
</div>


<?php include('footer.php'); ?>