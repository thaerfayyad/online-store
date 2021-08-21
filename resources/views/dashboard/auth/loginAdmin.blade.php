<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('site/auth/css/style.default.css')}}" id="theme-stylesheet">
    <link rel="stylesheet" href="{{asset('site/auth/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/auth/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="shortcut icon" href="{{asset('site/auth/img/logo.ico')}}">
    <link rel="stylesheet" href="{{asset('site/auth/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('site/auth/css/media.css')}}}">
    <link rel="stylesheet" href="{{asset('site/auth/js/function.js')}}">
    <link rel="stylesheet" href="{{asset('site/auth/css/style.css')}}">


{{--</head>--}}
<body>

<div class="login_div">

        <div class="login_hero">
            <div class="left_div row">
                <div class="col-sm-12 col-md-6 col-lg-6 form_div">
                    <div class="control">
                        <div class="logo_img">
                            <img src="{{asset('site/auth/img/logo.png')}}" class="logo_design">
                        </div>

                        @include('dashboard.include.alerts.success')
                        @include('dashboard.include.alerts.errors')

                        <form method="POST" action="{{route('admin.login')}}">
                            @csrf
                            <div class="form_login">
                                <div class="input_div">
                                    <input type="text" class="input_form" name="email" placeholder="User Name or Email">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="input_div">
                                    <input type="password" class="input_form" name="password" placeholder="Password">
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="data_form">
                                    <div class="remember_div">
                                        <input type="checkbox" class="remember">
                                        <p class="remember-txt">Remember me</p>
                                    </div>
                                    <div class="forget_div">
                                        <a href="./forget.html"><p class="forget-txt">Forget password?</p></a>
                                    </div>

                                </div>

                                <div class="btn_login">
                                    <button class="login_now">Login</button>
                                </div>


                                <div class="have_account">
                                    <p>Don't have an account? <span><a href="#">Sign in</a></span></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 right_div">
                    <img src="{{asset('site/auth/img/login_back.png')}}" class="back_login">
                </div>



            </div>
        </div>

        <div class="area" >
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div >


    </div>

    <!-- JavaScript files-->
    <script src="{{asset('site/auth/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('site/auth/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('site/auth/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('site/auth/js/function.js')}}"></script>
    <!-- Main File-->
    <script src="{{asset('site/auth/js/front.js')}}"></script>
    </body>
    </html>
