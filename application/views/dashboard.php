<?php include('header.php');?>


	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart"><img src="<?= base_url();?>assets/vendors/images/employee.jpg"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><?= count($totalemployees); ?></div>
								<div class="weight-600 font-14">Employees</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart2"><img src="<?= base_url();?>assets/vendors/images/company.png"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><?= count($totalcompanies); ?></div>
								<div class="weight-600 font-14">Company</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart3"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">350</div>
								<div class="weight-600 font-14">Campaign</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart4"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">6060</div>
								<div class="weight-600 font-14">Worth</div>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>

<?php include('footer.php');?>