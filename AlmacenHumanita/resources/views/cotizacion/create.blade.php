@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cotización</h2>
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
    <hr>
    {!! Form::open(array('route' => ['cotizacion.store', $material->id],'method'=>'POST')) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Material:</strong>
                <select id="materialClinica" name="materialclinica_id">
                <option value='{{ $material->id }}'>{{ $material->nombre }}</option>
                </select>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Proveedor 1:</strong>
                    <select id="Proveedor" name="Proveedor_id">

                    @foreach ($proveedors as $proveedor)

                        <option value='{{ $proveedor->id }}'>{{ $proveedor->nombre }}</option>

                    @endforeach
            </select>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Precio:</strong>
                {!! Form::number('precio1', null, array('placeholder' => '100','class' => 'form-control')) !!}
            </div>
        </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Proveedor 2:</strong>
                    <select id="Proveedor" name="Proveedor_id">

                    @foreach ($proveedors as $proveedor)

                        <option value='{{ $proveedor->id }}'>{{ $proveedor->nombre }}</option>

                    @endforeach
            </select>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Precio:</strong>
                {!! Form::number('precio2', null, array('placeholder' => '100','class' => 'form-control')) !!}
            </div>
        </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Proveedor 3:</strong>
                    <select id="Proveedor" name="Proveedor_id">

                    @foreach ($proveedors as $proveedor)

                        <option value='{{ $proveedor->id }}'>{{ $proveedor->nombre }}</option>

                    @endforeach
            </select>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Precio:</strong>
                {!! Form::number('precio3', null, array('placeholder' => '100','class' => 'form-control')) !!}
            </div>
        </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Proveedor 4:</strong>
                    <select id="Proveedor" name="Proveedor_id">

                    @foreach ($proveedors as $proveedor)

                        <option value='{{ $proveedor->id }}'>{{ $proveedor->nombre }}</option>

                    @endforeach
            </select>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Precio:</strong>
                {!! Form::number('precio4', null, array('placeholder' => '100','class' => 'form-control')) !!}
            </div>
        </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Proveedor 5:</strong>
                    <select id="Proveedor" name="Proveedor_id">

                    @foreach ($proveedors as $proveedor)

                        <option value='{{ $proveedor->id }}'>{{ $proveedor->nombre }}</option>

                    @endforeach
            </select>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Precio:</strong>
                {!! Form::number('precio5', null, array('placeholder' => '100','class' => 'form-control')) !!}
            </div>
        </div>

        </div>
       
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Cotizar</button>
        </div>
    </div>

{!! Form::close() !!}


@endsection