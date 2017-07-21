@extends('layouts.app')
 
@section('content')
 <div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Editar</h2>
	        </div>
	        <div class="pull-right">

	        </div>
	    </div>
	</div>
    <hr>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> Tuviste un error escribiendo algo.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	{!! Form::model($mats, ['method' => 'PATCH','route' => ['users.editinvsuc2', $mats->id]]) !!}
	<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Material:</strong>
                <select id="nombre_material" name="nombre_material">
                <option value='{{ $mats->nombre_material }}'>{{ $mats->nombre_material }}</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sucursal:</strong>
                <select id="nombre_user" name="nombre_user">
                <option value='{{ $mats->nombre_user }}'>{{ $mats->nombre_user }}</option>
                </select>
            </div>
        </div>

        <select class="trans"  id="user" name="user_id">
                <option value='{{ $mats->user_id }}'></option>
                </select>

                <select class="trans"  id="area" name="area">
                <option value='{{ $mats->area }}'></option>
                </select>

		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Máximo:</strong><small><font color="red">(obligatorio)</font></small>
                {!! Form::text('maximo', null, array('placeholder' => '','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mínimo:</strong><small><font color="red">(obligatorio)</font></small>
                {!! Form::text('minimo', null, array('placeholder' => '','class' => 'form-control')) !!}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Existencia:</strong><small><font color="red">(obligatorio)</font></small>
                {!! Form::text('existencia', null, array('placeholder' => '','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Editar</button>
        </div>
	</div>
    </div>
	{!! Form::close() !!}
@endsection