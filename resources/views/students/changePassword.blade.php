<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('page_title', setting('front.title') . " - " . setting('front.description'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="shortcut icon" href="{{ voyager_asset('images/logo-icon.png') }}" type="image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/student_custom.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="/css/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class=" ">

<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  {{-- <div class="content-wrapper"> --}}
    <!-- Main content -->
<section class="content container">
    <div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
        <div class="box box-solid box-profile" >
            <div class="box-header with-border">
                <h3 class="box-title">Please change the Password before Proceed </h3>
            </div>
                <form action="/home/profile/UpdatePassword" id="changepassword" method="post">
                    {{ csrf_field() }}
                    <div class="box-body box-profile">
                        <div class="form-group {{ $errors->has('current_password') ? 'has-error' :'' }}">
                            <label for="exampleInputPassword1">Current Password</label>
                            <input type="password" name="current_password" class="form-control" id="exampleInputPassword1" placeholder="Enter current password" required="true">
                            @if($errors->has('current_password'))<span class="help-block">{{ $errors->first('current_password') }}</span>@endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? 'has-error' :'' }}">
                            <label for="password">New Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter new password" required>
                            @if($errors->has('password'))<span class="help-block">{{ $errors->first('password') }}</span>@endif
                        </div>
                        <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' :'' }}">
                            <label for="password_confirmation">Retype Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Retype new password" required>
                            @if($errors->has('password_confirmation'))<span class="help-block">{{ $errors->first('password_confirmation') }}</span>@endif
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-danger pull-right" onClick="validatePassword();">Change My Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <div class="col-md-3"></div>
</div>

    </section>
    <!-- /.content -->
  {{-- </div> --}}
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  {{-- <footer class="main-footer">
    <!-- To the right -->
  <!--   <div class="pull-right hidden-xs">
      Anything you want
    </div> -->
    <!-- Default to the left -->
<!--     <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved. -->
  </footer> --}}

  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  {{-- <div class="control-sidebar-bg"></div> --}}
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="/vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/js/student_custom.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
















