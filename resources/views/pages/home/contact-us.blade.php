@extends('layout/version1/default')
@section('content')
<main>
<!-- ============================ Page Title Start================================== -->
			<section class="bg-gredient page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="pageTitle-wrap text-center">
								<h1 class="text-light">Get in Touch</h1>
								<p class="text-light">Reference giving information on its origins, as well as a random Lipsum generator.</p>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->		
			
			<!-- ============================ Page Content Start ================================== -->
			<section>
			
				<div class="container">
				
					<!-- row Start -->
					<div class="row">
					
						<div class="col-lg-8 col-md-7">
							<div class="card border">
								
								<div class="card-header">
									<h4 class="card-title">Fillup The Form</h4>
								</div>
								
								<div class="card-body p-4">
									<div class="row g-3">
									
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Email</label>
												<input type="email" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Subject</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Message</label>
												<textarea class="form-control"></textarea>
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<button class="btn btn-main px-5" type="button">Submit Request</button>
											</div>
										</div>
										
									</div>
								</div>
								
							</div>
											
						</div>
						
						<div class="col-lg-4 col-md-5">
						
							<div class="card border">
								
								<div class="card-body">
									<div class="contact-info">
								
										<h4>Get In Touch</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
										
										<div class="d-flex align-items-start gap-3 mb-3">
											<div class="icons">
												<div class="square--50 rounded-3 bg-light-main"><i class="bi bi-pin-map-fill text-main"></i></div>
											</div>
											<div class="caps-content">
												<h5 class="cn-info-title mb-0">Reach Us</h5>
												<p class="text-muted lh-base">2512, New Market,<br>Eliza Road, Sincher 80 CA, Canada, USA</p>
											</div>
										</div>
										
										<div class="d-flex align-items-start gap-3 mb-3">
											<div class="icons">
												<div class="square--50 rounded-3 bg-light-main"><i class="bi bi-envelope-open text-main"></i></div>
											</div>
											<div class="caps-content">
												<h5 class="cn-info-title mb-0">Drop a Mail</h5>
												<p class="text-muted lh-base">support@learnup.com<br>LearnUp@gmail.com</p>
											</div>
										</div>
										
										<div class="d-flex align-items-start gap-3">
											<div class="icons">
												<div class="square--50 rounded-3 bg-light-main"><i class="bi bi-telephone text-main"></i></div>
											</div>
											<div class="caps-content">
												<h5 class="cn-info-title mb-0">Call Us</h5>
												<p class="text-muted lh-base">(41) 123 521 458<br>+91 235 548 7548</p>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
					<!-- /row -->		
					
				</div>
						
			</section>
			<!-- ============================ Page Content End ================================== -->
@stop