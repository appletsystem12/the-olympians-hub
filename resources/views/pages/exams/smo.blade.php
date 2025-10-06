@extends('layout/version1/default')
@section('content')
<main>
<!-- ============================ Course Header Info Start================================== -->
			<div class="image-cover ed_detail_head lg theme-ov" style="background:#f4f4f4 url(assets/img/detail-bg.jpg);" data-overlay="7">
				<div class="container">
					<div class="row">
						
						<div class="col-xl-7 col-lg-7 col-md-10">
							<div class="ed_detail_wrap light">
								
								<div class="ed_header_caption">
									<h2 class="ed_title">SMO</h2>
								</div>
								<!-- <div class="ed_header_short">
									<p>Our IOQM → RMO → INMO course is a comprehensive, multi-stage learning program designed to guide students through every level of the Indian Mathematical Olympiad journey.</p>
								</div> -->
								
								<div class="ed_rate_info">
									<div class="d-flex align-items-center justify-content-start gap-2">
										<div class="star_info text-md d-flex align-items-center gap-1">
											<i class="bi bi-star text-warning"></i>
											<i class="bi bi-star text-warning"></i>
											<i class="bi bi-star text-warning"></i>
											<i class="bi bi-star text-warning"></i>
											<i class="bi bi-star text-warning"></i>
										</div>
										<div class="review_counter d-flex align-items-center gap-1">
											<strong class="high fw-bold text-light">4.9</strong><span class="text-mid text-light">(2.24k Reviews)</span>
										</div>
									
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Course Header Info End ================================== -->
			
			
			<!-- ============================ Course Detail ================================== -->
			<section>
			<div class="container">
					<div class="row">
					
						<div class="col-xl-12 col-lg-12 col-md-12 pe-xl-4">
							
							<!-- Overview -->
							<div class="edu_wraper border">
								<h2 class="edu_title">Course Overview</h2>
								<h3>Elevate Your Mathematical Thinking: SMO Preparation Course</h3>		
								<p>Our SMO Mastery Course is meticulously designed to guide students across Junior, Senior, and Open sections of the Singapore Mathematical Olympiad, helping them unlock the depth of mathematical insight and precision.</p>
								<p>Whether you're targeting the foundational Junior section or pushing for the highest-tier Open category, this program offers structured learning, expert mentorship, and intensive practice tailored to the SMO's evolving standards.</p>
								
								<div class="who-enrolled-block mt-4">
									<h3 class="edu_title mb-2">What You’ll Master</h3>

									<ul>
										<li>&bull; <strong>Junior Section:</strong>  Development of logic and arithmetic skills through number theory, basic algebra, geometry, combinatorics, and problem-solving of moderate complexity .</li>
										<li>&bull; <strong>Senior Section:</strong>  Advanced algebra, inequalities, coordinate geometry, functional thinking and proof-based reasoning aligned with SMO Senior topics .</li>
										<li>&bull; <strong>Open Section:</strong>  University-level Olympiad challenges including abstract algebra, functional equations, transformations, combinatorial theory, and calculus-extended concepts . </li>
									</ul>
								</div>
							</div>
							
							<div class="edu_wraper border">
								<h2 class="edu_title">Course Highlights</h2>
								<ul>
										<li>&bull; <strong>🎟️ Tiered learning</strong>  adapted for all age-levels and SMO sections.</li>
										<li>&bull; <strong>🧮 1000+ quality problems</strong>  across MCQ, short-answer and full proof types.</li>
										<li>&bull; <strong>📄 Written answer practice</strong>  with detailed mentor evaluation.</li>
										<li>&bull; <strong>📺 Live and recorded sessions</strong>  for flexible learning.</li>
										<li>&bull; <strong>📊 Progress tracking dashboards</strong>  and analytics.</li>
										<li>&bull; <strong>📚 Past-year paper walkthroughs</strong>  and curated question banks.</li>
										<li>&bull; <strong>👩‍🏫 Mentorship by Olympiad trainers</strong> experienced in SMO & international math</li>
									</ul>
							</div>
								
						<?php
						/*<!-- Sidebar -->
						<div class="col-xl-4 col-lg-4 col-md-12">
						
							<div class="ed_view_box border">
							
								<div class="courses-video">
									<div class="thumb">
										<img class="pro_img img-fluid w100" src="assets/img/courses-4.jpg" alt="7.jpg">
										<div class="overlay_icon">
											<div class="bb-video-box">
												<a href="https://www.youtube.com/watch?v=A8EI6JaFbv4" data-bs-toggle="modal" data-bs-target="#popup-video" class="play-popup-video">
													<i class="bi bi-play-fill"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="author-body py-3">
									<div class="ed_view_price">
										<span class="badge bg-light-red text-red rounded-pill">25% off</span>
										<h2 class="lh-base">$179.45</h2>
									</div>
									<div class="ed_view_features mb-4">
										<h6 class="fw-semibold">Course Features</h6>
										<ul>
											<li><i class="bi bi-check-circle-fill me-2 text-green"></i>Fully Programming</li>
											<li><i class="bi bi-check-circle-fill me-2 text-green"></i>Help Code to Code</li>
											<li><i class="bi bi-check-circle-fill me-2 text-green"></i>Free Trial 7 Days</li>
											<li><i class="bi bi-check-circle-fill me-2 text-green"></i>Unlimited Videos</li>
											<li><i class="bi bi-check-circle-fill me-2 text-green"></i>24x7 Support</li>
										</ul>
									</div>
									<div class="ed_view_link d-flex align-items-center justify-content-center flex-column gap-3 m-0 p-0">
										<a href="#" class="btn btn-gray rounded-pill w-100"><i class="bi bi-basket2 me-2"></i>Add To Cart</a>
										<a href="#" class="btn btn-main w-100 rounded-pill">Enrolled Now</a>
									</div>
								</div>
								
							</div>	
							
							<div class="edu_wraper border">
								<h4 class="edu_title">Course Features</h4>
								<ul class="edu_list right">
									<li><span class="info-title"><i class="bi bi-people"></i>Student Enrolled</span><span class="text-dark right">1740</span></li>
									<li><span class="info-title"><i class="bi bi-camera-reels"></i>Lectures</span><span class="text-dark right">10</span></li>
									<li><span class="info-title"><i class="bi bi-controller"></i>Quizzes</span><span class="text-dark right">4</span></li>
									<li><span class="info-title"><i class="bi bi-clock-history"></i>Duration</span><span class="text-dark right">60h 40min</span></li>
									<li><span class="info-title"><i class="bi bi-tags"></i>Skill Level</span><span class="text-dark right">Beginner</span></li>
									<li><span class="info-title"><i class="bi bi-flag"></i>Language</span><span class="text-dark right">English</span></li>
									<li><span class="info-title"><i class="bi bi-shield-check"></i>Certification</span><span class="text-dark right">Yes</span></li>
								</ul>
							</div>
							
						</div>
						*/
						?>
					
					</div>
				</div>
			</section>
			<!-- ============================ Course Detail ================================== -->
</main>
@stop