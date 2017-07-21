@extends('layouts.app')

@section('content')
<div class="container">
@if (Auth::user()->can('admin-admin-clinica', 'admin-admin-papelera'))
    <div class="row">
        <div class="col-md-6">          
                <div class="panel-body dag" align="center">
                <h3>Pedidos Pendientes</h3>
        </div>
    </div>

<div class="col-md-6">
    <div class="panel-body war" align="center">
                    <h3>Material por debajo del mínimo</h3>
                    </div>
                    <br>

<!--tabla clinicos-->

@if (Auth::user()->can('admin-admin-clinica'))
<strong>Materiales Clínicos</strong>
    <table class="table table-bordered">
     <tr class="tabla1">
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
     <tr class="tabla1">
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
@endif



<!--                  sucursales               -->


@if (Auth::user()->can('admin-sucrusal'))
    <div class="row">
        <div class="col-md-6">          
                <div class="panel-body war" align="center">
                <h3>Materiales de Tomas de Muestra por debajo del mínimo</h3>
        </div>
        <br>
            <!--tabla clinicos-->

@if (Auth::user()->can('admin-sucrusal'))
<strong>Materiales Clínicos</strong>
    <table class="table table-bordered">
     <tr class="tabla1">
            <th>Nombre</th>
            <th>Máximo</th>
            <th>Mínimo</th>
            <th>Existencia</th>
        </tr>

    @foreach ($materialclinico as $key => $material)
    @if($material->existencia <= $material->minimo)
    @if($material->user_id == Auth::user()->id)
    @if($material->area == 'Toma_de_muestras')
    <tr>
        <td>{{ $material->nombre_material }}</td>
        <td>{{ $material->maximo }}</td>
        <td>{{ $material->minimo }}</td>
        <td>{{ $material->existencia }}</td>
    </tr>
    @endif
    @endif
    @endif
    @endforeach
    </table>
@endif
<!--tabla clinicos-->
    </div>


<div class="col-md-6">
    <div class="panel-body war" align="center">
                    <h3>Materiales de Papelería que estan debajo del mínimo  </h3>
                    </div>
                    <br>



<!--tabla papelera-->
@if (Auth::user()->can('admin-sucrusal'))
<strong>Materiales de Papelería</strong>
    <table class="table table-bordered">
     <tr class="tabla1">
            <th>Nombre</th>
            <th>Máximo</th>
            <th>Mínimo</th>
            <th>Existencia</th>
        </tr>

    @foreach ($materialpapeleria as $key => $material)
    @if($material->existencia <= $material->minimo)
    @if($material->user_id == Auth::user()->id)
    <tr>
        <td>{{ $material->nombre_material }}</td>
        <td>{{ $material->maximo }}</td>
        <td>{{ $material->minimo }}</td>
        <td>{{ $material->existencia }}</td>
    </tr>
    @endif
    @endif
    @endforeach
    </table>
@endif
<!--tabla clinicos-->
        </div>
            
    </div>
@endif
</div>
@endsection