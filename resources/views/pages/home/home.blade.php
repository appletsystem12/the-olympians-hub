@extends('layout/version1/default')
@section('content')
<main>
    <!-- ============================ Hero Banner  Start================================== -->
			<div class="image-cover half_banner" style="background:#0b2248 url(assets/img/banner-4.jpg) no-repeat;">
				<div class="container">
					<!-- Type -->
					<div class="row">
						<div class="col-xl-6 col-lg-7 col-md-12 col-sm-12">
							<div class="card rounded-4 p-lg-5 p-4">
								<div class="hero-caption mb-4">
									<h1 class="big-header-capt text-dark mb-0">Your Launchpad to Olympiad Success</h1>
									<p>Crack Olympiads with focused learning, expert support.</p>
								</div>
								<div><a href="{{url('contact-us')}}" class="btn btn-main rounded-pill px-5">Enquiry Now</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Working Process Start ================================== -->
			<section>
				<div class="container">
					
					<!-- Heading Row -->
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 col-sm-12">
							<div class="sec-heading center">
								<h2>Work & Process</h2>
								<p>Working Process for Join And Benifits</p>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center gx-xl-5 g-4">
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="prc-wraps">
								<div class="prc-icons mb-3">
									<div class="square--80 circle bg-light-green mx-auto"><span class="text-green fs-3"><i class="bi bi-bullseye"></i></span></div>
								</div>
								<div class="prc-caption text-center">
									<h4>Focused Olympiad Preparation</h4>
									<p class="text-muted-2">We specialize in training students for top math Olympiads like IOQM, RMO, INMO, AMC, SMO, and ISI/CMI entrances with structured learning paths.</p>
								</div>
							</div>
						</div>
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="prc-wraps">
								<div class="prc-icons mb-3">
									<div class="square--80 circle bg-light-main mx-auto"><span class="text-main fs-3"><i class="bi bi-person-badge"></i></span></div>
								</div>
								<div class="prc-caption text-center">
									<h4>Expert-Curated Resources</h4>
									<p class="text-muted-2">Our study material, mock tests, and video sessions are designed by Olympiad mentors and problem solvers with proven success.</p>
								</div>
							</div>
						</div>
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="prc-wraps">
								<div class="prc-icons mb-3">
									<div class="square--80 circle bg-light-red mx-auto"><span class="text-red fs-3"><i class="bi bi-person-video3"></i></span></div>
								</div>
								<div class="prc-caption text-center">
									<h4>Student-Centric Approach</h4>
									<p class="text-muted-2">From foundation building to advanced problem-solving, we guide students at every stage of their Olympiad journey.</p>
								</div>
							</div>	
						</div>						
						
					</div>
					
				</div>
			</section>
			<!-- ============================ Working Process End ================================== -->
			
			
			<!-- ============================  Our Courses Start ================================== -->
			<section class="border-top">
				<div class="container">
					
					<!-- Heading Row -->
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 col-sm-12">
							<div class="sec-heading center">
								<h2>Explore Our Courses</h2>
								<p>Learn from Industry Experts and Advance Your Career with Practical Skills</p>
							</div>
						</div>
					</div>
					
					<!-- Content Row -->
					<div class="row justify-content-center">
						
						<!-- Tab Content -->
						<div class="col-xl-12 col-lg-12 col-12">
							
							<div class="tab-content" id="courseTabContent">
								
								<!-- Development Content -->
								<div class="tab-pane fade show active" id="pills-development" role="tabpanel" aria-labelledby="pills-development-tab" tabindex="0">
									<div class="row justify-content-center g-3">
										
										<!-- Single Slide -->
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
											<div class="education_block_grid border">
											
												<div class="education-thumb position-relative">
													<a href="course-detail.html"><img src="assets/img/ioqm-course.jpeg" class="img-fluid w-100" alt="IOQM Course"></a>
												</div>
												
												<div class="education-body p-3">
													<div class="education-title">
														<h4 class="fs-6 fw-medium"><a href="course-detail.html">IOQM/RMO/INMO</a></h4>
													</div>
												</div>
												
												<div class="education-footer p-3">
													<div class="enrolled-link"><a href="#" class="main-link fw-medium">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a></div>
												</div>
											</div>	
										</div>
										
										<!-- Single Slide -->
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
											<div class="education_block_grid border">
											
												<div class="education-thumb position-relative">
													<a href="course-detail.html"><img src="assets/img/smo.jpg" class="img-fluid w-100" alt=""></a>
												</div>
												
												<div class="education-body p-3">
													<div class="education-title">
														<h4 class="fs-6 fw-medium"><a href="course-detail.html">SMO</a></h4>
													</div>
												</div>
												
												<div class="education-footer p-3">
													<div class="enrolled-link"><a href="#" class="main-link fw-medium">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a></div>
												</div>
											</div>	
										</div>
										
										<!-- Single Slide -->
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
											<div class="education_block_grid border">
											
												<div class="education-thumb position-relative">
													<a href="course-detail.html"><img src="assets/img/aime.png" class="img-fluid w-100" alt=" aime course"></a>
												</div>
												
												<div class="education-body p-3">
													<div class="education-title">
														<h4 class="fs-6 fw-medium"><a href="course-detail.html">AMC/AIME</a></h4>
													</div>
												</div>
												
												<div class="education-footer p-3">
													<div class="enrolled-link"><a href="#" class="main-link fw-medium">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a></div>
												</div>
											</div>	
										</div>
										
										<!-- Single Slide -->
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
											<div class="education_block_grid border">
											
												<div class="education-thumb position-relative">
													<a href="course-detail.html"><img src="assets/img/isi-cmi.png" class="img-fluid w-100" alt="isi course"></a>
												</div>
												
												<div class="education-body p-3">
													<div class="education-title">
														<h4 class="fs-6 fw-medium"><a href="course-detail.html">ISI /CMI</a></h4>
													</div>
												</div>
												
												<div class="education-footer p-3">
													<div class="enrolled-link"><a href="#" class="main-link fw-medium">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a></div>
												</div>
											</div>	
										</div>
										
									</div>
								</div>
								
								<!-- Design Content -->
								<div class="tab-pane fade" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab" tabindex="0">
									<div class="row justify-content-center g-3">
										
										<!-- Single Slide -->
										<div class="col-xl-3 col-lg-4 col-md-6">
											<div class="education_block_grid border">
											
												<div class="education-thumb position-relative">
													<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
														<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
													</div>
													<a href="course-detail.html"><img src="assets/img/courses-5.jpg" class="img-fluid" alt=""></a>
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
												
												<div class="education-footer p-3">
													<div class="education_block_author">
														<a href="#" class="d-flex align-items-center justify-content-start gap-2">
															<span class="square--30"><img src="assets/img/avatar-5.jpg" class="img-fluid circle" alt="Author"></span>
															<span class="text-dark fw-medium">Armika John</span>
														</a>
													</div>
													<div class="enrolled-link"><a href="#" class="main-link fw-medium">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a></div>
												</div>
											</div>	
										</div>
										
										<!-- Single Slide -->
										<div class="col-xl-3 col-lg-4 col-md-6">
											<div class="education_block_grid border">
											
												<div class="education-thumb position-relative">
													<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
														<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
													</div>
													<a href="course-detail.html"><img src="assets/img/courses-6.jpg" class="img-fluid" alt=""></a>
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
												
												<div class="education-footer p-3">
													<div class="education_block_author">
														<a href="#" class="d-flex align-items-center justify-content-start gap-2">
															<span class="square--30"><img src="assets/img/avatar-3.jpg" class="img-fluid circle" alt="Author"></span>
															<span class="text-dark fw-medium">Luke Lumbus</span>
														</a>
													</div>
													<div class="enrolled-link"><a href="#" class="main-link fw-medium">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a></div>
												</div>
											</div>	
										</div>
										
										<!-- Single Slide -->
										<div class="col-xl-3 col-lg-4 col-md-6">
											<div class="education_block_grid border">
											
												<div class="education-thumb position-relative">
													<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
														<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
													</div>
													<a href="course-detail.html"><img src="assets/img/courses-7.jpg" class="img-fluid" alt=""></a>
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
												
												<div class="education-footer p-3">
													<div class="education_block_author">
														<a href="#" class="d-flex align-items-center justify-content-start gap-2">
															<span class="square--30"><img src="assets/img/avatar-6.jpg" class="img-fluid circle" alt="Author"></span>
															<span class="text-dark fw-medium">Ambus Kornil</span>
														</a>
													</div>
													<div class="enrolled-link"><a href="#" class="main-link fw-medium">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a></div>
												</div>
											</div>	
										</div>
										
										<!-- Single Slide -->
										<div class="col-xl-3 col-lg-4 col-md-6">
											<div class="education_block_grid border">
											
												<div class="education-thumb position-relative">
													<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
														<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
													</div>
													<a href="course-detail.html"><img src="assets/img/courses-8.jpg" class="img-fluid" alt=""></a>
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
												
												<div class="education-footer p-3">
													<div class="education_block_author">
														<a href="#" class="d-flex align-items-center justify-content-start gap-2">
															<span class="square--30"><img src="assets/img/avatar-2.jpg" class="img-fluid circle" alt="Author"></span>
															<span class="text-dark fw-medium">Agnil Marcho</span>
														</a>
													</div>
													<div class="enrolled-link"><a href="#" class="main-link fw-medium">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a></div>
												</div>
											</div>	
										</div>
										
									</div>
								</div>
								
								<!-- Marketing Content -->
								<div class="tab-pane fade" id="pills-marketing" role="tabpanel" aria-labelledby="pills-marketing-tab" tabindex="0">
									<div class="row justify-content-center g-3">
										
										<!-- Single Slide -->
										<div class="col-xl-3 col-lg-4 col-md-6">
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
										<div class="col-xl-3 col-lg-4 col-md-6">
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
										<div class="col-xl-3 col-lg-4 col-md-6">
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
										<div class="col-xl-3 col-lg-4 col-md-6">
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
										
									</div>
								</div>
								
								<!-- Business Content -->
								<div class="tab-pane fade" id="pills-business" role="tabpanel" aria-labelledby="pills-business-tab" tabindex="0">
									<div class="row justify-content-center g-3">
										
										<!-- Single Slide -->
										<div class="col-xl-3 col-lg-4 col-md-6">
											<div class="education_block_grid border">
											
												<div class="education-thumb position-relative">
													<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
														<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
													</div>
													<a href="course-detail.html"><img src="assets/img/courses-5.jpg" class="img-fluid" alt=""></a>
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
												
												<div class="education-footer p-3">
													<div class="education_block_author">
														<a href="#" class="d-flex align-items-center justify-content-start gap-2">
															<span class="square--30"><img src="assets/img/avatar-5.jpg" class="img-fluid circle" alt="Author"></span>
															<span class="text-dark fw-medium">Armika John</span>
														</a>
													</div>
													<div class="enrolled-link"><a href="#" class="main-link fw-medium">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a></div>
												</div>
											</div>	
										</div>
										
										<!-- Single Slide -->
										<div class="col-xl-3 col-lg-4 col-md-6">
											<div class="education_block_grid border">
											
												<div class="education-thumb position-relative">
													<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
														<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
													</div>
													<a href="course-detail.html"><img src="assets/img/courses-6.jpg" class="img-fluid" alt=""></a>
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
												
												<div class="education-footer p-3">
													<div class="education_block_author">
														<a href="#" class="d-flex align-items-center justify-content-start gap-2">
															<span class="square--30"><img src="assets/img/avatar-3.jpg" class="img-fluid circle" alt="Author"></span>
															<span class="text-dark fw-medium">Luke Lumbus</span>
														</a>
													</div>
													<div class="enrolled-link"><a href="#" class="main-link fw-medium">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a></div>
												</div>
											</div>	
										</div>
										
										<!-- Single Slide -->
										<div class="col-xl-3 col-lg-4 col-md-6">
											<div class="education_block_grid border">
											
												<div class="education-thumb position-relative">
													<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
														<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
													</div>
													<a href="course-detail.html"><img src="assets/img/courses-7.jpg" class="img-fluid" alt=""></a>
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
												
												<div class="education-footer p-3">
													<div class="education_block_author">
														<a href="#" class="d-flex align-items-center justify-content-start gap-2">
															<span class="square--30"><img src="assets/img/avatar-6.jpg" class="img-fluid circle" alt="Author"></span>
															<span class="text-dark fw-medium">Ambus Kornil</span>
														</a>
													</div>
													<div class="enrolled-link"><a href="#" class="main-link fw-medium">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a></div>
												</div>
											</div>	
										</div>
										
										<!-- Single Slide -->
										<div class="col-xl-3 col-lg-4 col-md-6">
											<div class="education_block_grid border">
											
												<div class="education-thumb position-relative">
													<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
														<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
													</div>
													<a href="course-detail.html"><img src="assets/img/courses-8.jpg" class="img-fluid" alt=""></a>
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
												
												<div class="education-footer p-3">
													<div class="education_block_author">
														<a href="#" class="d-flex align-items-center justify-content-start gap-2">
															<span class="square--30"><img src="assets/img/avatar-2.jpg" class="img-fluid circle" alt="Author"></span>
															<span class="text-dark fw-medium">Agnil Marcho</span>
														</a>
													</div>
													<div class="enrolled-link"><a href="#" class="main-link fw-medium">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a></div>
												</div>
											</div>	
										</div>
										
									</div>
								</div>
								
								<!-- Accounting Content -->
								<div class="tab-pane fade" id="pills-accounting" role="tabpanel" aria-labelledby="pills-accounting-tab" tabindex="0">
									<div class="row justify-content-center g-3">
										
										<!-- Single Slide -->
										<div class="col-xl-3 col-lg-4 col-md-6">
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
										<div class="col-xl-3 col-lg-4 col-md-6">
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
										<div class="col-xl-3 col-lg-4 col-md-6">
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
										<div class="col-xl-3 col-lg-4 col-md-6">
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
										
									</div>
								</div>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
			</section>
			<!-- ============================   Our Courses End ================================== -->
			
			
			
			<!-- ============================ Categories Start ================================== -->
			<section class="bg-light">
				<div class="container">
					
					<!-- Heading Row -->
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 col-sm-12">
							<div class="sec-heading center">
								<h2>Explore Your Olympiad Journey</h2>
								<p>Dive into specialized Olympiad tracks like IOQM, INMO, AMC, and more—each crafted to sharpen your problem-solving skills.</p>
							</div>
						</div>
					</div>
					
					<!-- Content Row -->
					<div class="row justify-content-center g-4">
							
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="card-hover p-4 rounded-3 card card-body d-flex flex-row gap-5 m-0">
								<div class="icon-wraps">
									<span class="icon-slap fs-1"><i class="bi bi-pencil"></i></span>
								</div>
								<div>
									<h4 class="text-dark fw-normal mb-0 mt-2 lh-base">IOQM</h4>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="card-hover p-4 rounded-3 card card-body d-flex flex-row gap-5 m-0">
								<div class="icon-wraps">
									<span class="icon-slap fs-1"><i class="bi bi-book"></i></span>
								</div>
								<div>
									<h4 class="text-dark fw-normal mb-0 mt-2 lh-base">RMO</h4>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="card-hover p-4 rounded-3 card card-body d-flex flex-row gap-5 m-0">
								<div class="icon-wraps">
									<span class="icon-slap fs-1"><i class="bi bi-pencil-square"></i></span>
								</div>
								<div>
									<h4 class="text-dark fw-normal mb-0 mt-2 lh-base">INMO</h4>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="card-hover p-4 rounded-3 card card-body d-flex flex-row gap-5 m-0">
								<div class="icon-wraps">
									<span class="icon-slap fs-1"><i class="bi bi-list-check"></i></span>
								</div>
								<div>
									<h4 class="text-dark fw-normal mb-0 mt-2 lh-base">SMO</h4>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="card-hover p-4 rounded-3 card card-body d-flex flex-row gap-5 m-0">
								<div class="icon-wraps">
									<span class="icon-slap fs-1"><i class="bi bi-alt"></i></span>
								</div>
								<div>
									<h4 class="text-dark fw-normal mb-0 mt-2 lh-base">AMC</h4>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="card-hover p-4 rounded-3 card card-body d-flex flex-row gap-5 m-0">
								<div class="icon-wraps">
									<span class="icon-slap fs-1"><i class="bi bi-boxes"></i></span>
								</div>
								<div>
									<h4 class="text-dark fw-normal mb-0 mt-2 lh-base">AIME</h4>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="card-hover p-4 rounded-3 card card-body d-flex flex-row gap-5 m-0">
								<div class="icon-wraps">
									<span class="icon-slap fs-1"><i class="bi bi-laptop"></i></span>
								</div>
								<div>
									<h4 class="text-dark fw-normal mb-0 mt-2 lh-base">ISI</h4>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="card-hover p-4 rounded-3 card card-body d-flex flex-row gap-5 m-0">
								<div class="icon-wraps">
									<span class="icon-slap fs-1"><i class="bi bi-braces"></i></span>
								</div>
								<div>
									<h4 class="text-dark fw-normal mb-0 mt-2 lh-base">CMI</h4>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<!-- ============================ Categories End ================================== -->
			
			
			<!-- ========================== About Facts List Section =============================== -->
			<section class="pb-0">
				<div class="container">
					
					<div class="row align-items-center justify-content-center gx-xl-5 gx-lg-5 g-4">
						
						<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
							<div class="facts-img">
								<img src="assets/img/custom-img-3.png" class="img-fluid" alt="" />
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
							<div class="benifit-oflearning">
								<div class="d-block mb-4">
									<h2 class="display-5 fw-normal">About Us</h2>
									<h3>Unlocking Young Minds, Shaping Future Achievers</h3>
									<p>The Olympiad Hub isn’t just a learning platform—it’s a movement to ignite intellectual excellence in young learners. Designed for ambitious school students, we provide a results-driven ecosystem that builds Olympiad champions through a blend of rigorous academics, smart strategy, and elite mentorship.</p>
								</div>
								
								<div class="benifit-wraps mb-4">
									<ul class="p-0 m-0 row g-4">
										<li class="col-sm-6 fs-5">
											<div class="d-flex align-items-center gap-2">
												<span class="icons"><i class="bi bi-patch-check-fill text-green"></i></span><span class="fs-6">Customized Learning Plans</span>
											</div>
										</li>
										<li class="col-sm-6 fs-5">
											<div class="d-flex align-items-center gap-2">
												<span class="icons"><i class="bi bi-patch-check-fill text-green"></i></span><span class="fs-6">Real Exam Simulations</span>
											</div>
										</li>
										
										<li class="col-sm-6 fs-5">
											<div class="d-flex align-items-center gap-2">
												<span class="icons"><i class="bi bi-patch-check-fill text-green"></i></span><span class="fs-6">Interactive Learning Community</span>
											</div>
										</li>
										<li class="col-sm-6 fs-5">
											<div class="d-flex align-items-center gap-2">
												<span class="icons"><i class="bi bi-patch-check-fill text-green"></i></span><span class="fs-6">Continuous Progress Tracking</span>
											</div>
										</li>
									</ul>
								</div>
								<a href="{{url('contact-us')}}" class="btn btn-main rounded-pill px-5">Enquiry Now</a>
							</div>
							
						</div>

					</div>
					
				</div>
			</section>
			<!-- ========================== About Facts List Section =============================== -->
			
			
			<!-- ========================== Our History & Core Value Start =============================== -->
			<section>
				<div class="container">
					
					<div class="row align-items-center justify-content-center gx-xl-5 gx-lg-5 g-4">
					
						<div class="col-xl-6 col-lg-6 col-sm-12">
							<div class="history-Wraping">
								<div class="d-block mb-4">
									<h2 class="display-5 fw-normal">Our Vision</h2>
									<p class="text-muted-2">To make Olympiad preparation accessible, aspirational, and highly effective—for every motivated student, no matter their background or geography.</p>
								</div>
								
								<div class="benifit-wraps mb-4">
									<div class="d-flex flex-column gap-4">
										
										<!-- Single Item -->
										<div class="d-flex align-items-center justify-content-start gap-3">
											<div class="icons"><span class="square--50 circle bg-light-green fs-5"><i class="bi bi-patch-check-fill text-green"></i></span></div>
											<div class="caps">
												<h5>Structured Olympiad Courses</h5>
												<p class="text-muted-2 m-0">Grade-wise, subject-specific modules in Mathematics, Science, English, Reasoning, and General Knowledge tailored to national and international Olympiad standards.</p>
											</div>
										</div>
										
										<!-- Single Item -->
										<div class="d-flex align-items-center justify-content-start gap-3">
											<div class="icons"><span class="square--50 circle bg-light-green fs-5"><i class="bi bi-patch-check-fill text-green"></i></span></div>
											<div class="caps">
												<h5>Smart Practice Platform</h5>
												<p class="text-muted-2 m-0">Topic-wise drills, adaptive quizzes, previous year papers, and full-length mocks that simulate real exam conditions.</p>
											</div>
										</div>
										
										<!-- Single Item -->
										<div class="d-flex align-items-center justify-content-start gap-3">
											<div class="icons"><span class="square--50 circle bg-light-green fs-5"><i class="bi bi-patch-check-fill text-green"></i></span></div>
											<div class="caps">
												<h5>Live Mentorship from Experts</h5>
												<p class="text-muted-2 m-0">Real-time classes with Olympiad rankers and veteran educators including Dr. Priyadarshi, ensuring students gain insight beyond textbooks.</p>
											</div>
										</div>

										<div class="d-flex align-items-center justify-content-start gap-3">
											<div class="icons"><span class="square--50 circle bg-light-green fs-5"><i class="bi bi-patch-check-fill text-green"></i></span></div>
											<div class="caps">
												<h5>AI-Powered Learning Dashboard</h5>
												<p class="text-muted-2 m-0">Track progress, identify strengths and gaps, and receive personalized improvement plans powered by intelligent analytics.</p>
											</div>
										</div>
										
									</div>
								</div>
								<a href="{{url('contact-us')}}" class="btn btn-main rounded-pill px-5">Enquiry Now</a>
							</div>
							
						</div>
						
						<div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 order-lg-2">
							<div class="facts-img">
								<img src="assets/img/custom-img-1.png" class="img-fluid" alt="" />
							</div>
						</div>

					</div>
					
				</div>
			</section>
			<!-- ========================== Our History & Core Value End =============================== -->
			
			
			<!-- ============================  Reviews Start ================================== -->
			<section class="bg-light">
				<div class="container">
					
					<!-- Heading Row -->
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 col-sm-12">
							<div class="sec-heading center">
								<h2>Hear from Our Students</h2>
								<p>Discover What Learners Around the World Are Saying About Our Courses</p>
							</div>
						</div>
					</div>
					
					<!-- Content Row -->
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-lg-12">	
							
							<div class="arrow_slide reviews-slide arrow_middle">
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="card-hover p-4 rounded-3 card card-body m-0">
										<div class="rating-star">
											<div class="d-flex align-items-center gap-1 mb-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span>
											</div>
										</div>
										<div class="review-caption d-block mb-4">
											<h5 class="text-dark fw-semibold mb-0 lh-base">"Excellent faculty"</h5>
											<p class="text-muted-2">
												The teachers are very friendly and experienced. Just the thing that you require for a good exam preparation. More over the classes are very nice. They Even have a library so you can study there after class.
											</p>
										</div>
										<div class="d-flex bg-light align-items-center justify-content-between rounded-3 p-3">
											<div class="revierwer-avatar d-flex align-items-center gap-2">
												<!-- <div class="avatar-box"><img src="assets/img/avatar-1.jpg" class="img-fluid square--50 circle" alt="Avatar Image"></div> -->
												 <div class="avatar-box"><i class="bi bi-person bg-primary text-white square--50 rounded-circle"></i></div>
												<div class="reviewer-caps">
													<h6 class="fw-semibold text-dark m-0">Hussain</h6>
													<p class="text-muted-2 m-0 text-mid">7th Jul 2025</p>
												</div>
											</div>
											<div class="reviewer-post"><span class="badge bg-green rounded-pill">Student</span></div>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="card-hover p-4 rounded-3 card card-body m-0">
										<div class="rating-star">
											<div class="d-flex align-items-center gap-1 mb-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span>
											</div>
										</div>
										<div class="review-caption d-block mb-4">
											<h5 class="text-dark fw-semibold mb-0 lh-base">"Awesome service and courses."</h5>
											<p class="text-muted-2">
												Teachers are very well experienced. Faculty is also great who provide support all the time! Definitely would recommend for anyone looking to pursue JEE / NEET or any Olympiads.
											</p>
										</div>
										<div class="d-flex bg-light align-items-center justify-content-between rounded-3 p-3">
											<div class="revierwer-avatar d-flex align-items-center gap-2">
												<div class="avatar-box"><i class="bi bi-person bg-success text-white square--50 rounded-circle"></i></div>
												<div class="reviewer-caps">
													<h6 class="fw-semibold text-dark m-0">Dharun Nadar</h6>
													<p class="text-muted-2 m-0 text-mid">10th Jul 2025</p>
												</div>
											</div>
											<div class="reviewer-post"><span class="badge bg-green rounded-pill">Student</span></div>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="card-hover p-4 rounded-3 card card-body m-0">
										<div class="rating-star">
											<div class="d-flex align-items-center gap-1 mb-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span>
											</div>
										</div>
										<div class="review-caption d-block mb-4">
											<h5 class="text-dark fw-semibold mb-0 lh-base">"Very good institute."</h5>
											<p class="text-muted-2">
												Teachers are very well experienced.Faculty is also great who provide support all the time!. Good facilities are provide at the centre and the coaching material is also very good for JEE / NEET or any Olympiads.
											</p>
										</div>
										<div class="d-flex bg-light align-items-center justify-content-between rounded-3 p-3">
											<div class="revierwer-avatar d-flex align-items-center gap-2">
												<div class="avatar-box"><i class="bi bi-person bg-warning text-white square--50 rounded-circle"></i></div>
												<div class="reviewer-caps">
													<h6 class="fw-semibold text-dark m-0">Soumil Chopade</h6>
													<p class="text-muted-2 m-0 text-mid">7 Aug 2025</p>
												</div>
											</div>
											<div class="reviewer-post"><span class="badge bg-green rounded-pill">Student</span></div>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="card-hover p-4 rounded-3 card card-body m-0">
										<div class="rating-star">
											<div class="d-flex align-items-center gap-1 mb-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span>
											</div>
										</div>
										<div class="review-caption d-block mb-4">
											<h5 class="text-dark fw-semibold mb-0 lh-base">"Education can change anyone."</h5>
											<p class="text-muted-2">
												A good teacher can change ANYTHING. OLYMPIAD HUB is not only about IIT JEE.No word can describe the dedication and contributions of Saurabh Priyadarshani sir in the field of mathematics.
											</p>
										</div>
										<div class="d-flex bg-light align-items-center justify-content-between rounded-3 p-3">
											<div class="revierwer-avatar d-flex align-items-center gap-2">
												<div class="avatar-box"><i class="bi bi-person text-white square--50 rounded-circle" style="background-color: pink;"></i></div>
												<div class="reviewer-caps">
													<h6 class="fw-semibold text-dark m-0">Tinki Singh</h6>
													<p class="text-muted-2 m-0 text-mid">20 Jul 2025</p>
												</div>
											</div>
											<div class="reviewer-post"><span class="badge bg-green rounded-pill">Student</span></div>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="card-hover p-4 rounded-3 card card-body m-0">
										<div class="rating-star">
											<div class="d-flex align-items-center gap-1 mb-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span>
											</div>
										</div>
										<div class="review-caption d-block mb-4">
											<h5 class="text-dark fw-semibold mb-0 lh-base">"Proper facilities."</h5>
											<p class="text-muted-2">
												The Olympiad Hub institution is definitely an upcoming coaching. Teachers are definitely well experienced and each student is given the time they need. Proper facilities are provided to students at the centre. Faculty is also great.
											</p>
										</div>
										<div class="d-flex bg-light align-items-center justify-content-between rounded-3 p-3">
											<div class="revierwer-avatar d-flex align-items-center gap-2">
												<div class="avatar-box"><i class="bi bi-person text-white square--50 rounded-circle" style="background-color: grey;"></i></div>
												<div class="reviewer-caps">
													<h6 class="fw-semibold text-dark m-0">Kanak Khare</h6>
													<p class="text-muted-2 m-0 text-mid">21 Jul 2025</p>
												</div>
											</div>
											<div class="reviewer-post"><span class="badge bg-green rounded-pill">Student</span></div>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="card-hover p-4 rounded-3 card card-body m-0">
										<div class="rating-star">
											<div class="d-flex align-items-center gap-1 mb-2">
												<span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span><span class="text-warning"><i class="bi bi-star-fill"></i></span>
											</div>
										</div>
										<div class="review-caption d-block mb-4">
											<h5 class="text-dark fw-semibold mb-0 lh-base">"Innovative and Interesting"</h5>
											<p class="text-muted-2">
												All the faculties are superb( best one can surely find in Mumbai) Innovative and Interesting methodologies of teaching. A highly recommended for Jee/Neet/Olympiads.
											</p>
										</div>
										<div class="d-flex bg-light align-items-center justify-content-between rounded-3 p-3">
											<div class="revierwer-avatar d-flex align-items-center gap-2">
												<div class="avatar-box"><i class="bi bi-person bg-danger text-white square--50 rounded-circle"></i></div>
												<div class="reviewer-caps">
													<h6 class="fw-semibold text-dark m-0">Menon</h6>
													<p class="text-muted-2 m-0 text-mid">25 Jul 2025</p>
												</div>
											</div>
											<div class="reviewer-post"><span class="badge bg-green rounded-pill">Student</span></div>
										</div>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					
				</div>
			</section>
			<!-- ============================  Reviews End ================================== -->
			
			
			<!-- ============================== Start FAQ's ================================== -->
			<section>
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-8 col-sm-12">
							<div class="sec-heading center">
								<p>FAQ's</p>
								<h2>Frequently asked questions</h2>
							</div>
						</div>
					</div>
					
					<div class="row g-4">
						<div class="col-xl-6 col-lg-6 col-12">
							
							<div class="accordion d-flex flex-column gap-3" id="faqFirst">
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
											What exams do you help students prepare for?
										</button>
									</h2>
									<div id="faqOne" class="accordion-collapse collapse show" data-bs-parent="#faqFirst">
									  <div class="accordion-body">
										We cover major math Olympiads like IOQM, RMO, INMO, AMC, SMO, and ISI/CMI entrance exams.
									  </div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
											Who can enroll in OlympiadHub courses?
										</button>
									</h2>
									<div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#faqFirst">
									  <div class="accordion-body">
										Students from Class 6 to 12 preparing for national or international math Olympiads.
									  </div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
											Do you offer live or recorded classes?
										</button>
									</h2>
									<div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#faqFirst">
									  <div class="accordion-body">
										We provide a mix of live sessions, recorded lessons, and self-paced practice material.
									  </div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">
											What is the structure of your courses?
										</button>
									</h2>
									<div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#faqFirst">
									  <div class="accordion-body">
										Courses include concept lectures, past papers, mock tests, and doubt-solving forums.
									  </div>
									</div>
								</div>
							</div>
						
						</div>
						
						<div class="col-xl-6 col-lg-6 col-12">
							
							<div class="accordion d-flex flex-column gap-3" id="faqSeconda">
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqFive" aria-expanded="true" aria-controls="faqFive">
											How do I register for a course?
										</button>
									</h2>
									<div id="faqFive" class="accordion-collapse collapse show" data-bs-parent="#faqSeconda">
									  <div class="accordion-body">
										You can enquire directly on our website through contact us section of the website.
									  </div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqSix" aria-expanded="false" aria-controls="faqSix">
											Are there free resources available?
										</button>
									</h2>
									<div id="faqSix" class="accordion-collapse collapse" data-bs-parent="#faqSeconda">
									  <div class="accordion-body">
										Yes, we offer free trial content, sample questions, and practice sheets.
									  </div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqSeven" aria-expanded="false" aria-controls="faqSeven">
											Can I access content on mobile or tablet?
										</button>
									</h2>
									<div id="faqSeven" class="accordion-collapse collapse" data-bs-parent="#faqSeconda">
									  <div class="accordion-body">
										Yes, the platform is fully responsive and works on all devices.
									  </div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqEight" aria-expanded="false" aria-controls="faqEight">
											Do you offer guidance for beginners?
										</button>
									</h2>
									<div id="faqEight" class="accordion-collapse collapse" data-bs-parent="#faqSeconda">
									  <div class="accordion-body">
										Absolutely! We have foundation-level content and support to help new learners get started.
									  </div>
									</div>
								</div>
							</div>
						
						</div>
					</div>
					
				</div>
			</section>
			<!-- ================================= End FAQ's =============================== -->
</main>
@stop