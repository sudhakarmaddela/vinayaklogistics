<?php include('header.php'); ?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-0px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Update Admin</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a class="btn btn-secondary" href="<?php echo base_url().'user/adminlist'; ?>" role="button">
								Admin List
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Add Employee -->
		<div class="pd-20 card-box mb-30">
			<form method="post" action="<?php echo base_url().'user/editadmin/'.$adminget['admin_id']; ?>">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Admin Name*</label>
							<input type="text" name="name" value="<?php echo set_value('name',$adminget['name']); ?>" class="form-control">
							<?php echo form_error('name'); ?>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Email*</label>
							<input type="text" name="email" class="form-control" value="<?php echo set_value('email',$adminget['email']); ?>">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Password*</label>
							<input type="password" name="password" class="form-control" value="<?php echo set_value('password',$adminget['password']); ?>">
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Contact No.*</label>
							<input type="tel" name="contact_no" value="<?php echo set_value('contact_no',$adminget['contact_no']); ?>" class="form-control">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Role Id*</label>
							<input type="number" name="role_id" class="form-control" value="<?php echo set_value('role_id',$adminget['role_id']); ?>">
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
							<input type="date" name="date_added" value="<?php echo set_value('date_added',$adminget['date_added']); ?>" class="form-control">
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Date Modified*</label>
							<input type="date" name="date_modified" class="form-control" value="<?php echo set_value('date_modified',$adminget['date_modified']); ?>">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<input class="btn btn-primary" type="submit" value="Update">
						<a class="btn btn-secondary" href="<?php echo base_url().'user/adminlist'; ?>" role="button">Cancel</a>
					</div>
				</div>
			</form>
		</div>
		<!-- End Add Employee -->
	</div>
</div>


<?php include('footer.php'); ?>