@extends('layouts.app')
@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<a href="{{asset('maestros/create')}}" class="btn btn-success"><span class="fa fa-plus"></span> Agregar Materias</a><br><br>
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Maestro</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($materias as $materia)
						<tr>
							<th>{{$materia->id_materia }}</th>
							<th>{{$materia->nombre_materia}}</th>
							<th><a href="{{asset('maestros/'.$materia->id)}}">{{"$materia->nombre $materia->apellido"}}</a></th>
							<th>
								<a href="">Editar</a>
								<a href="">Eliminar</a>
								<a href="">Visualizar</a>
							</th>
						</tr>
						@endforeach
					</tbody>
				</table>

			</div>
		</div>
	</section>
	
</div>
@endsection