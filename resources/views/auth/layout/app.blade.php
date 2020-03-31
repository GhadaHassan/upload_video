<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('website/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ url('website/assets/img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Project | @yield('title')</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ url('website/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ url('website/assets/css/paper-kit.css?v=2.2.0') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ url('website/assets/demo/demo.css') }}" rel="stylesheet" />
</head>

<body class="register-page sidebar-collapse">

  @include('layouts.nav')
 
{{-- <div class="container"> --}}
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    
        
        <!-- End Navbar -->
       {{-- <div class="page-header" style="background-image: url('{{ url('website/assets/img/login-image.jpg') }}');">
      
          <div class="container">
              <div class="row">
                  
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
              <div class="page-header" style="background-image: url({{ url('website/assets/img/login-image.jpg') }}');">
                  <div class="filter"></div>
                      <div class="container">
                          <div class="row">
                              <div class="col-lg-4 ml-auto mr-auto">
                                  <div class="card card-register">
                                      <h3 class="title mx-auto">Welcome</h3>
                                      <div class="social-line text-center">
                                          <a href="#pablo" class="btn btn-neutral btn-facebook btn-just-icon">
                                              <i class="fa fa-facebook-square"></i>
                                          </a>
                                          <a href="#pablo" class="btn btn-neutral btn-google btn-just-icon">
                                              <i class="fa fa-google-plus"></i>
                                          </a>
                                          <a href="#pablo" class="btn btn-neutral btn-twitter btn-just-icon">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </div>
                                      <form class="register-form">
                                          <label>Email</label>
                                          <input type="text" class="form-control" placeholder="Email">
      
                                          <label>Password</label>
                                          <input type="password" class="form-control" placeholder="Password">
                                          <button class="btn btn-danger btn-block btn-round">Register</button>
                                      </form>
                                      <div class="forgot">
                                          <a href="#" class="btn btn-link btn-danger">Forgot password?</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="footer register-footer text-center">
                              <h6>© <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
                          </div>
              </div>
      
              </div>
          </div>
      </div>  --}}
      <div class="page-header" style="background-image: url('{{ url('website/assets/img/login-image.jpg')}}');">
        <div class="filter"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 ml-auto mr-auto">
              <div class="card card-register">
                <h3 class="title mx-auto">Welcome</h3>
                <div class="social-line text-center">
                  <a href="#pablo" class="btn btn-neutral btn-facebook btn-just-icon">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                  <a href="#pablo" class="btn btn-neutral btn-google btn-just-icon">
                    <i class="fa fa-google-plus"></i>
                  </a>
                  <a href="#pablo" class="btn btn-neutral btn-twitter btn-just-icon">
                    <i class="fa fa-twitter"></i>
                  </a>
                </div>
      @yield('content')
     