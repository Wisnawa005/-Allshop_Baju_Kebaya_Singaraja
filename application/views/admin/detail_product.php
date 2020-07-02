<?= $title; ?>

<body>
	<div id="main-wrapper">
		<div class="page-wrapper">
			<!-- ============================================================== -->
			<!-- Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-12 d-flex no-block align-items-center">
						<h4 class="page-title">Detail Barang</h4>
						<div class="ml-auto text-right">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url('admin'); ?>">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<?php foreach ($barang as $val) : ?>
						<div class="col-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">
										Kategori
										<span class="badge badge-pill badge-dark"><?= $val->ktbarang; ?></span>
									</h5>
									<tr>
										<td>
											<i class="fas fa-shopping-cart"></i>
											Nama Produk :
											<span class="badge badge-pill badge-success">
												<?= $val->nama_barang; ?>
											</span>
										</td><br><br>
										<td>
											<i class="fab fa-btc"></i>
											Harga :
											<span class="badge badge-pill badge-info">
												<?= $val->harga_jual; ?>
											</span>
										</td><br><br>
										<td>
											<i class="fas fa-copy"></i>
											Stok :
											<span class="badge badge-pill badge-primary">
												<?= $val->stok; ?> <?= $val->satuan; ?>
											</span>
										</td>
									</tr>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Deskripsi</h5>
									<td>
										<?= $val->deskripsi; ?>
									</td>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="card" style="width: 16rem;">
								<center>
									<img src="<?php echo base_url() . '/upload/produk/' . $val->foto ?>" style="width:250px;height:330px" alt="<?php echo $val->nama_barang ?>">
									<div class="card-body">
										<p class="card-text">Gambar 1</p>
									</div>
								</center>
							</div>
						</div>
						<div class="col-3">
							<div class="card" style="width: 16rem;">
								<center>
									<img src="<?php echo base_url() . '/upload/produk/' . $val->foto2 ?>" style="width:250px;height:330px" alt="<?php echo $val->nama_barang ?>">
									<div class="card-body">
										<p class="card-text">Gambar 2</p>
									</div>
								</center>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</body>
