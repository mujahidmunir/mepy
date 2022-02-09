<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from php.spruko.com/azea/azea/vertical/login-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Nov 2021 15:53:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Azea - Admin Panel HTML template" name="description">
    <meta content="Spruko Private Limited" name="author">
    <meta name="keywords" content="admin, admin dashboard template in php, admin panel bootstrap php theme, admin panel in php, admin panel template, admin template, best php admin panel, bootstrap 5 admin dashboard templates, dashboard, dashboard template, php admin panel, php admin panel template, php, admin template, php dashboard template, php framework">

    <!-- Title -->
    <title>Azea - PHP Admin & Dashboard Template</title>

    <!--Favicon -->
    <link rel="icon" href="{{asset('assets/admin/images/brand/favicon.ico')}}" type="image/x-icon"/>

    <!--Bootstrap css -->
    <link href="{{asset('assets/admin/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/admin/css/dark.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/admin/css/skin-modes.css')}}" rel="stylesheet" />

    <!-- Animate css -->
    <link href="{{asset('assets/admin/css/animated.css')}}" rel="stylesheet" />

    <!---Icons css-->
    <link href="{{asset('assets/admin/css/icons.css')}}" rel="stylesheet" />

    <!-- Color Skin css -->
    <link id="theme" href="{{asset('assets/admin/colors/color1.css')}}" rel="stylesheet" type="text/css"/>


</head>
<body>


<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="{{asset('assets/admin/images/svgs/loader.svg')}}" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<div class="register-2">
    <div class="page">
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col mx-auto">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
{{--                                <div class="text-center mb-5">--}}
{{--                                    <img src="{{asset('assets/images/logo/mepy.png')}}" class="header-brand-img desktop-lgo" alt="Azea logo">--}}
{{--                                </div>--}}
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center mb-3">
                                            <h1 class="mb-2">Log In</h1>
                                            <a href="javascript:void(0);" class="">Welcome Back !</a>
                                        </div>
                                        <form class="mt-5" method="post" action="{{route('login')}}">
                                            @csrf
                                            <div class="input-group mb-4">
                                                <div class="input-group-text">
                                                    <i class="fe fe-user"></i>
                                                </div>
                                                <input type="text" name="email" class="form-control" placeholder="Username">
                                            </div>
                                            <div class="input-group mb-4">
                                                <div class="input-group" id="Password-toggle1">
                                                    <a href="#" class="input-group-text">
                                                        <i class="fe fe-eye" aria-hidden="true"></i>
                                                    </a>
                                                    <input class="form-control" name="password" type="password" placeholder="Confirm Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" />
                                                    <span class="custom-control-label">Remember me</span>
                                                </label>
                                            </div>
                                            <div class="form-group text-center mb-3">
                                                <button type="submit"  class="btn btn-primary btn-lg w-100 br-7">Log In</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- End Page -->
<!-- Jquery js-->
<script src="{{asset('assets/admin/js/jquery.min.js')}}"></script>

<!-- Bootstrap5 js-->
<script src="{{asset('assets/admin/plugins/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!--Othercharts js-->
<script src="{{asset('assets/admin/plugins/othercharts/jquery.sparkline.min.js')}}"></script>

<!-- Circle-progress js-->
<script src="{{asset('assets/admin/js/circle-progress.min.js')}}"></script>

<!-- Jquery-rating js-->
<script src="{{asset('assets/admin/plugins/rating/jquery.rating-stars.js')}}"></script>

<!-- Show Password -->
<script src="{{asset('assets/admin/js/bootstrap-show-password.min.js')}}"></script>

<!-- Custom js-->
<script src="{{asset('assets/admin/js/custom.js')}}"></script>


</body>

</html>






{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
