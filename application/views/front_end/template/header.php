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
								<a href="<?php echo site_url('User'); ?>">
									<img src="<?php echo base_url('assets/user/images/logo/logo.png') ?>" alt="logo images"></a>
							</div>
						</div>
						<div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
							<nav class="main__menu__nav hidden-xs hidden-sm">
								<ul class="main__menu">
									<li class="drop"><a href="<?php echo site_url('User'); ?>">Home</a></li>
									<li class="drop"><a href="#">Produk</a>
										<ul class="dropdown mega_dropdown">
											<!-- Start Single Mega MEnu -->
											<li><a class="mega__title" href="#">Shop Pages</a>
												<ul class="mega__item">
													<li><a href="product-grid.html">Product Grid</a></li>
													<li><a href="cart.html">cart</a></li>
													<li><a href="checkout.html">checkout</a></li>
													<li><a href="wishlist.html">wishlist</a></li>
												</ul>
											</li>
											<!-- End Single Mega MEnu -->
											<!-- Start Single Mega MEnu -->
											<li><a class="mega__title" href="#">Variable Product</a>
												<ul class="mega__item">
													<li><a href="#">Category</a></li>
													<li><a href="#">My Account</a></li>
													<li><a href="wishlist.html">Wishlist</a></li>
													<li><a href="cart.html">Shopping Cart</a></li>
												</ul>
											</li>
											<!-- End Single Mega MEnu -->
											<!-- Start Single Mega MEnu -->
											<li><a class="mega__title" href="#">Product Types</a>
												<ul class="mega__item">
													<li><a href="#">Simple Product</a></li>
													<li><a href="#">Variable Product</a></li>
													<li><a href="#">Grouped Product</a></li>
													<li><a href="product-grid.html">Product Grid</a></li>
													<li><a href="product-details.html">Product Details</a></li>
												</ul>
											</li>
											<!-- End Single Mega MEnu -->
										</ul>
									</li>
									<li class="drop"><a href="blog.html">blog</a>
										<ul class="dropdown">
											<li><a href="blog.html">Blog Grid</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
										</ul>
									</li>
									<li><a href="<?php echo site_url('User/kontak'); ?>">contact</a></li>
								</ul>
							</nav>
							<div class="mobile-menu clearfix visible-xs visible-sm">
								<nav id="mobile_dropdown">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="blog.html">blog</a></li>
										<ul>
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
											<li><a href="cart.html">Cart page</a></li>
											<li><a href="checkout.html">checkout</a></li>
											<li><a href="contact.html">contact</a></li>
											<li><a href="product-grid.html">product grid</a></li>
											<li><a href="product-details.html">product details</a></li>
											<li><a href="wishlist.html">wishlist</a></li>
										</ul>
										</li>
										<li><a href="contact.html">contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
							<div class="header__right">
								<div class="header__search search search__open">
									<a href="#"><i class="icon-magnifier icons"></i></a>
								</div>
								<div class="header__account">
									<a href="<?= base_url('auth') ?>"><i class="icon-user icons"></i></a>
								</div>

								<!-- fitur detail keranjang belanja -->
								<div class="htc__shopping__cart">
									<a class="cart__menu" href="#">
										<?php
										$keranjang = '<i class="icon-handbag icons"></i>'
										?>
										<?php echo anchor('User/detail_keranjang_belanja', $keranjang) ?>
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
