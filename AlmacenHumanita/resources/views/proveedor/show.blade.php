@extends('layouts.app')
 
@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">

	            <h2> Ver Proveedor</h2>
	            <br>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('proveedor.index') }}"> Back</a>

	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>

                {{ $proveedor->nombre }}
=
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Nombre del contacto:</strong>
                {{ $proveedor->nombre_contacto }}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Correo Electrónico:</strong>
                {{ $proveedor->email }}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Teléfono:</strong>

                {{ $proveedor->telefono }}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>RFC:</strong>

                {{ $proveedor->RFC }}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Dirección:</strong>
                {{ $proveedor->direccion }}

            </div>
        </div>
	</div>
</div>
@endsection