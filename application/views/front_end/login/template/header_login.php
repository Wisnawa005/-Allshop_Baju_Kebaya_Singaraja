<!Doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?= $title; ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico in the root directory -->
	<link href="<?php echo base_url('assets/user/images/favicon.ico') ?>" rel="shortcut icon" type="image/x-icon">
	<link href="<?php echo base_url('assets/user/apple-touch-icon.png') ?>" rel="apple-touch-icon">


	<!-- All css files are included here. -->
	<!-- Bootstrap fremwork main css -->
	<link href="<?php echo base_url('assets/user/css/bootstrap.min.css') ?>" rel="stylesheet">
	<!-- Owl Carousel min css -->
	<link href="<?php echo base_url('assets/user/css/owl.carousel.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/user/css/owl.theme.default.min.css') ?>" rel="stylesheet">
	<!-- This core.css file contents all plugings css file. -->
	<link href="<?php echo base_url('assets/user/css/core.css') ?>" rel="stylesheet">
	<!-- Theme shortcodes/elements style -->
	<link href="<?php echo base_url('assets/user/css/shortcode/shortcodes.css') ?>" rel="stylesheet">
	<!-- Theme main style -->
	<link href="<?php echo base_url('assets/user/style.css') ?>" rel="stylesheet">
	<!-- Responsive css -->
	<link href="<?php echo base_url('assets/user/css/responsive.css') ?>" rel="stylesheet">
	<!-- User style -->
	<link href="<?php echo base_url('assets/user/css/custom.css') ?>" rel="stylesheet">


	<!-- Modernizr JS -->
	<script type='text/javascript' src="<?php echo base_url('assest/js/vendor/modernizr-3.5.0.min.js') ?>"></script>
</head>

<!-- Body main wrapper start -->
<div class="wrapper">
	<!-- Start Header Style -->
	<header id="htc__header" class="htc__header__area header--one">
		<!-- Start Mainmenu Area -->
		<div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
			<div class="container">
				<div class="row">
					<div class="menumenu__container clearfix">
						<div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
							<div class="logo">
								<a href="<?php echo site_url('user_login'); ?>">
									<img src="<?php echo base_url('assets/user/images/logo/logo.png') ?>" alt="logo images"></a>
							</div>
						</div>
						<div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
							<nav class="main__menu__nav hidden-xs hidden-sm">
								<ul class="main__menu">
									<li class="drop"><a href="<?php echo site_url('user_login'); ?>">Home</a></li>
									<li class="drop"><a href="#">Produk</a>
										<ul class="dropdown">
											<li><a href="<?= base_url('user_login/product_grid') ?>">Product Grid</a></li>
											<li><a href="<?= base_url('user_login/detail_keranjang_belanja') ?>">cart</a></li>
											<li><a href="<?= base_url('user_login/checkout') ?>">checkout</a></li>
											<li><a href="<?= base_url('user_login/wishlist') ?>">wishlist</a></li>
										</ul>
									</li>
									<!-- <li class="drop"><a href="<?= base_url('user_login/blog') ?>">blog</a></li> -->
									<li><a href="<?php echo site_url('user_login/kontak'); ?>">contact</a></li>
									<li><a href="<?php echo site_url('user_login/about'); ?>">About Us</a></li>
								</ul>
							</nav>
						</div>
						<div class="mobile-menu clearfix visible-xs visible-sm">
							<nav id="mobile_dropdown">
								<ul>
									<li><a href="<?php echo site_url('user_login'); ?>">Home</a></li>
									<li><a href="<?= base_url('user_login/about') ?>">About</a></li>
									<li><a href="#">pages</a>
										<ul>
											<li><a href="<?= base_url('user_login/detail_keranjang_belanja') ?>">Cart page</a></>
											<li><a href="<?= base_url('user_login/checkout') ?>">checkout</a></li>
											<li><a href="<?php echo site_url('user_login/kontak'); ?>">contact</a></li>
											<li><a href="<?= base_url('user_login/product_grid') ?>">product grid</a></li>
											<li>
												<?php echo anchor('user_login/wishlist') ?>
											</li>
										</ul>
									</li>
									<li><a href="<?php echo site_url('user_login/kontak'); ?>">contact</a></li>
								</ul>
							</nav>
						</div>
						<div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
							<div class="header__right">
								<div class="header__search search search__open">
									<a href="#"><i class="icon-magnifier icons"></i></a>
								</div>

								<div class="header__account">
									<a href="<?= base_url('user_login/account') ?>"><i class="icon-user icons"></i></a>
								</div>
								<!-- fitur detail keranjang belanja -->
								<div class="htc__shopping__cart">
									<a class="cart__menu" href="#">
										<?php
										$keranjang = '<i class="icon-handbag icons"></i>' . $this->cart->total_items() . ''
										?>
										<?php echo anchor('user_login/detail_keranjang_belanja', $keranjang) ?>
									</a>
								</div>
								<!-- fitur detail keranjang belanja -->
							</div>
						</div>
					</div>
				</div>
				<div class="mobile-menu-area"></div>
			</div>
		</div>
		<!-- End Mainmenu Area -->
	</header>
	<!-- End Header Area -->
	<div class="body__overlay"></div>
	<!-- Start Offset Wrapper -->
	<div class="offset__wrapper">
		<!-- Start Search Popap -->
		<div class="search__area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="search__inner">
							<form action="#" method="get">
								<input placeholder="Search here... " type="text">
								<button type="submit"></button>
							</form>
							<div class="search__close__btn">
								<span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Cart Panel -->
	</div>
	<!-- End Offset Wrapper -->
