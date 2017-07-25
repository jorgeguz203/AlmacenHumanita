@extends('layouts.app')
 
@section('content')
 <div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Pedido Toma de Muestra</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('inventarios.inventario') }}"> Atrás</a>
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
	{!! Form::open(array('route' => 'pedidos.store_toma','method'=>'POST')) !!}
	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Material:</strong>
                <select id="nombre_material" name="nombre_material">
                <option value='{{ $tomas->nombre_material }}'>{{ $tomas->nombre_material }}</option>
                </select>
            </div>
        </div>

        <select class="trans"  id="nombre_user" name="nombre_user">
                <option value='{{ $tomas->nombre_user }}'></option>
                </select>

        <select class="trans"  id="material_id" name="materialclinica_id">
                <option value='{{ $tomas->materialclinica_id }}'></option>
                </select>

        <select class="trans"  id="user" name="user_id">
                <option value='{{ $tomas->user_id }}'></option>
                </select>

                <select class="trans"  id="area" name="area">
                <option value='Toma_de_muestras'></option>
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

        <select class="trans"  id="user" name="extras">
                <option value=''></option>
                </select>

                <select class="trans"  id="user" name="inmunologia">
                <option value=''></option>
                </select>

                <select class="trans"  id="user" name="uroanalisis">
                <option value=''></option>
                </select>

                <select class="trans"  id="user" name="hematologia">
                <option value=''></option>
                </select>

                <select class="trans"  id="user" name="bacteriologia">
                <option value=''></option>
                </select>

                <select class="trans"  id="user" name="bioquimica">
                <option value=''></option>
                </select>

                <select class="trans"  id="user" name="hormonas">
                <option value=''></option>
                </select>
       
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Solicitar</button>
        </div>
	</div>
    </div>
	{!! Form::close() !!}
@endsection