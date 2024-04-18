@include('admin.include.header')

<body>
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="login-card card-block bg-white">
                        <form action="{{ url('/addUserData') }}" method="POST" class="md-float-material" action="index.html">
                          @csrf
                            <h3 class="text-center txt-primary">Create an account </h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-input-wrapper">
                                        <input type="text" class="md-form-control" name="fname" required="">
                                        <label>First Name</label>
                                        <span class="md-line"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-input-wrapper">
                                        <input type="text" class="md-form-control" name="lname" required="">
                                        <label>Last Name</label>
                                        <span class="md-line"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="md-input-wrapper">
                                <input type="email" class="md-form-control" name="email" required="required">
                                <label>Email Address</label>
                                <span class="md-line"></span>
                            </div>
                            <div class="md-input-wrapper">
                                <input type="password" class="md-form-control" name="password" required="required">
                                <label>Password</label>
                                <span class="md-line"></span>
                            </div>
                           

                            
                            <div class="col-xs-10 offset-xs-1">
                                <button type="submit"
                                    class="btn btn-primary btn-md btn-block waves-effect waves-light m-b-20">Sign up
                                </button>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <span class="text-muted">Already have an account?</span>
                                    <a href="adminlogin" class="f-w-600 p-l-5"> Sign In Here</a>

                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- end of login-card -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row-->
        </div>
    </section>
    @include('admin.include.footer')
