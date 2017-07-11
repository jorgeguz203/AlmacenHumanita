@extends('layouts.app')
@include('layouts._header')


 
@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Crear nuevo Material de Clínica</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('materialClinica.index') }}"> Atrás</a>
	        </div>
	    </div>
	</div>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> Tuviste un error escribiendo algo :( .<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	{!! Form::open(array('route' => 'materialClinica.store','method'=>'POST')) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {!! Form::text('nombre', null, array('placeholder' => 'Contenedor','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripción:</strong>
                {!! Form::text('descripcion', null, array('placeholder' => 'Contenedor de sustancias líquidas','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Máximo:</strong>
                {!! Form::text('maximo', null, array('placeholder' => '50','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mínimo:</strong>
                {!! Form::text('minimo', null, array('placeholder' => '10','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Existecia:</strong>
                {!! Form::text('existencia', null, array('placeholder' => '0','class' => 'form-control')) !!}
            </div>
        </div>
       

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
      <label for="sel1">Área:</label>
        
      <select class="selectpicker" id=area name="area">
        <option value='clinico'>Clínicos</option>
        <option value='toma_muestra'>Toma de Muestras</option>
      </select>
      </div>
        </div>


       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <label for="sel1">Unidad de Medida:</label>
          <select class="selectpicker" id=unidad_medida name="unidad_medida">
            <option value='pieza'>Pieza</option>
            <option value='kg'>Kilográmos</option>
            <option value='gr'>Gramos</option>
            <option value='gl'>Galón</option>
            <option value='li'>Lítros</option>
            <option value='ml'>Mililítros</option>
            <option value='caja'>Caja</option>

          </select>
      </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Número de Referencia:</strong>
                {!! Form::text('numero_referencia', null, array('placeholder' => '859641','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Presentación:</strong>
                {!! Form::text('presentacion', null, array('placeholder' => 'Vienen en paquetes de 5 piezas','class' => 'form-control')) !!}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Crear</button>
        </div>
	</div>
    </div>
	{!! Form::close() !!}
@endsection
@include('layouts._footer')
