@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Historial de Pedidos de {{ $sucursales->name }}</h2>
	        </div>      
	    </div>

	    <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('pendientesAdmin.pendientePapeleria') }}"> Atrás</a>
	            <hr>
	        </div>

	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Nombre del material:</th>
			<th>Descripción:</th>
			<th>Acción:</th>
		</tr>
		
	@foreach ($historiales as $key => $historial)
	@if ($sucursales->id == $historial->id)
	<tr>
		<td>{{ $historial->nombre }}</td>
		<td>{{ $historial->descripcion }}</td>
		<td><a class="btn btn-info" 
        href="{{ route('pendientesAdmin.historialPendientesPape2',[$sucursales->id,$historial->id]) }}">
        Historial</a> </strong></h4></td>

	</tr>
	@endif
	@endforeach
	
	</table>
    </div>
@endsection