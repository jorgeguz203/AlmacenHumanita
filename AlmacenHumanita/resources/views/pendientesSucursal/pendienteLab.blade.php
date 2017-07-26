@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Pedidos pendientes de Laboratorio</h2>
	        </div>      
	    </div>

	  
	<table class="table table-bordered">
		<tr>
			<th>Nombre del material:</th>
			<th>Cantidad:</th>
			<th>Fecha:</th>
			<th>Acción:</th>
		</tr>
		
	@foreach ($pedidos as $key => $pedido)
	@if (Auth::User()->id == $pedido->user_id)
	@if ($pedido->area == 'Clinicos')
	<tr>
		<td>{{ $pedido->nombre_material }}</td>
		<td>{{ $pedido->cantidad }}</td>
		<td>{{ $pedido->created_at }}</td>
		<td>
		<a class="btn btn-success" href="">Confirmar</a>
		<a class="btn btn-danger" href="">Pendiente</a>
		</td>

	</tr>
	@endif
	@endif
	@endforeach
	
	</table>
    </div>
@endsection