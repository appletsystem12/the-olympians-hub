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
										<li class="breadcrumb-item"><a href="#">Course</a></li>
										<li class="breadcrumb-item active" aria-current="page">Course Full Layout 02</li>
									</ol>
								</nav>
							</div>
							<div class="pageTitle-wrap">
								<h1 class="text-light">Courses Full Layout 02</h1>
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
							<div class="row align-items-center g-3 mb-3">
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
							</div>
							<!-- /Row -->
							
							<div class="row justify-content-center g-xl-3 g-4 mb-5">
								
								<!-- Single Slide -->
								<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
									<div class="education_block_grid border">
									
										<div class="education-thumb position-relative">
											<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
												<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
											</div>
											<a href="course-detail.html"><img src="assets/img/courses-1.jpg" class="img-fluid" alt=""></a>
											<div class="course-hours position-absolute top-0 start-0 ms-3 mt-3">
												<span class="badge bg-dark rounded-pill"><i class="bi bi-clock-history me-1"></i>17h 30m</span>
											</div>
										</div>
										
										<div class="education-body p-3">
											<div class="education-title">
												<h4 class="fs-6 fw-medium"><a href="course-detail.html">HTML Mastery: Complete Guide to HTML from Basics to Advanced</a></h4>
											</div>
											
											<div class="cources-info">
												<ul>
													<li><i class="bi bi-camera-reels"></i>32 Lectures</li>
													<li><i class="bi bi-bar-chart"></i>Beginner</li>
													<li><i class="bi bi-coin"></i>$149</li>
													<li><i class="bi bi-star-fill text-warning"></i><span class="overall-rates text-dark fw-medium ms-1">4.9</span><span class="total-reviews">(2.22k)</span></li>
												</ul>
											</div>
										</div>
										
										<div class="education-footer border-0 p-3 pt-2">
											<a href="#" class="btn btn-md btn-outline-gray border-2 rounded-pill w-100">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a>
										</div>
									</div>	
								</div>
								
								<!-- Single Slide -->
								<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
									<div class="education_block_grid border">
									
										<div class="education-thumb position-relative">
											<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
												<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
											</div>
											<a href="course-detail.html"><img src="assets/img/courses-2.jpg" class="img-fluid" alt=""></a>
											<div class="course-hours position-absolute top-0 start-0 ms-3 mt-3">
												<span class="badge bg-dark rounded-pill"><i class="bi bi-clock-history me-1"></i>15h 50m</span>
											</div>
										</div>
										
										<div class="education-body p-3">
											<div class="education-title">
												<h4 class="fs-6 fw-medium"><a href="course-detail.html">Python Unleashed: Mastering JavaScript for Web Development</a></h4>
											</div>
											
											<div class="cources-info">
												<ul>
													<li><i class="bi bi-camera-reels"></i>45 Lectures</li>
													<li><i class="bi bi-bar-chart"></i>Advance</li>
													<li><i class="bi bi-coin"></i>$179</li>
													<li><i class="bi bi-star-fill text-warning"></i><span class="overall-rates text-dark fw-medium ms-1">4.9</span><span class="total-reviews">(1.34k)</span></li>
												</ul>
											</div>
										</div>
										
										<div class="education-footer border-0 p-3 pt-2">
											<a href="#" class="btn btn-md btn-outline-gray border-2 rounded-pill w-100">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a>
										</div>
									</div>	
								</div>
								
								<!-- Single Slide -->
								<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
									<div class="education_block_grid border">
									
										<div class="education-thumb position-relative">
											<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
												<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
											</div>
											<a href="course-detail.html"><img src="assets/img/courses-3.jpg" class="img-fluid" alt=""></a>
											<div class="course-hours position-absolute top-0 start-0 ms-3 mt-3">
												<span class="badge bg-dark rounded-pill"><i class="bi bi-clock-history me-1"></i>10h 50m</span>
											</div>
										</div>
										
										<div class="education-body p-3">
											<div class="education-title">
												<h4 class="fs-6 fw-medium"><a href="course-detail.html">UX/UI Design Essentials: Designing User-Centered Interfaces</a></h4>
											</div>
											
											<div class="cources-info">
												<ul>
													<li><i class="bi bi-camera-reels"></i>22 Lectures</li>
													<li><i class="bi bi-bar-chart"></i>Beginner</li>
													<li><i class="bi bi-coin"></i>$129</li>
													<li><i class="bi bi-star-fill text-warning"></i><span class="overall-rates text-dark fw-medium ms-1">4.9</span><span class="total-reviews">(3.45k)</span></li>
												</ul>
											</div>
										</div>
										
										<div class="education-footer border-0 p-3 pt-2">
											<a href="#" class="btn btn-md btn-outline-gray border-2 rounded-pill w-100">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a>
										</div>
									</div>	
								</div>
								
								<!-- Single Slide -->
								<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
									<div class="education_block_grid border">
									
										<div class="education-thumb position-relative">
											<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
												<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
											</div>
											<a href="course-detail.html"><img src="assets/img/courses-4.jpg" class="img-fluid" alt=""></a>
											<div class="course-hours position-absolute top-0 start-0 ms-3 mt-3">
												<span class="badge bg-dark rounded-pill"><i class="bi bi-clock-history me-1"></i>20h 10m</span>
											</div>
										</div>
										
										<div class="education-body p-3">
											<div class="education-title">
												<h4 class="fs-6 fw-medium"><a href="course-detail.html">Backend Development with Node.js: Building Scalable Web Apps</a></h4>
											</div>
											
											<div class="cources-info">
												<ul>
													<li><i class="bi bi-camera-reels"></i>39 Lectures</li>
													<li><i class="bi bi-bar-chart"></i>Advance</li>
													<li><i class="bi bi-coin"></i>$129</li>
													<li><i class="bi bi-star-fill text-warning"></i><span class="overall-rates text-dark fw-medium ms-1">4.9</span><span class="total-reviews">(2.45k)</span></li>
												</ul>
											</div>
										</div>
										
										<div class="education-footer border-0 p-3 pt-2">
											<a href="#" class="btn btn-md btn-outline-gray border-2 rounded-pill w-100">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a>
										</div>
									</div>	
								</div>
								
								<!-- Single Slide -->
								<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
									<div class="education_block_grid border">
									
										<div class="education-thumb position-relative">
											<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
												<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
											</div>
											<a href="course-detail.html"><img src="assets/img/courses-5.jpg" class="img-fluid" alt=""></a>
											<div class="course-hours position-absolute top-0 start-0 ms-3 mt-3">
												<span class="badge bg-dark rounded-pill"><i class="bi bi-clock-history me-1"></i>12h 40m</span>
											</div>
										</div>
										
										<div class="education-body p-3">
											<div class="education-title">
												<h4 class="fs-6 fw-medium"><a href="course-detail.html">Web Development Bootcamp: Learn to Build Modern Websites</a></h4>
											</div>
											
											<div class="cources-info">
												<ul>
													<li><i class="bi bi-camera-reels"></i>48 Lectures</li>
													<li><i class="bi bi-bar-chart"></i>Beginner</li>
													<li><i class="bi bi-coin"></i>$199</li>
													<li><i class="bi bi-star-fill text-warning"></i><span class="overall-rates text-dark fw-medium ms-1">4.8</span><span class="total-reviews">(4.45k)</span></li>
												</ul>
											</div>
										</div>
										
										<div class="education-footer border-0 p-3 pt-2">
											<a href="#" class="btn btn-md btn-outline-gray border-2 rounded-pill w-100">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a>
										</div>
									</div>	
								</div>
								
								<!-- Single Slide -->
								<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
									<div class="education_block_grid border">
									
										<div class="education-thumb position-relative">
											<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
												<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
											</div>
											<a href="course-detail.html"><img src="assets/img/courses-6.jpg" class="img-fluid" alt=""></a>
											<div class="course-hours position-absolute top-0 start-0 ms-3 mt-3">
												<span class="badge bg-dark rounded-pill"><i class="bi bi-clock-history me-1"></i>17h 15m</span>
											</div>
										</div>
										
										<div class="education-body p-3">
											<div class="education-title">
												<h4 class="fs-6 fw-medium"><a href="course-detail.html">The Complete AI Guide: Learn ChatGPT, Generative AI & More..</a></h4>
											</div>
											
											<div class="cources-info">
												<ul>
													<li><i class="bi bi-camera-reels"></i>28 Lectures</li>
													<li><i class="bi bi-bar-chart"></i>Advance</li>
													<li><i class="bi bi-coin"></i>$120</li>
													<li><i class="bi bi-star-fill text-warning"></i><span class="overall-rates text-dark fw-medium ms-1">4.7</span><span class="total-reviews">(3.65k)</span></li>
												</ul>
											</div>
										</div>
										
										<div class="education-footer border-0 p-3 pt-2">
											<a href="#" class="btn btn-md btn-outline-gray border-2 rounded-pill w-100">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a>
										</div>
									</div>	
								</div>
								
								<!-- Single Slide -->
								<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
									<div class="education_block_grid border">
									
										<div class="education-thumb position-relative">
											<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
												<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
											</div>
											<a href="course-detail.html"><img src="assets/img/courses-7.jpg" class="img-fluid" alt=""></a>
											<div class="course-hours position-absolute top-0 start-0 ms-3 mt-3">
												<span class="badge bg-dark rounded-pill"><i class="bi bi-clock-history me-1"></i>14h 20m</span>
											</div>
										</div>
										
										<div class="education-body p-3">
											<div class="education-title">
												<h4 class="fs-6 fw-medium"><a href="course-detail.html">Advanced WordPress Techniques: Dive Deep into Styling and Layout</a></h4>
											</div>
											
											<div class="cources-info">
												<ul>
													<li><i class="bi bi-camera-reels"></i>65 Lectures</li>
													<li><i class="bi bi-bar-chart"></i>Advance</li>
													<li><i class="bi bi-coin"></i>$199</li>
													<li><i class="bi bi-star-fill text-warning"></i><span class="overall-rates text-dark fw-medium ms-1">4.8</span><span class="total-reviews">(4.36k)</span></li>
												</ul>
											</div>
										</div>
										
										<div class="education-footer border-0 p-3 pt-2">
											<a href="#" class="btn btn-md btn-outline-gray border-2 rounded-pill w-100">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a>
										</div>
									</div>	
								</div>
								
								<!-- Single Slide -->
								<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
									<div class="education_block_grid border">
									
										<div class="education-thumb position-relative">
											<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
												<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
											</div>
											<a href="course-detail.html"><img src="assets/img/courses-8.jpg" class="img-fluid" alt=""></a>
											<div class="course-hours position-absolute top-0 start-0 ms-3 mt-3">
												<span class="badge bg-dark rounded-pill"><i class="bi bi-clock-history me-1"></i>22h 10m</span>
											</div>
										</div>
										
										<div class="education-body p-3">
											<div class="education-title">
												<h4 class="fs-6 fw-medium"><a href="course-detail.html">Backend Development with Node.js: Building Scalable Web Apps</a></h4>
											</div>
											
											<div class="cources-info">
												<ul>
													<li><i class="bi bi-camera-reels"></i>31 Lectures</li>
													<li><i class="bi bi-bar-chart"></i>Beginner</li>
													<li><i class="bi bi-coin"></i>$155</li>
													<li><i class="bi bi-star-fill text-warning"></i><span class="overall-rates text-dark fw-medium ms-1">4.9</span><span class="total-reviews">(1.57k)</span></li>
												</ul>
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
									
									<!-- Pagination -->
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