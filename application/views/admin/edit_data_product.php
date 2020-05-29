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
						<h4 class="page-title"><?= $title; ?></h4>
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
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Basic Datatable</h5>
								<?php foreach ($product as $val) : ?>
									<div class="table-responsive">

										<form action="<?= base_url('Admin/add_data_barang') ?>" method="post">
											<div class="form-group row">
												<label class="control-label col-md-3 col-sm-3 ">Kategori Barang</label>
												<div class="col-md-9 col-sm-9 ">
													<input type="text" name="ktbarang" id="ktbarang" class="form-control" value="<?php echo $val->ktbarang ?>">
												</div>
											</div>

											<div class="form-group row ">
												<label class="control-label col-md-3 col-sm-3 ">Nama Barang</label>
												<div class="col-md-9 col-sm-9 ">
													<input type="text" name="nama_barang" id="nama_barang" class="form-control" value="<?php echo $val->nama_barang ?>">
												</div>
											</div>

											<div class="form-group row ">
												<label class="control-label col-md-3 col-sm-3 ">Harga Jual<span class="required"> *</span></label>
												<div class="col-md-9 col-sm-9 ">
													<input type="text" name="harga_jual" id="harga_jual" required="required" class="form-control" placeholder="Masukkan Harga Barang">
												</div>
											</div>

											<div class="form-group row ">
												<label class="control-label col-md-3 col-sm-3 ">Stok<span class="required"> *</span></label>
												<div class="col-md-9 col-sm-9 ">
													<input type="text" name="stok" id="stok" required="required" class="form-control" placeholder="Masukkan Jumlah Stok">
												</div>
											</div>

											<div class="form-group row ">
												<label class="control-label col-md-3 col-sm-3 ">Satuan<span class="required"> *</span></label>
												<div class="col-md-9 col-sm-9 ">
													<input type="text" name="satuan" id="satuan" required="required" class="form-control" placeholder="Masukkan Satuan">
												</div>
											</div>

											<div class="form-group">
												<label for="message-text" class="col-form-label">Spesifikasi</label>
												<textarea type="text" name="deskripsi" id="deskripsi" required="required" class="form-control" placeholder="Masukkan Spesifikasi Barang"></textarea>
											</div>

											<!-- <div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Foto 1<span class="required"> *</span></label>
											<div class="col-md-9 col-sm-9 ">
												<input type="file" name="foto" id="foto" required="required" class="form-control">
											</div>
										</div>

										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Foto 2<span class="required"> *</span></label>
											<div class="col-md-9 col-sm-9 ">
												<input type="file" name="foto2" id="foto2" required="required" class="form-control">
											</div>
										</div> -->
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button class="btn btn-warning" type="reset">Reset</button>
										<button type="submit" class="btn btn-primary">Save changes</button>
									</div>
									</form>
								<?php endforeach; ?>
							</div>
							<a href="<?= base_url('admin/invoice') ?>">
								<div class="btn btn-sm btn-primary">Kembali</div>
							</a>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
	</div>
</body>
