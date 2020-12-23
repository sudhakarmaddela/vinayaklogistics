<?php $this->load->view('header'); ?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Role List</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a class="btn btn-secondary" href="<?php echo base_url().'user/addrole'; ?>" role="button">
								Add Role
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
								<th>Role Id</th>
								<th>Role Name</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!empty($users)) { foreach($users as $user) {?>
				          	<tr>
					            <td><?php echo $user['role_id'] ?></td>
					            <td><?php echo $user['role_name'] ?></td>
								<td>
									<div class="dropdown">
										<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
											<i class="dw dw-more"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

											<!-- view button -->
											<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>

											<!-- edit button -->
											<a class="dropdown-item" href="<?php echo base_url().'user/editrole/'.$user['role_id']; ?>"><i class="dw dw-edit2"></i> Edit</a>
											
											<!-- delete button -->
											<a class="dropdown-item" href="<?php echo base_url().'user/deleterole/'.$user['role_id']; ?>"><i class="dw dw-delete-3"></i> Delete</a>
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