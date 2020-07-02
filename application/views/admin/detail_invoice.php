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
							<li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Library</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid">
		<div class="row">

			<div class="col-md-12">
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
				</div>
				<button type="button" class="btn btn-info">Total: Rp. <?= number_format($subtotal, 0, ',', '.') ?></button>


			</div>
		</div>
	</div>
</div>
