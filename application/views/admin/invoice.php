<body>
	<div id="main-wrapper">
		<div class="page-wrapper">
			<!-- ============================================================== -->
			<!-- Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-12 d-flex no-block align-items-center">
						<h4 class="page-title">Tables</h4>
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
								<h5 class="card-title"><?= $title; ?></h5>
								<div class="table-responsive">
									<table id="zero_config" class="table table-striped table-bordered">
										<thead>
											<tr>
												<th>Nomer</th>
												<th>Nama Pemesan</th>
												<th>Alamat Pengirim</th>
												<th>Tanggal Pemesan</th>
												<th>Batas Pembayaran</th>
												<th>Action</th>
											</tr>
										</thead>

										<?php
										$i = 1;
										foreach ($invoice as $val) :
										?>
											<tbody>
												<tr>
													<td><?= $i++; ?></td>
													<td><?= $val->name ?></td>
													<td><?= $val->address ?></td>
													<td><?= $val->tgl_pesan ?></td>
													<td><?= $val->batas_bayar ?></td>
													<td>
														<?= anchor('admin/detail_invoice/' . $val->id_invoice, '<button type="button" class="btn btn-info">Detail</button>') ?>
													</td>
												</tr>
											</tbody>
										<?php endforeach ?>
										<tfoot>
											<tr>
												<th>Nomer</th>
												<th>Nama Pemesan</th>
												<th>Alamat Pengirim</th>
												<th>Tanggal Pemesan</th>
												<th>Batas Pembayaran</th>
												<th>Action</th>
											</tr>
										</tfoot>
									</table>
								</div>
								<a href="<?= base_url('admin') ?>">
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
