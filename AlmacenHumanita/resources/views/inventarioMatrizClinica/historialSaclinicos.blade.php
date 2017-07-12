@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Historial de entrega de {{ $material->nombre }}</h2>
	        </div>      
	    </div>

	    <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('inventarioMatrizClinica.indexclinicos') }}"> Atrás</a>
	        </div>

	<table class="table table-bordered">
		<tr>
			<th>Sucursal entregada:</th>
			<th>Fecha de entrega:</th>
			<th>Cantidad entregada:</th>
			<th>Descripción: </th>
		</tr>
		
	@foreach ($historiales as $key => $historial)
	@if ($material->id == $historial->materialclinica_id)
	<tr>
		<td>{{ $historial->nombre_user }}</td>
		<td>{{ $historial->created_at }}</td>
		<td>{{ $historial->cantidad }}</td>
		<td>{{ $historial->descripcion }}</td>

	</tr>
	@endif
	@endforeach
	
	</table>
    </div>
@endsection