@extends('layouts.app')
 
@section('content')
 <div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Pedido de Papelería</h2>
	        </div>
	        <div class="pull-right">


            
	            <a class="btn btn-primary" href="http://127.0.0.1:8000/inventariopapeleria"> Atrás</a>
	        </div>
	    </div>
	</div>
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
	{!! Form::open(array('route' => 'pedidos.store_papeleria','method'=>'POST')) !!}
	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Material:</strong>
                <select id="nombre_material" name="nombre_material">
                <option value='{{ $material->nombre }}'>{{ $material->nombre }}</option>
                </select>
            </div>
        </div>

        <select class="trans"  id="nombre_user" name="nombre_user">
                <option value='{{ Auth::user()->name }}'></option>
                </select>

        <select class="trans"  id="material_id" name="materialpapelera_id">
                <option value='{{ $material->id }}'></option>
                </select>

        <select class="trans"  id="user" name="user_id">
                <option value='{{ Auth::user()->id }}'></option>
                </select>

                <select class="trans"  id="area" name="area">
                <option value='{{ $material->area }}'></option>
                </select>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cantidad:</strong><small><font color="red">(obligatorio)</font></small>
                {!! Form::number('cantidad', null, array('placeholder' => '0','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Observaciones:</strong>
                {!! Form::text('observaciones', null, array('placeholder' => '','class' => 'form-control')) !!}
            </div>
        </div>
       
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Solicitar</button>
        </div>
	</div>
    </div>
	{!! Form::close() !!}
@endsection