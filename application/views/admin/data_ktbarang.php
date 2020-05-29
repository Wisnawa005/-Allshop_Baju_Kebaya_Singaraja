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
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Basic Datatable</h5>
								<div class="table-responsive">
									<table id="zero_config" class="table table-striped table-bordered">
										<thead>
											<tr>
												<th>No Kategori</th>
												<th>Kategori</th>
											</tr>
										</thead>
										<?php
										foreach ($ktbarang as $val) :
										?>
											<tbody>
												<tr>
													<td><?= $val->kode_ktbarang ?></td>
													<td><?= $val->nama_ktbarang ?></td>
												</tr>
											</tbody>
										<?php endforeach ?>
									</table>
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
