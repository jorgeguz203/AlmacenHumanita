@extends('layouts.app')
@section('content')

<div class="container">

<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Inventario Papelería</h2>
	        </div>
	        <hr>

	    </div>
	</div>


<!-- Buscador inicia -->
	    <div class="pull-left">
	    	
	    	{!! Form::open(['route' => 'inventarios.inventariopape', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
  <div class="form-group">
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscador']) !!}

  </div>
  <button type="submit" class="btn btn-primary">Buscar</button>
{!! Form ::Close() !!}
	     <!--Buscador fin  -->
</div>
<div class="container">

	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Papelería</h2>
	        </div>
	        <hr>

	    </div>
	</div>
	
	</div>

	<div class="row">
<div class="col-md-8"> 

	<table class="table table-bordered">
		<tr class="tabla1">

			<th>Nombre</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Editar</th>
		</tr>

	@foreach ($materialpapeleria as $key => $material)
	@if($material->user_id == Auth::user()->id)
	@if ($material->area == 'papeleria')
	<tr>
		<td>{{ $material->nombre_material }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td>{{ $material->existencia }} </td>
		<td>
			<a class="btn btn-primary" href="#">Editar Existencia</a>
		</td>
		</tr>
	@endif
	@endif
	@endforeach
</table>
	</div>

	<div class="col-md-4"> 
	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Solicitudes</th>
		</tr>
	@foreach ($materialpapelerias as $key => $materiales)
	@if($materiales->area == 'papeleria')
	<tr>
		<td>
			<a class="btn btn-success" href="{{ route('pedidos.pedidosPape',$materiales->id) }}">Solicitar Material</a>
			<a class="btn btn-info" href="#">Historial</a>
        
		</td>
	
	</tr>

	@endif
	@endforeach
	</table>
	</div>
	</div>


<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Limpieza</h2>
	        </div>
	        <hr>

	    </div>
	</div>


	<div class="row">
<div class="col-md-8"> 

	<table class="table table-bordered">
		<tr class="tabla1">

			<th>Nombre</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Editar</th>
		</tr>

	@foreach ($materialpapeleria as $key => $material)
	@if($material->user_id == Auth::user()->id)
	@if ($material->area == 'limpieza')
	<tr>
		<td>{{ $material->nombre_material }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td>{{ $material->existencia }} </td>
		<td>
			<a class="btn btn-primary" href="#">Editar Existencia</a>
		</td>
		</tr>
	@endif
	@endif
	@endforeach
</table>
	</div>

	<div class="col-md-4"> 
	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Solicitudes</th>
		</tr>
	@foreach ($materialpapelerias as $key => $materiales)
	@if($materiales->area == 'limpieza')
	<tr>
		<td>
			<a class="btn btn-success" href="{{ route('pedidos.pedidosPape',$materiales->id) }}">Solicitar Material</a>
			<a class="btn btn-info" href="#">Historial</a>
        
		</td>
	
	</tr>

	@endif
	@endforeach
	</table>
	</div>
	</div>




<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Cafetería</h2>
	        </div>
	        <hr>

	    </div>
	</div>


	<div class="row">
<div class="col-md-8"> 

	<table class="table table-bordered">
		<tr class="tabla1">

			<th>Nombre</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Editar</th>
		</tr>

	@foreach ($materialpapeleria as $key => $material)
	@if($material->user_id == Auth::user()->id)
	@if ($material->area == 'cafeteria')
	<tr>
		<td>{{ $material->nombre_material }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td>{{ $material->existencia }} </td>
		<td>
			<a class="btn btn-primary" href="#">Editar Existencia</a>
		</td>
		</tr>
	@endif
	@endif
	@endforeach
</table>
	</div>

	<div class="col-md-4"> 
	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Solicitudes</th>
		</tr>
	@foreach ($materialpapelerias as $key => $materiales)
	@if($materiales->area == 'cafeteria')
	<tr>
		<td>
			<a class="btn btn-success" href="{{ route('pedidos.pedidosPape',$materiales->id) }}">Solicitar Material</a>
			<a class="btn btn-info" href="#">Historial</a>
        
		</td>
	
	</tr>

	@endif
	@endforeach
	</table>
	</div>
	</div>




<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Impresos</h2>
	        </div>
	        <hr>

	    </div>
	</div>


	<div class="row">
<div class="col-md-8"> 

	<table class="table table-bordered">
		<tr class="tabla1">

			<th>Nombre</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Editar</th>
		</tr>

	@foreach ($materialpapeleria as $key => $material)
	@if($material->user_id == Auth::user()->id)
	@if ($material->area == 'impresos')
	<tr>
		<td>{{ $material->nombre_material }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td>{{ $material->existencia }} </td>
		<td>
			<a class="btn btn-primary" href="#">Editar Existencia</a>
		</td>
		</tr>
	@endif
	@endif
	@endforeach
</table>
	</div>

	<div class="col-md-4"> 
	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Solicitudes</th>
		</tr>
	@foreach ($materialpapelerias as $key => $materiales)
	@if($materiales->area == 'impresos')
	<tr>
		<td>
			<a class="btn btn-success" href="{{ route('pedidos.pedidosPape',$materiales->id) }}">Solicitar Material</a>
			<a class="btn btn-info" href="#">Historial</a>
        
		</td>
	
	</tr>

	@endif
	@endforeach
	</table>
	</div>
	</div>






<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Rayos X</h2>
	        </div>
	        <hr>

	    </div>
	</div>


	<div class="row">
<div class="col-md-8"> 

	<table class="table table-bordered">
		<tr class="tabla1">

			<th>Nombre</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Editar</th>
		</tr>

	@foreach ($materialpapeleria as $key => $material)
	@if($material->user_id == Auth::user()->id)
	@if ($material->area == 'rayos_x')
	<tr>
		<td>{{ $material->nombre_material }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td>{{ $material->existencia }} </td>
		<td>
			<a class="btn btn-primary" href="#">Editar Existencia</a>
		</td>
		</tr>
	@endif
	@endif
	@endforeach
</table>
	</div>

	<div class="col-md-4"> 
	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Solicitudes</th>
		</tr>
	@foreach ($materialpapelerias as $key => $materiales)
	@if($materiales->area == 'rayos_x')
	<tr>
		<td>
			<a class="btn btn-success" href="{{ route('pedidos.pedidosPape',$materiales->id) }}">Solicitar Material</a>
			<a class="btn btn-info" href="#">Historial</a>
        
		</td>
	
	</tr>

	@endif
	@endforeach
	</table>
	</div>
	</div>



<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Otros</h2>
	        </div>
	        <hr>

	    </div>
	</div>


	<div class="row">
<div class="col-md-8"> 

	<table class="table table-bordered">
		<tr class="tabla1">

			<th>Nombre</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Editar</th>
		</tr>

	@foreach ($materialpapeleria as $key => $material)
	@if($material->user_id == Auth::user()->id)
	@if ($material->area == 'otros')
	<tr>
		<td>{{ $material->nombre_material }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td>{{ $material->existencia }} </td>
		<td>
			<a class="btn btn-primary" href="#">Editar Existencia</a>
		</td>
		</tr>
	@endif
	@endif
	@endforeach
</table>
	</div>

	<div class="col-md-4"> 
	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Solicitudes</th>
		</tr>
	@foreach ($materialpapelerias as $key => $materiales)
	@if($materiales->area == 'otros')
	<tr>
		<td>
			<a class="btn btn-success" href="{{ route('pedidos.pedidosPape',$materiales->id) }}">Solicitar Material</a>
			<a class="btn btn-info" href="#">Historial</a>
        
		</td>
	
	</tr>

	@endif
	@endforeach
	</table>
	</div>
	</div>



</div>
	



	
@endsection