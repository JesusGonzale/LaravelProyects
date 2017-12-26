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
   <div class="wrapper">
    <header class="main-header">
      <a href="/" class="logo">
        <span class="logo-mini"><b><span class="fa fa-rocket"></span></b></span>
        <span class="logo-lg"><b><span class="fa fa-rocket"></span> E-learning</b></span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user-secret"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">tienes 10 notificaciones</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i>Equipo 1 Se ha Registrado
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i>Equipo 1 Se ha Registrado
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> 1 Equipo se ha salido del grupo
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">Ver todas</a></li>
              </ul>
            </li>
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">Tu tienes 10 notificaciones</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                 <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i>Equipo 1 Se ha Registrado
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i>Equipo 1 Se ha Registrado
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> 1 Equipo se ha salido del grupo
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('imagenes_general/usuarios/'.Auth::user()->avatar)}}" id="avatar_small" class="user-image" alt="User Image">
                <span class="hidden-xs">{{Auth::user()->nombre}} {{Auth::user()->apellido}}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{asset('imagenes_general/usuarios/'.Auth::user()->avatar)}}" id="avatar_small_x2" class="img-circle" alt="User Image">
                  <p>
                    {{Auth::user()->nombre}} {{Auth::user()->apellido}} / 
                    @if(Auth::user()->tipoUsuario == 1)
                      Administrador
                    @elseif(Auth::user()->tipoUsuario == 2)
                      Maestro
                    @elseif(Auth::user()->tipoUsuario == 3) 
                      Jefe de equipo
                    @elseif(Auth::user()->tipoUsuario == 4)
                      Alumno
                    @endif
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat"><span class="fa fa-pencil-square-o "></span>Editar Perfil</a>
                  </div>
                  <div class="pull-right">
                    <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Salir</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                  </div>
                </li>
              </ul>
            </li>

          </ul>
        </div>
      </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
              <div class="pull-left image">
                <form action="{{asset('update_avatar')}}" method="post" id="avatar_form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="file" style="display: none;" name="avatar" id="avatar_input">
                </form>
                <img src="{{asset('imagenes_general/usuarios/'.Auth::user()->avatar)}}" class="img-circle"  id="avatar_image" width="40" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>{{Auth::user()->nombre}} {{Auth::user()->apellido}} </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>
            <ul class="sidebar-menu" data-widget="tree">
              <li class="active">
                <a href="{{asset('maestros/'.Auth::user()->id)}}">
                  <i class="fa fa-dashboard"></i> <span>Perfil</span>
                </a>
              </li>
              @if(Auth::user()->tipoUsuario==1)
                <li>
                  <a href="{{asset('materias')}}">
                    <i class="fa fa-th"></i> <span>Materias</span>
                  </a>
                </li>
                <li>
                  <a href="{{asset('maestros')}}">
                    <i class="fa fa-user"></i> <span>Maestros</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fa fa-user"></i> <span>Alumnos</span>
                  </a>
                </li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Avisos</span></a></li>
              @endif
              @if(Auth::user()->tipoUsuario == 2)
                <li>
                  <a href="">
                    <i class="fa fa-th"></i> <span>Mis Materias</span>
                    <span class="pull-right-container">
                      <small class="label pull-right bg-green">1</small>
                    </span>
                  </a>
                </li>
              @endif
              @if(Auth::user()->tipoUsuario == 3 or Auth::user()->tipoUsuario == 4)
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-users"></i>
                    <span>them</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right">4</span>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-user"></i> Jesus </a></li>
                    <li><a href=""><i class="fa fa-user"></i> Jesus </a></li>
                    <li><a href=""><i class="fa fa-user"></i> Jesus </a></li>
                    <li><a href=""><i class="fa fa-user"></i>Jesus </a></li>
                  </ul>
                </li>
                <li class="header">Clases agregadas</li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Codigo: Plat6tcb</span></a></li>
              @endif
            </ul>
        </section>
    </aside>
    @yield('content')
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
            <b>Version</b> 0.0.1
      </div>
      <strong>Copyright &copy; 2017-2018 <a href="">Todos los derechos reservados</a>.</strong>
    </footer>
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
<script src="{{asset('js/update_avatar.js')}}"></script>
</body>
</html>
