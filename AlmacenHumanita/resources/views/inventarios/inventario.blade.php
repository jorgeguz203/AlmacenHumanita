@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Inventario Toma de Muestras</h2>
	        </div>
	        <hr>
	    </div>
	</div>
<div class="container">
	<!-- Buscador inicia -->
	    
	    	
	    	{!! Form::open(['route' => 'inventarios.inventario', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
  <div class="form-group">
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscador']) !!}

  </div>
  <button type="submit" class="btn btn-primary">Buscar</button>
{!! Form ::Close() !!}
	     <!--Buscador fin  -->

	     </div>

	     <br>

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

	@foreach ($materialclinico as $key => $material)
	@if($material->user_id == Auth::user()->id)
	@if($material->area == 'Toma_de_muestras')
	<tr>
		<td>{{ $material->nombre_material }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td>{{ $material->existencia }} </td>
		<td>
			<a class="btn btn-primary" href="#">Editar Existencia</a>
		</td>
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
	@foreach ($materialclinicos as $key => $materiales)
	@if($materiales->area == 'Toma_de_muestras')
		<td>
			<a class="btn btn-success" href="{{ route('pedidos.pedidosMuestras',$materiales->id) }}">Solicitar Material</a>
			<a class="btn btn-info" href="#">Historial</a>
        
		</td>
	</tr>
	@endif
	@endforeach
	</div>
	
	</div>
	</div>
@endsection