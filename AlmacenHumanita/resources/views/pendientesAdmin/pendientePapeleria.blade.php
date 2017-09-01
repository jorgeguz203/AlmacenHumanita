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
        
       <tr>
        <td class="sec">
        </td>
         <td class="sec">
         </td>
          <td class="sec">
          </td>
           <td class="sec">
           <div style=" margin-right: 20px; margin-left: 20px;" align="left">Papelería</div>
           </td>
           <td class="sec">
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
    @foreach ($materiales as $key => $material)

    @if ($pedido->materialpapelera_id == $material->id)
    @if($material->area == 'papeleria')
        <td>
            
        {{  $material->existencia  }}
        </td>

        <td>
            <a class="btn btn-danger" href="{{ route('inventarioMatrizClinica.reducirpapeleria',$material->id) }}">Salida</a>
            {!! Form::open(['method' => 'DELETE','route' => ['pendientesAdmin.destroypapes', $pedido->id],'style'=>'display:inline','onclick'=>"return confirm('¿Estás seguro de querer eliminar este pedido?')"]) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}

        </td>
    </tr>
    @endif
@endif
    @endforeach
    @endif
    @endif
    @endforeach

</div>
</div>




     <div class="row">
        <div class="col-md-12"> 

    
        
        <tr>
        <td class="sec">
        </td>
         <td class="sec">
         </td>
          <td class="sec">
          </td>
           <td class="sec">
           <div style=" margin-right: 20px; margin-left: 20px;" align="left">Limpieza</div>
           </td>
           <td class="sec">
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
    @foreach ($materiales as $key => $material)

    @if ($pedido->materialpapelera_id == $material->id)
    @if($material->area == 'limpieza')
        <td>
            {{  $material->existencia  }}
        
        </td>

        <td>
            <a class="btn btn-info" href="{{ route('inventarioMatrizClinica.reducirpapeleria',$material->id) }}">Salida</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['pendientesAdmin.destroypapes', $pedido->id],'style'=>'display:inline','onclick'=>"return confirm('¿Estás seguro de querer eliminar este pedido?')"]) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}

        </td>
    </tr>
    @endif
@endif
    @endforeach
    @endif
    @endif
    @endforeach

</div>
</div>



     <div class="row">
        <div class="col-md-12"> 

    
        
        <tr>
        <td class="sec">
        </td>
         <td class="sec">
         </td>
          <td class="sec">
          </td>
           <td class="sec">
           <div style=" margin-right: 20px; margin-left: 20px;" align="left">Cafetería</div>
           </td>
           <td class="sec">
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
    @foreach ($materiales as $key => $material)

    @if ($pedido->materialpapelera_id == $material->id)
    @if($material->area == 'cafeteria')
        <td>
            {{  $material->existencia  }}
        
        </td>

        <td>
            <a class="btn btn-danger" href="{{ route('inventarioMatrizClinica.reducirpapeleria',$material->id) }}">Salida</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['pendientesAdmin.destroypapes', $pedido->id],'style'=>'display:inline','onclick'=>"return confirm('¿Estás seguro de querer eliminar este pedido?')"]) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}

        </td>
    </tr>
    @endif
  @endif
    @endforeach
    @endif
    @endif
    @endforeach

</div>
</div>









     <div class="row">
        <div class="col-md-12"> 

    
        
        <tr>
        <td class="sec">
        </td>
         <td class="sec">
         </td>
          <td class="sec">
          </td>
           <td class="sec">
           <div style=" margin-right: 20px; margin-left: 20px;" align="left">Impresos</div>
           </td>
           <td class="sec">
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
            @foreach ($materiales as $key => $material)

    @if ($pedido->materialpapelera_id == $material->id)
    @if($material->area == 'impresos')

        <td>
            {{  $material->existencia  }}
        
        </td>

        <td>
            <a class="btn btn-danger" href="{{ route('inventarioMatrizClinica.reducirpapeleria',$material->id) }}">Salida</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['pendientesAdmin.destroypapes', $pedido->id],'style'=>'display:inline','onclick'=>"return confirm('¿Estás seguro de querer eliminar este pedido?')"]) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}

        </td>
    </tr>
    @endif
    @endif
    @endforeach
    @endif
    @endif
    @endforeach
</div>
</div>









     <div class="row">
        <div class="col-md-12"> 

    
        
        <tr>
        <td class="sec">
        </td>
         <td class="sec">
         </td>
          <td class="sec">
          </td>
           <td class="sec">
           <div style=" margin-right: 20px; margin-left: 20px;" align="left">Rayos X</div>
           </td>
           <td class="sec">
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
    @foreach ($materiales as $key => $material)

    @if ($pedido->materialpapelera_id == $material->id)
    @if($material->area == 'rayos_x')
        <td>
            
        {{  $material->existencia  }}
        </td>

        <td>
            <a class="btn btn-danger" href="{{ route('inventarioMatrizClinica.reducirpapeleria',$material->id) }}">Salida</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['pendientesAdmin.destroypapes', $pedido->id],'style'=>'display:inline','onclick'=>"return confirm('¿Estás seguro de querer eliminar este pedido?')"]) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}

        </td>
    </tr>
    @endif
    @endif
    @endforeach
    @endif
    @endif
    @endforeach
</div>
</div>







     <div class="row">
        <div class="col-md-12"> 

   
        
        <tr>
        <td class="sec">
        </td>
         <td class="sec">
         </td>
          <td class="sec">
          </td>
           <td class="sec">
           <div style=" margin-right: 20px; margin-left: 20px;" align="left">Otros</div>
           </td>
           <td class="sec">
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
    @foreach ($materiales as $key => $material)

    @if ($pedido->materialpapelera_id == $material->id)
    @if($material->area == 'otros')
        <td>
            {{  $material->existencia  }}
        
        </td>

        <td>
            <a class="btn btn-danger" href="{{ route('inventarioMatrizClinica.reducirpapeleria',$material->id) }}">Salida</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['pendientesAdmin.destroypapes', $pedido->id],'style'=>'display:inline','onclick'=>"return confirm('¿Estás seguro de querer eliminar este pedido?')"]) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}

        </td>
    </tr>
    @endif
 @endif
    @endforeach
    @endif
    @endif
    @endforeach
</table>
</div>
</div>





@endif
@endforeach
    </div>
@endsection