@extends('layouts.app')
@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Agregar Maestros</h3>
					</div>
					<form action="{{asset('maestros')}}"  method="post" role="form">
						{{ csrf_field() }}
						<div class="box-body">
							<div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="text" class="form-control" id="nombre" value="{{ old('nombre') }}" name="nombre" placeholder="Ingresa el nombre">
								@if ($errors->has('nombre'))
									<span class="help-block">
										<strong>{{ $errors->first('nombre') }}</strong>
									</span>
								@endif
							</div>
							<div class="form-group">
								<label for="apellido">Apellido</label>
								<input type="text" class="form-control" id="apellido" value="{{old('apellido')}}" name="apellido" placeholder="Ingresa el Apellido">
								@if ($errors->has('apellido'))
									<span class="help-block">
										<strong>{{ $errors->first('apellido') }}</strong>
									</span>
								@endif
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" value="{{old('email')}}" name="email" placeholder="Ingresa el email">
								@if ($errors->has('nombre'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
							<div class="form-group">
								<label for="pass">Password</label>
								<input type="password" name="password" id="pass" class="form-control" placeholder="Ingresa el Password">
							</div>
						</div>

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Agregar Maestro</button>
							<a href="/maestros" class="btn btn-danger">Regresar</a>
						</div>
					</form>
				</div>       
			</div>
		</section>
	</div>
@endsection
