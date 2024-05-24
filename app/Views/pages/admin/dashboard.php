<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
            <div class="col-xl-8">														
					<div class="box no-shadow mb-0 bg-transparent">
						<div class="box-header no-border px-0">
							<h4 class="box-title">Your Courses</h4>							
							<div class="box-controls pull-right d-md-flex d-none">
							  <a href="#">View All</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-12">
							<a href="#" class="box pull-up">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">											
											<span class="ti ti-package"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
										</div>
										<div class="ms-15">											
											<h5 class="mb-0">UX Design</h5>
											<p class="text-fade fs-12 mb-0">You Watched</p>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between mt-20">
										<div class="w-p70">
											<div class="progress progress-sm mb-0">
												<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
												</div>
											</div>
										</div>
										<div>
											<div>80%</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-12">
							<a href="#" class="box pull-up">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">											
											<span class="fs-30 icon-Pen-tool-vector"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="ms-15">											
											<h5 class="mb-0">UI Design</h5>
											<p class="text-fade fs-12 mb-0">You Watched</p>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between mt-20">
										<div class="w-p70">
											<div class="progress progress-sm mb-0">
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
												</div>
											</div>
										</div>
										<div>
											<div>40%</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-12">
							<a href="#" class="box pull-up">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">											
											<span class="fs-30 icon-Chat-check"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="ms-15">											
											<h5 class="mb-0">Marketing</h5>
											<p class="text-fade fs-12 mb-0">You Watched</p>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between mt-20">
										<div class="w-p70">
											<div class="progress progress-sm mb-0">
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
												</div>
											</div>
										</div>
										<div>
											<div>30%</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-12">
							<div class="box">
								<div class="box-header">
									<h4 class="box-title">Statisics</h4>
								</div>
								<div class="box-body">
									<h3 class="mt-0">24hr</h3>
									<p class="text-fade fs-12">Hours Spend last week</p>
									<div id="charts_widget_2_chart"></div>
								</div>
							</div>
							<div class="row">
								<div class="col-6">
									<a class="box box-link-shadow text-center pull-up" href="javascript:void(0)">
										<div class="box-body py-25 bg-info-light px-5">
											<p class="fw-600 text-info">Courses in Progress</p>
										</div>
										<div class="box-body">
											<h1 class="countnm fs-50 m-0">5</h1>
										</div>
									</a>
								</div>
								<div class="col-6">
									<a class="box box-link-shadow text-center pull-up" href="javascript:void(0)">
										<div class="box-body py-25 bg-info-light px-5">
											<p class="fw-600 text-info">Forum Discussion</p>
										</div>
										<div class="box-body">
											<h1 class="countnm fs-50 m-0">25</h1>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-xl-4 col-12">										
					<div class="box no-shadow mb-0 bg-transparent">
						<div class="box-header no-border px-0">
							<h4 class="box-title">Upcoming Group Lessons</h4>							
							<div class="box-controls pull-right d-md-flex d-none">
							  <a href="#">View All</a>
							</div>
						</div>
					</div>
					<div>
						<div class="box bs-5 border-danger rounded pull-up">
							<div class="box-body">	
								<div class="flex-grow-1">	
									<div class="d-flex align-items-center pe-2 justify-content-between">							
										<h4 class="fw-500">
											Common English
										</h4>
										<div class="dropdown">
											<a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
											<div class="dropdown-menu dropdown-menu-end">
											  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
											  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
											  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
											  <div class="dropdown-divider"></div>
											  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
											</div>
										</div>						
									</div>
									<p class="fs-16">
										Thu 13 PM - 15 PM
									</p>
								</div>							
								<div class="d-flex align-items-center justify-content-between mt-10">
									<div class="d-flex">
										<a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
											<img src="../images/avatar/avatar-1.png" class="h-50 align-self-end" alt="">
										</a>
										<a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
											<img src="../images/avatar/avatar-3.png" class="h-50 align-self-end" alt="">
										</a>
										<a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
											<img src="../images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
										</a>
									</div>
									<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark"><i class="mdi mdi-plus"></i></button>
								</div>
							</div>					
						</div>
						<div class="box bs-5 border-primary rounded mb-10 pull-up">
							<div class="box-body">	
								<div class="flex-grow-1">	
									<div class="d-flex align-items-center pe-2 justify-content-between">							
										<h4 class="fw-500">
											Speaking club
										</h4>
										<div class="dropdown">
											<a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
											<div class="dropdown-menu dropdown-menu-end">
											  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
											  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
											  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
											  <div class="dropdown-divider"></div>
											  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
											</div>
										</div>						
									</div>
									<p class="fs-16">
										Thu 16 PM - 17 PM
									</p>
								</div>							
								<div class="d-flex align-items-center justify-content-between mt-10">
									<div class="d-flex">
										<a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
											<img src="../images/avatar/avatar-2.png" class="h-50 align-self-end" alt="">
										</a>
										<a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
											<img src="../images/avatar/avatar-5.png" class="h-50 align-self-end" alt="">
										</a>
										<a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
											<img src="../images/avatar/avatar-6.png" class="h-50 align-self-end" alt="">
										</a>
									</div>
									<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark"><i class="mdi mdi-plus"></i></button>
								</div>
							</div>					
						</div>
					</div>						
					<div class="box no-shadow mb-0 bg-transparent">
						<div class="box-header no-border px-0">
							<h4 class="box-title">Lessons</h4>							
							<div class="box-controls pull-right d-md-flex d-none">
							  <a href="#">View All</a>
							</div>
						</div>
					</div>
					<div>
						<div class="box mb-15 pull-up">
							<div class="box-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<div class="me-15 bg-warning-light h-50 w-50 l-h-60 rounded text-center">
											<span class="icon-Book-open fs-24"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="d-flex flex-column fw-500">
											<a href="#" class="text-dark hover-primary mb-1 fs-16">English - Grammar</a>
											<span class="text-fade">Eula kelly, 6 May</span>
										</div>
									</div>
									<a href="#">
										<span class="icon-Arrow-right fs-24"><span class="path1"></span><span class="path2"></span></span>
									</a>
								</div>
							</div>
						</div>
						<div class="box mb-15 pull-up">
							<div class="box-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
											<span class="icon-Mail fs-24"></span>
										</div>
										<div class="d-flex flex-column fw-500">
											<a href="#" class="text-dark hover-primary mb-1 fs-16">Irregular Verbs Test</a>
											<span class="text-fade">Oilve Garza, 4 May</span>
										</div>
									</div>
									<a href="#">
										<span class="icon-Arrow-right fs-24"><span class="path1"></span><span class="path2"></span></span>
									</a>
								</div>
							</div>
						</div>
						<div class="box mb-10 pull-up">
							<div class="box-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
											<span class="icon-Book-open fs-24"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="d-flex flex-column fw-500">
											<a href="#" class="text-dark hover-primary mb-1 fs-16">Spanish - Essey</a>
											<span class="text-fade">Franklin Harvey, 2 May</span>
										</div>
									</div>
									<a href="#">
										<span class="icon-Arrow-right fs-24"><span class="path1"></span><span class="path2"></span></span>
									</a>
								</div>
							</div>
						</div>
					</div>					
					<div class="box no-shadow mb-0 bg-transparent">
						<div class="box-header no-border px-0">
							<h4 class="box-title">Resent Join course</h4>							
							<div class="box-controls pull-right d-md-flex d-none">
							  <a href="#">View All</a>
							</div>
						</div>
					</div>
					
				</div>
            </div>
        </section>
    </div>
</div>
<?= $this->endSection() ?>