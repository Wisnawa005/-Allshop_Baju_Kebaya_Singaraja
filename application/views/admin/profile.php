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
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-4">
										<div class="card" style="width: 16rem;">
											<center>
												<img src="<?= base_url('assets/login/img/profile/') . $profile['image']; ?>" class="card-img">
												<div class="card-body">
													<p class="card-text">Date Created : <?= date('d F Y', $profile['date_created']); ?></p>
												</div>
											</center>
										</div>
									</div>

									<div class="col-md-7">
										<div class="card-body">
											<h3 class="card-title"><b class="text-info">About Me</b></h3>
											<div class="dropdown-divider"></div>
											<p>
												<h4>Name : <?= $profile['name']; ?></h4>
											</p>
											<p>
												<h4>Email : <?= $profile['email']; ?></h4>
											</p>
											<br></br>
											<p>
												<button type="button" class="btn btn-primary btn-lg">Change Password</button>
												<button type="button" class="btn btn-secondary btn-lg">Edit Profile</button>
											</p>
										</div>
									</div>
								</div>
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
</div>
