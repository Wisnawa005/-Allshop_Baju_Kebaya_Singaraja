	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo site_url('User'); ?>">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">CART</li>
		</ol>
	</nav>
	<!-- cart-main-area start -->
	<div class="cart-main-area ptb--100 bg__white">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<form action="#">
						<div class="table-content table-responsive">

							<!-- hapus semua keranjang belanja -->
							<?php if ($this->session->flashdata('sukses')) {
								echo '<div class="alert alert-warning">';
								echo $this->session->flashdata('sukses');
								echo '</div>';
							} ?>
							<table>
								<tr>
									<th class="product-thumbnail">no</th>
									<th class="product-thumbnail">produk</th>
									<th class="product-name">nama produk</th>
									<th class="product-price">harga</th>
									<th class="product-quantity">jumlah</th>
									<th class="product-subtotal">Total</th>
									<th class="product-remove">Action</th>
								</tr>
								<?php
								$i = 1;
								foreach ($this->cart->contents() as $items) :
									// $kode_barang = $items['id'];
									// $barang = $this->M_user->tampil_data($kode_barang);
									// echo form_hidden('cart[' . $items['id'] . '][id]', $items['id']);
									// echo form_hidden('cart[' . $items['id'] . '][rowid]', $items['rowid']);
									// echo form_hidden('cart[' . $items['id'] . '][qty]', $items['qty']);
									// echo form_hidden('cart[' . $items['id'] . '][price]', $items['price']);
									// echo form_hidden('cart[' . $items['id'] . '][name]', $items['name']);
									// echo form_hidden('cart[' . $items['id'] . '][image]', $items['image']);
								?>

									<tr>
										<td class="product-subtotal"><?= $i++; ?></td>
										<td class="product-thumbnail">
											<img src="<?= base_url("upload/produk/" . $items['image']) ?>" style="width:80px;height:100px" ; alt="<?php echo $items['name'] ?>" />
										</td>
										<td class="product-name">
											<h3><?php echo $items['name'] ?></h3>
										</td>
										<td class="product-price">
											<span class="amount">Rp.
												<?php echo number_format($items['price'], 0, ',', '.')  ?></span>
										</td>
										<td class="product-quantity">
											<?php echo $items['qty'] ?>
										</td>
										<td class="product-subtotal">
											Rp. <?php echo number_format($items['subtotal'], 0, ',', '.')  ?>
										</td>
										<td class="product-remove">
											<a href="<?php echo base_url('user_login/hapus'); ?>"><i class="icon-trash icons"></i></a>
										</td>
									</tr>
								<?php endforeach; ?>
							</table>

						</div>

						<div class="row">
							<div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
								<div>
									<ul class="payment__btn">
										<li><a href="<?php echo base_url('user_login/delete') ?>"><i class="icon-trash icons"></i> Bersihkan Keranjang Belanja <i class="icon-trash icons"></i></a></li>
									</ul>
								</div><br>
								<div class="ht__coupon__code">
									<span>masukan kode promo</span>
									<div class="coupon__box">
										<input type="text" placeholder="">
										<div class="ht__cp__btn">
											<a href="#">enter</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
								<div class="htc__cart__total">
									<h6>cart total</h6>
									<div class="cart__desk__list">
										<ul class="cart__desc">
											<li>Belanja</li>
											<li>Ongkir</li>
										</ul>
										<ul class="cart__price">
											<li>Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></li>
											<li>Rp. 35.000</li>
										</ul>
									</div>
									<div class="cart__total">
										<span>total belanja</span>
										<span>Rp. <?php echo number_format($this->cart->total() + '35000', 0, ',', '.') ?></span>
									</div>
									<ul class="payment__btn">
										<li class="active"><a href="<?php echo base_url('user_login/checkout') ?>">checkout</a>
										</li>
										<li><a href="<?php echo base_url('user_login') ?>">continue shopping</a></li>
									</ul>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- cart-main-area end -->
