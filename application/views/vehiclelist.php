<?php $this->load->view('header'); ?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Vehicle List</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a class="btn btn-secondary" href="<?php echo base_url().'user/addvehicle'; ?>" role="button">
								Add Vehicle
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
					<table class="table table-hover table-bordered nowrap">
						<thead>
							<tr>
								<th>Vehicle Id</th>
								<th>Vehicle Name</th>
								<th>Vehicle Registration Number</th>
								<th>Vehicle Engine No.</th>
								<th>Is Active</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!empty($users)) { foreach($users as $user) {?>
				          	<tr>
					            <td><?php echo $user['vehicle_id'] ?></td>
					            <td><?php echo $user['vehicle_name'] ?></td>
					            <td><?php echo $user['vehicle_registration_number'] ?></td>
					            <td><?php echo $user['vehicle_engine_no'] ?></td>
					            <td><?php echo $user['is_active'] ?></td>
								<td>
									<div class="dropdown">
										<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
											<i class="dw dw-more"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
											<!-- view button -->
											<a href="#" class="btn-block dropdown-item" data-toggle="modal" data-target="#bd-example-modal-lg" type="button"><i class="dw dw-eye"></i> Views</a>
											<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
											<!-- edit button -->
											<a class="dropdown-item" href="<?php echo base_url().'user/editvehicle/'.$user['vehicle_id']; ?>"><i class="dw dw-edit2"></i> Edit</a>
											<!-- delete button -->
											<a class="dropdown-item"  href="#" onclick="javascript : deleteConfirm('<?php echo base_url().'user/deletevehicle/'.$user['vehicle_id']; ?>')"><i class="dw dw-delete-3"></i> Delete</a>
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

<!--Model Popup for Vehicle List-->
<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="row clearfix">
				<!-- Large modal -->
				<div class="col-md-4 col-sm-12 mb-30">
					<div class="pd-20 card-box height-100-p">
						<h5 class="h4">Large modal</h5>
						<a href="#" class="btn-block" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
							<img src="<?php echo base_url();?>assets/vendors/images/modal-img1.jpg" alt="modal">
						</a>
						<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Model Popup for Vehicle List-->
<?php $this->load->view('footer'); ?>