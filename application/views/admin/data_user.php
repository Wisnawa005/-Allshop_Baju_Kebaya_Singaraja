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
								<div class="table-responsive">
									<table id="zero_config" class="table table-striped table-bordered">
										<thead>
											<tr>
												<th>Nomer</th>
												<th>Nama User</th>
												<th>Email</th>
												<th>Image</th>
												<th>Status</th>
												<th>Sebagai</th>
											</tr>
										</thead>
										<?php
										$i = 1;
										foreach ($user as $val) :
										?>
											<tbody>
												<tr>
													<td><?= $i++; ?></td>
													<td><?= $val->name ?></td>
													<td><?= $val->email ?></td>
													<td><?= $val->image ?></td>
													<td>
														<?php
														$val->is_active;
														if ($val == "0") {
															echo "Not Active";
														} else {
															echo "Active";
														}
														?>
													</td>
													<td>
														<?php
														$val->role_id;
														if ($val == "1") {
															echo "User";
														} else {
															echo "Admin";
														}
														?>
													</td>
												</tr>
											</tbody>
										<?php endforeach ?>
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
