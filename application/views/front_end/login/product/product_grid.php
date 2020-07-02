<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo site_url('user_login'); ?>">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
	</ol>
</nav>
<!-- Start Product Grid -->
<section class="htc__product__grid bg__white ptb--100">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">
				<div class="htc__product__rightidebar">
					<div class="htc__grid__top">
						<div class="ht__pro__qun">
							<span>Showing 1-12 of 1033 products</span>
						</div>
						<!-- Start List And Grid View -->
						<ul class="view__mode" role="tablist">
							<li role="presentation" class="grid-view active"><a href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
							<li role="presentation" class="list-view"><a href="#list-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
						</ul>
						<!-- End List And Grid View -->
					</div>
					<!-- Start Product View -->
					<div class="row">
						<div class="shop__grid__view__wrap">
							<div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
								<!-- Start Single Product -->
								<?php foreach ($barang_all as $brg) : ?>
									<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
										<div class="category">
											<div class="ht__cat__thumb">
												<a href="product-details.html">
													<img src="<?php echo base_url() . '/upload/produk/' . $brg['foto'] ?>" alt="product images">
												</a>
											</div>
											<div class="fr__hover__info">
												<ul class="product__action">
													<li><?php echo anchor('user_login/tambah_ke_keranjang/' . $brg['kode_barang'], '<i class="icon-handbag icons"></i>') ?></li>
													<li><?php echo anchor('user_login/tambah_ke_wishlist/' . $brg['kode_barang'], '<i class="icon-heart icons"></i>') ?></li>
													<li><?php echo anchor('user_login/detail_barang/' . $brg['kode_barang'], '<i class="icon-info icons"></i>') ?></li>
												</ul>
											</div>
											<div class="fr__product__inner">
												<h4><a href="<?php echo site_url('user_login/detail_barang/' . $brg['kode_barang']); ?>"><?php echo $brg['nama_barang'] ?></a></h4>
												<ul class="fr__pro__prize">
													<li>Rp. <?php echo number_format($brg['harga_jual'], 0, ',', '.') ?></li>
												</ul>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
								<!-- End Single Product -->
							</div>

							<div role="tabpanel" id="list-view" class="single-grid-view tab-pane fade clearfix">
								<div class="col-xs-12">
									<div class="ht__list__wrap">
										<!-- Start List Product -->
										<?php foreach ($barang_all as $brg) : ?>
											<div class="ht__list__product">
												<div class="ht__list__thumb">
													<a href="<?php echo site_url('user_login/detail_barang/' . $brg['kode_barang']); ?>"><img src="<?php echo base_url('/upload/produk/') . $brg['foto'] ?>" alt="product images"></a>
												</div>
												<div class="htc__list__details">
													<h2><a href="<?php echo site_url('user_login/detail_barang/' . $brg['kode_barang']); ?>"><?php echo $brg['nama_barang'] ?></a></h2>
													<ul class="pro__prize">
														<li class="old__prize">
															<span style="text-decoration: line-through;">Rp. <?php echo number_format($brg['harga_jual'] + '55000', 0, ',', '.') ?>,00</span></li>
														<li>Rp. <?php echo number_format($brg['harga_jual'], 0, ',', '.') ?>,00</li>
													</ul>
													<ul class="rating">
														<li><i class="icon-star icons"></i></li>
														<li><i class="icon-star icons"></i></li>
														<li><i class="icon-star icons"></i></li>
														<li class="old"><i class="icon-star icons"></i></li>
														<li class="old"><i class="icon-star icons"></i></li>
													</ul>
													<p><?php echo $brg['deskripsi'] ?></p>
													<div class="fr__list__btn">
														<a class="fr__btn" href="<?php echo site_url('user_login/tambah_ke_keranjang/' . $brg['kode_barang']); ?>">Add To Cart</a>
													</div>
												</div>
											</div>
										<?php endforeach; ?>
										<!-- End List Product -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Product View -->
				</div>
				<!-- Start Pagenation -->
				<div class="row">
					<div class="div col-xs-12">
						<?= $this->pagination->create_links(); ?>
					</div>
				</div>
				<!-- End Pagenation -->
			</div>
			<div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 col-sm-12 col-xs-12 smt-40 xmt-40">
				<div class="htc__product__leftsidebar">
					<!-- Start Prize Range -->
					<div class="htc-grid-range">
						<h4 class="title__line--4">Price</h4>
						<div class="content-shopby">
							<div class="price_filter s-filter clear">
								<form action="#" method="GET">
									<div id="slider-range"></div>
									<div class="slider__range--output">
										<div class="price__output--wrap">
											<div class="price--output">
												<span>Price :</span><input type="text" id="amount" readonly>
											</div>
											<div class="price--filter">
												<a href="#">Filter</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- End Prize Range -->
					<!-- Start Category Area -->
					<div class="htc__category">
						<h4 class="title__line--4">categories</h4>
						<ul class="ht__cat__list">
							<li><a href="<?= base_url('user_login/kebaya/'); ?>">Kebaya</a></li>
							<li><a href="<?= base_url('user_login/selendang/'); ?>">Selendang</a></li>
							<li><a href="<?= base_url('user_login/dress/'); ?>">Dress</a></li>
							<li><a href="<?= base_url('user_login/kebaya_anak/'); ?>">Kebaya Anak</a></li>
							<li><a href="<?= base_url('user_login/accessories/'); ?>">Accessories</a></li>
							<li><a href="<?= base_url('user_login/kamben/'); ?>">Kamben</a></li>
						</ul>
					</div>
					<!-- End Category Area -->

					<!-- Start Tag Area -->
					<div class="htc__tag">
						<h4 class="title__line--4">tags</h4>
						<ul class="ht__tag__list">
							<li><a href="<?= base_url('user_login/kebaya/'); ?>">Kebaya</a></li>
							<li><a href="<?= base_url('user_login/selendang/'); ?>">Selendang</a></li>
							<li><a href="<?= base_url('user_login/dress/'); ?>">Dress</a></li>
							<li><a href="<?= base_url('user_login/kebaya_anak/'); ?>">Kebaya Anak</a></li>
							<li><a href="<?= base_url('user_login/accessories/'); ?>">Accessories</a></li>
							<li><a href="<?= base_url('user_login/kamben/'); ?>">Kamben</a></li>
						</ul>
					</div>
					<!-- End Tag Area -->

				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Product Grid -->
