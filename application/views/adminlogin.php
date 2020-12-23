<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Vinayak Logistics</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>assets/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>assets/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/styles/style.css">
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<!--<img src="<?= base_url(); ?>assets/vendors/images/deskapp-logo.svg" alt="">-->
					<h2 class="text-center text-primary">Vinayak Logistics</h2>
				</a>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="<?= base_url(); ?>assets/vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Login To Vinayak Logistics</h2>
						</div>
						<!-- Alerts START -->
						<?php if($this->session->flashdata('error')){ ?>
						<div class="alert alert-danger alert-dismissible mb-2" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<strong><?php echo $this->session->flashdata('error'); ?></strong>
						</div>
						<?php } ?>
						<!-- Alerts END -->
						<form method="post" action="<?= base_url();?>admin/adminLoginCheck">
							<div class="input-group custom">
								<input type="text" name="admin_name" class="form-control form-control-lg" placeholder="Username" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<!--<div class="forgot-password"><a href="forgot-password.html">Forgot Password</a></div> -->
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
											<input class="btn btn-primary btn-lg btn-block" name="btnsubmit" type="submit" value="Sign In">
										
										<!--<a class="btn btn-primary btn-lg btn-block" href="index.html">Sign In</a>-->
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="<?= base_url(); ?>assets/vendors/scripts/core.js"></script>
	<script src="<?= base_url(); ?>assets/vendors/scripts/script.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendors/scripts/process.js"></script>
	<script src="<?= base_url(); ?>assets/vendors/scripts/layout-settings.js"></script>
</body>
</html>