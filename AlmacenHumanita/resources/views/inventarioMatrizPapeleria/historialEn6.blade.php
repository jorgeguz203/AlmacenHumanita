@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Historial de entrega de {{ $material->nombre }}</h2>
	        </div>      
	    </div>

	    <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('inventarioMatrizPapeleria.index6') }}"> Atrás</a>
	            <hr>
	        </div>

	<table class="table table-bordered">
		<tr>
			<th>Nombre de Proveedor:</th>
			<th>Fecha de entrada:</th>
			<th>Cantidad entrada:</th>
			<th>Precio:</th>
			<th>Presentación:</th>
			<th>Observaciones: </th>
		</tr>
		
	@foreach ($historiales as $key => $historial)
	@if ($material->id == $historial->materialpapelera_id)
	<tr>
		<td>{{ $historial->nombre_proveedor }}</td>
		<td>{{ $historial->created_at }}</td>
		<td>{{ $historial->cantidad }}</td>
		<td>{{ $historial->precio }}</td>
		<td>{{ $historial->presentacion }}</td>
		<td>{{ $historial->observaciones }}</td>

	</tr>
	@endif
	@endforeach
	
	</table>
    </div>
@endsection