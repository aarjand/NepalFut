@include('futsaluser.include.header')

<body>
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="login-card card-block bg-white">
                        <form action="{{ url('/futsaluserregister') }}" method="POST" class="md-float-material" >
                          @csrf
                            <h3 class="text-center txt-primary">Create an account </h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-input-wrapper">
                                        <input type="text" class="md-form-control" name="fname" required="" value="{{old('fname')}}">
                                        <label>First Name</label>
                                        <span class="md-line"></span>
                                        <span class="text-danger">
                                        @error('fame')
                                            {{$message}}
                                        @enderror

                                        </span>
                                    </div>
                                    <div class="md-input-wrapper">
                                <input type="email" class="md-form-control" name="email" required="required" value="{{old('email')}}">
                                <label>Email Address</label>
                                <span class="md-line"></span>
                                <span class="text-danger">
                                @error('email')
                                            {{$message}}
                                        @enderror

                                </span>
                            </div>
                            <div class="md-input-wrapper">
                                <input type="password" class="md-form-control" name="password" required="required" value="{{old('password')}}">
                                <label>Password</label>
                                <span class="md-line"></span>
                                <span class="text-danger">
                                @error('password')
                                            {{$message}}
                                        @enderror

                                </span>
                            </div>

                            <div class="md-input-wrapper">
                                <input type="password" class="md-form-control" name="password_confirmation" required="required" value="{{old('password_confirmation')}}">
                                <label>Confirm Password</label>
                                <span class="md-line"></span>
                                <span class="text-danger">
                                @error('password_confirmation')
                                            {{$message}}
                                        @enderror

                                </span>
                            </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-input-wrapper">
                                        <input type="text" class="md-form-control" name="lname" required="" value="{{old('lname')}}">
                                        <label>Last Name</label>
                                        <span class="md-line"></span>
                                        <span class="text-danger">
                                        @error('lname')
                                            {{$message}}
                                        @enderror

                                        </span>
                                    </div>

                                    <div class="md-input-wrapper">
                                        <input type="text" class="md-form-control" name="address" required="" value="{{old('address')}}">
                                        <label>Location</label>
                                        <span class="md-line"></span>
                                        <span class="text-danger">
                                        @error('address')
                                            {{$message}}
                                        @enderror

                                        </span>
                                    </div>

                                    <div class="md-input-wrapper">
                                        <input type="text" class="md-form-control" name="contact" required="required" value="{{old('contact')}}">
                                        <label>Contact</label>
                                        <span class="md-line"></span>
                                        <span class="text-danger">
                                        @error('contact')
                                            {{$message}}
                                        @enderror

                                        </span>
                                    </div>
                                   
                                </div>
                            
                        
                            <div class="col-xs-10 offset-xs-1">
                                <button type="submit"
                                    class="btn btn-primary btn-md btn-block waves-effect waves-light m-b-20">Sign up
                                </button>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <span class="text-muted">Already have an account?</span>
                                    <a href="futsaluserlogin" class="f-w-600 p-l-5"> Sign In Here</a>

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
    @include('futsaluser.include.footer')
