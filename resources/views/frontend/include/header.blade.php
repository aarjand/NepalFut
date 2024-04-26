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
   
</head>

<body>



   
   
<header class="header">
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('frontend/img/navlogo.png') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="{{ request()->is('aboutus') ? 'active' : '' }}"><a href="{{ url('/aboutus') }}">About Us</a></li>
                                    <li class="{{ request()->is('futsals') ? 'active' : '' }}"><a href="{{ url('/futsals') }}">Futsals</a></li>
                                    <li><a href="{{ url('/bookfutsal') }}">Book Futsal</a></li>
                                    <li class="{{ request()->is('contactus') ? 'active' : '' }}"><a href="{{ url('/contactus') }}">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-12">
                        @if(auth()->check())
                            <div class="user-info-dropdown">
                                <a href="#" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    
                                    {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="{{ Route('admin.logout')}}"><i class="icon-logout"></i> Logout</a></li>
                                </ul>
                            </div>
                        @else
                            <div class="get-quote">
                                <a href="{{ url('/futsaluserlogin') }}" class="btn">Login</a>
                                <a href="{{ url('/futsaluserregister') }}" class="btn">Register</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
