<!Doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Allshop Baju Kebaya</title>
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

<body>
	<section class="courses">
		<?php $this->load->view('front_end/beranda'); ?>
	</section>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo site_url('User'); ?>">Home</a></li>
			<li class="breadcrumb-item">CHECKOUT</a></li>
			<li class="breadcrumb-item active" aria-current="page">CART</li>
		</ol>
	</nav>
	<!-- cart-main-area start -->
	<div class="cart-main-area ptb--100 bg__white">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-8">
								<div class="btn btn-sn btn-primary">
									<?php
									$grand_total = 0;
									if ($keranjang = $this->cart->contents()) {
										foreach ($keranjang as $item) {
											$grand_total = $grand_total + $item['subtotal'];
										}

										echo "Total Belanjaan anda: Rp. " . number_format($grand_total, 0, ',', '.');
									?>
								</div><br><br>
								<h3>input alamat pengirim dan metode pembayaran</h3>
							</div><br><br>


							<form method="post" action="<?php echo base_url('User/pesanan') ?> ">
								<div class="col-md-12">
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputnama">Nama Lengkap Anda</label>
											<input type="email" class="form-control" id="inputnama" placeholder="Nama Lengkap">
										</div>
										<div class="form-group col-md-6">
											<label for="inputnomber">No. Telepon/Wa</label>
											<input type="password" class="form-control" id="inputnomber" placeholder="No. Telepon/Wa Aktif">
										</div>
									</div>
									<div class="form-group col-md-6">
										<label for="inputalamat">Alamat</label>
										<input type="text" class="form-control" id="inputalamat" placeholder="Alamat Lengkap Anda">
									</div>
									<div class="form-group col-md-6">
										<label for="inputkode">Kode POS</label>
										<input type="text" class="form-control" id="inputkode" placeholder="Masukan kode POS">
									</div>

									<div class="form-row">
										<div class="form-group col-md-2">
											<label for="inputprovensi">Provensi</label>
											<input type="text" class="form-control" id="inputprovensi" disabled value="Bali">
										</div>
										<div class="form-group col-md-2">
											<label for="inputkabupaten">Kabupaten/Kota</label>
											<select id="inputkabupaten" class="form-control">
												<option selected>Choose...</option>
												<option>BULELENG</option>
												<option>BANGLI</option>
												<option>KARANGASEM</option>
												<option>TABANAN</option>
												<option>GIANYAR</option>
												<option>KLUNGKUNG</option>
												<option>JEMBRANA</option>
												<option>BADUNG</option>
												<option>DENPASAR</option>
											</select>
										</div>
										<div class="form-group col-md-2">
											<label for="inputkecamatan">Kecamatan</label>
											<select id="inputkecamatan" class="form-control">
												<option selected>Choose...</option>
												<option>BANJAR</option>
												<option>BULELENG</option>
												<option>BUSUNG BIU</option>
												<option>GEROKGAK</option>
												<option>KUBUTAMBAHAN</option>
												<option>SAWAN</option>
												<option>SERIRIT</option>
												<option>SUKASADA</option>
												<option>TEJAKULA</option>
											</select>
										</div>
										<div class="form-group col-md-2">
											<label for="inputState">Jasa Pengiriman</label>
											<select id="inputState" class="form-control">
												<option selected>Choose...</option>
												<option>JNE</option>
												<option>JNT</option>
												<option>TIKI</option>
												<option>POS</option>
											</select>
										</div>
										<div class="form-group col-md-2">
											<label for="inputtransaksi">Metode Transaksi</label>
											<select id="inputtransaksi" class="form-control">
												<option selected>Choose...</option>
												<option>BRI</option>
												<option>BNI</option>
												<option>ALFAMART</option>
												<option>INDOMART</option>
											</select>
										</div>
									</div>
									<div class="form-group col-md-6">
										<label for="catatanpelanggan">Catatan</label>
										<textarea class="form-control" id="catatanpelanggan" rows="5"></textarea>
									</div>
									<div class="form-group col-md-12">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="gridCheck">
											<label class="form-check-label" for="gridCheck">
												Check me out
											</label>
										</div>
									</div>
									<div class="col-md-12">
										<button type="submit" class="btn btn-success">Order</button>
									</div>
								</div>
							</form>
						<?php
									} else {
										echo "Keranjang Belanja Anda Masih Kosong";
									}
						?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- cart-main-area end -->

	<!-- End Banner Area -->
	<section class="courses">
		<?php $this->load->view('front_end/footer'); ?>
	</section>

	<!-- Placed js at the end of the document so the pages load faster -->

	<!-- jquery latest version -->
	<script type='text/javascript' src="<?php echo base_url('assets/user/js/vendor/jquery-3.2.1.min.js') ?>"></script>
	<!-- Bootstrap framework js -->
	<script type='text/javascript' src="<?php echo base_url('assets/user/js/bootstrap.min.js') ?>"></script>
	<!-- All js plugins included in this file. -->
	<script type='text/javascript' src="<?php echo base_url('assets/user/js/plugins.js') ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('assets/user/js/slick.min.js') ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('assets/user/js/owl.carousel.min.js') ?>"></script>
	<!-- Waypoints.min.js. -->
	<script type='text/javascript' src="<?php echo base_url('assets/user/js/waypoints.min.js') ?>"></script>
	<!-- Main js file that contents all jQuery plugins activation. -->
	<script type='text/javascript' src="<?php echo base_url('assets/user/js/main.js') ?>"></script>

</body>

</html>