<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo site_url('user_login'); ?>">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
	</ol>
</nav>

<!-- Start Product Details Area -->
<section class="htc__product__details bg__white ptb--100">
	<!-- Start Product Details Top -->
	<div class="htc__product__details__top">
		<div class="container">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<div class="card" style="width: 16rem;">
							<center>
								<img src="<?= base_url('assets/login/img/profile/') . $account['image']; ?>" class="card-img">
								<div class="card-body">
									<p class="card-text">Date Created : <?= date('d F Y', $account['date_created']); ?></p>
								</div>
							</center>
						</div>
					</div>

					<div class="col-md-7">
						<div class="card-body">
							<h1 class="card-title"><b class="text-info">About Me</b></h1>
							<br>
							<p>
								<h4>Name : <?= $account['name']; ?></h4>
							</p>
							<p>
								<h4>Email : <?= $account['email']; ?></h4>
							</p>
							<br></br>
							<p>
								<button type="button" class="btn btn-secondary btn-lg">Edit Profile</button>
								<a href="<?= base_url('auth/logout') ?>">
									<button type="button" class="btn btn-danger btn-lg">Logout</button>
								</a>
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End Product Details Top -->
</section>
<!-- End Product Details Area -->
