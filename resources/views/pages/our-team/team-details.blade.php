@extends('layout/version1/default')
@section('content')
<main>
    <!-- ============================ Page Banner Start ================================== -->
			<section class="bg-gredient p-0">
				<div class="container-fluid px-0">
					<div class="ht-200"></div>
				</div>
			</section>
			<!-- ============================ Page Banner End ================================== -->

			
			<!-- ============================ Instructor Detail Start ================================== -->
			<section class="bg-light pt-4">
				<div class="container">
										
					<div class="row gx-xl-4">
					
						<div class="col-lg-3">
						
							<div class="d-flex flex-row align-items-center justify-content-between mt-2 mb-3">
								<div class="d-flex w-100">
									<a class="d-lg-none btn btn-md btn-outline-dark rounded-pill w-100" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
										<i class="bi bi-ui-checks-grid me-2"></i>View Instructor
									</a>
								</div>
							</div>
							<div class="offcanvas offcanvas-start offcanvas-collapse side-filter" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
								<div class="offcanvas-header d-lg-none border-bottom">
									<h5 class="offcanvas-title" id="offcanvasExampleLabel">Filter</h5>
									<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
								</div>
								<div class="offcanvas-body pt-4 pt-lg-0 p-lg-0 overlio">
									
									<div class="dashboard-navbar card p-3 pt-4 border">
								
										<div class="author-info-wwrap">
											<div class="avatar-box d-flex justify-content-center mb-2"><div class="square--120 circle shadow-sm border border-3"><img src="assets/img/avatar-3.jpg" class="img-fluid circle" alt="Avatar"></div></div>
											<div class="author-caps text-center mb-3">
												<div class="d-flex flex-column gap-1">
													<div class="d-flex align-items-center justify-content-center">
														<h5 class="fw-semibold m-0">Adam L. Markram</h5><span class="verified text-green ms-2"><i class="bi bi-patch-check-fill"></i></span>
													</div>
													<div class="d-flex align-items-center justify-content-center"><span class="text-muted">Front-End Developer</span></div>
													<div class="d-flex align-items-center justify-content-center gap-1">
														<span class="rating-star"><i class="bi bi-star-fill text-warning"></i></span>
														<span class="fw-semibold text-dark">4.9</span>
														<span class="text-muted text-mid">(2.15k Reviews)</span>
													</div>
												</div>
											</div>
											
											<div class="viewer_header d-flex align-items-centerc justify-content-center mb-4">
												<ul class="badge_info">
													<li class="started"><i class="bi bi-rocket"></i></li>
													<li class="medium"><i class="bi bi-cup"></i></li>
													<li class="platinum"><i class="bi bi-hand-thumbs-up"></i></li>
													<li class="elite unlock"><i class="bi bi-award"></i></li>
												</ul>
											</div>
											
											<div class="d-flex justify-content-between mb-4">
												<div class="d-flex flex-column gap-1">
													<h6 class="text-dark lh-1 fw-semibold m-0">42,570</h6>
													<span class="text-muted-2 m-0">Students</span>
												</div>
												<div class="d-flex flex-column gap-2">
													<h6 class="text-dark lh-1 fw-semibold m-0">46+</h6>
													<span class="text-muted-2 m-0">Courses</span>
												</div>
											</div>
										</div>
										
										<div class="skill-wraps mb-4">
											<h5>Skills</h5>
											<div class="gap-2 d-flex flex-wrap">
												<a href="#" class="badge badge-sm badge-outline rounded-pill">WordPress</a>
												<a href="#" class="badge badge-sm badge-outline rounded-pill">HTML5</a>
												<a href="#" class="badge badge-sm badge-outline rounded-pill">Figma</a>
												<a href="#" class="badge badge-sm badge-outline rounded-pill">Full Stack</a>
												<a href="#" class="badge badge-sm badge-outline rounded-pill">3 More..</a>
											 </div>
										</div>
										
										<div class="skill-wraps mb-4">
											<h5 class="mb-2">Education</h5>
											<div class="d-flex align-items-center mb-3">
												<span class="square--40 bg-light rounded-3 text-muted"><i class="bi bi-mortarboard-fill"></i></span>
												<div class="ms-3">
													<h6 class="mb-0 text-dark">Varanashi University</h6>
													<p class="mb-0 small">Master in Computer Graphics</p>
												</div>
											</div>
											
											<div class="d-flex align-items-center mb-3">
												<span class="square--40 bg-light rounded-3 text-muted"><i class="bi bi-mortarboard-fill"></i></span>
												<div class="ms-3">
													<h6 class="mb-0 text-dark">Vivekanand University</h6>
													<p class="mb-0 small">Master in Computer Science</p>
												</div>
											</div>
											
											<div class="d-flex align-items-center mb-5">
												<span class="square--40 bg-light rounded-3 text-muted"><i class="bi bi-mortarboard-fill"></i></span>
												<div class="ms-3">
													<h6 class="mb-0 text-dark">Lahore University</h6>
													<p class="mb-0 small">Bachelor in Computer Science</p>
												</div>
											</div>
											
											<div class="d-flex align-items-center flex-column gap-2">
												<a href="#" class="btn btn-md btn-outline-main rounded-2 w-100">Send Message</a>
												<a href="#" class="btn btn-md btn-main rounded-2 w-100">Book a Free Trial</a>
											</div>
											
										</div>
										
									</div>
									
								</div>
							</div>							
							
						</div>	
						
						<div class="col-lg-9 col-md-12 col-sm-12">
							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 pb-4">
									
									<!-- About Info -->
									<div class="card mb-4">
										<div class="card-body p-4">
											<h4>About</h4>
											<p>A globally recognized designer with over 7 years of hands-on experience in UX, product design, and brand strategy. I’ve guided aspiring creatives into high-impact roles across the US, Europe, Japan, and India—empowering them to launch fulfilling careers and build a personal brand that stands out. My mission? To spark the next generation of design leaders—supercharging their creativity, securing top-tier opportunities, and amplifying their voice in the design world through unforgettable, purpose-driven projects.</p>
											
											<p>My design expertise has helped companies across the US, Europe, and Japan unlock over $150M in revenue. I specialize in Web3, artificial intelligence, and edtech—where innovation meets design with real business impact.</p>
										</div>
									</div>
									
									<!-- Skills Info -->
									<div class="card mb-4">
										<div class="card-body p-4">
											<h4>Skills</h4>
											<div class="gap-2 d-flex flex-wrap">
												<span class="badge badge-gray rounded-pill">WordPress</span>
												<span class="badge badge-gray rounded-pill">HTML5</span>
												<span class="badge badge-gray rounded-pill">Figma Developer</span>
												<span class="badge badge-gray rounded-pill">Full Stack</span>
												<span class="badge badge-gray rounded-pill">CSS3</span>
												<span class="badge badge-gray rounded-pill">Laravel</span>
												<span class="badge badge-gray rounded-pill">Java Script</span>
												<span class="badge badge-gray rounded-pill">Photoshop</span>
												<span class="badge badge-gray rounded-pill">Vue.JS</span>
												<span class="badge badge-gray rounded-pill">Full-Stack</span>
												<span class="badge badge-gray rounded-pill">PHP Developer</span>
												<span class="badge badge-gray rounded-pill">Front-End Developer</span>
												<span class="badge badge-gray rounded-pill">Magento</span>
											 </div>
										</div>
									</div>
									
									<!-- All Courses -->
									<div class="card mb-4">
										<div class="card-body p-4">
											<h4>Courses</h4>
											<div class="row justify-content-center gx-3 gy-4 mb-4">
												<!-- Single Slide -->
												<div class="col-xl-4 col-lg-6 col-md-6">
													<div class="education_block_grid border">
													
														<div class="education-thumb position-relative">
															<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
																<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
															</div>
															<a href="course-detail.html"><img src="assets/img/courses-1.jpg" class="img-fluid" alt=""></a>
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
														
														<div class="education-footer p-3">
															<div class="education_block_author">
																<a href="#" class="d-flex align-items-center justify-content-start gap-2">
																	<span class="square--30"><img src="assets/img/avatar-1.jpg" class="img-fluid circle" alt="Author"></span>
																	<span class="text-dark fw-medium">Cody L.</span>
																</a>
															</div>
															<div class="enrolled-link"><a href="#" class="main-link fw-medium">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a></div>
														</div>
													</div>	
												</div>
												
												<!-- Single Slide -->
												<div class="col-xl-4 col-lg-6 col-md-6">
													<div class="education_block_grid border">
													
														<div class="education-thumb position-relative">
															<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
																<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
															</div>
															<a href="course-detail.html"><img src="assets/img/courses-2.jpg" class="img-fluid" alt=""></a>
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
														
														<div class="education-footer p-3">
															<div class="education_block_author">
																<a href="#" class="d-flex align-items-center justify-content-start gap-2">
																	<span class="square--30"><img src="assets/img/avatar-2.jpg" class="img-fluid circle" alt="Author"></span>
																	<span class="text-dark fw-medium">Adam Lobby.</span>
																</a>
															</div>
															<div class="enrolled-link"><a href="#" class="main-link fw-medium">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a></div>
														</div>
													</div>	
												</div>
												
												<!-- Single Slide -->
												<div class="col-xl-4 col-lg-6 col-md-6">
													<div class="education_block_grid border">
													
														<div class="education-thumb position-relative">
															<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
																<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
															</div>
															<a href="course-detail.html"><img src="assets/img/courses-3.jpg" class="img-fluid" alt=""></a>
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
														
														<div class="education-footer p-3">
															<div class="education_block_author">
																<a href="#" class="d-flex align-items-center justify-content-start gap-2">
																	<span class="square--30"><img src="assets/img/avatar-3.jpg" class="img-fluid circle" alt="Author"></span>
																	<span class="text-dark fw-medium">Akkie Lume</span>
																</a>
															</div>
															<div class="enrolled-link"><a href="#" class="main-link fw-medium">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a></div>
														</div>
													</div>	
												</div>
												
												<!-- Single Slide -->
												<div class="col-xl-4 col-lg-6 col-md-6">
													<div class="education_block_grid border">
													
														<div class="education-thumb position-relative">
															<div class="save-course position-absolute top-0 end-0 me-3 mt-3">
																<a href="#" class="bookmark-button"><i class="bi bi-suit-heart"></i></a>
															</div>
															<a href="course-detail.html"><img src="assets/img/courses-4.jpg" class="img-fluid" alt=""></a>
														</div>
														
														<div class="education-body p-3">
															<div class="education-title">
																<h4 class="fs-6 fw-medium"><a href="course-detail.html">Backend Development: Building Scalable Web Apps</a></h4>
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
														
														<div class="education-footer p-3">
															<div class="education_block_author">
																<a href="#" class="d-flex align-items-center justify-content-start gap-2">
																	<span class="square--30"><img src="assets/img/avatar-4.jpg" class="img-fluid circle" alt="Author"></span>
																	<span class="text-dark fw-medium">Luer Luke</span>
																</a>
															</div>
															<div class="enrolled-link"><a href="#" class="main-link fw-medium">Enrolled Now<i class="bi bi-arrow-right ms-2"></i></a></div>
														</div>
													</div>	
												</div>
												
												<!-- Single Slide -->
												<div class="col-xl-4 col-lg-6 col-md-6">
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
												<div class="col-xl-4 col-lg-6 col-md-6">
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
											</div>
											
											<div class="row align-items-center justify-content-center">
												<div class="col-12">
													<div class="text-center">
														<button type="button" class="btn btn-md btn-light-main rounded-pill">Load More Courses</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Reviews Info -->
									<div class="card mb-4">
										<div class="card-body p-4">
											<h4>Reviews (04)</h4>
											<div class="reviews-comments-wrap">
												<!-- reviews-comments-item -->  
												<div class="reviews-comments-item">
													<div class="review-comments-avatar">
														<img src="assets/img/user-1.jpg" class="img-fluid" alt=""> 
													</div>
													<div class="reviews-comments-item-text">
														<h4><a href="#">Josaph Manrty</a><span class="reviews-comments-item-date"><i class="bi bi-clock"></i>27 Oct 2019</span></h4>
														
														<div class="listing-rating high" data-starrating2="5"><i class="bi bi-star-fill active"></i><i class="bi bi-star-fill active"></i><i class="bi bi-star-fill active"></i><i class="bi bi-star-fill active"></i><i class="bi bi-star-fill active"></i><span class="review-count">4.9</span> </div>
														<div class="clearfix"></div>
														<p>" Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris. "</p>
														<div class="pull-left reviews-reaction">
															<a href="#" class="comment-like active"><i class="bi bi-hand-thumbs-up"></i> 12</a>
															<a href="#" class="comment-dislike active"><i class="bi bi-hand-thumbs-down"></i> 1</a>
															<a href="#" class="comment-love active"><i class="bi bi-suit-heart"></i> 07</a>
														</div>
													</div>
												</div>
												<!--reviews-comments-item end-->  
												
												<!-- reviews-comments-item -->  
												<div class="reviews-comments-item">
													<div class="review-comments-avatar">
														<img src="assets/img/user-2.jpg" class="img-fluid" alt=""> 
													</div>
													<div class="reviews-comments-item-text">
														<h4><a href="#">Rita Chawla</a><span class="reviews-comments-item-date"><i class="bi bi-clock"></i>2 Nov May 2019</span></h4>
														
														<div class="listing-rating mid" data-starrating2="5"><i class="bi bi-star-fill active"></i><i class="bi bi-star-fill active"></i><i class="bi bi-star-fill active"></i><i class="bi bi-star-fill active"></i><i class="bi bi-star-fill"></i><span class="review-count">3.7</span> </div>
														<div class="clearfix"></div>
														<p>" Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris. "</p>
														<div class="pull-left reviews-reaction">
															<a href="#" class="comment-like active"><i class="bi bi-hand-thumbs-up"></i> 12</a>
															<a href="#" class="comment-dislike active"><i class="bi bi-hand-thumbs-down"></i> 1</a>
															<a href="#" class="comment-love active"><i class="bi bi-suit-heart"></i> 07</a>
														</div>
													</div>
												</div>
												<!--reviews-comments-item end-->
												
												<!-- reviews-comments-item -->  
												<div class="reviews-comments-item">
													<div class="review-comments-avatar">
														<img src="assets/img/user-3.jpg" class="img-fluid" alt=""> 
													</div>
													<div class="reviews-comments-item-text">
														<h4><a href="#">Adam Wilsom</a><span class="reviews-comments-item-date"><i class="bi bi-clock"></i>10 Nov 2019</span></h4>
														
														<div class="listing-rating good" data-starrating2="5"><i class="bi bi-star-fill active"></i><i class="bi bi-star-fill active"></i><i class="bi bi-star-fill active"></i><i class="bi bi-star-fill active"></i><i class="bi bi-star-fill"></i> <span class="review-count">4.2</span> </div>
														<div class="clearfix"></div>
														<p>" Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris. "</p>
														<div class="pull-left reviews-reaction">
															<a href="#" class="comment-like active"><i class="bi bi-hand-thumbs-up"></i> 12</a>
															<a href="#" class="comment-dislike active"><i class="bi bi-hand-thumbs-down"></i> 1</a>
															<a href="#" class="comment-love active"><i class="bi bi-suit-heart"></i> 07</a>
														</div>
													</div>
												</div>
												<!--reviews-comments-item end-->
												
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<!-- /Row -->							
						</div>
					
					</div>
					
				</div>
			</section>
			<!-- ============================ Instructor Detail End ================================== -->
</main>
@stop