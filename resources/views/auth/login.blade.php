<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bienvenidos</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('front-end/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/bower_components/morris.js/morris.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/css/style_me.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b class="withe">Cbtis 144</b><b class="withe"> E-learning</b></a>
  </div>
  <div class="login-box-body">
    <div class="center">
        <img src="{{asset('front-end/images/logo.png')}}" class="padding_10" width="200" alt="">
    </div>
    <form action="" method="post">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
             @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="row">
            <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Acceder</button>
            </div>
        </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- O -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-users"></i> Registra el nombre de tu equipo</a>
    </div>
  </div>
</div>
<script src="{{asset('front-end/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('front-end/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('front-end/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front-end/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('front-end/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('front-end/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('front-end/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<script src="{{asset('front-end/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('front-end/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('front-end/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('front-end/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{asset('front-end/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('front-end/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('front-end/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('front-end/dist/js/pages/dashboard.js')}}"></script>
<script src="{{asset('front-end/dist/js/demo.js')}}"></script>
</body>
</html>

