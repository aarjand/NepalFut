@include('admin.include.header')

<style>
    .invalid-feedback {
        color: red; /* Set the color to black */
    }
</style>

<body>
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
       
        <div class="container-fluid">
            <div class="row">
    
                <div class="col-sm-12">
                    <div class="login-card card-block">
                        <form  action="{{ url('/userLogin') }}" method="POST" class="md-float-material">
                            @csrf
                            
                            <h3 class="text-center txt-primary">
                               Log In Admin
                            </h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-input-wrapper">
                                    <label for='email'>Email</label>
                                    <input id="email" type="email" class="md-form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                            <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="md-input-wrapper">
                                        <input id="password" type="password" class="md-form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <label for="password">Password</label>
                                    @error('password')
    <span class="invalid-feedback" role="alert" >
        <strong>{{ $message }}</strong>
    </span>
@enderror


                                            <!-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            <div class="row">
                                <div class="col-xs-10 offset-xs-1">
                                    <button type="submit" class="btn btn-primary">LOGIN</button>
                                </div>
                            </div>
                           
                            <div class="col-sm-12 col-xs-12 text-center">
                               
                                <a href="adminregister" class="f-w-600 p-l-5">Sign up Now</a>
                            </div>
    
                           
                        </form>
                       
                    </div>
                    
                </div>

                <div class='col-sm-6'>
                </div>
                
               
            </div>
            
        </div>
        <!-- end of container-fluid -->
    </section>
@include('admin.include.footer')