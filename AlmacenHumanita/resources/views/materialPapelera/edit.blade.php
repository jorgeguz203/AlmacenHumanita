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
                <strong>Área:</strong>
                {!! Form::text('area', null, array('placeholder' => 'Cardeología','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Unidad de Medida:</strong>
                

                    <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="unidad_medida" id="unidadmedida" value="pieza" checked>

                Pieza

            </label>

        </div>

        <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="unidad_medida" id="unidadmedida2" value="ml">

                Ml (mililítros)

            </label>

        </div>

         <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="unidad_medida" id="unidadmedida3" value="kg">

                Kg (kilogramos)

            </label>

        </div>

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
                <button type="submit" class="btn btn-primary">Modificar</button>
        </div>
    </div>
    </div>
    {!! Form::close() !!}
@endsection
@include('layouts._footer')
