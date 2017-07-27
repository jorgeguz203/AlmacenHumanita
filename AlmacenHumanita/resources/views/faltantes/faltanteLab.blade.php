@extends('layouts.app')
 
@section('content')
 <div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Formulario de Material Faltante</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('pendientesSucursal.pendienteLab') }}"> Atrás</a>
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
	{!! Form::open(array('route' => ['pedidos.faltanteLab', $pedido->id],'method'=>'POST')) !!}
	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Material:</strong>
                <select id="nombre_material" name="nombre_material">
                <option value='{{ $pedido->nombre_material }}'>{{ $pedido->nombre_material }}</option>
                </select>
            </div>
        </div>

        <select class="trans"  id="nombre_user" name="nombre_user">
                <option value='{{ $pedido->nombre_user }}'></option>
                </select>

        <select class="trans"  id="material_id" name="materialclinica_id">
                <option value='{{ $pedido->materialclinica_id }}'></option>
                </select>

        <select class="trans"  id="user" name="user_id">
                <option value='{{ $pedido->user_id }}'></option>
                </select>

                <select class="trans"  id="area" name="area">
                <option value='Clinicos'></option>
                </select>

                <select class="trans"  id="seccion" name="seccion">
                <option value='{{ $pedido->seccion }}'></option>
                </select>

        
    <div class="container">

      <p>Cantidad:<strong> {{ $pedido->cantidad }} </strong> </p>  

</div>


                <select class="trans"  id="cantidad" name="cantidad">
                <option value='{{ $pedido->cantidad }}'></option>
                </select>

                <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faltante:</strong><small><font color="red">(obligatorio)</font></small>
                {!! Form::number('faltante', null, array('placeholder' => '0','class' => 'form-control')) !!}
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
                <option value='{{ $pedido->inmunologia }}'></option>
                </select>

                <select class="trans"  id="user" name="uroanalisis">
                <option value='{{ $pedido->uroanalisis }}'></option>
                </select>

                <select class="trans"  id="user" name="hematologia">
                <option value='{{ $pedido->hematologia }}'></option>
                </select>

                <select class="trans"  id="user" name="bacteriologia">
                <option value='{{ $pedido->bacteriologia }}'></option>
                </select>

                <select class="trans"  id="user" name="bioquimica">
                <option value='{{ $pedido->bioquimica }}'></option>
                </select>

                <select class="trans"  id="user" name="hormonas">
                <option value='{{ $pedido->hormonas }}'></option>
                </select>
       
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Solicitar</button>
        </div>
	</div>
    </div>
	{!! Form::close() !!}
@endsection