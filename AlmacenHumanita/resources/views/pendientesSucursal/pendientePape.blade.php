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
		<tr>
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
		<a class="btn btn-success" href="">Confirmar</a>
		<a class="btn btn-danger" href="">Pendiente</a>
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
		<tr>
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
		<a class="btn btn-success" href="">Confirmar</a>
		<a class="btn btn-danger" href="">Pendiente</a>
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
		<tr>
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
		<a class="btn btn-success" href="">Confirmar</a>
		<a class="btn btn-danger" href="">Pendiente</a>
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
		<tr>
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
		<a class="btn btn-success" href="">Confirmar</a>
		<a class="btn btn-danger" href="">Pendiente</a>
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
		<tr>
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
		<a class="btn btn-success" href="">Confirmar</a>
		<a class="btn btn-danger" href="">Pendiente</a>
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
		<tr>
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