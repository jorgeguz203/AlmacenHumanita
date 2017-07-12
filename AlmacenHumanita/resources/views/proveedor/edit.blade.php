@extends('layouts.app')
@include('layouts._header')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modificar Proveedor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('proveedor.index') }}"> Atrás</a>
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
    {!! Form::model($proveedor, ['method' => 'PATCH','route' => ['proveedor.update', $proveedor->id]]) !!} 
       <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong><small><font color="red">(obligatorio)</font></small>
                {!! Form::text('nombre', null, array('placeholder' => 'Microsoft','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre del contacto:</strong>
                {!! Form::text('nombre_contacto', null, array('placeholder' => 'Jane Doe','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'microsoft@hotmail.com','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Teléfono:</strong>
                {!! Form::text('telefono', null, array('placeholder' => '4421849409','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>RFC:</strong>
                {!! Form::text('RFC', null, array('placeholder' => 'WIND784930','class' => 'form-control')) !!}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dirección:</strong>
                {!! Form::text('direccion', null, array('placeholder' => 'Calle 10 colonia Azul','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Horario:</strong>
                {!! Form::text('horario', null, array('placeholder' => 'De 9 de la mañana a 6 de la tarde','class' => 'form-control')) !!}
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
