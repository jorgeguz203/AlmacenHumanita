@extends('layouts.app')
 
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cotización</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('inventarioMatrizPapeleria.index3') }}"> Atrás</a>
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
    {!! Form::open(array('route' => ['EntradaPapeleria.update3', $material->id],'method'=>'POST')) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Material:</strong>
                <select id="materialpapelera" name="materialpapelera_id">
                <option value='{{ $material->id }}'>{{ $material->nombre }}</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Proveedor:</strong>
                    <select id="Proveedor" name="Proveedor_id">

                    @foreach ($proveedors as $proveedor)

                        <option value='{{ $proveedor->id }}'>{{ $proveedor->nombre }}</option>

                    @endforeach
            </select>
            </div>
        </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Número de Factura:</strong><small><font color="red">(obligatorio)</font></small>
                {!! Form::text('numero_factura', null, array('placeholder' => '4001','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cantidad:</strong><small><font color="red">(obligatorio)</font></small>
                {!! Form::text('cantidad', null, array('placeholder' => '0','class' => 'form-control')) !!}
            </div>
        </div>
       
       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Precio:</strong><small><font color="red">(obligatorio)</font></small>
                {!! Form::text('precio', null, array('placeholder' => '100','class' => 'form-control')) !!}
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Presentación:</strong>
                {!! Form::text('presentacion', null, array('placeholder' => 'Cajas de 100 unidades','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Observaciones:</strong>
                {!! Form::text('observaciones', null, array('placeholder' => '','class' => 'form-control')) !!}
            </div>
        </div>
       
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Cotizar</button>
        </div>
    </div>
    </div>

{!! Form::close() !!}
@endsection