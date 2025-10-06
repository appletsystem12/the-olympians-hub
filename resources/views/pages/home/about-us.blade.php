
@extends('layout/version1/default')
@section('content')
<main>
    <section>
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="xol-xxl-7 col-xl-8 col-lg-10 col-md-12">
							
							<div class="text-center d-block mb-4">
								<h1 class="display-2 fw-semibold page-title">Hi, We're<span class="text-main">The Olympiad Hub</span></h1>
								<p class="fs-5">Empowering students through structured Olympiad training. We offer expert-guided content, smart practice tools, and a focused path to IOQM, RMO, INMO, AMC, SMO, ISI, and more. Built for learners, achievers, and future problem solvers.</p>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Header Intro End ================================== -->

			<!-- ============================ Image BG Start================================== -->
			<section class="bg-cover" style="background:url(assets/img/about-bg.jpg)no-repeat;">
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="xol-xxl-12 col-xl-12 col-lg-12 col-md-12">
							
							<div class="ht-300"></div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Image BG End ================================== -->			
			
			<!-- ========================== About Facts List Section =============================== -->
			<section>
				<div class="container">
					
					<div class="row align-items-center">
					
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="benifit-oflearning">
								<div class="d-block mb-4">
									<h2>About Us</h2>
									<h3>Unlocking Young Minds, Shaping Future Achievers</h3>
									<p>The Olympiad Hub isn’t just a learning platform—it’s a movement to ignite intellectual excellence in young learners. Designed for ambitious school students, we provide a results-driven ecosystem that builds Olympiad champions through a blend of rigorous academics, smart strategy, and elite mentorship.</p>
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
						
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="facts-img">
								<img src="assets/img/hero-img-3.png" class="img-fluid" alt="" />
							</div>
						</div>

					</div>
					
				</div>
			</section>
			<!-- ========================== About Facts List Section =============================== -->
			
			<!-- ============================  Our Courses Start ================================== -->
			<section style="margin-top: -80px;">
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
													<a href="#"><img src="assets/img/ioqm-course.jpeg" class="img-fluid w-100" alt="ioqm course"></a>
												</div>
												
												<div class="education-body p-3">
													<div class="education-title">
														<h4 class="fs-6 fw-medium"><a href="#">IOQM/RMO/INMO</a></h4>
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
													<a href="#"><img src="assets/img/smo.jpg" class="img-fluid w-100" alt="smo course"></a>
												</div>
												
												<div class="education-body p-3">
													<div class="education-title">
														<h4 class="fs-6 fw-medium"><a href="#">SMO</a></h4>
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
													<a href="#"><img src="assets/img/aime.png" class="img-fluid w-100" alt=""></a>
												</div>
												
												<div class="education-body p-3">
													<div class="education-title">
														<h4 class="fs-6 fw-medium"><a href="#">AMC/AIME</a></h4>
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
													<a href="#"><img src="assets/img/isi-cmi.png" class="img-fluid w-100" alt="isi cmi course"></a>
												</div>
												
												<div class="education-body p-3">
													<div class="education-title">
														<h4 class="fs-6 fw-medium"><a href="#">ISI /CMI</a></h4>
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
			
</main>
@stop