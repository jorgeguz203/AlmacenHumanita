@extends('layouts.app')
 
@section('content')
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
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nombre</th>
			<th>Teléfono</th>
			<th>Email</th>
			<th width="280px">Acción</th>
		</tr>
	@foreach ($proveedor as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->nombre }}</td>
		<td>{{ $item->telefono }}</td>
		<td>{{ $item->email }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('proveedor.show',$item->id) }}">Ver</a>
			@permission('item-edit')
			<a class="btn btn-primary" href="{{ route('proveedor.edit',$item->id) }}">Editar</a>
			@endpermission
			@permission('item-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['proveedor.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Elminar', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $proveedors->render() !!}
@endsection