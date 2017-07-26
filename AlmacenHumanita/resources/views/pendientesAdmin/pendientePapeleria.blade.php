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
        <h4><strong> Sucursal {{ $us->name }} </strong></h4>
    <table class="table table-bordered">
        <tr>
            <th>Material</th>
            <th>Cantidad</th>
            <th>Observaciones</th>
            <th>Fecha</th>
        </tr>
        
    @foreach ($pedidos as $key => $pedido)
    @if($us->id == $pedido->user_id)
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>


    </tr>
    @endif
    @endforeach
    
    </table>
    @endif
    @endforeach
    </div>
@endsection