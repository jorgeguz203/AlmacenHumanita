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
                <strong>Nombre:</strong><small><font color="red">(obligatorio)</font></small>
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
                <strong>Máximo:</strong><small><font color="red">(obligatorio)</font></small>
                {!! Form::number('maximo', null, array('placeholder' => '50','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mínimo:</strong><small><font color="red">(obligatorio)</font></small>
                {!! Form::number('minimo', null, array('placeholder' => '10','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Existecia:</strong><small><font color="red">(obligatorio)</font></small>
                {!! Form::number('existencia', null, array('placeholder' => '0','class' => 'form-control')) !!}
            </div>
        </div>
       

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
      <label for="sel1">Área:</label>
        
      <select class="selectpicker" id=area name="area">
        <option value='Clinicos'>Clínicos</option>
        <option value='Toma_de_muestras'>Toma de Muestras</option>
      </select>
      </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        
                  <label for="sel1">Sección:</label>
                  <br>
              <input type="checkbox" name="inmunologia" value="inmunologia"> Inmunología<br>
              <input type="checkbox" name="uroanalisis" value="uroanalisis"> Uroanálisis<br>
              <input type="checkbox" name="hematologia" value="hematologia"> Hematología<br>
              <input type="checkbox" name="bacteriologia" value="bacteriologia"> Bactereología<br>
              <input type="checkbox" name="bioquimica" value="bioquimica"> Bioquímica<br>
              <input type="checkbox" name="hormonas" value="hormonas"> Hormonas<br>
          
         
      </div>
        </div>


       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <label for="sel1">Unidad de Medida:</label>
          <select class="selectpicker" id=unidad_medida name="unidad_medida">
            <option value='pieza'>Pieza</option>
            <option value='caja'>Caja</option>
            <option value='paquete'>Paquete</option>
            <option value='Kg'>Kilográmos</option>
            <option value='gr'>Gramos</option>
            <option value='gal'>Galón</option>
            <option value='L'>Lítros</option>
            <option value='mL'>Mililítros</option>

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
