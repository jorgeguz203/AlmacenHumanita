@extends('layouts.app')
 
@section('content')
 <div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Aministración de Sucursales y Laboratorios</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-success" href="{{ route('users.create') }}">Cear nueva sucursal</a>
	        </div>
	    </div>
	</div>
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
			<th>Email</th>
			<th>Roles</th>
			<th width="280px">Acción</th>
			<th>Administrar Inventario</th>
		</tr>
	@foreach ($data as $key => $user)
	@if ($user->id>=5)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $user->name }}</td>
		<td>{{ $user->email }}</td>
		<td>
			@if(!empty($user->roles))
				@foreach($user->roles as $v)
					<label class="label label-success">{{ $v->display_name }}</label>
				@endforeach
			@endif
		</td>
		<td>
			<a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Ver</a>
		
			<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Editar</a>
			{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline','onclick'=>"return confirm('¿Estás seguro de querer eliminar esta sucursal?')"]) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        
		</td>

		<td>
		@if (Auth::user()->can('admin-clinica'))
		<a class="btn btn-primary" href="{{ route('users.editinv',$user->id) }}">Editar Clinica</a>
		@endif
		@if (Auth::user()->can('admin-papelera'))
		<a class="btn btn-primary" href="{{ route('users.editinvpap',$user->id) }}">Editar Papelería</a>
		@endif
		</td>
	</tr>

	
	@endif
	@endforeach
	</table>
	</div>
	{!! $data->render() !!}
@endsection