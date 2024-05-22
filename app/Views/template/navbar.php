		<aside class="main-sidebar">
			<!-- sidebar-->
			<section class="sidebar position-relative">
				<div class="multinav">
					<div class="multinav-scroll" style="height: 100%;">
						<!-- sidebar menu-->
						<ul class="sidebar-menu" data-widget="tree">
							<li class="header">Menu</li>
							<?php if (session()->get('admin_nama')): ?>
								<li class="treeview">
									<a href="#">
										<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
										<span>Dashboard</span>
										<span class="pull-right-container">
											<i class="fa fa-angle-right pull-right"></i>
									</a>
									<ul class="treeview-menu">
										<li><a href="<?= base_url('/admin') ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage Users Mold</a></li>
									</ul>
								</li>
							<?php else : ?>
								<li class="treeview">
								<a href="#">
									<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
									<span>Manage your mold</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="<?= base_url('/dashboard') ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Dashboard</a></li>
									<li><a href="<?= base_url('/form') ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Mold</a></li>
								</ul>
							</li>
							<?php endif; ?>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<!-- <div class="sidebar-footer">
		<a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Settings"><span class="icon-Settings-2"></span></a>
		<a href="mailbox.html" class="link" data-bs-toggle="tooltip" title="Email"><span class="icon-Mail"></span></a>
		<a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
	</div> -->
		</aside>