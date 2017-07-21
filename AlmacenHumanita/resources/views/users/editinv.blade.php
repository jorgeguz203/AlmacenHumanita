@extends('layouts.app')
 
@section('content')
 <div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Aministración de Inventario Clínico {{ $user->name }} </h2>
	        </div>

	        	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('users.index') }}"> Atrás</a>
	        </div>

	    </div>
	</div>
	<hr>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Nombre</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Acción</th>
		</tr>
	@foreach ($mats as $key => $mat)
	@if($user->id == $mat->user_id)
	@if($mat->area == 'Toma_de_muestras')
	<tr>
		<td>{{ $mat->nombre_material }}</td>
		<td>{{ $mat->maximo }}</td>
		<td>{{ $mat->minimo }}</td>
		<td>{{ $mat->existencia }}</td>
		<td>
			
			<a class="btn btn-primary" href="{{ route('users.editinv2',[$user,$mat]) }}">Editar</a>
			
		</td>
	</tr>
	@endif
	@endif
	@endforeach
	</table>
	</div>
	
@endsection