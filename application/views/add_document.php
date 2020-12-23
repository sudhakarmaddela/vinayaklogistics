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

<script>
	$(document).ready(function(){

		var html = '<tr><td><input type="number" class="form-control inputsize" id="company_id" name="company_id[]" value=""></td><td><input type="date" class="form-control inputsize" id="attendance_date" name="attendance_date[]" value=""></td><td><input type="text" class="form-control inputsize" id="equipment_description" name="equipment_description[]" value=""></td><td><input type="number" class="form-control inputsize" id="vehicle_id" name="vehicle_id[]" value=""></td><td><input type="number" class="form-control inputsize" id="employee_id" name="employee_id[]" value=""></td><td><input type="datetime-local" class="form-control inputsize" id="start_date_time" name="start_date_time[]" value=""></td><td><input type="datetime-local" class="form-control inputsize" id="end_date_time" name="end_date_time[]" value=""></td><td><input type="number" class="form-control inputsize" id="net_hours" name="net_hours[]" value=""></td><td><input type="number" class="form-control inputsize" id="extra_hours" name="extra_hours[]" value=""></td><td><input type="text" class="form-control inputsize" id="break_down" name="break_down[]" value=""></td><td><input type="number" class="form-control inputsize" id="start_km" name="start_km[]" value=""></td><td><input type="number" class="form-control inputsize" id="end_km" name="end_km[]" value=""></td><td><input type="text" class="form-control inputsize" id="type" name="type[]" value=""></td><td><input type="number" class="form-control inputsize" id="diesel_in_litre" name="diesel_in_litre[]" value=""></td><td><input type="text" class="form-control inputsize" id="remark" name="remark[]" value=""></td><td><input type="date" class="form-control inputsize" id="date_added" name="date_added[]" value=""></td><td><input type="date" class="form-control inputsize" id="date_modified" name="date_modified[]" value=""></td><td><input class="btn btn-danger" type="button" id="remove" name="remove" value="Remove"></td></tr>';

		var maxinputs = 5;
		var x = 1;

		$('#add').click(function(){

			if (x <= maxinputs) {
				$('#attendance_bulk').append(html);
				x++;
			}
		});

		$('#attendance_bulk').on('click', '#remove', function(){
			$(this).closest('tr').remove();
			x--;
		})

	});
</script>

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