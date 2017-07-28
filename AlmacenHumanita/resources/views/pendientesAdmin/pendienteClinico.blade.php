@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><strong> Pedidos de Sucursales </strong></h2>
                <hr>
            </div>  
  
        </div>




        @foreach($user as $key => $us)
        @if($us->id > 4)



        <h4><strong> Sucursal {{ $us->name }} <a class="btn btn-info" 
        href="{{ route('pendientesAdmin.historialPendientesClinico', $us->id) }}">Historial</a> </strong></h4>



        <div class="row">
        <div class="col-md-12"> 

    <table class="table table-bordered">
        <tr class="tabla1">
            <th>Material</th>
            <th>Cantidad</th>
            <th>Observaciones</th>
            <th>Fecha</th>
            <th>Existencia Almacén</th>
            <th>Acción</th>
        </tr>
        
    @foreach ($pedidos as $key => $pedido)
    @if($us->id == $pedido->user_id)
    @if($pedido->area == 'Toma_de_muestras')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>



    @foreach ($materiales as $key => $material)

    @if ($pedido->materialclinica_id == $material->id)
    @if($material->area == 'Toma_de_muestras')

        <td>
            
        {{  $material->existencia  }}
        </td>

        <td>
            <a class="btn btn-danger" href="{{ route('inventarioMatrizClinica.reducirtomapedido',$material->id) }}">Salida</a>

        </td>
    
    
    @endif
    @endif
    @endforeach




    </tr>
    @endif
    @endif
    @endforeach
    
    </table>

</div>
    
        @endif
    @endforeach
  
    </div>
    </div>
    
@endsection