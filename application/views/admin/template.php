<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All Shop Kebaya Bali</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?= base_url("assets/assets1/css/icons/icomoon/styles.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("assets/assets1/css/bootstrap.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("assets/assets1/css/core.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("assets/assets1/css/components.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("assets/assets1/css/colors.css") ?>" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?= base_url("assets/assets1/js/plugins/loaders/pace.min.js") ?>"></script>
	<script type="text/javascript" src="<?= base_url("assets/assets1/js/core/libraries/jquery.min.js") ?>"></script>
	<script type="text/javascript" src="<?= base_url("assets/assets1/js/core/libraries/bootstrap.min.js") ?>"></script>
	<script type="text/javascript" src="<?= base_url("assets/assets1/js/plugins/loaders/blockui.min.js") ?>"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?= base_url("assets/assets1/js/plugins/visualization/d3/d3.min.js") ?>"></script>
	<script type="text/javascript" src="<?= base_url("assets/assets1/js/plugins/visualization/d3/d3_tooltip.js") ?>"></script>
	<script type="text/javascript" src="<?= base_url("assets/assets1/js/plugins/forms/styling/switchery.min.js") ?>"></script>
	<script type="text/javascript" src="<?= base_url("assets/assets1/js/plugins/forms/styling/uniform.min.js") ?>"></script>
	<script type="text/javascript" src="<?= base_url("assets/assets1/js/plugins/forms/selects/bootstrap_multiselect.js") ?>"></script>
	<script type="text/javascript" src="<?= base_url("assets/assets1/js/plugins/ui/moment/moment.min.js") ?>"></script>
	<script type="text/javascript" src="<?= base_url("assets/assets1/js/plugins/pickers/daterangepicker.js") ?>"></script>

	<script type="text/javascript" src="<?= base_url("assets/assets1/js/core/app.js") ?>"></script>
	<script type="text/javascript" src="<?= base_url("assets/assets1/js/pages/dashboard.js") ?>"></script>

	<script type="text/javascript" src="<?= base_url("assets/assets1/js/plugins/ui/ripple.min.js") ?>"></script>
	<!-- /theme JS files -->
	<!-- <script type='text/javascript' src="<?php echo base_url('ckeditor/ckeditor.js'); ?>"></script> -->

	<script type="text/javascript" src="<?= base_url("ckeditor/ckeditor.js") ?>"> </script>
	<script type="text/javascript" src="<?= base_url("assets/assets1/js/pages/editor_ckeditor.js") ?>"> </script>

</head>


<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse bg-indigo">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?= site_url('shop'); ?>"><img src="" weight="100 px"></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>

		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

				<li class="dropdown">

					<div class="dropdown-menu dropdown-content">

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>
			</ul>

			<div class="navbar-right">
				<p class="navbar-text">Haii, Admin</p>
				<p class="navbar-text"><span class="label bg-success-400">Online</span></p>

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-bell2"></i>
								<span class="visible-xs-inline-block position-right">Activity</span>
								<span class="status-mark border-orange-400"></span>
							</a> -->

						<!-- <div class="dropdown-menu dropdown-content">
								<div class="dropdown-content-heading">
									Activity
									<ul class="icons-list">
										<li><a href="#"><i class="icon-menu7"></i></a></li>
									</ul>
								</div>
							</div> -->
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-default">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user-material">
						<div class="category-content">
							<div class="sidebar-user-material-content">
								<a href="#"><img src="<?= base_url("assets/assets1/images/admin.png") ?>" class="img-circle img-responsive" alt="" style="width:400px; height:210px" /></a>
								<h6>ADMIN</h6>
								<span class="text-size-small"><?= $this->session->userdata('nama'); ?></span>
							</div>

							<div class="sidebar-user-material-menu">
								<a href="#user-nav" data-toggle="collapse"><span>My Account</span> <i class="caret"></i></a>
							</div>
						</div>

						<div class="navigation-wrapper collapse" id="user-nav">
							<ul class="navigation">
								<li><a href="#"><i class="icon-coins"></i> <span>My balance</span></a></li>
								<li><a href="#"><i class="icon-comment-discussion"></i> <span><span class="badge bg-teal-400 pull-right">999</span> Messages</span></a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="icon-cog5"></i> <span>Account settings</span></a></li>
								<li><a href="<?= site_url('login'); ?>"><i class="icon-switch2"></i> <span>Logout</span></a></li>
							</ul>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="<?= site_url('shop') ?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Table Input</span></a>
									<ul>
										<li><a href="<?= site_url('shop/input_barang'); ?>">Input Data Barang</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-copy"></i> <span>Table View</span></a>
									<ul>
										<li><a href="<?= site_url('shop/daftar_barang'); ?>">Tabel View Barang</a></li>
									</ul>
								</li>




								<!-- /main -->


								<!-- Forms -->

								<!-- /forms -->


								<!-- Appearance -->

								<!-- /appearance -->


								<!-- Layout -->

								<!-- /layout -->


								<!-- Data visualization -->

								<!-- /data visualization -->


								<!-- Extensions -->

								<!-- /extensions -->


								<!-- Tables -->

								<!-- /tables -->


								<!-- Page kits -->

								<!-- /page kits -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
						</div>

					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="http://localhost/pariwisata/pariwisata"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Dashboard</li>
						</ul>

						<!-- <ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul> -->
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<?php $this->load->view($content); ?>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>

</html>