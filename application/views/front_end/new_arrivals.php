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
        										<?php echo anchor('User/tambah_ke_keranjang/' . $brg->kode_barang, '<i class="icon-handbag icons"></i>') ?>
        									</li>
        									<li><a href="#"><i class="icon-heart icons"></i></a></li>
        									<li>
        										<?php echo anchor('User/detail_barang/' . $brg->kode_barang, '<i class="icon-shuffle icons"></i>') ?>
        									</li>
        								</ul>
        							</div>
        							<!-- fitur menambah tambah_ke_keranjang -->

        							<div class="fr__product__inner">
        								<h4>
        									<a href="<?php echo site_url('User/produk1'); ?>"><?php echo $brg->nama_barang ?></a>
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