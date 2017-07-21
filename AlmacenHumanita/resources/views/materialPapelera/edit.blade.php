@extends('layouts.app')
@include('layouts._header')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modificar Material de Papelería</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('materialPapelera.index') }}"> Atrás</a>
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
    {!! Form::model($material, ['method' => 'PATCH','route' => ['materialPapelera.update', $material->id]]) !!} 
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

      {!! Form::select('area', array('papeleria' => 'Papelería', 
      'limpieza' => 'Limpieza',
      'cafeteria' => 'Cafetería',
      'impresos' => 'Impresos',
      'rayos_x' => 'Rayos X',
      'otros' => 'Otros',

      )); !!}
        
      </div>
        </div>


       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <label for="sel1">Unidad de Medida:</label>

          {!! Form::select('unidad_medida', array('pieza' => 'Pieza', 
          'Kg' => 'Kilográmos',
          'gr' => 'Gramos',
          'gal' => 'Galón',
          'L' => 'Lítros',
          'mL' => 'Mililítros',
          )); !!}

      </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Número de Referencia:</strong>
                {!! Form::number('numero_referencia', null, array('placeholder' => '859641','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Presentación:</strong>
                {!! Form::text('presentacion', null, array('placeholder' => 'Vienen en paquetes de 5 piezas','class' => 'form-control')) !!}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Modificar</button>
        </div>
    </div>
    </div>
    {!! Form::close() !!}
@endsection
@include('layouts._footer')
