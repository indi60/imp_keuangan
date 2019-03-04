<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100">
          <span class="login100-form-logo">
            <i class="zmdi zmdi-landscape"></i>
          </span>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                        <div class="wrap-input100 validate-input">
                        <input id="name" type="name" class="input100" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <div class="wrap-input100 validate-input">
                        <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <div class="wrap-input100 validate-input">
                        <input id="password" type="password" class="input100" name="password" placeholder="Password" required autofocus>
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="wrap-input100 validate-input">
                        <input id="password" type="password" class="input100" name="password_confirmation" placeholder="Password Confirmation" required autofocus>
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<center>
<div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn">
                                    Register
                                </button>
                            </div>
                            </center>
                        
                            <div class="text-center p-t-90">
                                <a class="txt1">
                                    My Creative Tim khusnul & rizhdan
                                </a>
                           </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </section>
    <!-- /.main-section -->
