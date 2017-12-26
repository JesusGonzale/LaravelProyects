@extends('layouts.app')
@section('content')
<div class="content-wrapper">
	<section class="content">
		<h1>{{$maestros->nombre}} {{$maestros->apellido}}</h1>
	</section>
</div>
@endsection