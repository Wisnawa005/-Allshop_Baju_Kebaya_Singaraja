	  <!-- START CARAOSEL -->
	  <!-- Start Slider Area -->
	  <h2>
	  	<center><b>
	  			<?php if ($this->session->flashdata('berhasil')) {
						echo '<div class="alert alert-info">';
						echo $this->session->flashdata('berhasil');
						echo '</div>';
					} ?>
	  		</b>
	  	</center>
	  </h2>
	  <div class="slider__container slider--one bg__cat--3">
	  	<div class="slide__container slider__activation__wrap owl-carousel">
	  		<!-- Start Single Slide -->
	  		<div class="single__slide animation__style01 slider__fixed--height">
	  			<div class="container">
	  				<div class="row align-items__center">
	  					<div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
	  						<div class="slide">
	  							<div class="slider__inner">
	  								<h2>Allshop Baju Kebaya Singaraja</h2>
	  								<h1>Natural</h1>
	  								<!-- <div class="cr__btn">
                                            <a href="cart.html">Shop Now</a>
                                        </div> -->
	  							</div>
	  						</div>
	  					</div>
	  					<div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
	  						<div class="slide__thumb">
	  							<img src="<?php echo base_url('assets/user/images/slider/fornt-img/2.jpg') ?>" alt="slider images">
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
	  		<!-- End Single Slide -->
	  		<!-- Start Single Slide -->
	  		<div class="single__slide animation__style01 slider__fixed--height">
	  			<div class="container">
	  				<div class="row align-items__center">
	  					<div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
	  						<div class="slide">
	  							<div class="slider__inner">
	  								<h2>Allshop Baju Kebaya Singaraja</h2>
	  								<h1>Yellow Claw</h1>
	  								<!-- <div class="cr__btn">
                                            <a href="cart.html">Shop Now</a>
                                        </div> -->
	  							</div>
	  						</div>
	  					</div>
	  					<div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
	  						<div class="slide__thumb">
	  							<img src="<?php echo base_url('assets/user/images/slider/fornt-img/1.jpg') ?>" alt="slider images">
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
	  		<!-- End Single Slide -->
	  	</div>
	  </div>

	  <!-- END CARAOSEL -->

	  <!-- START NEW ARRIVALS -->
	  <!-- Start Slider Area -->
	  <!-- Start Category Area -->
	  <section class="htc__category__area ptb--100">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-xs-12">
	  				<div class="section__title--2 text-center">
	  					<h2 class="title__line">New Arrivals</h2>
	  					<p>Pilihlah Produk Terbaru dari kami original dari Allshop Baju Kebaya kawasan Sinngaraja
	  					</p>
	  				</div>
	  			</div>
	  		</div>
	  		<?php foreach ($barang as $brg) : ?>
	  			<div class="htc__product__container">
	  				<div class="product__list clearfix">
	  					<!-- Start Single Category -->
	  					<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
	  						<div class="category">
	  							<div class="ht__cat__thumb">
	  								<img src="<?php echo base_url() . '/upload/produk/' . $brg->foto ?>" alt="product images">
	  								</a>
	  							</div>

	  							<!-- fitur menambah tambah_ke_keranjang -->
	  							<div class="fr__hover__info">
	  								<ul class="product__action">
	  									<li>
	  										<?php echo anchor('user_login/tambah_ke_keranjang/' . $brg->kode_barang, '<i class="icon-handbag icons"></i>') ?>
	  									</li>
	  									<li><a href="#"><i class="icon-heart icons"></i></a></li>
	  									<!-- link detail berang -->
	  									<li>
	  										<?php echo anchor('user_login/detail_barang/' . $brg->kode_barang, '<i class="icon-info icons"></i>') ?>
	  									</li>
	  								</ul>
	  							</div>
	  							<!-- fitur menambah tambah_ke_keranjang -->

	  							<div class="fr__product__inner">
	  								<h4>
	  									<a href="<?php echo site_url('user_login/detail_barang/' . $brg->kode_barang); ?>"><?php echo $brg->nama_barang ?></a>
	  								</h4>
	  								<ul class="fr__pro__prize">
	  									<li>Rp. <?php echo number_format($brg->harga_jual, 0, ',', '.') ?></li>
	  								</ul>
	  							</div>
	  						</div>
	  					</div>
	  					<!-- End Single Category -->

	  				<?php endforeach; ?>
	  				</div>
	  			</div>
	  	</div>
	  </section>
	  <!-- End Category Area -->
	  <!-- END NEW ARRIVALS -->

	  <!-- START BEST SELLER -->
	  <!-- Start Prize Good Area -->
	  <section class="htc__good__sale bg__cat--3">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
	  				<div class="fr__prize__inner">
	  					<h2>Spesial untuk pelanggan terbaik kami</h2>
	  					<h3>Promo Hari Paskah & Bulan April</h3>
	  					<a class="fr__btn" href="#">Read More</a>
	  				</div>
	  			</div>
	  			<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
	  				<div class="prize__inner">
	  					<div class="prize__thumb">
	  						<img src="<?php echo base_url('assets/user/images/banner/promo.jpg') ?>" alt="banner images">

	  					</div>
	  					<div class="banner__info">
	  						<div class="pointer__tooltip pointer--3 align-left">
	  							<div class="tooltip__box">
	  								<h4>Selamat Hari Paskah</h4>
	  								<p>Hari terpenting dalam tahun liturgi gerejawi Kristen</p>
	  							</div>
	  						</div>
	  						<div class="pointer__tooltip pointer--4 align-top">
	  							<div class="tooltip__box">
	  								<h4>Logo Kami</h4>
	  								<p>Ini merupakan logo resmi dari website kami.</p>
	  							</div>
	  						</div>
	  						<div class="pointer__tooltip pointer--5 align-bottom">
	  							<div class="tooltip__box">
	  								<h4>New!</h4>
	  								<p>Buruan tambahkan ke keranjang belanjaan anda!</p>
	  							</div>
	  						</div>
	  						<div class="pointer__tooltip pointer--6 align-top">
	  							<div class="tooltip__box">
	  								<h4>Info!</h4>
	  								<p>Silahkan klik "Read More" untuk membaca info lebih jauh</p>
	  							</div>
	  						</div>
	  						<div class="pointer__tooltip pointer--7 align-top">
	  							<div class="tooltip__box">
	  								<h4>Harga Murah</h4>
	  								<p>Karena hari spesial maka terdapat pula harga yang spesial dengan produk
	  									berkualitas</p>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  </section>
	  <!-- End Prize Good Area -->
	  <!-- END BEST SELLER -->
