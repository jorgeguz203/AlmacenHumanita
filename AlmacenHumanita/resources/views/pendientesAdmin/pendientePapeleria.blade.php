@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><strong> Pedidos de Papelería </strong></h2>
                <hr>
            </div>  
  
        </div>

        @foreach($user as $key => $us)
        @if($us->id > 4)
        <h4><strong> Sucursal {{ $us->name }} <a class="btn btn-info" 
        href="{{ route('pendientesAdmin.historialPendientesPape', $us->id) }}">Historial</a> </strong></h4>
    <table class="table table-bordered">
         <tr class="tabla1">
            <th>Material</th>
            <th>Cantidad</th>
            <th>Observaciones</th>
            <th>Fecha</th>
        </tr>
        
       <tr>
        <td class="sec">
        </td>
         <td class="sec">
         </td>
          <td class="sec">
          <div style=" margin-right: 20px; margin-left: 20px;" align="left">Papelería</div>
          </td>
           <td class="sec">
           </td>
        </tr>
    @foreach ($pedidos as $key => $pedido)
    @if($us->id == $pedido->user_id)
    @if($pedido->area == 'papeleria')

    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>
    </tr>

    @endif
    @endif
    @endforeach


        <tr>
        <td class="sec">
        </td>
         <td class="sec">
         </td>
          <td class="sec">
          <div style=" margin-right: 20px; margin-left: 20px;" align="left">Limpieza</div>
          </td>
           <td class="sec">
           </td>
        </tr>
    @foreach ($pedidos as $key => $pedido)
    @if($us->id == $pedido->user_id)
    @if($pedido->area == 'limpieza')

    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>
    </tr>

    @endif
    @endif
    @endforeach



     <tr>
        <td class="sec">
        </td>
         <td class="sec">
         </td>
          <td class="sec">
          <div style=" margin-right: 20px; margin-left: 20px;" align="left">Cafetería</div>
          </td>
           <td class="sec">
           </td>
        </tr>
    @foreach ($pedidos as $key => $pedido)
    @if($us->id == $pedido->user_id)
    @if($pedido->area == 'cafeteria')

    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>
    </tr>

    @endif
    @endif
    @endforeach


     <tr>
        <td class="sec">
        </td>
         <td class="sec">
         </td>
          <td class="sec">
          <div style=" margin-right: 20px; margin-left: 20px;" align="left">Impresos</div>
          </td>
           <td class="sec">
           </td>
        </tr>
    @foreach ($pedidos as $key => $pedido)
    @if($us->id == $pedido->user_id)
    @if($pedido->area == 'impresos')

    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>
    </tr>

    @endif
    @endif
    @endforeach

     <tr>
        <td class="sec">
        </td>
         <td class="sec">
         </td>
          <td class="sec">
          <div style=" margin-right: 20px; margin-left: 20px;" align="left">Rayos X</div>
          </td>
           <td class="sec">
           </td>
        </tr>
    @foreach ($pedidos as $key => $pedido)
    @if($us->id == $pedido->user_id)
    @if($pedido->area == 'rayos_x')

    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>
    </tr>

    @endif
    @endif
    @endforeach

     <tr>
        <td class="sec">
        </td>
         <td class="sec">
         </td>  
          <td class="sec">
          <div style=" margin-right: 20px; margin-left: 20px;" align="left">Otros</div>
          </td>
           <td class="sec">
           </td>
        </tr>
    @foreach ($pedidos as $key => $pedido)
    @if($us->id == $pedido->user_id)
    @if($pedido->area == 'otros')

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
    @endif
    @endforeach
    </div>
@endsection