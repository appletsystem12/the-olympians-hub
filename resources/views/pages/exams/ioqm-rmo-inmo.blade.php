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
									<h2 class="ed_title">IOQM / RMO / INMO</h2>
								</div>
								
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
								<h3>Master the Path to India’s Most Prestigious Math Olympiads</h3>		
								<p>Our IOQM → RMO → INMO course is a comprehensive, multi-stage learning program designed to guide students through every level of the Indian Mathematical Olympiad journey — from foundational problem solving to national and international excellence.</p>
								<p>Whether you're just starting your preparation or aiming for a place in the Indian IMO Team, this course gives you the structure, mentorship, and rigorous training you need.</p>
								
								<div class="who-enrolled-block mt-4">
									<h3 class="edu_title mb-2">What You'll Learn</h3>

									<ul>
										<li>&bull; <strong>IOQM Level:</strong>  Integer-type problems, Olympiad-style multiple-choice strategies, number theory basics, algebraic manipulation, combinatorics counting principles, and geometry fundamentals.</li>
										<li>&bull; <strong>RMO Level:</strong>  Subjective problem-solving techniques, proof-writing, deeper insights into number theory, inequalities, advanced combinatorics, Euclidean and coordinate geometry.</li>
										<li>&bull; <strong>INMO Level:</strong>  Advanced proof strategies, functional equations, complex problem frameworks, Olympiad-level geometry, and combinatorial identities.</li>
									</ul>
								</div>
							</div>
							
							<div class="edu_wraper border">
								<h2 class="edu_title">Course Highlights</h2>
								<ul>
										<li>&bull; <strong>🧠 500+ curated questions</strong>  with detailed solutions.</li>
										<li>&bull; <strong>🎯 Topic-wise assignments</strong>  for every chapter.</li>
										<li>&bull; <strong>📝 Subjective writing practice</strong>  and evaluation by Olympiad mentors.</li>
										<li>&bull; <strong>🎥 Live sessions and recordings</strong>  for in-depth learning.</li>
										<li>&bull; <strong>📈 Performance tracking dashboard</strong>  to monitor progress.</li>
										<li>&bull; <strong>📚 Past-year paper analysis</strong>  and exclusive question banks.</li>
										<li>&bull; <strong>🏆 Mentorship from Olympiad alumni</strong>  and INMO awardees.</li>
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