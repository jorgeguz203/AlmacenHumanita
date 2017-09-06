@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Administrar Material Clínica</h2>
	        </div>
	        <hr>
	        <div class="pull-right">
	        	
	            <a class="btn btn-success" href="{{ route('materialClinica.create') }}"> Crear nuevo material</a>
	            
	        </div>
	    </div>
	</div>
	    
	    <!-- Buscador inicia -->
	    
	    	
	    	{!! Form::open(['route' => 'materialClinica.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
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
			<th>No</th>
			<th>Nombre</th>
			<th>Descripción</th>
			<th width="280px">Acción</th>
			<th>Cotizaciones</th>
			<th>Historial</th>
		</tr>

	@foreach ($materiales as $key => $material)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $material->nombre }}</td>
		<td>{{ $material->descripcion }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('materialClinica.show',$material->id) }}">Ver</a>
			
			<a class="btn btn-primary" href="{{ route('materialClinica.edit',$material->id) }}">Editar</a>
			
			{!! Form::open(['method' => 'Delete','route' => ['materialClinica.destroy', $material->id],'style'=>'display:inline','onclick'=>"return confirm('¿Estás seguro de querer eliminar este material?')"]) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        
		</td>

		<td>
			<a class="btn btn-success" href="{{ route('cotizacion.create',$material->id) }}">Cotizar</a>
		</td>
		<td>
			<a class="btn btn-info" href="{{ route('cotizacion.historial',$material->id) }}">Historial</a>
		</td>

	</tr>
	@endforeach
	</table>
	{!! $materiales->render() !!}
	</div>
@endsection