<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 d-flex no-block align-items-center">
				<h4 class="page-title">Dashboard</h4>
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

	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<div class="container-fluid">
		<!-- ============================================================== -->
		<!-- Sales Cards  -->
		<!-- ============================================================== -->
		<div class="row">
			<!-- Column -->
			<div class="col-md-3 col-lg-2 col-xlg-3">
				<div class="card card-hover">
					<a href="<?= base_url('admin') ?>">
						<div class="box bg-cyan text-center">
							<h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
							<h6 class="text-white">Dashboard</h6>
						</div>
					</a>
				</div>
			</div>
			<!-- Column -->
			<div class="col-md-6 col-lg-4 col-xlg-3">
				<div class="card card-hover">
					<a href="<?= base_url('admin/invoice') ?>">
						<div class="box bg-success text-center">
							<h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
							<h6 class="text-white">Invoice</h6>
						</div>
					</a>
				</div>
			</div>
			<!-- Column -->
			<div class="col-md-6 col-lg-2 col-xlg-3">
				<div class="card card-hover">
					<a href="<?= base_url('admin') ?>">
						<div class="box bg-danger text-center">
							<h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
							<h6 class="text-white">Tabel Users</h6>
						</div>
					</a>
				</div>
			</div>
			<!-- Column -->
			<div class="col-md-6 col-lg-4 col-xlg-3">
				<div class="card card-hover">
					<a href="<?= base_url('admin') ?>">
						<div class="box bg-info text-center">
							<h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
							<h6 class="text-white">Tabel Product</h6>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="d-md-flex align-items-center">
						<div>
							<h4 class="card-title">Site Analysis</h4>
							<h5 class="card-subtitle">Overview of Latest Month</h5>
						</div>
					</div>
					<div class="row">
						<!-- column -->
						<div class="col-lg-9">
							<div class="flot-chart">
								<div class="flot-chart-content" id="flot-line-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="759" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 759.25px; height: 300px;"></canvas>
									<div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
										<div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;">
											<div class="flot-tick-label tickLabel" style="position: absolute; max-width: 58px; top: 283px; left: 24px; text-align: center;">0</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; max-width: 58px; top: 283px; left: 84px; text-align: center;">1</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; max-width: 58px; top: 283px; left: 144px; text-align: center;">2</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; max-width: 58px; top: 283px; left: 205px; text-align: center;">3</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; max-width: 58px; top: 283px; left: 265px; text-align: center;">4</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; max-width: 58px; top: 283px; left: 325px; text-align: center;">5</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; max-width: 58px; top: 283px; left: 386px; text-align: center;">6</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; max-width: 58px; top: 283px; left: 446px; text-align: center;">7</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; max-width: 58px; top: 283px; left: 506px; text-align: center;">8</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; max-width: 58px; top: 283px; left: 567px; text-align: center;">9</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; max-width: 58px; top: 283px; left: 624px; text-align: center;">10</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; max-width: 58px; top: 283px; left: 684px; text-align: center;">11</div>
										</div>
										<div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;">
											<div class="flot-tick-label tickLabel" style="position: absolute; top: 247px; left: 0px; text-align: right;">-1.0</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; top: 191px; left: 0px; text-align: right;">-0.5</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; top: 135px; left: 5px; text-align: right;">0.0</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; top: 79px; left: 5px; text-align: right;">0.5</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; top: 23px; left: 5px; text-align: right;">1.0</div>
										</div>
									</div><canvas class="flot-overlay" width="759" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 759.25px; height: 300px;"></canvas>
									<div class="legend">
										<div style="position: absolute; width: 50px; height: 38px; top: 14px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div>
										<table style="position:absolute;top:14px;right:13px;;font-size:smaller;color:#AFAFAF">
											<tbody>
												<tr>
													<td class="legendColorBox">
														<div style="border:1px solid #ccc;padding:1px">
															<div style="width:4px;height:0;border:5px solid rgb(238,121,81);overflow:hidden"></div>
														</div>
													</td>
													<td class="legendLabel">sin(x)</td>
												</tr>
												<tr>
													<td class="legendColorBox">
														<div style="border:1px solid #ccc;padding:1px">
															<div style="width:4px;height:0;border:5px solid rgb(79,185,240);overflow:hidden"></div>
														</div>
													</td>
													<td class="legendLabel">cos(x)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="row">
								<div class="col-6">
									<div class="bg-dark p-10 text-white text-center">
										<i class="fa fa-user m-b-5 font-16"></i>
										<h5 class="m-b-0 m-t-5">2540</h5>
										<small class="font-light">Total Users</small>
									</div>
								</div>
								<div class="col-6">
									<div class="bg-dark p-10 text-white text-center">
										<i class="fa fa-plus m-b-5 font-16"></i>
										<h5 class="m-b-0 m-t-5">120</h5>
										<small class="font-light">New Users</small>
									</div>
								</div>
								<div class="col-6 m-t-15">
									<div class="bg-dark p-10 text-white text-center">
										<i class="fa fa-cart-plus m-b-5 font-16"></i>
										<h5 class="m-b-0 m-t-5">656</h5>
										<small class="font-light">Total Shop</small>
									</div>
								</div>
								<div class="col-6 m-t-15">
									<div class="bg-dark p-10 text-white text-center">
										<i class="fa fa-tag m-b-5 font-16"></i>
										<h5 class="m-b-0 m-t-5">9540</h5>
										<small class="font-light">Total Orders</small>
									</div>
								</div>
								<div class="col-6 m-t-15">
									<div class="bg-dark p-10 text-white text-center">
										<i class="fa fa-table m-b-5 font-16"></i>
										<h5 class="m-b-0 m-t-5">100</h5>
										<small class="font-light">Pending Orders</small>
									</div>
								</div>
								<div class="col-6 m-t-15">
									<div class="bg-dark p-10 text-white text-center">
										<i class="fa fa-globe m-b-5 font-16"></i>
										<h5 class="m-b-0 m-t-5">8540</h5>
										<small class="font-light">Online Orders</small>
									</div>
								</div>
							</div>
						</div>
						<!-- column -->
					</div>
				</div>
			</div>
		</div>
	</div>
