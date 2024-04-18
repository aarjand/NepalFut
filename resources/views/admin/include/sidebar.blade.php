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
                         <span><img class="img-circle " src="{{asset('admin/assets/images/avatar-1.png')}}" style="width:40px;" alt="User Image"></span>
                         <span>John <b>Doe</b> <i class=" icofont icofont-simple-down"></i></span>
 
                      </a>
                      <ul class="dropdown-menu settings-menu">
                         <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                         <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                         <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                         <li class="p-0">
                            <div class="dropdown-divider m-0"></div>
                         </li>
                         <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li>
                         <li><a href="{{ Route('admin.logout')}}"><i class="icon-logout"></i> Logout</a></li>
 
                      </ul>
                   </li>
                </ul>
 
                <!-- search -->
                <div id="morphsearch" class="morphsearch">
                   <form class="morphsearch-form">
 
                      <input class="morphsearch-input" type="search" placeholder="Search..." />
 
                      <button class="morphsearch-submit" type="submit">Search</button>
 
                   </form>
                   <div class="morphsearch-content">
                      <div class="dummy-column">
                         <h2>People</h2>
                         <a class="dummy-media-object" href="#!">
                            <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan" />
                            <h3>Sara Soueidan</h3>
                         </a>
 
                         <a class="dummy-media-object" href="#!">
                            <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona" />
                            <h3>Shaun Dona</h3>
                         </a>
                      </div>
                      <div class="dummy-column">
                         <h2>Popular</h2>
                         <a class="dummy-media-object" href="#!">
                            <img src="{{asset('admin/assets/images/avatar-1.png')}}" alt="PagePreloadingEffect" />
                            <h3>Page Preloading Effect</h3>
                         </a>
 
                         <a class="dummy-media-object" href="#!">
                            <img src="{{asset('admin/assets/images/avatar-1.png')}}" alt="DraggableDualViewSlideshow" />
                            <h3>Draggable Dual-View Slideshow</h3>
                         </a>
                      </div>
                      <div class="dummy-column">
                         <h2>Recent</h2>
                         <a class="dummy-media-object" href="#!">
                            <img src="{{asset('admin/assets/images/avatar-1.png')}}" alt="TooltipStylesInspiration" />
                            <h3>Tooltip Styles Inspiration</h3>
                         </a>
                         <a class="dummy-media-object" href="#!">
                            <img src="{{asset('admin/assets/images/avatar-1.png')}}" alt="NotificationStyles" />
                            <h3>Notification Styles Inspiration</h3>
                         </a>
                      </div>
                   </div>
                   <!-- /morphsearch-content -->
                   <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                </div>
                <!-- search end -->
             <e/div>
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

           


       </ul>
       
    </section>
 </aside>