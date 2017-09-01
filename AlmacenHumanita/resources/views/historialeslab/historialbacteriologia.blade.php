@extends('layouts.app')
 
@section('content')

<div class="container">

<div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Historial de Bactereología</h2>
	        </div>      
	    </div>

	    <div class="pull-right">
	            <a class="btn btn-primary" href="http://192.168.1.17:8000/pendienteAdminLab"> Atrás</a>
	            <hr>
	        </div>

	<table class="table table-bordered">
		<tr>
			<th>Nombre del Material:</th>
			<th>Descripción:</th>
			<th>Acción</th>

		</tr>
		
	@foreach ($materiales as $key => $material)
	@if ($material->bacteriologia == 'bacteriologia')
	<tr>
		<td>{{ $material->nombre }}</td>
		<td>{{ $material->descripcion }}</td>
		<td><a class="btn btn-info" 
        href="{{ route('historialeslab.historialbacteriologiamaterial',$material->id) }}">Historial</a></strong></h4>
		</td>


	</tr>
	@endif
	@endforeach
	
	</table>
    </div>
@endsection