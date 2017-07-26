@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><strong> Pedidos de Laboratorios </strong></h2>
                <hr>
            </div>  
  
        </div>


        <h4><strong> Inmunología(1)</strong></h4>
    <table class="table table-bordered">
        <tr>
            <th>Material</th>
            <th>Cantidad</th>
            <th>Observaciones</th>
            <th>Fecha</th>
        </tr>
        
    @foreach ($pedidos as $key => $pedido)
    @if($pedido->area == 'Clinicos')
    @if($pedido->inmunologia == 'inmunologia')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>

    </tr>
    @endif
    @endif
    @endforeach
    
    </table>
    <hr>


        <h4><strong> Uroanálisis(2)</strong></h4>
    <table class="table table-bordered">
        <tr>
            <th>Material</th>
            <th>Cantidad</th>
            <th>Observaciones</th>
            <th>Fecha</th>
        </tr>
        
    @foreach ($pedidos as $key => $pedido)
    @if($pedido->area == 'Clinicos')
    @if($pedido->uroanalisis == 'uroanalisis')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>

    </tr>
    @endif
    @endif
    @endforeach
    
    </table>
    <hr>


        <h4><strong> Hematología(3)</strong></h4>
    <table class="table table-bordered">
        <tr>
            <th>Material</th>
            <th>Cantidad</th>
            <th>Observaciones</th>
            <th>Fecha</th>
        </tr>
        
    @foreach ($pedidos as $key => $pedido)
    @if($pedido->area == 'Clinicos')
    @if($pedido->hematologia == 'hematologia')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>

    </tr>
    @endif
    @endif
    @endforeach
    
    </table>
    <hr>


        <h4><strong> Bacteriología(4)</strong></h4>
    <table class="table table-bordered">
        <tr>
            <th>Material</th>
            <th>Cantidad</th>
            <th>Observaciones</th>
            <th>Fecha</th>
        </tr>
        
    @foreach ($pedidos as $key => $pedido)
    @if($pedido->area == 'Clinicos')
    @if($pedido->bacteriologia == 'bacteriologia')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>

    </tr>
    @endif
    @endif
    @endforeach
    
    </table>
    <hr>


        <h4><strong> Bioquímica(5)</strong></h4>
    <table class="table table-bordered">
        <tr>
            <th>Material</th>
            <th>Cantidad</th>
            <th>Observaciones</th>
            <th>Fecha</th>
        </tr>
        
    @foreach ($pedidos as $key => $pedido)
    @if($pedido->area == 'Clinicos')
    @if($pedido->bioquimica == 'bioquimica')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>

    </tr>
    @endif
    @endif
    @endforeach
    
    </table>
    <hr>


        <h4><strong> Hormonas(6)</strong></h4>
    <table class="table table-bordered">
        <tr>
            <th>Material</th>
            <th>Cantidad</th>
            <th>Observaciones</th>
            <th>Fecha</th>
        </tr>
        
    @foreach ($pedidos as $key => $pedido)
    @if($pedido->area == 'Clinicos')
    @if($pedido->hormonas == 'hormonas')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>

    </tr>
    @endif
    @endif
    @endforeach
    
    </table>
    <hr>


    </div>
@endsection