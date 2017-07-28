@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Historial de Pedidos de {{ $sucursales->name }}</h2>
	        </div>      
	    </div>

	    <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('pendientesAdmin.pendientePapeleria') }}"> Atrás</a>
	            <hr>
	        </div>





	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Nombre del material:</th>
			<th>Descripción:</th>
			<th>Acción:</th>
		</tr>


		 <tr>
	         
        <td class="sec">
        </td>
         <td class="sec">
         <div style=" margin-right: 20px; margin-left: 20px;" align="left">Papelería</div>
         </td>
          <td class="sec">
          </td>
           
        </tr>
		
	@foreach ($materiales as $key => $material)
	@if($material->area == 'papeleria')
	<tr>
		<td>{{ $material->nombre }}</td>
		<td>{{ $material->descripcion }}</td>
		<td><a class="btn btn-info" 
        href="{{ route('pendientesAdmin.historialPendientesPape2', $material->id) }}">
        Historial</a> </strong></h4></td>

	</tr>
	@endif
	@endforeach




	 <tr>
	         
        <td class="sec">
        </td>
         <td class="sec">
         <div style=" margin-right: 20px; margin-left: 20px;" align="left">Limpieza</div>
         </td>
          <td class="sec">
          </td>
         
        </tr>
		
	@foreach ($materiales as $key => $material)
	@if($material->area == 'limpieza')
	<tr>
		<td>{{ $material->nombre }}</td>
		<td>{{ $material->descripcion }}</td>
		<td><a class="btn btn-info" 
        href="{{ route('pendientesAdmin.historialPendientesPape2', $material->id) }}">
        Historial</a> </strong></h4></td>

	</tr>
	@endif
	@endforeach


	 <tr>
	         
        <td class="sec">
        </td>
         <td class="sec">
         <div style=" margin-right: 20px; margin-left: 20px;" align="left">Cafetería</div>
         </td>
          <td class="sec">
          </td>
          
        </tr>
		
	@foreach ($materiales as $key => $material)
	@if($material->area == 'cafeteria')
	<tr>
		<td>{{ $material->nombre }}</td>
		<td>{{ $material->descripcion }}</td>
		<td><a class="btn btn-info" 
        href="{{ route('pendientesAdmin.historialPendientesPape2', $material->id) }}">
        Historial</a> </strong></h4></td>

	</tr>
	@endif
	@endforeach



	 <tr>
	         
        <td class="sec">
        </td>
         <td class="sec">
         <div style=" margin-right: 20px; margin-left: 20px;" align="left">Impresos</div>
         </td>
          <td class="sec">
          </td>
          
        </tr>
		
	@foreach ($materiales as $key => $material)
	@if($material->area == 'impresos')
	<tr>
		<td>{{ $material->nombre }}</td>
		<td>{{ $material->descripcion }}</td>
		<td><a class="btn btn-info" 
        href="{{ route('pendientesAdmin.historialPendientesPape2', $material->id) }}">
        Historial</a> </strong></h4></td>

	</tr>
	@endif
	@endforeach




	 <tr>
	         
        <td class="sec">
        </td>
         <td class="sec">
         <div style=" margin-right: 20px; margin-left: 20px;" align="left">Rayos X</div>
         </td>
          <td class="sec">
          </td>
          
        </tr>
		
	@foreach ($materiales as $key => $material)
	@if($material->area == 'rayos_x')
	<tr>
		<td>{{ $material->nombre }}</td>
		<td>{{ $material->descripcion }}</td>
		<td><a class="btn btn-info" 
        href="{{ route('pendientesAdmin.historialPendientesPape2', $material->id) }}">
        Historial</a> </strong></h4></td>

	</tr>
	@endif
	@endforeach


	 <tr>
	         
        <td class="sec">
        </td>
         <td class="sec">
         <div style=" margin-right: 20px; margin-left: 20px;" align="left">Otros</div>
         </td>
          <td class="sec">
          </td>
           
        </tr>
		
	@foreach ($materiales as $key => $material)
	@if($material->area == 'otros')
	<tr>
		<td>{{ $material->nombre }}</td>
		<td>{{ $material->descripcion }}</td>
		<td><a class="btn btn-info" 
        href="{{ route('pendientesAdmin.historialPendientesPape2', $material->id) }}">
        Historial</a> </strong></h4></td>

	</tr>
	@endif
	@endforeach





	
	</table>
    </div>
@endsection