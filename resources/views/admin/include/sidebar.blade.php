<body class="sidebar-mini fixed">
    <div class="loader-bg">
       <div class="loader-bar">
       </div>
    </div>
    <div class="wrapper">
       <!-- Navbar-->
       <header class="main-header-top hidden-print">
          
          <nav class="navbar navbar-static-top">
             <!-- Sidebar toggle button-->
             <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
             <ul class="top-nav lft-nav">
                             
               
               
             </ul>
             <!-- Navbar Right Menu-->
             <div class="navbar-custom-menu f-right">
               <div class="upgrade-button">
               
 
                <ul class="top-nav">
 
                   <!-- User Menu-->
                   <li class="dropdown">
                      <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                         <span><img class="img-circle " src="{{asset('admin/assets/images/kushalprofile.png')}}" style="width:40px;" alt="User Image"></span>
                         <span>Kushal <b>Ghimire</b> <i class=" icofont icofont-simple-down"></i></span>
 
                      </a>
                      <ul class="dropdown-menu settings-menu">
                        
                         <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                         <li class="p-0">
                            <div class="dropdown-divider m-0"></div>
                         </li>
                         <li><a href="{{ Route('admin.logout')}}"><i class="icon-logout"></i> Logout</a></li>
 
                      </ul>
                   </li>
                </ul>
 
           
          </nav>
          @if($message=Session::get('success'))
<div class="alert alert-success" role="alert">
<strong>{{$message}}</i></strong>
  <div>
@endif
       </header>
     
       <!-- Side-Nav-->
<aside class="main-sidebar hidden-print ">
    <section class="sidebar" id="sidebar-scroll">
       <!-- Sidebar Menu-->
       <ul class="sidebar-menu">
           <li class="nav-level">---------</li>
           <li class=" {{Request::path()=='dashboard' ? 'active treeview':''}}">
           <a class="waves-effect waves-dark" href="{{url('/dashboard')}}">
            <i class="icon-speedometer"></i><span> Dashboard</span> </a>  
              
           </li>
           <li class="nav-level">--------</li>
           <li class=" {{Request::path()=='futsaldetails' ? 'active treeview':''}}">
           <a class="waves-effect waves-dark" href="{{url('/futsaldetails')}}">
           <i class="icon-briefcase"></i></i><span> Futsal Details</span> </a>  
              
           </li>

           <li class="nav-level">--------</li>
           <li class=" {{Request::path()=='userdetails' ? 'active treeview':''}}">
           <a class="waves-effect waves-dark" href="{{url('/userdetails')}}">
           <i class="icon-briefcase"></i></i><span> User</span> </a>  
              
           </li>

           <li class="nav-level">--------</li>
           <li class=" {{Request::path()=='bookingfutsaldetails' ? 'active treeview':''}}">
           <a class="waves-effect waves-dark" href="{{url('/bookedfutsaldetails')}}">
           <i class="icon-briefcase"></i></i><span> Bookings</span> </a>  
              
           </li>

           <li class="nav-level">--------</li>
           <li class=" {{Request::path()=='getpaymentdetails' ? 'active treeview':''}}">
           <a class="waves-effect waves-dark" href="{{url('/paymentdetails')}}">
           <i class="icon-briefcase"></i></i><span> Paymentss</span> </a>  
              
           </li>

           


       </ul>
       
    </section>
 </aside>