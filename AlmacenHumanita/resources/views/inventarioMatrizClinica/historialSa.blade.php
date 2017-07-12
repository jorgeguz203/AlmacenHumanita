@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Historial de salida de {{ $material->nombre }}</h2>
	        </div>      
	    </div>

	    <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('inventarioMatrizClinica.index') }}"> Atrás</a>
	              <hr>
	        </div>

	<table class="table table-bordered">
		<tr>
			<th>Sucursal salida:</th>
			<th>Fecha de salida:</th>
			<th>Cantidad salida:</th>
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