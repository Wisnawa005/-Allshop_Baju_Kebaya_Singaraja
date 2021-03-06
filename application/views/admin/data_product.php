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
								<h5 class="card-title"></h5>
								<!-- Button trigger modal -->
								<a href="#" class="btn btn-secondary btn-icon-split" data-toggle="modal" data-target="#exampleModal">
									<span class="icon text-white-50">
										<i class="fas fa-edit"></i>
									</span>
									<span class="text"> Add </span>
								</a>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Input Data Produk</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<?= form_open_multipart('Admin/add_data_barang'); ?>
												<div class="form-group row">
													<label class="control-label col-md-3 col-sm-3 ">Kategori <span class="required"> *</span></label>
													<div class="col-md-9 col-sm-9 ">
														<select name="ktbarang" id="ktbarang" required="required" class="form-control">
															<option>Kebaya</option>
															<option>Selendang</option>
															<option>Dress</option>
															<option>Kebaya_Anak</option>
															<option>Accessories</option>
															<option>Kamben</option>
														</select>
													</div>
												</div>

												<div class="form-group row ">
													<label class="control-label col-md-3 col-sm-3 ">Nama Barang<span class="required"> *</span></label>
													<div class="col-md-9 col-sm-9 ">
														<input type="text" name="nama_barang" id="nama_barang" required="required" class="form-control" placeholder="Masukkan Nama Barang">
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

												<div class="form-group row ">
													<label class="control-label col-md-3 col-sm-3 ">Upload Foto Model<span class="required"> *</span></label>
													<div class="col-md-9 col-sm-9 ">
														<input type="file" name="foto" id="foto" required="required" class="form-control">
													</div>
												</div>

												<div class="form-group row ">
													<label class="control-label col-md-3 col-sm-3 ">Upload Foto Product<span class="required"> *</span></label>
													<div class="col-md-9 col-sm-9 ">
														<input type="file" name="foto2" id="foto2" required="required" class="form-control">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button class="btn btn-warning" type="reset">Reset</button>
												<button type="submit" class="btn btn-primary">Save changes</button>
											</div>
											<?= form_close(); ?>
										</div>
									</div>
								</div>
								<p>
									<div class="table-responsive">
										<table id="zero_config" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Nomer</th>
													<th>Nama Produk</th>
													<th>Kategori</th>
													<th>Harga Satuan</th>
													<th>Stok</th>
													<th>Action</th>
												</tr>
											</thead>
											<?php
											$i = 1;
											foreach ($product as $val) :
											?>
												<tbody>
													<tr>
														<td><?= $i++; ?></td>
														<td><?= $val->nama_barang ?></td>
														<td><?= $val->ktbarang ?></td>
														<td>Rp. <?php echo number_format($val->harga_jual, 0, ',', '.') ?></td>
														<td><?= $val->stok ?> <?= $val->satuan ?></td>
														<td>
															<?php echo anchor('admin/detail_barang/' . $val->kode_barang, '<button type="button" class="btn btn-success"><i class="fas fa-eye"></i></button>') ?>
															<?php echo anchor('admin/edit_product/' . $val->kode_barang, '<button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>') ?>
															<?php echo anchor('admin/delete_product/' . $val->kode_barang, '<button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>') ?>
														</td>
													</tr>
												</tbody>
											<?php endforeach ?>
										</table>
									</div>
									<a href="<?= base_url('admin/invoice') ?>">
										<div class="btn btn-sm btn-primary">Kembali</div>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
