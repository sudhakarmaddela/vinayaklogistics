<?php $this->load->view('header'); ?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Document List</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a class="btn btn-secondary" href="<?php echo base_url().'user/adddocument'; ?>" role="button">
								Add document
							</a>
							<a class="btn btn-secondary" href="<?php echo base_url().'user/employeelist'; ?>" role="button">
								Back
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
				</div>
				</div>
				<div class="pb-20" style="overflow-x:auto;">
					<table class="checkbox-datatable table hover table-bordered nowrap">
						<thead>
							<tr>
								<th>Sr. No.</th>
								<th>Employee Name</th>
								<th>Document Name</th>
								<th>Document Number</th>
								<th>Document Image</th>
								<th>Document Valid From</th>
								<th>Document Valid To</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!empty($empyloyeedocs)) { foreach($empyloyeedocs as $empdocuments) {?>
				          	<tr>
					            <td><?php echo $empdocuments['document_history_id'] ?></td>
					            <td><?php echo $empdocuments['employee_name'] ?></td>
					            <td><?php echo $empdocuments['document_name'] ?></td>
					            <td><?php echo $empdocuments['document_number'] ?></td>
					            <td><img  style="width: 50px;" src="<?= base_url(); ?>public/upload/employee_<?= $empdocuments['employee_id'] ?>/<?php echo $empdocuments['document_image'] ?>"></td>
					            <td><?php echo $empdocuments['document_valid_from'] ?></td>
					            <td><?php echo $empdocuments['document_valid_to'] ?></td>
								<td>
									<div class="dropdown">
										<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
											<i class="dw dw-more"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

											<!-- view button 
											<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
											-->

											<!-- edit button -->
											<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
											
											<!-- delete button -->
											<a class="dropdown-item"  href="#"><i class="dw dw-delete-3"></i> Delete</a>
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