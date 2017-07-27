@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Historial de Pedidos de {{ $sucursales->name }}</h2>
	        </div>      
	    </div>

	    <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('pendientesAdmin.pendienteClinico') }}"> Atrás</a>
	            <hr>
	        </div>

	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Nombre del material:</th>
			<th>Observaciones:</th>
			<th>Cantidad:</th>
			<th>Fecha:</th>
			<th>Acción:</th>
		</tr>
		
	@foreach ($historiales as $key => $historial)
	@if ($sucursales->id == $historial->user_id)
	<tr>
		<td>{{ $historial->nombre_material }}</td>
		<td>{{ $historial->observaciones }}</td>
		<td>{{ $historial->cantidad }}</td>
		<td>{{ $historial->created_at }}</td>
		<td><a class="btn btn-info" 
        href="{{ route('pendientesAdmin.historialPendientesClinico2', $historial->materialclinica_id) }}">
        Historial</a> </strong></h4></td>

	</tr>
	@endif
	@endforeach
	
	</table>
    </div>
@endsection