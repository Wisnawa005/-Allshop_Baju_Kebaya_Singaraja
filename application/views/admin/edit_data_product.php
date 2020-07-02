<body>
	<div id="main-wrapper">
		<div class="page-wrapper">
			<!-- ============================================================== -->
			<!-- Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-12 d-flex no-block align-items-center">
						<h4 class="page-title">Form Edit</h4>
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
					<div class="col-6">
						<div class="card">
							<?php foreach ($product as $val) : ?>
								<form action="<?= base_url('Admin/update_product') ?>" method="post" class="form-horizontal">
									<div class="card-body">
										<h4 class="card-title">
											<?= $title; ?>
											<span class="badge badge-pill badge-secondary"><?php echo $val->kode_barang ?></span>
										</h4>
										<div class="form-group row">
											<label for="fname" class="col-sm-3 text-right control-label col-form-label">Kategori</label>
											<div class="col-sm-9">
												<input type="hidden" class="form-control" id="kode_barang" name="kode_barang" value="<?php echo $val->kode_barang ?>">
												<input type="text" class="form-control" id="ktbarang" name="ktbarang" value="<?php echo $val->ktbarang ?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $val->nama_barang ?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="lname" class="col-sm-3 text-right control-label col-form-label">Harga Jual</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="harga_jual" name="harga_jual" value="<?php echo $val->harga_jual ?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="email1" class="col-sm-3 text-right control-label col-form-label">Stok</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="stok" name="stok" value="<?php echo $val->stok ?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="cono1" class="col-sm-3 text-right control-label col-form-label">Satuan</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="satuan" name="satuan" value="<?php echo $val->satuan ?>">
											</div>
										</div>

										<div class="form-group row">
											<label for="deskripsi" class="col-sm-3 text-right control-label col-form-label">Deskripsi</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $val->deskripsi ?>"></input>
											</div>
										</div>

									</div>
									<div class="border-top">
										<div class="card-body">
											<button type="submit" class="btn btn-primary">Save</button>
											<button type="reset" class="btn btn-danger">Reset</button>
											<a href="<?php echo site_url('admin/product_data'); ?>"><button type="button" class="btn btn-info">Back</button></a>
										</div>
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
					</form>
				<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</body>
