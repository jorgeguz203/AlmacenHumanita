@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Historial de Pedidos de Sucursal</h2>
	        </div>      
	    </div>

	    <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('pendientesAdmin.pendienteClinico') }}"> Atrás</a>
	            <hr>
	        </div>


	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Nombre del material:</th>
			<th>Descripcíón:</th>
			<th>Acción:</th>
		</tr>

	@foreach ($materiales as $key => $material)
	@if($material->area == 'Toma_de_muestras')
	<tr>
		<td>{{ $material->nombre }}</td>
		<td>{{ $material->descripcion }}</td>
		<td><a class="btn btn-info" 
        href="{{ route('pendientesAdmin.historialPendientesClinico2', $material->id) }}">
        Historial</a> </strong></h4></td>

	</tr>
	@endif
	@endforeach
	
	</table>
    </div>
@endsection