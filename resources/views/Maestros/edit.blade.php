@extends('layouts.app')
@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Editar / {{$edit_maestro->nombre}} {{$edit_maestro->apellido}}</h3>
					</div>
					{!!Form::model($edit_maestro,['route'=>['maestros.update',$edit_maestro->id],'method'=>'put'])!!}
						{{ csrf_field() }}
						<div class="box-body">
							<div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="text" class="form-control" id="nombre" value="{{$edit_maestro->nombre}}" name="nombre" placeholder="Ingresa el nombre">
								@if ($errors->has('nombre'))
								<span class="help-block">
									<strong>{{ $errors->first('nombre') }}</strong>
								</span>
								@endif
							</div>
							<div class="form-group">
								<label for="apellido">Apellido</label>
								<input type="text" class="form-control" id="apellido" value="{{$edit_maestro->apellido}}" name="apellido" placeholder="Ingresa el Apellido">
								@if ($errors->has('apellido'))
								<span class="help-block">
									<strong>{{ $errors->first('apellido') }}</strong>
								</span>
								@endif
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" value="{{$edit_maestro->email}}" name="email" placeholder="Ingresa el email">
								@if ($errors->has('nombre'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
							<div class="form-group">
								<label for="pass">Actualizar Password</label>
								<input type="password" name="password" id="pass" class="form-control" placeholder="Actualizar Password">
							</div>
						</div>

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Actualizar Datos</button>
							<a href="/maestros" class="btn btn-danger">Regresar</a>
						</div>
					{{Form::close()}}
				</div>       
			</div>
		</div>
	</section>
</div>
@endsection
