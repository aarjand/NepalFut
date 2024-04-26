@include('admin.include.header')
@include('admin.include.sidebar')

<div class="content-wrapper">
    <!-- Container-fluid starts -->
    <!-- Main content starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="main-header">
            @if(Auth::check())
             <h4>Welcome, {{ Auth::user()->name }}</h4>
            @endif

            </div>
        </div>
        <!-- 4-blocks row start -->
        <div class="row dashboard-header">
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-product">
                    <span>Total Futsal</span>
                    <h2 class="dashboard-total-products">2</h2>
                   
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-product">
                    <span>Total Users</span>
                    <h2 class="dashboard-total-products">4</h2>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-product">
                    <span>Total Bookings</span>
                    <h2 class="dashboard-total-products">5</h2>
                   
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-product">
                    <span>Payments</span>
                    <h2 class="dashboard-total-products">Rs<span>5,650</span></h2>
                    
                </div>
            </div>
        </div>
        <!-- 4-blocks row end -->

      

      
    </div>
    <!-- Main content ends -->
    <!-- Container-fluid ends -->
   
</div>


@include('admin.include.footer')
