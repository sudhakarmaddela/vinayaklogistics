<?php $this->load->view('header'); ?>

<style>
	/*.col.attendance-form {
	    width: 300pc;
	}
	.row.attendance-pd {
	    padding: 0px 28px 28px 28px;
	}*/
	input.inputsize {
	    width: 270px;
	}
</style>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-0px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Add Document</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a href="#" class="btn btn-secondary scroll-click" rel="content-y" role="button">Document List</a>
						</div>
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
					<div class="col-md-6 col-sm-12 text-right"><!-- 
						<a href="#"><button type="button" class="btn btn-danger" id="">Delete</button></a>
						<a href="#"><button type="button" id="" class="btn btn-info">Edit</button></a> -->
					</div>
				</div>
				</div>
				<div class="pb-20" style="overflow-x:auto;">
					<form action="<?php echo base_url().'user/adddocument'; ?>" method="post" enctype="multipart/form-data">
 						 <div class="form-group">
							<table class="checkbox-datatable table nowrap" id="attendance_bulk">
								<tr>
									<th>Document</th>
									<th>Name</th>
									<th>Doc No.</th>
									<th>File</th>
									<th>Valid Start Date</th>
									<th>Valid End Date</th>
								</tr>
								<?php foreach($doclist as $doc){ ?>
								<tr>
									<td><input type="hidden" class="form-control inputsize" id="hdnEmpId" name="hdnEmpId" value=""><input type="text" class="form-control inputsize" id="txtDocument" name="txtDocument[]" value="<?= $doc['document_name']; ?>" readonly="readonly"><input type="hidden" class="form-control inputsize" id="hdnDocId" name="hdnDocId[]" value="<?= $doc['document_id']; ?>"></td>
									<td><input type="text" class="form-control inputsize" id="txtDocumentName" name="txtDocumentName[]" ></td>
									<td><input type="text" class="form-control inputsize" id="txtDocumentNumber" name="txtDocumentNumber[]"></td>
									<td><input type="file" class="form-control inputsize" id="txtDocImg" name="txtDocImg[]"></td>
									<td><input type="date" class="form-control inputsize" id="start_date" name="start_date[]"></td>
									<td><input type="date" class="form-control inputsize" id="end_date" name="end_date[]"></td>
								</tr>
								<?php } ?>
							</table>
						</div>
						<center>
							<input type="submit" class="btn btn-primary" id="save" name="save" value="Submit">
						</center>
					</form>
				</div>
			</div>
			<!-- Checkbox select Datatable End -->
	</div>
</div>

<?php $this->load->view('footer'); ?>