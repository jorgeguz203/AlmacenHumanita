@extends('layouts.app')
 
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Salidas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('inventarioMatrizClinica.indexclinicos') }}"> Atrás</a>
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
    {!! Form::open(array('route' => ['SalidaMatriz.updateinvsalidaclinicos', $material->id],'method'=>'POST')) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Material:</strong>
                <select id="materialClinica" name="materialclinica_id">
                <option value='{{ $material->id }}'>{{ $material->nombre }}</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sucursal:</strong>
                    <select id="User" name="user_id">

                    @foreach ($users as $user)
                    @if ($user->id >=5)
                        <option value='{{ $user->id }}'>{{ $user->name }}</option>
                    @endif
                    @endforeach
            </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cantidad:</strong>
                {!! Form::text('cantidad', null, array('placeholder' => '0','class' => 'form-control')) !!}
            </div>
        </div>
       
       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripción:</strong>
                {!! Form::text('descripcion', null, array('placeholder' => 'aclaraciones','class' => 'form-control')) !!}
            </div>
        </div>

        

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salida</button>
        </div>
    </div>
    </div>

{!! Form::close() !!}
@endsection