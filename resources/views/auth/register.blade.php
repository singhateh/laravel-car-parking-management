<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sign Up | JSS Parking System - Admin Template</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="../favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

        <link rel="stylesheet" href="{{  asset("backend/plugins/bootstrap/dist/css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{  asset("backend/plugins/fontawesome-free/css/all.min.css")}}">
        <link rel="stylesheet" href="{{  asset("backend/plugins/ionicons/dist/css/ionicons.min.css")}}">
        <link rel="stylesheet" href="{{  asset("backend/plugins/icon-kit/dist/css/iconkit.min.css")}}">
        <link rel="stylesheet" href="{{  asset("backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css")}}">
        <link rel="stylesheet" href="{{  asset("backend/dist/css/theme.min.css")}}">
        <script src="{{  asset("backend/src/js/vendor/modernizr-2.8.3.min.js")}}"></script>
    </head>

    <body>

        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('img/register.jpg')">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div class="logo-centered">
                                <a href="../index.html"><img src="../src/img/brand.svg" alt=""></a>
                            </div>
                            <h3>New to JSS Parking System</h3>
                            <p>Join us today! It takes only few steps</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <i class="ik ik-mail"></i>
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <i class="ik ik-lock"></i>
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <i class="ik ik-eye-off"></i>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-12 text-left">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                            <span class="custom-control-label">&nbsp;I Accept <a href="#">Terms and Conditions</a></span>
                                        </label>
                                    </div>
                                </div> --}}
                                <div class="sign-btn text-center">
                                    <button type="submit" class="btn btn-theme">{{ __('Create Account') }}</button>
                                </div>
                            </form>
                            <div class="register">
                                <p>Already have an account? <a href="{{ route('login') }}">{{ __('Sign In') }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{  asset("backend/src/js/vendor/jquery-3.3.1.min.js")}}"><\/script>')</script>
        <script src="{{  asset("backend/plugins/popper.js/dist/umd/popper.min.js")}}"></script>
        <script src="{{  asset("backend/plugins/bootstrap/dist/js/bootstrap.min.js")}}"></script>
        <script src="{{  asset("backend/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js")}}"></script>
        <script src="{{  asset("backend/plugins/screenfull/dist/screenfull.js")}}"></script>
        <script src="{{  asset("backend/dist/js/theme.js")}}"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
