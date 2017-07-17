@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pedidos Faltantes</div>

                <div class="panel-body">
                    <h3>Material por debajo del mínimo</h3>
                    <Br>

<!--tabla clinicos-->

@if (Auth::user()->can('admin-admin-clinica'))
<strong>Materiales Clínicos</strong>
    <table class="table table-bordered">
     <tr class="tabla">
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Máximo</th>
            <th>Mínimo</th>
            <th>Existencia</th>
        </tr>

    @foreach ($materiales as $key => $material)
    @if($material->existencia <= $material->minimo)
    <tr>
        <td>{{ $material->nombre }}</td>
        <td>{{ $material->descripcion }}</td>
        <td>{{ $material->maximo }}</td>
        <td>{{ $material->minimo }}</td>
        <td>{{ $material->existencia }}</td>
    </tr>
    @endif
    @endforeach
    </table>
@endif
<!--tabla clinicos-->

<!--tabla papelera-->
@if (Auth::user()->can('admin-admin-papelera'))
<strong>Materiales de Papelería</strong>
    <table class="table table-bordered">
     <tr class="tabla">
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Máximo</th>
            <th>Mínimo</th>
            <th>Existencia</th>
        </tr>

    @foreach ($materialess as $key => $material)
    @if($material->existencia <= $material->minimo)
    <tr>
        <td>{{ $material->nombre }}</td>
        <td>{{ $material->descripcion }}</td>
        <td>{{ $material->maximo }}</td>
        <td>{{ $material->minimo }}</td>
        <td>{{ $material->existencia }}</td>
    </tr>
    @endif
    @endforeach
    </table>
@endif
<!--tabla clinicos-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
