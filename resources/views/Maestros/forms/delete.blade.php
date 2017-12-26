{{Form::open(['url'=>'/maestros/'.$maestro->id,'method'=>'DELETE','class'=>'inline-block'])}}
	<button type="submit" class="btn btn-danger btn-circle-fabs"><span class="fa fa-trash"></span></button>
{{Form::close()}}