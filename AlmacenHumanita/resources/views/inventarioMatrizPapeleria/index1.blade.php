@extends('layouts.app')
 
@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Almacén Papelería</h2>
	        </div>
	       
	    </div>
	</div>
		    <!-- Buscador inicia -->
	    
	    	
	    	{!! Form::open(['route' => 'inventarioMatrizPapeleria.index1', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
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
			<th>ID</th>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Entradas</th>
			<th>Salidas</th>
		</tr>
		
	@foreach ($materiales as $key => $material)
	@if( $material->area  == 'papeleria')
	<tr>
		<th>{{ ++$i }}</th>
		<td>{{ $material->nombre }}</td>
		<td>{{ $material->descripcion }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td>{{ $material->existencia }}</td>

		<td>
			<a class="btn btn-success" href="{{ route('EntradaPapeleria.agregar1',$material->id) }}">Entrada</a>
			
			
			<br>

			<a class="btn btn-info" href="{{ route('EntradaPapeleria.historialEn1',$material->id) }}">Historial</a>

		</td>

		<td>
			<a class="btn btn-danger" href="{{ route('SalidaPapeleria.reducir1',$material->id) }}">
			Salida</a>

			<br>

			<a class="btn btn-info" href="{{ route('SalidaPapeleria.historialSa1',$material->id) }}">Historial</a>

		</td>

	</tr>
	@endif
	@endforeach
	
	</table>
	{!! $materiales->render() !!}
	</div>


@endsection