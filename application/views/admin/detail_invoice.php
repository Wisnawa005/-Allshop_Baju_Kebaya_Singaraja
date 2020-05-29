<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 d-flex no-block align-items-center">
				<h4 class="page-title">Detail Pesanan</h4>
				<div class="ml-auto text-right">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Library</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="card-body">
						<h5 class="card-title m-b-0">Tgl Pesan : </h5>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="card-body">
						<h5 class="card-title m-b-0">Tgl Bayar : </h5>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="..." class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Account</h5>
								<p class="card-text">Name</p>
								<p class="card-text">Email</p>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Comment</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title m-b-0">Pesanan</h5>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Nomer</th>
								<th scope="col">Nama Produk</th>
								<th scope="col">Jumlah Pesanan</th>
								<th scope="col">Harga Satuan</th>
							</tr>
						</thead>
						<?php
						$total = 0;
						$i = 1;
						foreach ($pesanan as $val) :
							$subtotal = $val->jumlah * $val->harga;
							$total = $subtotal;
						?>
							<tbody>
								<tr>
									<td><?= $i++; ?></td>
									<td><?= $val->nama_barang ?></td>
									<td><?= $val->jumlah ?></td>
									<td><?= number_format($val->harga, 0, ',', '.') ?></td>
								</tr>
							</tbody>
						<?php endforeach ?>
					</table>
					<button type="button" class="btn btn-info">Total: Rp. <?= number_format($subtotal, 0, ',', '.') ?></button>
				</div>

				<div class="card">
					<div class="card-body">
						<h5 class="card-title m-b-0">Browesr statistics</h5>
					</div>
					<table class="table">
						<?php foreach ($invoice_id as $inv) : ?>
							<tbody>
								<tr>
									<td>Adress</td>
									<td><?= $inv->email ?></td>
								</tr>
								<tr>
									<td>City</td>
									<td>1200</td>
								</tr>
								<tr>
									<td>Kode Pos</td>
									<td>1540</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>1230</td>
								</tr>
								<tr>
									<td>No HeadPhone</td>
									<td>1590</td>
								</tr>
							</tbody>
						<?php endforeach ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
