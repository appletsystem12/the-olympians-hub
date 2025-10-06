@extends('layout/version1/default')
@section('content')
<main>
<!-- ============================ Page Title Start================================== -->
			<section class="bg-gredient page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="breadcrumb m-0">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb simple light">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Our Team</li>
									</ol>
								</nav>
							</div>
							<div class="pageTitle-wrap">
								<h1 class="text-light">Our Team</h1>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->			

			
			<!-- ============================ Find Instructors with Sidebar ================================== -->
			<section class="py-5">
				<div class="container">

					<!-- Row -->
					<div class="row gx-xxl-4">	
						
						<div class="col-xxl-12 col-lg-12 col-12">
							<div class="row g-xl-3 g-4 mb-5">
						
								<!-- Instructor List Item  -->
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="card border p-2">
										<div class="row g-0">
											<div class="col-md-4 overflow-hidden">
												<img src="assets/img/saurabh-sir.jpg" class="img-fluid rounded-2" alt="Card image">
											</div>
											<div class="col-md-8">
												<div class="card-body py-2">
													<!-- Title -->
													<h4 class="card-title d-flex align-items-center mb-0 lh-base">
														<a href="instructor-detail.html">Dr. Saurabh Priyadarshi</a><span class="verified text-green fs-6 ms-2"><i class="bi bi-patch-check-fill"></i></span>
													</h4>
													<div class="d-block mb-3">
														<div class="d-flex align-items-center gap-3 flex-wrap">
															<span class="text-muted">Ph.D. in Mathematics</span>
															<span class="text-muted">@IITians PACE, Allen, and FIITJEE.</span>
														</div>
													</div>
													
													<p class="text-truncate-2">Dr. Saurabh Priyadarshi, founder and chief mentor, brings over 27 years of teaching experience and a Ph.D. in Mathematics to The Olympiad Hub. A celebrated name in India’s competitive education space, he has trained thousands of students at prestigious institutes like IITians PACE, Allen, and FIITJEE.</p>
						
													<!-- Price and avatar -->
													<!-- <div class="d-flex justify-content-between align-items-center">
														<div class="d-flex align-items-center gap-2">
															<span class="text-warning"><i class="bi bi-star-fill"></i></span>
															<span class="text-dark fw-semibold">4.8</span>
															<span class="text-muted">(546 Reviews)</span>
														</div>
														<div class="botton-wrap">
															<a href="{{url('team-details')}}" class="btn btn-md btn-outline-dark">View Profile</a>    
														</div>                  
													</div> -->
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
						</div>
					
					</div>
					<!-- Row -->				
				</div>
			</section>
</main>
@stop
