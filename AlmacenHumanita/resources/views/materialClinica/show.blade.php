@extends('layouts.app')
 
@section('content')

<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Ver Material de Clínica</h2>
                <br>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('materialClinica.index') }}"> Atrás</a>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $material->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion:</strong>
                {{ $material->descripcion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Máximo:</strong>
                {{ $material->maximo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mínimo:</strong>
                {{ $material->minimo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Existencia:</strong>
                {{ $material->existencia }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Área:</strong>
                {{ $material->area }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Unidad de Medida:</strong>
                {{ $material->unidad_medida }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Número de Referencia:</strong>
                {{ $material->numero_referencia }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sección:</strong>
                {{ $material->inmunologia }}
                {{ $material->uroanalisis }}
                {{ $material->hematologia }}
                {{ $material->bacteriologia }}
                {{ $material->bioquimica }}
                {{ $material->hormonas }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Presentación:</strong>
                {{ $material->presentacion }}
            </div>
        </div>
        
	</div>
    </div>
@endsection