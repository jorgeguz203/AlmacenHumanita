@extends('layouts.app')
 
@section('content')
 <div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Aministración de Inventario de Sucursales Papelería</h2>
	        </div>
	    </div>
	</div>
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
	@if($user->id == $mat->User_id)
	<tr>
		<td>{{ $mat->nombre_material }}</td>
		<td>{{ $mat->maximo }}</td>
		<td>{{ $mat->minimo }}</td>
		<td>{{ $mat->existencia }}</td>
		<td>
			
			<a class="btn btn-primary" href="{{ route('users.editinvpap2',$mat->id) }}">Editar</a>
			
		</td>
	</tr>
	@endif
	@endforeach
	</table>
	</div>
	
@endsection