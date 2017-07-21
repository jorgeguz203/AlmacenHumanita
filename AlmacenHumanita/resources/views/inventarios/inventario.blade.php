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

	    <!-- Buscador inicia -->
	    
	    	
	    	{!! Form::open(['route' => 'inventarios.inventario', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
  <div class="form-group">
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscador']) !!}

  </div>
  <button type="submit" class="btn btn-primary">Buscar</button>
{!! Form ::Close() !!}
	     <!--Buscador fin  -->

	<table class="table table-bordered">
		<tr class="tabla1">

			<th>Nombre</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Editar</th>
			<th>Solicitudes</th>
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
		<td>
			<a class="btn btn-success" href="#">Solicitar Material</a>
			<a class="btn btn-info" href="#">Historial</a>
        
		</td>
	</tr>
	@endif
	@endif
	@endforeach
	</table>
	</div>
@endsection