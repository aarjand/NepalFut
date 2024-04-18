@extends('welcome')

@push('title')
<title>AboutUs-Nepal Futsal Manager</title>
@endpush

@section('content')
<!-- Start Why choose -->
<section class="why-choose section" >
			<div class="container">
				
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>Why Us??</h3>
							<p>At Nepal Futsal Manager, we are passionate about revolutionizing the futsal experience in Nepal. As avid enthusiasts of the sport, we understand the unique blend of skill, camaraderie, and competition that futsal brings to communities. Our platform is more than just a booking system; it's a comprehensive futsal management solution that aims to connect players, futsal owners, and communities. With a commitment to simplicity and efficiency, we empower users to book futsal courts with a single click, while also providing futsal owners with robust tools to manage their operations seamlessly. We take pride in fostering a vibrant futsal community, bringing people together to share in the passion and excitement that futsal embodies. Join us on this journey as we redefine the futsal experience in Nepal, making it accessible, enjoyable, and inclusive for everyone. </p>
							
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Effortless Booking </li>
										<li><i class="fa fa-caret-right"></i>Time Savings</li>
										<li><i class="fa fa-caret-right"></i>Mobile Accessibility</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Real Time Updates </li>
										<li><i class="fa fa-caret-right"></i>Secure Online Payment</li>
										<li><i class="fa fa-caret-right"></i>Comprehensive Management for Owners</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="whychoose-image">
								
								<img src="{{'frontend/img/whychoose.png'}}">
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->


		<!-- Start Our Team -->
		<section class="our-team section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Meet Our Team</h2>
							<img src="{{'frontend/img/section-img.png'}}" alt="#">
							<p>Have a sight to our builders of the spectacular platform. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						 <div class="team-member">
      						<img src="{{'frontend/img/author1.jpg'}}" alt="Team Member 1">
      						<div class="overlie">
        						<div class="overlie-content">
          							<h3>John Doe</h3>
          							<p>Position</p>
          							<ul class="social">
										<li><a href="#"><i class="icofont-facebook"></i></a></li>
										<li><a href="#"><i class="icofont-instagram"></i></a></li>
										
									</ul>
        						</div>
      						</div>
    					</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="team-member">
      						<img src="{{'frontend/img/author2.jpg'}}" alt="Team Member 2">
      						<div class="overlie">
        						<div class="overlie-content">
          							<h3>John Doe</h3>
          							<p>Position</p>
          							<ul class="social">
										<li><a href="#"><i class="icofont-facebook"></i></a></li>
										<li><a href="#"><i class="icofont-instagram"></i></a></li>
										
									</ul>
        						</div>
      						</div>
    					</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="team-member">
      						<img src="{{'frontend/img/author3.jpg'}}" alt="Team Member 3">
      						<div class="overlie">
        						<div class="overlie-content">
          							<h3>John Doe</h3>
          							<p>Position</p>
          							<ul class="social">
										<li><a href="#"><i class="icofont-facebook"></i></a></li>
										<li><a href="#"><i class="icofont-instagram"></i></a></li>
										
									</ul>
        						</div>
      						</div>
    					</div>
					</div>

					<div class="col-lg-3 col-md-6 col-12">
						<div class="team-member">
      						<img src="{{'frontend/img/author1.jpg'}}" alt="Team Member 4">
      						<div class="overlie">
        						<div class="overlie-content">
          							<h3>John Doe</h3>
          							<p>Position</p>
          							<ul class="social">
										<li><a href="#"><i class="icofont-facebook"></i></a></li>
										<li><a href="#"><i class="icofont-instagram"></i></a></li>
										
									</ul>
        						</div>
      						</div>
    					</div>
					</div>
				
			</div>
		</section>
		<!--/ End Our Team -->
@endsection