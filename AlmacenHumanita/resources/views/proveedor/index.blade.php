@extends('layouts.app')
 
@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Administrar Proveedores</h2>
	        </div>
	        <div class="pull-right">
	        	
	            <a class="btn btn-success" href="{{ route('proveedor.create') }}"> Crear nuevo proveedor</a>
	            
	        </div>
	    </div>
	</div>
		    <!-- Buscador inicia -->
	    
	    	
	    	{!! Form::open(['route' => 'proveedor.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
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
		<tr>
			<th>No</th>
			<th>Nombre</th>

			<th>Nombre del Contacto</th>
			<th>Correo electrónico</th>

			<th width="280px">Acción</th>
		</tr>
	@foreach ($proveedores as $key => $proveedor)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $proveedor->nombre }}</td>
		<td>{{ $proveedor->nombre_contacto }}</td>
		<td>{{ $proveedor->email }}</td>

		<td>
			<a class="btn btn-info" href="{{ route('proveedor.show',$proveedor->id) }}">Ver</a>
			
			<a class="btn btn-primary" href="{{ route('proveedor.edit',$proveedor->id) }}">Editar</a>
			
			{!! Form::open(['method' => 'Delete','route' => ['proveedor.destroy', $proveedor->id],'style'=>'display:inline','onclick'=>"return confirm('¿Estás seguro de querer eliminar este proveedor?')"]) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}

        	{!! Form::close() !!}
        
		</td>
	</tr>
	@endforeach
	</table>

	{!! $proveedores->render() !!}
	</div>

@endsection