@extends('layouts.app')
@section('content')


<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Cotizaciones de {{ $material->nombre }}</h2>
                <br>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('materialClinica.index') }}"> Atrás</a>
	        </div>
	    </div>
	</div>

	<table class="table table-bordered">
		<tr class="tabla1">
			<th>Nombre del material:</th>
			<th>Fecha</th>
			<th>Proveedor 1:</th>
			<th>Proveedor 2:</th>
			<th>Proveedor 3:</th>
			<th>Proveedor 4:</th>
			<th>Proveedor 5:</th>
		</tr>
		
	@foreach ($cotizacion as $key => $coti)
	@if ($coti->materialclinica_id == $material->id)
	<tr>
		<td>{{ $coti->nombre_material }}</td>
		<td>{{ $coti->created_at }}</td>
		<td>{{ $coti->nombre_proveedor1 }} </td>
		<td>{{ $coti->nombre_proveedor2 }} </td>
		<td>{{ $coti->nombre_proveedor3 }} </td>
		<td>{{ $coti->nombre_proveedor4 }} </td>
		<td>{{ $coti->nombre_proveedor5 }} </td>
	</tr>
	<tr>
		<td>
			Precios
		</td>
		<td>
			
		</td>
		<td>
		@if($coti->precio1 != NULL)
			Precio: ${{ $coti->precio1 }}
		@endif
		</td>
		<td>
		@if($coti->precio2 != NULL)
			Precio: ${{ $coti->precio2 }}
		@endif
		</td>
		<td>
		@if($coti->precio3 != NULL)
			Precio: ${{ $coti->precio3 }}
		@endif
		</td>
		<td>
		@if($coti->precio4 != NULL)
			Precio: ${{ $coti->precio4 }}
		@endif
		</td>
		<td>
		@if($coti->precio5 != NULL)
			Precio: ${{ $coti->precio5 }}
		@endif
		</td>
	</tr>

	<tr>
		 <td></td>
		 <td></td>
		 <td></td>
		 <td></td>
		 <td></td>
		 <td></td>
		 <td></td>
	</tr>
	@endif
	@endforeach
	
	</table>
        
	</div>
    </div>


@endsection