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

<!-- laboratorios -->

@if (Auth::user()->can('admin-laboratorio'))

<div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Pedidos de Laboratorios </h2>
                <hr>
            </div>      
        </div>


<h4><strong> Inmunología(1) </strong></h4>
      
    <table class="table table-bordered">
        <tr>
            <th>Nombre del material:</th>
            <th>Descripción:</th>
            <th>Acción:</th>
        </tr>
        
    @foreach ($materiales as $key => $material)
    @if ($material->area == 'Clinicos')
    @if ($material->inmunologia == 'inmunologia')
    <tr>
        <td>{{ $material->nombre }}</td>
        <td>{{ $material->descripcion }}</td>
        <td>
            <a class="btn btn-success" href="{{ route('pedidos.pedidosinmunologia',$material->id) }}">Solicitar Material</a>
            <a class="btn btn-info" href="#">Historial</a>
        
        </td>
    </tr>
    @endif
    @endif
     @endforeach


    
    </table>

    <button class="btn btn-primary" href="">Varios</button>   
    <hr>



    <h4><strong> Uroanálisis(2) </strong></h4>
      
    <table class="table table-bordered">
        <tr>
            <th>Nombre del material:</th>
            <th>Descripción:</th>
            <th>Acción:</th>
        </tr>
        
    @foreach ($materiales as $key => $material)
    @if ($material->area == 'Clinicos')
    @if ($material->uroanalisis == 'uroanalisis')
    <tr>
        <td>{{ $material->nombre }}</td>
        <td>{{ $material->descripcion }}</td>
        <td>
            <a class="btn btn-success" href="{{ route('pedidos.pedidosuroanalisis',$material->id) }}">Solicitar Material</a>
            <a class="btn btn-info" href="#">Historial</a>
        
        </td>
    </tr>
    @endif
    @endif
     @endforeach
    
    </table>
    <button class="btn btn-primary" href="">Varios</button>   
    <hr>

    <h4><strong> Hematología(3) </strong></h4>
      
    <table class="table table-bordered">
        <tr>
            <th>Nombre del material:</th>
            <th>Descripción:</th>
            <th>Acción:</th>
        </tr>
        
    @foreach ($materiales as $key => $material)
    @if ($material->area == 'Clinicos')
    @if ($material->hematologia == 'hematologia')
    <tr>
        <td>{{ $material->nombre }}</td>
        <td>{{ $material->descripcion }}</td>
        <td>
            <a class="btn btn-success" href="{{ route('pedidos.pedidoshematologia',$material->id) }}">Solicitar Material</a>
            <a class="btn btn-info" href="#">Historial</a>
        
        </td>
    </tr>
    @endif
    @endif
     @endforeach
    
    </table>
    <button class="btn btn-primary" href="">Varios</button>   
    <hr>

    <h4><strong> Bacteriología(4) </strong></h4>
      
    <table class="table table-bordered">
        <tr>
            <th>Nombre del material:</th>
            <th>Descripción:</th>
            <th>Acción:</th>
        </tr>
        
    @foreach ($materiales as $key => $material)
    @if ($material->area == 'Clinicos')
    @if ($material->bacteriologia == 'bacteriologia')
    <tr>
        <td>{{ $material->nombre }}</td>
        <td>{{ $material->descripcion }}</td>
        <td>
            <a class="btn btn-success" href="{{ route('pedidos.pedidosbacteriologia',$material->id) }}">Solicitar Material</a>
            <a class="btn btn-info" href="#">Historial</a>
        
        </td>
    </tr>
    @endif
    @endif
     @endforeach
    
    </table>
    <button class="btn btn-primary" href="">Varios</button>   
    <hr>

    <h4><strong> Bioquímica(5) </strong></h4>
      
    <table class="table table-bordered">
        <tr>
            <th>Nombre del material:</th>
            <th>Descripción:</th>
            <th>Acción:</th>
        </tr>
        
    @foreach ($materiales as $key => $material)
    @if ($material->area == 'Clinicos')
    @if ($material->bioquimica == 'bioquimica')
    <tr>
        <td>{{ $material->nombre }}</td>
        <td>{{ $material->descripcion }}</td>
        <td>
            <a class="btn btn-success" href="{{ route('pedidos.pedidosbioquimica',$material->id) }}">Solicitar Material</a>
            <a class="btn btn-info" href="#">Historial</a>
        
        </td>
    </tr>
    @endif
    @endif
     @endforeach
    
    </table>
    <button class="btn btn-primary" href="">Varios</button>   
    <hr>

        <h4><strong> Hormonas(6) </strong></h4>
      
    <table class="table table-bordered">
        <tr>
            <th>Nombre del material:</th>
            <th>Descripción:</th>
            <th>Acción:</th>
        </tr>
        
    @foreach ($materiales as $key => $material)
    @if ($material->area == 'Clinicos')
    @if ($material->hormonas == 'hormonas')
    <tr>
        <td>{{ $material->nombre }}</td>
        <td>{{ $material->descripcion }}</td>
        <td>
            <a class="btn btn-success" href="{{ route('pedidos.pedidoshormonas',$material->id) }}">Solicitar Material</a>
            <a class="btn btn-info" href="#">Historial</a>
        
        </td>
    </tr>
    @endif
    @endif
     @endforeach
    
    </table>
    <button class="btn btn-primary" href="">Varios</button>   
    <hr>

@endif


</div>
@endsection