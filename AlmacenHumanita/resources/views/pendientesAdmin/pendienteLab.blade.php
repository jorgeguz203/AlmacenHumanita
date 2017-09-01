@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><strong> Pedidos de Laboratorios </strong></h2>
                <hr>
            </div>  
  
        </div>


        <h4><strong> Inmunología(1) <a class="btn btn-info" 
        href="{{ route('historialeslab.historialinmunologia') }}">Historial</a></strong></h4>


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
    @if($pedido->area == 'Clinicos')
    @if($pedido->seccion == 'inmunologia')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>


    @foreach ($materiales as $key => $material)

    @if ($pedido->materialclinica_id == $material->id)
    @if($material->area == 'Clinicos')
        <td>
            
        {{  $material->existencia  }}
        </td>

        <td>
            <a class="btn btn-danger" href="{{ route('inventarioMatrizClinica.reducirclinicospedidos',$material->id) }}">Salida</a>

            {!! Form::open(['method' => 'DELETE','route' => ['pendientesAdmin.destroylabs', $pedido->id],'style'=>'display:inline','onclick'=>"return confirm('¿Estás seguro de querer eliminar este pedido?')"]) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}

        </td>
    @endif
    @endif
    @endforeach
    </tr>
    

    @endif
    @endif
    @endforeach

                    @foreach ($varios as $key => $vario)

    @if ($vario->seccion == 'inmunologia')
    <tr>
        <td>{{ $vario->extra }}</td>
        <td></td>
        <td></td>
        <td>{{ $vario->created_at }}</td>
                    <td></td>
        <td>
            <a class="btn btn-primary" href="http://192.168.1.17:8000/inventarioMatrizClinica">Inventario</a>

        </td>

    </tr>

    @endif

    @endforeach
    
    
    </table>
    </div>
  </div>



    <hr>

<h4><strong> Uroanálisis(2) <a class="btn btn-info" 
        href="{{ route('historialeslab.historialuroanalisis') }}">Historial</a></strong></h4>

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
    @if($pedido->area == 'Clinicos')
    @if($pedido->seccion == 'uroanalisis')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>

    @foreach ($materiales as $key => $material)

    @if ($pedido->materialclinica_id == $material->id)
    @if($material->area == 'Clinicos')
        <td>
            {{  $material->existencia  }}
        
        </td>

        <td>
            <a class="btn btn-danger" href="{{ route('inventarioMatrizClinica.reducirclinicospedidos',$material->id) }}">Salida</a>
            {!! Form::open(['method' => 'DELETE','route' => ['pendientesAdmin.destroylabs', $pedido->id],'style'=>'display:inline','onclick'=>"return confirm('¿Estás seguro de querer eliminar este pedido?')"]) !!}
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

                    @foreach ($varios as $key => $vario)

    @if ($vario->seccion == 'uroanalisis')
    <tr>
        <td>{{ $vario->extra }}</td>
        <td></td>
        <td></td>
        <td>{{ $vario->created_at }}</td>
                    <td></td>
        <td>
            <a class="btn btn-primary" href="http://192.168.1.17:8000/inventarioMatrizClinica">Inventario</a>

        </td>

    </tr>

    @endif

    @endforeach
    
    
    </table>
    </div>
 </div>



    <hr>

    <h4><strong> Hematología(3) <a class="btn btn-info" 
        href="{{ route('historialeslab.historialhematologia') }}">Historial</a></strong></h4>

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
    @if($pedido->area == 'Clinicos')
    @if($pedido->seccion == 'hematologia')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>

    @foreach ($materiales as $key => $material)

    @if ($pedido->materialclinica_id == $material->id)
    @if($material->area == 'Clinicos')

        <td>
            {{  $material->existencia  }}
        
        </td>

        <td>
            <a class="btn btn-danger" href="{{ route('inventarioMatrizClinica.reducirclinicospedidos',$material->id) }}">Salida</a>
            {!! Form::open(['method' => 'DELETE','route' => ['pendientesAdmin.destroylabs', $pedido->id],'style'=>'display:inline','onclick'=>"return confirm('¿Estás seguro de querer eliminar este pedido?')"]) !!}
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


                    @foreach ($varios as $key => $vario)

    @if ($vario->seccion == 'hematologia')
    <tr>
        <td>{{ $vario->extra }}</td>
        <td></td>
        <td></td>
        <td>{{ $vario->created_at }}</td>
                    <td></td>
        <td>
            <a class="btn btn-primary" href="http://192.168.1.17:8000/inventarioMatrizClinica">Inventario</a>

        </td>

    </tr>

    @endif

    @endforeach
    
    
    </table>
    </div>
   </div>




    <hr>

    <h4><strong> Bacteriología(4) <a class="btn btn-info" 
        href="{{ route('historialeslab.historialbacteriologia') }}">Historial</a></strong></h4>

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
    @if($pedido->area == 'Clinicos')
    @if($pedido->seccion == 'bacteriologia')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>
    @foreach ($materiales as $key => $material)

    @if ($pedido->materialclinica_id == $material->id)
    @if($material->area == 'Clinicos')
        <td>
            {{  $material->existencia  }}
        
        </td>

        <td>
            <a class="btn btn-danger" href="{{ route('inventarioMatrizClinica.reducirclinicospedidos',$material->id) }}">Salida</a>
            {!! Form::open(['method' => 'DELETE','route' => ['pendientesAdmin.destroylabs', $pedido->id],'style'=>'display:inline','onclick'=>"return confirm('¿Estás seguro de querer eliminar este pedido?')"]) !!}
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

                    @foreach ($varios as $key => $vario)

    @if ($vario->seccion == 'bacteriologia')
    <tr>
        <td>{{ $vario->extra }}</td>
        <td></td>
        <td></td>
        <td>{{ $vario->created_at }}</td>
                    <td></td>
        <td>
            <a class="btn btn-primary" href="http://192.168.1.17:8000/inventarioMatrizClinica">Inventario</a>

        </td>

    </tr>

    @endif

    @endforeach
    
    
    </table>
    </div>
 </div>


    <hr>

    <h4><strong> Bioquímica(5) <a class="btn btn-info" 
        href="{{ route('historialeslab.historialbioquimica') }}">Historial</a></strong></h4>

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
    @if($pedido->area == 'Clinicos')
    @if($pedido->seccion == 'bioquimica')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>
    @foreach ($materiales as $key => $material)

    @if ($pedido->materialclinica_id == $material->id)
    @if($material->area == 'Clinicos')

    <td>
            
        
        </td>

        <td>
            <a class="btn btn-danger" href="{{ route('inventarioMatrizClinica.reducirclinicospedidos',$material->id) }}">Salida</a>
            {!! Form::open(['method' => 'DELETE','route' => ['pendientesAdmin.destroylabs', $pedido->id],'style'=>'display:inline','onclick'=>"return confirm('¿Estás seguro de querer eliminar este pedido?')"]) !!}
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

                    @foreach ($varios as $key => $vario)

    @if ($vario->seccion == 'bioquimica')
    <tr>
        <td>{{ $vario->extra }}</td>
        <td></td>
        <td></td>
        <td>{{ $vario->created_at }}</td>
                    <td></td>
        <td>
            <a class="btn btn-primary" href="http://192.168.1.17:8000/inventarioMatrizClinica">Inventario</a>

        </td>

    </tr>

    @endif

    @endforeach
    
    
    </table>
    </div>
 </div>


    <hr>

    <h4><strong> Hormonas(6) <a class="btn btn-info" 
        href="{{ route('historialeslab.historialhormonas') }}">Historial</a></strong></h4>

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
    @if($pedido->area == 'Clinicos')
    @if($pedido->seccion == 'hormonas')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>

    @foreach ($materiales as $key => $material)
    @if ($pedido->materialclinica_id == $material->id)
    @if($material->area == 'Clinicos')

        <td>
            {{  $material->existencia  }}
        
        </td>

        <td>
            <a class="btn btn-danger" href="{{ route('inventarioMatrizClinica.reducirclinicospedidos',$material->id) }}">Salida</a>
            {!! Form::open(['method' => 'DELETE','route' => ['pendientesAdmin.destroylabs', $pedido->id],'style'=>'display:inline','onclick'=>"return confirm('¿Estás seguro de querer eliminar este pedido?')"]) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}

        </td>

    @endif
    @endif
    @endforeach
    </tr>
    
    @endif
    @endif
    @endforeach

                    @foreach ($varios as $key => $vario)

    @if ($vario->seccion == 'hormonas')
    <tr>
        <td>{{ $vario->extra }}</td>
        <td></td>
        <td></td>
        <td>{{ $vario->created_at }}</td>
                    <td></td>
        <td>
            <a class="btn btn-primary" href="http://192.168.1.17:8000/inventarioMatrizClinica">Inventario</a>

        </td>

    </tr>

    @endif

    @endforeach
    
    
    </table>
    </div>
 </div>

    <hr>


    </div>
@endsection