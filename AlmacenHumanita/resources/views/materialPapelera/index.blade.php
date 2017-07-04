@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Administrar Material Papelería</h2>
	        </div>
	        <div class="pull-right">
	        	
	            <a class="btn btn-success" href="{{ route('materialPapelera.create') }}"> Crear nuevo material</a>
	            
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
			<th>Descripción</th>
			<th width="280px">Acción</th>
		</tr>
	@foreach ($items as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->nombre }}</td>
		<td>{{ $item->descripcion }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('materialPapelera.show',$item->id) }}">Ver</a>
			
			<a class="btn btn-primary" href="{{ route('materialPapelera.edit',$item->id) }}">Editar</a>
			
			{!! Form::open(['method' => 'DELETE','route' => ['materialPapelera.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        
		</td>
	</tr>
	@endforeach
	</table>
	{!! $items->render() !!}
@endsection