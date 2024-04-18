@extends('welcome')
@push('title')
<title>Nepal Futsal Manager</title>

@endpush
@section('content')
   
    <section class="slider">
        <div class="hero-slider">
          
            <div class="single-slider" style="background-image:url('frontend/img/slider1.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>Say Goodbye to <span>Confusion</span> and <span>Missed Opportunities</span></h1>
                                <p>Our system provides real-time scheduling updates, ensuring everyone is on the same page.
                                    Easily manage match dates, times, and locations with a few clicks. </p>
                                <div class="button">
                                    <a href="#" class="btn">Book Futsal</a>
                                    <a href="#" class="btn primary">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="single-slider" style="background-image:url('frontend/img/slider2.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>Join the <span>Future</span> of <span>Futsal Management</span></h1>
                                <p>From intuitive design to powerful features, we've got everything you need to elevate your
                                    futsal experience. Join us on the journey towards a more organized and enjoyable futsal
                                    community! </p>
                                <div class="button">
                                    <a href="#" class="btn">Register Now</a>
                                    <a href="#" class="btn primary">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start End Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('frontend/img/slider3.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>Empower your <span>Futsal Management</span> Venue </h1>
                                <p>Take control of every aspect of your futsal center with our comprehensive management
                                    system. Our platform provides futsal owners with the ultimate tool to efficiently
                                    oversee and organize all operations. </p>
                                <div class="button">
                                    <a href="#" class="btn">Register Futsal</a>
                                    <a href="#" class="btn primary">Conatct Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
        </div>
    </section>
    <!--/ End Slider Area -->

    <!-- Start Schedule Area -->
    <section class="schedule">
        <div class="container">
            <div class="schedule-inner">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 ">
                        <!-- single-schedule -->
                        <div class="single-schedule first">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fa fa-futbol-o" aria-hidden="true"></i>
                                </div>
                                <div class="single-content">

                                    <h4>Book Your Game</h4>
                                    <p>Secure your spot on the futsal court hassle-free. Reserve your preferred time and
                                        court with a few clicks.</p>
                                    <a href="#">Book Now<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- single-schedule -->
                        <div class="single-schedule middle">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icofont-prescription"></i>
                                </div>
                                <div class="single-content">

                                    <h4>Join the Futsal Revolution</h4>
                                    <p>Nepal Futsal Manager is your gateway to seamless bookings and efficient management.
                                    </p>
                                    <a href="#">Get Started<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- single-schedule -->
                        <div class="single-schedule last">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icofont-ui-clock"></i>
                                </div>
                                <div class="single-content">

                                    <h4>Opening Hours</h4>
                                    <ul class="time-sidual">
                                        <li class="day">Sunday - Friday <span>8.00AM-8.00PM</span></li>
                                        <li class="day">Saturday <span>9.00AM-6.30PM</span></li>
                                        <li class="day">Public Holiday <span>as Sunday-Friday</span></li>

                                    </ul>
                                    <a href="#">Contact Us<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/End Start schedule Area -->

    <!-- Start Feautes -->
    <section class="Feautes section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Book Futsal in 1 click</h2>
                        <img src="{{'frontend/img/section-img.png'}}" alt="#">
                        <p>Book futsal in just one click, simplifying the entire reservation process for a seamless and
                            efficient experience.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features">
                        <div class="signle-icon">
                            <i class="icofont-tick-boxed"></i>
                        </div>
                        <h3>Book</h3>
                        <p>Book your preferred futsal slot with a simple click.</p>
                    </div>
                    <!-- End Single features -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features">
                        <div class="signle-icon">
                            <i class="icofont-pay"></i>
                        </div>
                        <h3>Pay</h3>
                        <p>Pay securely online, ensuring a hassle-free transaction.</p>
                    </div>
                    <!-- End Single features -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features last">
                        <div class="signle-icon">
                            <i class="icofont-football-alt"></i>
                        </div>
                        <h3>Play</h3>
                        <p>Play and enjoy the thrilling game of futsal on your reserved court.</p>
                    </div>
                    <!-- End Single features -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Feautes -->

   <!-- Start Fun-facts -->
		<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-football-alt"></i>
							<div class="content">
								<span class="counter">3468</span>
								<p>Games Played</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-user-alt-3"></i>
							<div class="content">
								<span class="counter">2436</span>
								<p>Users</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-location-pin"></i>
							<div class="content">
								<span class="counter">20</span>
								<p>Futsals</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-table"></i>
							<div class="content">
								<span class="counter">2</span>
								<p>Years in the Game</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->

    <!-- Start Why choose -->
    <section class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>The Convenience Revolution</h2>
                        <img src="{{'frontend/img/section-img.png'}}" alt="#">
                        <p>Futsal booking platforms have evolved significantly, aligning with the growing demand for
                            simplicity and efficiency. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Left -->
                    <div class="choose-left">
                        <h3>Who We Are</h3>
                        <p>At Nepal Futsal Manager, we are passionate about revolutionizing the futsal experience in Nepal.
                            As avid enthusiasts of the sport, we understand the unique blend of skill, camaraderie, and
                            competition that futsal brings to communities. Our platform is more than just a booking system;
                            it's a comprehensive futsal management solution that aims to connect players, futsal owners, and
                            communities. With a commitment to simplicity and efficiency, we empower users to book futsal
                            courts with a single click, while also providing futsal owners with robust tools to manage their
                            operations seamlessly. We take pride in fostering a vibrant futsal community, bringing people
                            together to share in the passion and excitement that futsal embodies. Join us on this journey as
                            we redefine the futsal experience in Nepal, making it accessible, enjoyable, and inclusive for
                            everyone. </p>

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

    <!-- Start Call to action -->
    <section class="call-action overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="content">
                        <h2>Need Help??</h2>
                        <p>Contact us any time between 10:00 AM to 6:00 PM (Sun-Fri)</p>
                        <div class="button">
                            <a href="#" class="btn">Contact Now</a>
                            <a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection
