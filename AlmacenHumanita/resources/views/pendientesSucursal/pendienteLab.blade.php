@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Pedidos pendientes de Laboratorio</h2>
	        </div>      
	    </div>


	 <h4><strong> Inmunología(1) </strong></h4>
	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Nombre del material:</th>
			<th>Cantidad:</th>
			<th>Fecha:</th>
			<th>Acción:</th>
		</tr>
		
	@foreach ($pedidos as $key => $pedido)
	@if (Auth::User()->id == $pedido->user_id)
	@if ($pedido->area == 'Clinicos')

	@if ($pedido->seccion == 'inmunologia')
	<tr>
		<td>{{ $pedido->nombre_material }}</td>
		<td>{{ $pedido->cantidad }}</td>
		<td>{{ $pedido->created_at }}</td>
		<td>
			{!! Form::open(['method' => 'Delete','route' => ['PedidosLab.destroylab', $pedido->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		<a class="btn btn-danger" href="">Pendiente</a>
		</td>

	</tr>
	@endif
	@endif
	@endif
	@endforeach
	
	</table>





	<h4><strong>  Uroanálisis(2) </strong></h4>
	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Nombre del material:</th>
			<th>Cantidad:</th>
			<th>Fecha:</th>
			<th>Acción:</th>
		</tr>
		
	@foreach ($pedidos as $key => $pedido)
	@if (Auth::User()->id == $pedido->user_id)
	@if ($pedido->area == 'Clinicos')

	@if ($pedido->seccion == 'uroanalisis')
	<tr>
		<td>{{ $pedido->nombre_material }}</td>
		<td>{{ $pedido->cantidad }}</td>
		<td>{{ $pedido->created_at }}</td>
		<td>
			{!! Form::open(['method' => 'Delete','route' => ['PedidosLab.destroylab', $pedido->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		<a class="btn btn-danger" href="">Pendiente</a>
		</td>

	</tr>
	@endif
	@endif
	@endif
	@endforeach
	
	</table>








<h4><strong>  Hematología(3) </strong></h4>
	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Nombre del material:</th>
			<th>Cantidad:</th>
			<th>Fecha:</th>
			<th>Acción:</th>
		</tr>
		
	@foreach ($pedidos as $key => $pedido)
	@if (Auth::User()->id == $pedido->user_id)
	@if ($pedido->area == 'Clinicos')

	@if ($pedido->seccion == 'hematologia')
	<tr>
		<td>{{ $pedido->nombre_material }}</td>
		<td>{{ $pedido->cantidad }}</td>
		<td>{{ $pedido->created_at }}</td>
		<td>
			{!! Form::open(['method' => 'Delete','route' => ['PedidosLab.destroylab', $pedido->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		<a class="btn btn-danger" href="">Pendiente</a>
		</td>

	</tr>
	@endif
	@endif
	@endif
	@endforeach
	
	</table>





<h4><strong>  Bacterilogía(4) </strong></h4>
	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Nombre del material:</th>
			<th>Cantidad:</th>
			<th>Fecha:</th>
			<th>Acción:</th>
		</tr>
		
	@foreach ($pedidos as $key => $pedido)
	@if (Auth::User()->id == $pedido->user_id)
	@if ($pedido->area == 'Clinicos')

	@if ($pedido->seccion == 'bacteriologia')
	<tr>
		<td>{{ $pedido->nombre_material }}</td>
		<td>{{ $pedido->cantidad }}</td>
		<td>{{ $pedido->created_at }}</td>
		<td>
			{!! Form::open(['method' => 'Delete','route' => ['PedidosLab.destroylab', $pedido->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		<a class="btn btn-danger" href="">Pendiente</a>
		</td>

	</tr>
	@endif
	@endif
	@endif
	@endforeach
	
	</table>






<h4><strong>  Bioquímica(5) </strong></h4>
	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Nombre del material:</th>
			<th>Cantidad:</th>
			<th>Fecha:</th>
			<th>Acción:</th>
		</tr>
		
	@foreach ($pedidos as $key => $pedido)
	@if (Auth::User()->id == $pedido->user_id)
	@if ($pedido->area == 'Clinicos')

	@if ($pedido->seccion == 'bioquimica')
	<tr>
		<td>{{ $pedido->nombre_material }}</td>
		<td>{{ $pedido->cantidad }}</td>
		<td>{{ $pedido->created_at }}</td>
		<td>
			{!! Form::open(['method' => 'Delete','route' => ['PedidosLab.destroylab', $pedido->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		<a class="btn btn-danger" href="">Pendiente</a>
		</td>

	</tr>
	@endif
	@endif
	@endif
	@endforeach
	
	</table>






<h4><strong>  Hormonas(6) </strong></h4>
	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Nombre del material:</th>
			<th>Cantidad:</th>
			<th>Fecha:</th>
			<th>Acción:</th>
		</tr>
		
	@foreach ($pedidos as $key => $pedido)
	@if (Auth::User()->id == $pedido->user_id)
	@if ($pedido->area == 'Clinicos')

	@if ($pedido->seccion == 'hormonas')
	<tr>
		<td>{{ $pedido->nombre_material }}</td>
		<td>{{ $pedido->cantidad }}</td>
		<td>{{ $pedido->created_at }}</td>
		<td>
			{!! Form::open(['method' => 'Delete','route' => ['PedidosLab.destroylab', $pedido->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
		<a class="btn btn-danger" href="">Pendiente</a>
		</td>

	</tr>
	@endif
	@endif
	@endif
	@endforeach
	
	</table>









    </div>
@endsection