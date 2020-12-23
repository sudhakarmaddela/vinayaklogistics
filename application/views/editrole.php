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
							<a class="btn btn-secondary" href="<?php echo base_url().'user/rolelist'; ?>" role="button">
								Role List
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Add Employee -->
		<div class="pd-20 card-box mb-30">
			<form method="post" action="<?php echo base_url().'user/editrole/'.$adminrole['role_id']; ?>">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label>Role Name*</label>
							<input type="text" name="role_name" value="<?php echo set_value('role_name',$adminrole['role_name']); ?>" class="form-control">
							<?php echo form_error('name'); ?>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<input class="btn btn-primary" type="submit" value="Update">
						<a class="btn btn-secondary" href="<?php echo base_url().'user/rolelist'; ?>" role="button">Cancel</a>
					</div>
				</div>
			</form>
		</div>
		<!-- End Add Employee -->
	</div>
</div>


<?php include('footer.php'); ?>