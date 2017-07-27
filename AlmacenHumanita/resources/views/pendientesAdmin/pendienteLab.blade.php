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
    <table class="table table-bordered">
        <tr class="tabla1">
            <th>Material</th>
            <th>Cantidad</th>
            <th>Observaciones</th>
            <th>Fecha</th>
        </tr>
        
    @foreach ($pedidos as $key => $pedido)
    @if($pedido->area == 'Clinicos')
    @if($pedido->seccion == 'inmunologia')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>

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

    </tr>

    @endif

    @endforeach
    
    
    </table>
    <hr>


        <h4><strong> Uroanálisis(2) <a class="btn btn-info" 
        href="{{ route('historialeslab.historialuroanalisis') }}">Historial</a></strong></h4>
    <table class="table table-bordered">
        <tr class="tabla1">
            <th>Material</th>
            <th>Cantidad</th>
            <th>Observaciones</th>
            <th>Fecha</th>
        </tr>
        
    @foreach ($pedidos as $key => $pedido)
    @if($pedido->area == 'Clinicos')
    @if($pedido->seccion == 'uroanalisis')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>

    </tr>
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
    </tr>

    @endif

    @endforeach
    
    
    </table>
    <hr>


        <h4><strong> Hematología(3) <a class="btn btn-info"  
        href="{{ route('historialeslab.historialhematologia') }}">Historial</a></strong></h4>
    <table class="table table-bordered">
        <tr class="tabla1">
            <th>Material</th>
            <th>Cantidad</th>
            <th>Observaciones</th>
            <th>Fecha</th>
        </tr>
        
    @foreach ($pedidos as $key => $pedido)
    @if($pedido->area == 'Clinicos')
    @if($pedido->seccion == 'hematologia')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>

    </tr>
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
    </tr>

    @endif

    @endforeach
    
    
    </table>
    <hr>


        <h4><strong> Bacteriología(4) <a class="btn btn-info" 
        href="{{ route('historialeslab.historialbacteriologia') }}">Historial</a></strong></h4>
    <table class="table table-bordered">
        <tr class="tabla1">
            <th>Material</th>
            <th>Cantidad</th>
            <th>Observaciones</th>
            <th>Fecha</th>
        </tr>
        
    @foreach ($pedidos as $key => $pedido)
    @if($pedido->area == 'Clinicos')
    @if($pedido->seccion == 'bacteriologia')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>

    </tr>
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

    </tr>

    @endif

    @endforeach
    
    
    </table>
    <hr>


        <h4><strong> Bioquímica(5) <a class="btn btn-info" 
        href="{{ route('historialeslab.historialbioquimica') }}">Historial</a></strong></h4>
    <table class="table table-bordered">
        <tr class="tabla1">
            <th>Material</th>
            <th>Cantidad</th>
            <th>Observaciones</th>
            <th>Fecha</th>
        </tr>
        
    @foreach ($pedidos as $key => $pedido)
    @if($pedido->area == 'Clinicos')
    @if($pedido->seccion == 'bioquimica')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>

    </tr>
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
    </tr>

    @endif

    @endforeach
    
    
    </table>
    <hr>


        <h4><strong> Hormonas(6) <a class="btn btn-info" 
        href="{{ route('historialeslab.historialhormonas') }}">Historial</a></strong></h4>
    <table class="table table-bordered">
        <tr class="tabla1">
            <th>Material</th>
            <th>Cantidad</th>
            <th>Observaciones</th>
            <th>Fecha</th>
        </tr>
        
    @foreach ($pedidos as $key => $pedido)
    @if($pedido->area == 'Clinicos')
    @if($pedido->seccion == 'hormonas')
    <tr>
        <td>{{ $pedido->nombre_material }}</td>
        <td>{{ $pedido->cantidad }}</td>
        <td>{{ $pedido->observaciones }}</td>
        <td>{{ $pedido->created_at }}</td>

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
    </tr>

    @endif
  
    @endforeach
    
    
    </table>
    <hr>


    </div>
@endsection