@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Historial de Solicitudes de Material</h2>
	        </div>      
	    </div>

	    <div class="pull-right">
	            <a class="btn btn-primary" href="http://192.168.1.17:8000/inventario"> Atrás</a>
	            <hr>
	        </div>

	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Nombre del material:</th>
			<th>Observaciones:</th>
			<th>Cantidad:</th>
			<th>Fecha:</th>
		</tr>
		
	@foreach ($historiales as $key => $historial)
	@if (Auth::User()->id == $historial->user_id)
	@if ($materiales->id == $historial->materialclinica_id)
	<tr>
		<td>{{ $historial->nombre_material }}</td>
		<td>{{ $historial->observaciones }}</td>
		<td>{{ $historial->cantidad }}</td>
		<td>{{ $historial->created_at }}</td>
	

	</tr>
	@endif
	@endif
	@endforeach
	
	</table>
    </div>
@endsection