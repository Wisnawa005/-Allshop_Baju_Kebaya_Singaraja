<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo site_url('user_login'); ?>">Home</a></li>
		<li class="breadcrumb-item">Detail Product</a></li>
		<li class="breadcrumb-item active" aria-current="page">Kebaya</li>
	</ol>
</nav>

<!-- Start Product Details Area -->
<section class="htc__product__details bg__white ptb--100">
	<!-- Start Product Details Top -->
	<div class="htc__product__details__top">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
					<?php foreach ($barang as $val) : ?>
						<div class="htc__product__details__tab__content">
							<!-- Start Product Big Images -->
							<div class="product__big__images">
								<div class="portfolio-full-image tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
										<img src="<?= base_url("upload/produk/" . $val->foto) ?>" alt="full-image" />
									</div>
									<div role="tabpanel" class="tab-pane fade" id="img-tab-2">
										<img src="<?= base_url("upload/produk/" . $val->foto2) ?>" alt="full-image" />
									</div>
								</div>
							</div>
							<!-- End Product Big Images -->
							<!-- Start Small images -->
							<ul class="product__small__images" role="tablist">
								<li role="presentation" class="pot-small-img active">
									<a href="#img-tab-1" role="tab" data-toggle="tab">
										<img src="<?= base_url("upload/produk/" . $val->foto) ?>" style="width:80px;height:100px" ; alt="small-image" />
									</a>
								</li>
								<li role="presentation" class="pot-small-img">
									<a href="#img-tab-2" role="tab" data-toggle="tab">
										<img src="<?= base_url("upload/produk/" . $val->foto2) ?>" style="width:80px;height:100px" ; alt="small-image" />
									</a>
								</li>
							</ul>
							<!-- End Small images -->
						</div>
						<div class="sin__desc product__share__link">
							<ul class="pro__share">
								Share this:
								<li><a href="#" target="_blank"><i class="icon-social-instagram icons"></i></a></li>

								<li><a href="https://www.facebook.com/Furny/?ref=bookmarks" target="_blank"><i class="icon-social-facebook icons"></i></a></li>
								||berisi like
							</ul>
						</div>

					<?php endforeach ?>
				</div>
				<div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
					<?php foreach ($barang as $val) : ?>
						<div class="ht__product__dtl">
							<h2><?= $val->nama_barang; ?></h2>
							<h6>Kategori: <span><?= $val->ktbarang; ?></span></h6>
							<ul class="rating">
								<li><i class="icon-star icons"></i></li>
								<li><i class="icon-star icons"></i></li>
								<li><i class="icon-star icons"></i></li>
								<li class="old"><i class="icon-star icons"></i></li>
								<li class="old"><i class="icon-star icons"></i></li>
							</ul>
							<ul class="pro__prize">
								<li class="old__prize">
									<span style="text-decoration: line-through;">Rp. <?php echo number_format($val->harga_jual + '55000', 0, ',', '.') ?>,00</span></li>
								<li>Rp. <?php echo number_format($val->harga_jual, 0, ',', '.') ?>,00</li>
							</ul>
							<p class="pro__info"><?= $val->deskripsi; ?></p>
							<div class="ht__pro__desc">
								<div class="sin__desc">
									<p><span>Availability:</span> <?= $val->stok; ?> Buah</p>
								</div>

								<div class="sin__desc align--left">
									<p><span>Categories:</span></p>
									<ul class="pro__cat__list">
										<li><?= $val->ktbarang; ?></a></li>
									</ul>
								</div>
								<div class="sin__desc align--left">
									<p><span>Pengiriman : dari Singaraja</span></p>
								</div>
								<div class="sin__desc align--left">
									<p><span>Kuantitas : Bagus dan Terpecaya</span></p>
								</div>
								<div class="sin__desc align--left">
									<div class="buttons-cart checkout--btn">
										<?= anchor('user_login/tambah_ke_keranjang/' . $val->kode_barang, '<i class="icon-handbag icons"> <b>TAMBAH KERANJANG</b></i>') ?>
										<?= anchor('user_login', '<i class="icon-handbag icons"> <b>BACK</b></i>') ?>
									</div>
								</div>
							<?php endforeach ?>
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
					<li role="presentation" class="description active"><a href="#description" role="tab" data-toggle="tab">Description </a></li>
					<li role="presentation" class="review"><a href="#review" role="tab" data-toggle="tab">Specification</a>
					</li>
					<li role="presentation" class="comment"><a href="#shipping" role="tab" data-toggle="tab">Rating Products</a></li>
				</ul>
				<!-- End List And Grid View -->
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="ht__pro__details__content">
					<!-- Start Single Content -->
					<div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">
						<?php foreach ($barang as $val) : ?>
							<div class="pro__tab__content__inner">
								<h4 class="ht__pro__title">Description</h4>
								<?= $val->deskripsi; ?>
							</div>
					</div>
					<!-- End Single Content -->
					<!-- Start Single Content -->
					<div role="tabpanel" id="review" class="pro__single__content tab-pane fade">
						<div class="pro__tab__content__inner">
							<h4 class="ht__pro__title">Specification</h4>
							<p>Kategori : <?= $val->ktbarang; ?></p>
							<p>Merk : <?= $produsen; ?></p>
							<p>Stok : <?= $val->stok; ?></p>
							<p>Dikirim Dari : <?= $dikirim; ?></p>
						</div>
					</div>
					<!-- End Single Content -->
					<!-- Start Single Content -->
					<div role="tabpanel" id="shipping" class="pro__single__content tab-pane fade">
						<div class="pro__tab__content__inner">
							<p>Penilaian Produk + Commentar</p>
						</div>
					</div>
					<!-- End Single Content -->
				<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Product Description -->
