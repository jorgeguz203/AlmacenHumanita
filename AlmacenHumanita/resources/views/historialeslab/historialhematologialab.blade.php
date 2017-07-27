@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Historial de Material </h2>
	        </div>      
	    </div>

	    <div class="pull-right">
	            <a class="btn btn-primary" href="http://127.0.0.1:8000"> Atrás</a>
	            <hr>
	        </div>

	<table class="table table-bordered">
		<tr>
			<th>Nombre del Material:</th>
			<th>Cantidad:</th>
			<th>Observaciones:</th>
			<th>Fecha:</th>

		</tr>
		
	@foreach ($historiales as $key => $historial)
	@if ($historial->seccion == 'hematologia')
	@if ($materiales->id == $historial->materialclinica_id)
	<tr>
		<td>{{ $historial->nombre_material }}</td>
		<td>{{ $historial->cantidad }}</td>
		<td>{{ $historial->observaciones }}</td>
		<td>{{ $historial->created_at }}</td>


	</tr>
	@endif
	@endif
	@endforeach
	
	</table>
    </div>
@endsection