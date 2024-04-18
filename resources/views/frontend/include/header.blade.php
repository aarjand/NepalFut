<!doctype html>
<html class="no-js" lang="eng">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    @stack('title')

    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend/img/logo1.png')}}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
  

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/themify-icons/themify-icons.css')}}">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/icofont/css/icofont.css')}}">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/simple-line-icons/css/simple-line-icons.css')}}">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="{{asset('admin/assets/plugins/chartist/dist/chartist.css')}}" type="text/css" media="all">

   <!-- Weather css -->
   <link href="{{asset('admin/assets/css/svg-weather.css')}}" rel="stylesheet">


   <!-- Style.css -->
   <!-- <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/main.css')}}"> -->

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/responsive.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/icofont.css')}}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl-carousel.css')}}">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/datepicker.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/aboutus.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/futsal.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script type="text/javascript">const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})</script>
</head>

<body>



   
    <ul class="pro-features">
        <a class="get-pro" href="#">Help?</a>
        <li class="title">For Futsals</li>
        <li>Register Futsal and Manager your futsal</li>
        <li class="title">For User</li>
        <li>Just Register, Login and Start.</li>


        <div class="button">
            <a href="#" target="_blank" class="btn">Contact Us</a>
            <a href="#" target="_blank" class="btn">Book Futsal</a>
        </div>
    </ul>

    <!-- Header Area -->
    <header class="header">

        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="{{'/'}}"><img src="{{'frontend/img/navlogo.png'}}" alt="logo of Nepal Futsal Manager"></a>
                            </div>
                            <!-- End Logo -->
                            <!-- Mobile Nav -->
                            <div class="mobile-nav"></div>
                            <!-- End Mobile Nav -->
                        </div>
                        <div class="col-lg-7 col-md-9 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                    <li class="{{Request::path()=='/' ? 'active':''}}"><a href="{{('/')}}">Home</a>
												
                                                </li>
                                                <li class="{{Request::path()=='aboutus' ? 'active':''}}"><a href="{{('/aboutus')}}">About Us </a></li>
                                                <li class="{{Request::path()=='futsals' ? 'active':''}}"><a href="{{('/futsals')}}">Futsals </a></li>
                                                <li><a href="{{url('/bookfutsal')}}">Book Futsal</a></li>
                                                <li  class="{{Request::path()=='contactus' ? 'active':''}}" ><a href="{{('/contactus')}}">Contact Us</a></li>

                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>

                        <div class="col-lg-1 col-6">
                            <div class="get-quote">

                                <li><a href="#" class="btn">Login </a>
                                    <ul class="dropdown">
                                        <li><a href="{{"/futsaluserlogin"}}">User</a></li>
                                        <li><a href="#">Futsal</a></li>
                                        <li><a href="#">Staff</a></li>
                                    </ul>
                                </li>


                            </div>

                        </div>
                        <div class="col-lg-1 col-6">
                            <div class="get-quote">
                                <li><a href="#" class="btn">Register</a>
                                    <ul class="dropdown">
                                        <li><a href="#">User</a></li>
                                        <li><a href="#">Futsal</a></li>
                                        <li><a href="#">Staff</a></li>
                                    </ul>
                                </li>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->
