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

	<?php foreach ($kebaya1 as $val) { ?>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo site_url('Tampilan'); ?>">Home</a></li>
				<li class="breadcrumb-item"><a href="#"><?= $val['nama_ktbarang']; ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><?= $val['nama_barang']; ?></li>
			</ol>
		</nav>
		<!-- Start Product Details Area -->
		<section class="htc__product__details bg__white ptb--100">
			<!-- Start Product Details Top -->
			<div class="htc__product__details__top">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
							<div class="htc__product__details__tab__content">
								<!-- Start Product Big Images -->
								<div class="product__big__images">
									<div class="portfolio-full-image tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
											<img src="<?= base_url("upload/produk/" . $val['foto']) ?>" alt="full-image" />
										</div>
										<div role="tabpanel" class="tab-pane fade" id="img-tab-2">
											<img src="<?= base_url("upload/produk/" . $val['foto2']) ?>" alt="full-image" />

										</div>
									</div>
								</div>
								<!-- End Product Big Images -->
								<!-- Start Small images -->
								<ul class="product__small__images" role="tablist">
									<li role="presentation" class="pot-small-img active">
										<a href="#img-tab-1" role="tab" data-toggle="tab">
											<img src="<?= base_url("upload/produk/" . $val['foto']) ?>" style="width:80px;height:100px" ; alt="small-image" />
										</a>
									</li>
									<li role="presentation" class="pot-small-img">
										<a href="#img-tab-2" role="tab" data-toggle="tab">
											<img src="<?= base_url("upload/produk/" . $val['foto2']) ?>" style="width:80px;height:100px" ; alt="small-image" />
										</a>
									</li>
								</ul>
								<!-- End Small images -->
							</div>
						</div>
						<div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
							<div class="ht__product__dtl">
								<h2><?= $val['nama_barang']; ?></h2>
								<h6>Model: <span><?= $val['nama_ktbarang']; ?></span></h6>
								<ul class="rating">
									<li><i class="icon-star icons"></i></li>
									<li><i class="icon-star icons"></i></li>
									<li><i class="icon-star icons"></i></li>
									<li class="old"><i class="icon-star icons"></i></li>
									<li class="old"><i class="icon-star icons"></i></li>
								</ul>
								<ul class="pro__prize">
									<li class="old__prize">
										<span style="text-decoration: line-through;">Rp.170.000,00</span></li>
									<li>Rp. <?= $val['harga_jual']; ?></li>
								</ul>
								<p class="pro__info"><?= $val['deskripsi']; ?></p>
								<div class="ht__pro__desc">
									<div class="sin__desc">
										<p><span>Availability:</span> In Stock</p>
									</div>
									<div class="sin__desc align--left">
										<p><span>size</span></p>
										<select class="select__size">
											<option>M ld 88</option>
											<option>L ld 92</option>
											<option>XL ld 100</option>
											<option>On model size M</option>
										</select>
									</div>
									<div class="sin__desc align--left">
										<p><span>Categories:</span></p>
										<ul class="pro__cat__list">
											<li><a href="#">Fashion,</a></li>
											<li><a href="#"><?= $val['nama_ktbarang']; ?>,</a></li>
											<li><a href="#">Trend</a></li>
										</ul>
									</div>

									<div class="sin__desc product__share__link">
										<p><span>Share this:</span></p>
										<ul class="pro__share">
											<li><a href="#" target="_blank"><i class="icon-social-twitter icons"></i></a>
											</li>

											<li><a href="#" target="_blank"><i class="icon-social-instagram icons"></i></a>
											</li>

											<li><a href="#" target="_blank"><i class="icon-social-facebook icons"></i></a>
											</li>

											<li><a href="#" target="_blank"><i class="icon-social-google icons"></i></a>
											</li>
										</ul>
									</div>

									<br>
									<img src="<?php echo base_url('assets/user/images/icons/keranjang.png') ?>" style="width:45px;height:45px" ; alt="buy" /> &nbsp;
									<button type="button" class="btn btn-danger">Masukan Ke Keranjang</button> &nbsp;
									<button class="btn btn-primary" type="submit">Beli Sekarang</button>
									</br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Product Details Top -->
		</section>
		<!-- End Product Details Area -->

		<!-- Start Product Description -->
		<section class="htc__produc__decription bg__white">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<!-- Start List And Grid View -->
						<ul class="pro__details__tab" role="tablist">
							<li role="presentation" class="description active"><a href="#description" role="tab" data-toggle="tab">description</a></li>
							<li role="presentation" class="transaksi"><a href="#spesifikasi" role="tab" data-toggle="tab">spesifikasi produk</a></li>
							<li role="presentation" class="penilaian produk"><a href="#penilaian" role="tab" data-toggle="tab">penilaian produk</a></li>
						</ul>
						<!-- End List And Grid View -->
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="ht__pro__details__content">
							<!-- Start Single Content -->
							<div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">
								<div class="pro__tab__content__inner">
									<h4 class="ht__pro__title"><?= $val['nama_barang']; ?></h4>
									<p><?= $val['deskripsi']; ?></p>
								</div>
							</div>
							<!-- End Single Content -->
							<!-- Start Single Content -->
							<div role="tabpanel" id="spesifikasi" class="pro__single__content tab-pane fade">
								<div class="pro__tab__content__inner">
									<h4 class="ht__pro__title">Kategori</h4>
									<p><?= $val['nama_ktbarang']; ?></p>
									<h4 class="ht__pro__title">Stok</h4>
									<p><?= $val['stok']; ?></p>
									<h4 class="ht__pro__title">Dikirim Dari :</h4>
									<p>Banyuning, Singaraja, Bali</p>
									<h4 class="ht__pro__title">Perhatian! </h4>
									<p>Barang yg sdh dbeli tidak bs dtukar kembali, jika ada rijek/ rusak pd saat pengiriman bs di retur dgn ketentuan ongkir dtanggung pembeli. Brang yg sdh dkirim sdh melalui proses pemeriksaan shg tdk mungkin kami mengirimkan brang yg rijek, jika ada rijek/rusak pda saat pengemasan pngiriman itu bkn tanggung jawab kami spenuhnya, tp jika brang mau dtukar bisa dgn syarat ongkir ditanggung pembeli. </p>
								</div>
							</div>
							<!-- End Single Content -->
							<!-- Start Single Content -->
							<div role="tabpanel" id="penilaian" class="pro__single__content tab-pane fade">
								<div class="pro__tab__content__inner">
									<h4 class="ht__pro__title">Belum ada penilaian</h4>
								</div>
							</div>
							<!-- End Single Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Product Description -->
	<?php } ?>

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