@extends('layout/version1/default')
@section('content')
<main>
<section class="bg-gredient page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="breadcrumb m-0">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb simple light">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Course</li>
									</ol>
								</nav>
							</div>
							<div class="pageTitle-wrap">
								<h1 class="text-light">Courses</h1>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->			

			
			<!-- ============================ Find Courses with Sidebar ================================== -->
			<section class="py-5">
				<div class="container">

					<!-- Row -->
					<div class="row">
						
						<div class="col-xxl-12 col-lg-12 col-12">
							
							<!-- Row -->
							<!-- <div class="row align-items-center g-3 mb-3">
								<div class="col-xxl-9 col-xl-8 col-lg-9 col-md-6 col-sm-12 col-12">
									We found <strong>142</strong> courses for you
								</div>
								<div class="col-xxl-3 col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12">
									<div class="filter_wraps d-flex align-items-center justify-content-center gap-2">
										<a class="btn btn-outline-dark flex-fill" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
											<i class="bi bi-sliders me-2"></i>Filter
										</a>
										<div class="position-relative flex-fill">
											<select id="sorting" class="form-control">
												<option value="">&nbsp;</option>
												<option value="1">Free</option>
												<option value="2">Most Popular</option>
												<option value="3">Most Viewed</option>
												<option value="4">Newest</option>
												<option value="5">Trending</option>
											</select>
										</div>
									</div>
								</div>
							</div> -->
							<!-- /Row -->
							
							<div class="row justify-content-center g-xl-3 g-4 mb-5">
								
								<!-- Single Slide -->
								<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="education_block_grid border">
									
										<div class="education-thumb position-relative">
											<a href="#"><img src="assets/img/ioqm-course-exam.jpg" class="img-fluid w-100" alt="ioqm course"></a>
										</div>
										
										<div class="education-body p-3">
											<div class="education-title">
												<h4 class="fs-6 fw-medium"><a href="#">IOQM/RMO/INMO</a></h4>
											</div>
										</div>
										
										<div class="education-footer border-0 p-3 pt-2">
											<a href="#" class="btn btn-md btn-outline-gray border-2 rounded-pill w-100">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a>
										</div>
									</div>	
								</div>
								
								<!-- Single Slide -->
								<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="education_block_grid border">
									
										<div class="education-thumb position-relative">
											<a href="#"><img src="assets/img/smo-exam.jpg" class="img-fluid w-100" alt="smo course"></a>
										</div>
										
										<div class="education-body p-3">
											<div class="education-title">
												<h4 class="fs-6 fw-medium"><a href="#">SMO</a></h4>
											</div>
										</div>
										
										<div class="education-footer border-0 p-3 pt-2">
											<a href="#" class="btn btn-md btn-outline-gray border-2 rounded-pill w-100">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a>
										</div>
									</div>	
								</div>
								
								<!-- Single Slide -->
								<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="education_block_grid border">
									
										<div class="education-thumb position-relative">
											<a href="#"><img src="assets/img/aime-exam.png" class="img-fluid w-100" alt="aime course"></a>
										</div>
										
										<div class="education-body p-3">
											<div class="education-title">
												<h4 class="fs-6 fw-medium"><a href="#">AMC/AIME</a></h4>
											</div>
										</div>
										
										<div class="education-footer border-0 p-3 pt-2">
											<a href="#" class="btn btn-md btn-outline-gray border-2 rounded-pill w-100">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a>
										</div>
									</div>	
								</div>
								
								<!-- Single Slide -->
								<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="education_block_grid border">
									
										<div class="education-thumb position-relative">
											<a href="#"><img src="assets/img/isi-cmi-exam.png" class="img-fluid w-100" alt="isi cmi course"></a>
										</div>
										
										<div class="education-body p-3">
											<div class="education-title">
												<h4 class="fs-6 fw-medium"><a href="#">ISI/CMI</a></h4>
											</div>
										</div>
										
										<div class="education-footer border-0 p-3 pt-2">
											<a href="#" class="btn btn-md btn-outline-gray border-2 rounded-pill w-100">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a>
										</div>
									</div>	
								</div>							
								
							</div>
							
							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<?php
									/*<!-- Pagination -->
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<ul class="pagination d-flex align-items-center justify-content-center">
												<li class="page-item">
												  <a class="page-link" href="#" aria-label="Previous">
													<span class="bi bi-arrow-left"></span>
													<span class="sr-only">Previous</span>
												  </a>
												</li>
												<li class="page-item"><a class="page-link" href="#">1</a></li>
												<li class="page-item"><a class="page-link" href="#">2</a></li>
												<li class="page-item active"><a class="page-link" href="#">3</a></li>
												<li class="page-item"><a class="page-link" href="#"><i class="bi bi-three-dots"></i></a></li>
												<li class="page-item"><a class="page-link" href="#">18</a></li>
												<li class="page-item">
												  <a class="page-link" href="#" aria-label="Next">
													<span class="bi bi-arrow-right"></span>
													<span class="sr-only">Next</span>
												  </a>
												</li>
											</ul>
										</div>
									</div>
									*/
									?>

									
								</div>
							</div>
							<!-- /Row -->
							
						</div>
					
					</div>
					<!-- Row -->
					
				</div>
			</section>
			<!-- ============================ Find Courses with Sidebar End ================================== -->
</main>
@stop