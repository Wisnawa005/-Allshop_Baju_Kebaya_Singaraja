<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin5">
	<!-- Sidebar scroll-->
	<div class="scroll-sidebar">
		<!-- Sidebar navigation-->
		<nav class="sidebar-nav">
			<ul id="sidebarnav" class="p-t-30">
				<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('admin'); ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
				<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cart-plus"></i><span class="hide-menu">Order</span></a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item"><a href="<?php echo site_url('admin/invoice'); ?>" class="sidebar-link"><i class="mdi mdi-file-document"></i><span class="hide-menu"> Invoices </span></a></li>
						<li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i class="mdi mdi-email"></i><span class="hide-menu"> Email </span></a></li>
					</ul>
				</li>
				<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-table"></i><span class="hide-menu">Table</span></a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item"><a href="<?php echo site_url('admin/user_data'); ?>" class="sidebar-link"><i class="fas fa-user"></i><span class="hide-menu"> Table Users </span></a></li>
						<li class="sidebar-item"><a href="<?php echo site_url('admin/product_data'); ?>" class="sidebar-link"><i class="fas fa-box"></i><span class="hide-menu"> Table Product </span></a></li>
						<li class="sidebar-item"><a href="<?php echo site_url('admin/ktbarang_data'); ?>" class="sidebar-link"><i class="fas fa-box"></i><span class="hide-menu"> Table Kategori </span></a></li>
					</ul>
				</li>

			</ul>
		</nav>
		<!-- End Sidebar navigation -->
	</div>
	<!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
