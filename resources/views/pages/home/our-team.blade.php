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
										<li class="breadcrumb-item active" aria-current="page">Instructors</li>
									</ol>
								</nav>
							</div>
							<div class="pageTitle-wrap">
								<h1 class="text-light">Find Instructors</h1>
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
							<!-- Row -->
							<div class="row align-items-center g-3 mb-3">
								<div class="col-xl-9 col-lg-9 col-md-9 col-sm-8 col-12">
									We found <strong>142</strong> courses for you
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
									<div class="filter_wraps">
										<div class="position-relative">
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
							
							<div class="row g-xl-3 g-4 mb-5">
						
								<!-- Instructor List Item  -->
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="card border p-2">
										<div class="row g-0">
											<div class="col-md-4 overflow-hidden">
												<img src="assets/img/avatar-1.jpg" class="img-fluid rounded-2" alt="Card image">
											</div>
											<div class="col-md-8">
												<div class="card-body py-2">
													<!-- Title -->
													<h4 class="card-title d-flex align-items-center mb-0 lh-base">
														<a href="instructor-detail.html">Akshay Dhinwal</a><span class="verified text-green fs-6 ms-2"><i class="bi bi-patch-check-fill"></i></span>
													</h4>
													<div class="d-block mb-3">
														<div class="d-flex align-items-center gap-3 flex-wrap">
															<span class="text-muted">Software Engineer</span>
															<span class="text-muted">@Themezhub</span>
														</div>
													</div>
													
													<p class="text-truncate-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ligula magna, gravida id suscipit vitae, condimentum ac mauris. Mauris nibh leo, aliquet vel turpiscing elit. Nam ligula magcing elit.</p>
													
													<div class="gap-2 d-flex flex-wrap mb-4 mb-lg-5">
														<a href="#" class="badge badge-outline">Frontend</a>
														<a href="#" class="badge badge-outline">Devops</a>
														<a href="#" class="badge badge-outline">UI/UX designer</a>
														<a href="#" class="badge badge-outline">Full Stack</a>
														<a href="#" class="badge badge-outline">3 More..</a>
													 </div>
						
													<!-- Price and avatar -->
													<div class="d-flex justify-content-between align-items-center">
														<!-- Avatar -->
														<div class="d-flex align-items-center gap-2">
															<span class="text-warning"><i class="bi bi-star-fill"></i></span>
															<span class="text-dark fw-semibold">4.8</span>
															<span class="text-muted">(546 Reviews)</span>
														</div>
														<!-- Price -->
														<div class="botton-wrap">
															<a href="instructor-detail.html" class="btn btn-md btn-outline-dark">View Profile</a>    
														</div>                  
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Instructor List Item  -->
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="card border p-2">
										<div class="row g-0">
											<div class="col-md-4 overflow-hidden">
												<img src="assets/img/avatar-2.jpg" class="img-fluid rounded-2" alt="Card image">
											</div>
											<div class="col-md-8">
												<div class="card-body py-2">
													<!-- Title -->
													<h4 class="card-title d-flex align-items-center mb-0 lh-base">
														<a href="instructor-detail.html">Ryan Mitchell</a><span class="verified text-green fs-6 ms-2"><i class="bi bi-patch-check-fill"></i></span>
													</h4>
													<div class="d-block mb-3">
														<div class="d-flex align-items-center gap-3 flex-wrap">
															<span class="text-muted">Business Finance</span>
															<span class="text-muted">@Bliq Quard</span>
														</div>
													</div>
													
													<p class="text-truncate-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ligula magna, gravida id suscipit vitae, condimentum ac mauris. Mauris nibh leo, aliquet vel turpiscing elit. Nam ligula magcing elit.</p>
													
													<div class="gap-2 d-flex flex-wrap mb-4 mb-lg-5">
														<a href="#" class="badge badge-outline">Frontend</a>
														<a href="#" class="badge badge-outline">Devops</a>
														<a href="#" class="badge badge-outline">UI/UX designer</a>
														<a href="#" class="badge badge-outline">Full Stack</a>
														<a href="#" class="badge badge-outline">3 More..</a>
													 </div>
													<!-- Price and avatar -->
													<div class="d-flex justify-content-between align-items-center">
														<!-- Avatar -->
														<div class="d-flex align-items-center gap-2">
															<span class="text-warning"><i class="bi bi-star-fill"></i></span>
															<span class="text-dark fw-semibold">5.0</span>
															<span class="text-muted">(789 Reviews)</span>
														</div>
														<!-- Price -->
														<div class="botton-wrap">
															<a href="instructor-detail.html" class="btn btn-md btn-outline-dark">View Profile</a>    
														</div>                  
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Instructor List Item  -->
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="card border p-2">
										<div class="row g-0">
											<div class="col-md-4 overflow-hidden">
												<img src="assets/img/avatar-3.jpg" class="img-fluid rounded-2" alt="Card image">
											</div>
											<div class="col-md-8">
												<div class="card-body py-2">
													<!-- Title -->
													<h4 class="card-title d-flex align-items-center mb-0 lh-base">
														<a href="instructor-detail.html">Cameron Lee</a><span class="verified text-green fs-6 ms-2"><i class="bi bi-patch-check-fill"></i></span>
													</h4>
													<div class="d-block mb-3">
														<div class="d-flex align-items-center gap-3 flex-wrap">
															<span class="text-muted">Blogging Expert</span>
															<span class="text-muted">@GridLayers</span>
														</div>
													</div>
													
													<p class="text-truncate-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ligula magna, gravida id suscipit vitae, condimentum ac mauris. Mauris nibh leo, aliquet vel turpiscing elit. Nam ligula magcing elit.</p>
													
													<div class="gap-2 d-flex flex-wrap mb-4 mb-lg-5">
														<a href="#" class="badge badge-outline">Frontend</a>
														<a href="#" class="badge badge-outline">Devops</a>
														<a href="#" class="badge badge-outline">UI/UX designer</a>
														<a href="#" class="badge badge-outline">Full Stack</a>
														<a href="#" class="badge badge-outline">3 More..</a>
													 </div>
						
													<!-- Price and avatar -->
													<div class="d-flex justify-content-between align-items-center">
														<!-- Avatar -->
														<div class="d-flex align-items-center gap-2">
															<span class="text-warning"><i class="bi bi-star-fill"></i></span>
															<span class="text-dark fw-semibold">4.9</span>
															<span class="text-muted">(234 Reviews)</span>
														</div>
														<!-- Price -->
														<div class="botton-wrap">
															<a href="instructor-detail.html" class="btn btn-md btn-outline-dark">View Profile</a>    
														</div>                  
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Instructor List Item  -->
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="card border p-2">
										<div class="row g-0">
											<div class="col-md-4 overflow-hidden">
												<img src="assets/img/avatar-4.jpg" class="img-fluid rounded-2" alt="Card image">
											</div>
											<div class="col-md-8">
												<div class="card-body py-2">
													<!-- Title -->
													<h4 class="card-title d-flex align-items-center mb-0 lh-base">
														<a href="instructor-detail.html">Lauren Hayes</a><span class="verified text-green fs-6 ms-2"><i class="bi bi-patch-check-fill"></i></span>
													</h4>
													<div class="d-block mb-3">
														<div class="d-flex align-items-center gap-3 flex-wrap">
															<span class="text-muted">UI/UX Graphic Designer</span>
															<span class="text-muted">@BootstrapWire</span>
														</div>
													</div>
													
													<p class="text-truncate-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ligula magna, gravida id suscipit vitae, condimentum ac mauris. Mauris nibh leo, aliquet vel turpiscing elit. Nam ligula magcing elit.</p>
													
													<div class="gap-2 d-flex flex-wrap mb-4 mb-lg-5">
														<a href="#" class="badge badge-outline">Frontend</a>
														<a href="#" class="badge badge-outline">Devops</a>
														<a href="#" class="badge badge-outline">UI/UX designer</a>
														<a href="#" class="badge badge-outline">Full Stack</a>
														<a href="#" class="badge badge-outline">3 More..</a>
													 </div>
						
													<!-- Price and avatar -->
													<div class="d-flex justify-content-between align-items-center">
														<!-- Avatar -->
														<div class="d-flex align-items-center gap-2">
			  												<span class="text-warning"><i class="bi bi-star-fill"></i></span>
															<span class="text-dark fw-semibold">4.9</span>
															<span class="text-muted">(755 Reviews)</span>
														</div>
														<!-- Price -->
														<div class="botton-wrap">
															<a href="instructor-detail.html" class="btn btn-md btn-outline-dark">View Profile</a>    
														</div>                  
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Instructor List Item  -->
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="card border p-2">
										<div class="row g-0">
											<div class="col-md-4 overflow-hidden">
												<img src="assets/img/avatar-5.jpg" class="img-fluid rounded-2" alt="Card image">
											</div>
											<div class="col-md-8">
												<div class="card-body py-2">
													<!-- Title -->
													<h4 class="card-title d-flex align-items-center mb-0 lh-base">
														<a href="instructor-detail.html">Jessica Morgan</a><span class="verified text-green fs-6 ms-2"><i class="bi bi-patch-check-fill"></i></span>
													</h4>
													<div class="d-block mb-3">
														<div class="d-flex align-items-center gap-3 flex-wrap">
															<span class="text-muted">Web Developer</span>
															<span class="text-muted">@Microdell</span>
														</div>
													</div>
													
													<p class="text-truncate-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ligula magna, gravida id suscipit vitae, condimentum ac mauris. Mauris nibh leo, aliquet vel turpiscing elit. Nam ligula magcing elit.</p>
													
													<div class="gap-2 d-flex flex-wrap mb-4 mb-lg-5">
														<a href="#" class="badge badge-outline">Frontend</a>
														<a href="#" class="badge badge-outline">Devops</a>
														<a href="#" class="badge badge-outline">UI/UX designer</a>
														<a href="#" class="badge badge-outline">Full Stack</a>
														<a href="#" class="badge badge-outline">3 More..</a>
													 </div>
						
													<!-- Price and avatar -->
													<div class="d-flex justify-content-between align-items-center">
														<!-- Avatar -->
														<div class="d-flex align-items-center gap-2">
															<span class="text-warning"><i class="bi bi-star-fill"></i></span>
															<span class="text-dark fw-semibold">4.8</span>
															<span class="text-muted">(546 Reviews)</span>
														</div>
														<!-- Price -->
														<div class="botton-wrap">
															<a href="instructor-detail.html" class="btn btn-md btn-outline-dark">View Profile</a>    
														</div>                  
													</div>
												</div>
											</div>
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
</main>
@stop
