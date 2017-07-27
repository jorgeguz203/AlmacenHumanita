@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Pedidos pendientes de Toma de Muestra</h2>
	        </div>      
	    </div>

	  


	  <div class="pull-left">
	            <h2>Papelería</h2>
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
	@if ($pedido->area == 'papeleria')
	<tr>
		<td>{{ $pedido->nombre_material }}</td>
		<td>{{ $pedido->cantidad }}</td>
		<td>{{ $pedido->created_at }}</td>
		<td>
			{!! Form::open(['method' => 'Delete','route' => ['PedidosPape.destroy', $pedido->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		<a class="btn btn-danger" href="{{ route('faltantes.faltantePape', $pedido->id) }}">Pendiente</a>
		</td>

	</tr>
	@endif
	@endif
	@endforeach
	
	</table>

	<div class="pull-left">
	            <h4>Faltantes Papelería</h4>
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
	@if ($faltantes->area == 'papeleria')
	<tr>
		<td>{{ $faltantes->nombre_material }}</td>
		<td>{{ $faltantes->faltante }}</td>
		<td>{{ $faltantes->created_at }}</td>
		<td>
		
			{!! Form::open(['method' => 'Delete','route' => ['Pedidos.destroyfaltantePape', $faltantes->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		</td>

	</tr>
	@endif
	@endif
	@endforeach
	
	</table>



 <div class="pull-left">
	            <h2>Limpieza</h2>
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
	@if ($pedido->area == 'limpieza')
	<tr>
		<td>{{ $pedido->nombre_material }}</td>
		<td>{{ $pedido->cantidad }}</td>
		<td>{{ $pedido->created_at }}</td>
		<td>
			{!! Form::open(['method' => 'Delete','route' => ['PedidosPape.destroy', $pedido->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		<a class="btn btn-danger" href="{{ route('faltantes.faltantePape', $pedido->id) }}">Pendiente</a>
		</td>

	</tr>
	@endif
	@endif
	@endforeach
	
	</table>

<div class="pull-left">
	            <h4>Faltantes Limpieza</h4>
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
	@if ($faltantes->area == 'limpieza')
	<tr>
		<td>{{ $faltantes->nombre_material }}</td>
		<td>{{ $faltantes->faltante }}</td>
		<td>{{ $faltantes->created_at }}</td>
		<td>
		
			{!! Form::open(['method' => 'Delete','route' => ['Pedidos.destroyfaltantePape', $faltantes->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		</td>

	</tr>
	@endif
	@endif
	@endforeach
	
	</table>


	<div class="pull-left">
	            <h2>Cafetería</h2>
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
	@if ($pedido->area == 'cafeteria')
	<tr>
		<td>{{ $pedido->nombre_material }}</td>
		<td>{{ $pedido->cantidad }}</td>
		<td>{{ $pedido->created_at }}</td>
		<td>
			{!! Form::open(['method' => 'Delete','route' => ['PedidosPape.destroy', $pedido->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		<a class="btn btn-danger" href="{{ route('faltantes.faltantePape', $pedido->id) }}">Pendiente</a>
		</td>

	</tr>
	@endif
	@endif
	@endforeach
	
	</table>


<div class="pull-left">
	            <h4>Faltantes Cafetería</h4>
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
	@if ($faltantes->area == 'cafeteria')
	<tr>
		<td>{{ $faltantes->nombre_material }}</td>
		<td>{{ $faltantes->faltante }}</td>
		<td>{{ $faltantes->created_at }}</td>
		<td>
		
			{!! Form::open(['method' => 'Delete','route' => ['Pedidos.destroyfaltantePape', $faltantes->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		</td>

	</tr>
	@endif
	@endif
	@endforeach
	
	</table>



<div class="pull-left">
	            <h2>Impresos</h2>
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
	@if ($pedido->area == 'impresos')
	<tr>
		<td>{{ $pedido->nombre_material }}</td>
		<td>{{ $pedido->cantidad }}</td>
		<td>{{ $pedido->created_at }}</td>
		<td>
			{!! Form::open(['method' => 'Delete','route' => ['PedidosPape.destroy', $pedido->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		<a class="btn btn-danger" href="{{ route('faltantes.faltantePape', $pedido->id) }}">Pendiente</a>
		</td>

	</tr>
	@endif
	@endif
	@endforeach
	
	</table>

<div class="pull-left">
	            <h4>Faltantes Impresos</h4>
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
	@if ($faltantes->area == 'impresos')
	<tr>
		<td>{{ $faltantes->nombre_material }}</td>
		<td>{{ $faltantes->faltante }}</td>
		<td>{{ $faltantes->created_at }}</td>
		<td>
		
			{!! Form::open(['method' => 'Delete','route' => ['Pedidos.destroyfaltantePape', $faltantes->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		</td>

	</tr>
	@endif
	@endif
	@endforeach
	
	</table>



<div class="pull-left">
	            <h2>Rayos X</h2>
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
	@if ($pedido->area == 'rayos_x')
	<tr>
		<td>{{ $pedido->nombre_material }}</td>
		<td>{{ $pedido->cantidad }}</td>
		<td>{{ $pedido->created_at }}</td>
		<td>
			{!! Form::open(['method' => 'Delete','route' => ['PedidosPape.destroy', $pedido->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		<a class="btn btn-danger" href="{{ route('faltantes.faltantePape', $pedido->id) }}">Pendiente</a>
		</td>

	</tr>
	@endif
	@endif
	@endforeach
	
	</table>



<div class="pull-left">
	            <h4>Faltantes de Rayos X</h4>
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
	@if ($faltantes->area == 'rayos_x')
	<tr>
		<td>{{ $faltantes->nombre_material }}</td>
		<td>{{ $faltantes->faltante }}</td>
		<td>{{ $faltantes->created_at }}</td>
		<td>
		
			{!! Form::open(['method' => 'Delete','route' => ['Pedidos.destroyfaltantePape', $faltantes->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		</td>

	</tr>
	@endif
	@endif
	@endforeach
	
	</table>



<div class="pull-left">
	            <h2>Otros</h2>
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
	@if ($pedido->area == 'otros')
	<tr>
		<td>{{ $pedido->nombre_material }}</td>
		<td>{{ $pedido->cantidad }}</td>
		<td>{{ $pedido->created_at }}</td>
		<td>
			{!! Form::open(['method' => 'Delete','route' => ['PedidosPape.destroy', $pedido->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		<a class="btn btn-danger" href="{{ route('faltantes.faltantePape', $pedido->id) }}">Pendiente</a>
		</td>

	</tr>
	@endif
	@endif
	@endforeach
	
	</table>

<div class="pull-left">
	            <h4>Faltantes Otros</h4>
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
	@if ($faltantes->area == 'otros')
	<tr>
		<td>{{ $faltantes->nombre_material }}</td>
		<td>{{ $faltantes->faltante }}</td>
		<td>{{ $faltantes->created_at }}</td>
		<td>
		
			{!! Form::open(['method' => 'Delete','route' => ['Pedidos.destroyfaltantePape', $faltantes->id],'style'=>'display:inline']) !!}
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