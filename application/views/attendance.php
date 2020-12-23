<?php include('header.php'); ?>
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
							<h4>Add Attendance</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a href="<?php echo base_url().'attendance'; ?>" class="btn btn-secondary scroll-click" rel="content-y" role="button">Attendance List</a>
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
					<div class="col-md-6 col-sm-12 text-right">
						<a href="#"><button type="button" class="btn btn-danger" id="">Delete</button></a>
						<a href="#"><button type="button" id="" class="btn btn-info">Edit</button></a>
					</div>
				</div>
				</div>
				<div class="pb-20" style="overflow-x:auto;">
					<form action="<?php echo base_url().'attendance/attendance'; ?>" method="post">
 						 <div class="form-group">
							<table class="checkbox-datatable table nowrap" id="attendance_bulk">
								<tr>
									<th>Company Id</th>
									<th>Attendance Date</th>
									<th>Equipment Desc</th>
									<th>Vehicle Id</th>
									<th>Employee Id</th>
									<th>Start Date Time</th>
									<th>End Date Time</th>
									<th>Net Hours</th>
									<th>Extra Hours</th>
									<th>Break Down</th>
									<th>Start KM</th>
									<th>End KM</th>
									<th>Type</th>
									<th>Diesel In Litre</th>
									<th>Remark</th>
									<th>Date Added</th>
									<th>Date Modified</th>
									<th>Add Or Remove</th>
								</tr>
								<tr>
									<td><input type="number" class="form-control inputsize" id="company_id" name="company_id[]" value=""></td>
									<!-- <td><input type="number" class="form-control inputsize" id="admin_id" name="admin_id[]" value=""></td> -->
									<td><input type="date" class="form-control inputsize" id="attendance_date" name="attendance_date[]" value=""></td>
									<td><input type="text" class="form-control inputsize" id="equipment_description" name="equipment_description[]" value=""></td>
									<td><input type="number" class="form-control inputsize" id="vehicle_id" name="vehicle_id[]" value=""></td>
									<td><input type="number" class="form-control inputsize" id="employee_id" name="employee_id[]" value=""></td>
									<td><input type="datetime-local" class="form-control inputsize" id="start_date_time" name="start_date_time[]" value=""></td>
									<td><input type="datetime-local" class="form-control inputsize" id="end_date_time" name="end_date_time[]" value=""></td>
									<td><input type="number" class="form-control inputsize" id="net_hours" name="net_hours[]" value=""></td>
									<td><input type="number" class="form-control inputsize" id="extra_hours" name="extra_hours[]" value=""></td>
									<td><input type="text" class="form-control inputsize" id="break_down" name="break_down[]" value=""></td>
									<td><input type="number" class="form-control inputsize" id="start_km" name="start_km[]" value=""></td>
									<td><input type="number" class="form-control inputsize" id="end_km" name="end_km[]" value=""></td>
									<td><input type="text" class="form-control inputsize" id="type" name="type[]" value=""></td>
									<td><input type="number" class="form-control inputsize" id="diesel_in_litre" name="diesel_in_litre[]" value=""></td>
									<td><input type="text" class="form-control inputsize" id="remark" name="remark[]" value=""></td>
									<td><input type="date" class="form-control inputsize" id="date_added" name="date_added[]" value=""></td>
									<td><input type="date" class="form-control inputsize" id="date_modified" name="date_modified[]" value=""></td>
									<td><input class="btn btn-success" type="button" id="add" name="addid" value="Add"></td>
								</tr>
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
<?php include('footer.php'); ?>