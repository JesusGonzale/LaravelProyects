@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
          <section class="content">
            @if(Auth::user()->tipoUsuario==1)
                <div class="row">
                    <div class="col-lg-4 col-xs-6">
                        <div class="small-box bg-aqua">
                          <div class="inner">
                            <h3>5</h3>
                            <p>Maestros</p>
                          </div>
                          <div class="icon">
                           <span class="fa fa-user"></span>
                          </div>
                          <a href="{{asset('maestros')}}" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-6">
                        <div class="small-box bg-green">
                          <div class="inner">
                            <h3>20<sup style="font-size: 20px"></sup></h3>
                            <p>Alumnos</p>
                          </div>
                          <div class="icon"><span class="fa fa-users"></span>
                          </div>
                          <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-6">
                        <div class="small-box bg-yellow">
                            <div class="inner">
                              <h3>20</h3>

                              <p>Materias</p>
                            </div>
                            <div class="icon">
                              <span class="fa fa-book "></span>
                            </div>
                            <a href="{{asset('materias')}}" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-yellow">
                            <div class="inner">
                              <h3>65</h3>

                              <p>Cursos</p>
                            </div>
                            <div class="icon">
                              <span class="fa fa-file-code-o"></span>
                            </div>
                            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-red">
                            <div class="inner">
                              <h3>65</h3>

                              <p>Avisos</p>
                            </div>
                            <div class="icon">
                              <span class="fa fa-exclamation-triangle"></span>
                            </div>
                            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">Restringe Paginas</h3>
                            </div>
                            <div class="box-body">
                              <p>Da un click <code>Para restringir el acceso a las paginas</code> </p>
                              <a class="btn btn-app">
                                <i class="fa fa-times"></i> Registro de Equipos
                              </a>
                              <a class="btn btn-app">
                                <i class="fa fa-times"></i> Editar Calificaciones
                              </a>
                              <a class="btn btn-app">
                                <i class="fa fa-times"></i> Registrar Alumnos
                              </a>
                              <a class="btn btn-app">
                                <i class="fa fa-times"></i> Subir Contenido
                              </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if(Auth::user()->tipoUsuario==3 or Auth::user()->tipoUsuario == 4)
              <div class="row">
                <div class="col-lg-4 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3>31</h3>

                      <p>Compañeros</p>
                    </div>
                    <div class="icon">
                     <span class="fa fa-user"></span>
                    </div>
                    <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-4 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3>3<sup style="font-size: 20px"></sup></h3>

                      <p>Cursos</p>
                    </div>
                    <div class="icon"><span class="fa fa-graduation-cap"></span>
                    </div>
                    <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-4 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-yellow">
                    <div class="inner">
                      <h3>5</h3>
                      <p>Equipo</p>
                    </div>
                    <div class="icon">
                      <span class="fa fa-users"></span>
                    </div>
                    <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-4 col-xs-6">
                  <div class="small-box bg-red">
                      <div class="inner">
                        <h3>65</h3>

                        <p>Datos Importantes</p>
                      </div>
                      <div class="icon">
                        <span class="fa fa-file-code-o"></span>
                      </div>
                      <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-4 col-xs-6">
                  <div class="small-box bg-aqua">
                      <div class="inner">
                        <h3>3</h3>

                        <p>Mis Asignaciones</p>
                      </div>
                      <div class="icon">
                        <span class="fa fa-envelope-o "></span>
                      </div>
                      <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="row">
                <section class="col-lg-12 connectedSortable">
                  <div class="box box-primary">
                    <div class="box-header">
                      <h3 class="box-title"><span class="fa fa-graduation-cap"></span> Datos Academicos</h3>
                    </div>
                    <div class="box-body">
                      <ul class="todo-list">
                        <li>
                          <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                          <span class="text">Jesus Alberto Gonzalez</span>
                          
                          <small class="label label-danger">P1: 5</small>
                          <small class="label label-warning">P2: 7</small>
                          <small class="label label-success">P3: 8</small>
                          <small class="label label-success">Promedio: 8</small>
                        
                          <div class="tools">
                            <i class="fa fa-edit"></i>
                          </div>
                        </li>
                        <li>
                          <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                          <span class="text">Jesus Alberto Gonzalez</span>
                          <small class="label label-danger">P1: 5</small>
                          <small class="label label-warning">P2: 7</small>
                          <small class="label label-success">P3: 8</small>
                          <small class="label label-success">Promedio: 8</small>
                          
                        </li>
                        <li>
                          <!-- drag handle -->
                          <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                          <span class="text">Jesus Alberto Gonzalez</span>
                          <!-- Emphasis label -->
                          <small class="label label-danger">P1: 5</small>
                          <small class="label label-warning">P2: 7</small>
                          <small class="label label-success">P3: 8</small>
                          <small class="label label-success">Promedio: 8</small>
                          
                        </li>
                        <li>
                          <!-- drag handle -->
                          <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                          <span class="text">Jesus Alberto Gonzalez</span>
                          <!-- Emphasis label -->
                          <small class="label label-danger">P1: 5</small>
                          <small class="label label-warning">P2: 7</small>
                          <small class="label label-success">P3: 8</small>
                          <small class="label label-success">Promedio: 8</small>
                          
                        </li>
                        <li>
                          <!-- drag handle -->
                          <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                          <span class="text">Jesus Alberto Gonzalez</span>
                          <!-- Emphasis label -->
                          <small class="label label-danger">P1: 5</small>
                          <small class="label label-warning">P2: 7</small>
                          <small class="label label-success">P3: 8</small>
                          <small class="label label-success">Promedio: 8</small>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="box box-info">
                    <div class="box-header">
                      <i class="fa fa-envelope"></i>
                      <h3 class="box-title">Enseñale a tus compañeros</h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fa fa-times"></i></button>
                      </div>
                      <!-- /. tools -->
                    </div>
                    <div class="box-body">
                      <form action="#" method="post">
                        <div class="form-group">
                          <input type="email" class="form-control" name="emailto" placeholder="Titulo">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name="subject" placeholder="Link">
                        </div>
                        <div>
                          <textarea class="textarea" name="subir" placeholder="Message"
                          style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                      </form>
                    </div>
                    <div class="box-footer clearfix">
                      <button type="button" class="pull-right btn btn-default" id="sendEmail">Subir
                        <i class="fa fa-arrow-circle-right"></i></button>
                      </div>
                  </div>
                </section>
                <section class="col-lg-12 connectedSortable">
                    <div class="box box-solid bg-green-gradient">
                      <div class="box-header">
                        <i class="fa fa-calendar"></i>

                        <h3 class="box-title">Calendario</h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                          </div>
                          <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                          <!--The calendar -->
                          <div id="calendar" style="width: 100%"></div>
                      </div>
                    </div>
                </section>
              </div>
            @endif
          </section>
    </div>
@endsection
