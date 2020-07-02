<!-- cart-main-area start -->
<div class="checkout-wrap ptb--100">
	<div class="container">
		<div class="row">
			<form method="post" action="<?php echo base_url('user_login/proses_pesanan') ?> ">
				<div class="col-md-8">
					<div class="checkout__inner">
						<div class="accordion-list">
							<div class="accordion">
								<div class="accordion__title">
									Billing Information
								</div>
								<div class="accordion__body">
									<div class="bilinfo">
										<div class="row">
											<div class="col-md-12">
												<div class="single-input">
													<input type="text" id="name" name="name" placeholder="Full Name" class="form-control" value="<?= set_value('name') ?>">
													<?= form_error('name', '<small><p class="text-danger pl-3">', '</p></small>'); ?>
												</div>
											</div>
											<div class="col-md-12">
												<div class="single-input">
													<input type="text" id="address" name="address" placeholder="Street Address" class="form-control" value="<?= set_value('address') ?>">
													<?= form_error('address', '<small><p class="text-danger pl-3">', '</p></small>'); ?>
												</div>
											</div>

											<div class="col-md-6">
												<div class="single-input">
													<input type="text" id="city" name="city" placeholder="City/State" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="single-input">
													<input type="text" id="kode_pos" name="kode_pos" placeholder="Post code/ zip" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="single-input">
													<input type="text" id="email" name="email" placeholder="Email address" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="single-input">
													<input type="text" id="nophone" name="nophone" placeholder="Phone number" class="form-control">
												</div>
											</div>
											<div class="col-md-12">
												<div class="single-input">
													<input type="text" id="comment" name="comment" placeholder="Comment" class="form-control">
												</div>
											</div>
										</div>

									</div>
								</div>

								<div class="accordion__title">
									shipping method
								</div>
								<div class="accordion__body">
									<div class="shipmethod" class="form-control">
										<div class="col-md-12">
											<div class="single-input">
												<select class="form-control" id="shipping" name="shipping">
													<option>JNE</option>
													<option>JNT</option>
													<option>POS</option>
												</select>
											</div><br>
										</div>
									</div>
								</div>

								<div class="accordion__title" class="form-control">
									payment information
								</div>
								<div class="accordion__body">
									<div class="shipmethod">
										<div class="col-md-12">
											<div class="single-input">
												<select class="form-control" id="payment" name="payment">
													<option>Indomaret</option>
													<option>Alfamart</option>
													<option>BNI</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-4">
					<div class="order-details">
						<h5 class="order-details__title">Your Order</h5>
						<div class="order-details__item">
							<!-- penggunaan foreach untuk orderan yang diambil dari fuction tambah ke keranjang -->
							<!-- mengambil acuan di keranjang belanja -->
							<?php foreach ($this->cart->contents() as $items) : ?>
								<div class="single-item">
									<div class="single-item__thumb">
										<img src="<?= base_url("upload/produk/" . $items['image']) ?>" style="width:50px;height:60px" ; alt="<?php echo $items['name'] ?>" />
									</div>
									<div class="single-item__content">
										<a href="#"><?php echo $items['name'] ?></a>
										<span class="amount">Rp. <?php echo number_format($items['price'], 0, ',', '.')  ?></span>
									</div>
									<div class="single-item__remove">
										<a href="#"><i class="zmdi zmdi-delete"></i></a>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
						<div class="order-details__count">
							<div class="order-details__count__single">
								<h5>sub total</h5>
								<span class="price">
									<?php
									$grand_total = 0;
									$keranjang = $this->cart->contents();
									foreach ($keranjang as $items) {
										$grand_total = $grand_total + $items['subtotal'];
									}

									echo " Rp. " . number_format($grand_total, 0, ',', '.');
									?>
								</span>
							</div>
							<div class="order-details__count__single">
								<h5>Tax</h5>
								<span class="price">Rp. 35.000</span>
							</div>
							<div class="order-details__count__single">
								<h5>Shipping</h5>
								<span class="price">0</span>
							</div>
						</div>


						<div class="ordre-details__total">
							<!-- total belanja -->
							<h5>Order total</h5>
							<h6>
								<span class="price">
									<?php
									$grand_total = 0;
									if ($keranjang = $this->cart->contents()) {
										foreach ($keranjang as $items) {
											$grand_total = $grand_total + '35000' + $items['subtotal'];
										}

										echo " Rp. " . number_format($grand_total, 0, ',', '.');
									?>
									<?php
									} else {
										echo "Keranjang Belanja Anda Masih Kosong";
									}
									?>
								</span>
							</h6>
						</div>
						<center>
							<button type="submit" class="btn btn-success btn-lg">ORDER</button>
						</center>
						<br></br>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- cart-main-area end -->
