@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Pedidos pendientes de Toma de Muestra</h2>
	        </div>      
	    </div>

	  
	<table class="table table-bordered">
		 <tr class="tabla1">
			<th>Nombre del material:</th>
			<th>Cantidad:</th>
			<th>Fecha:</th>
			<th>Acción:</th>
		</tr>
		
	@foreach ($pedidos as $key => $pedido)
	@if (Auth::User()->id == $pedido->user_id)
	@if ($pedido->area == 'Toma_de_muestras')
	<tr>
		<td>{{ $pedido->nombre_material }}</td>
		<td>{{ $pedido->cantidad }}</td>
		<td>{{ $pedido->created_at }}</td>
		<td>
		
			{!! Form::open(['method' => 'Delete','route' => ['Pedidos.destroy', $pedido->id],'style'=>'display:inline'
			,'onclick'=>"return confirm('¿Estás seguro de querer confirmar el pedido para $pedido->nombre_material?')"]) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		<a class="btn btn-danger" href="{{ route('faltantes.faltanteSuc', $pedido->id) }}">Pendiente</a>
		</td>

	</tr>
	@endif
	@endif
	@endforeach
</table>


	  <div class="pull-left">
	            <h2>Faltantes</h2>
	        </div>   
	<table class="table table-bordered">
		 <tr class="tabla1">
			<th>Nombre del material:</th>
			<th>Cantidad:</th>
			<th>Fecha:</th>
			<th>Acción:</th>
		</tr>
		@foreach ($faltante as $key => $faltantes)
	@if (Auth::User()->id == $faltantes->user_id)
	@if ($faltantes->area == 'Toma_de_muestras')
	<tr>
		<td>{{ $faltantes->nombre_material }}</td>
		<td>{{ $faltantes->faltante }}</td>
		<td>{{ $faltantes->created_at }}</td>
		<td>
		
			{!! Form::open(['method' => 'Delete','route' => ['Pedidos.destroyfaltante', $faltantes->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		</td>

	</tr>
	@endif
	@endif
	@endforeach
	
	</table>
    </div>
@endsection