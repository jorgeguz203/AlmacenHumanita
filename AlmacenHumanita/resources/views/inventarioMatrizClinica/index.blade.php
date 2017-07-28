@extends('layouts.app')
 
@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Almacén Toma de Muestras</h2>
	        </div>
	       
	    </div>
	</div>
		    <!-- Buscador inicia -->
	    
	    	
	    	{!! Form::open(['route' => 'inventarioMatrizClinica.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
  <div class="form-group">
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscador']) !!}

  </div>
  <button type="submit" class="btn btn-primary">Buscar</button>
{!! Form ::Close() !!}
	     <!--Buscador fin  -->
	     <hr>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Entradas</th>
			<th>Salidas</th>
		</tr>
		
	@foreach ($materiales as $key => $material)
	@if( $material->area  == 'Toma_de_muestras')
	<tr>
		<td>{{ $material->nombre }}</td>
		<td>{{ $material->descripcion }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td>{{ $material->existencia }}</td>

		<td>
			<a class="btn btn-success" href="{{ route('inventarioMatrizClinica.agregar',$material->id) }}">Entrada</a>

			<br>

			<a class="btn btn-info" href="{{ route('inventarioMatrizClinica.historialEn',$material->id) }}">Historial</a>
		</td>

		<td>
			<a class="btn btn-danger" href="{{ route('inventarioMatrizClinica.reducir',$material->id) }}">
			Salida</a>

			<br>

			<a class="btn btn-info" href="{{ route('inventarioMatrizClinica.historialSa',$material->id) }}">Historial</a>
		</td>

	</tr>
	@endif
	@endforeach
	
	</table>
	{!! $materiales->render() !!}
	</div>


@endsection