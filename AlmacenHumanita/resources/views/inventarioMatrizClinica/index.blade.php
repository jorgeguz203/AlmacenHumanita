@extends('layouts.app')
 
@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Almacén Material Clínica</h2>
	        </div>
	       
	    </div>
	</div>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<table class="table table-bordered">
		<tr>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th width="280px">Acción</th>
		</tr>
		
	@foreach ($materiales as $key => $material)
	<tr>
		<td>{{ $material->nombre }}</td>
		<td>{{ $material->descripcion }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td>{{ $material->existencia }}</td>

		<td>
			<a class="btn btn-success" href="{{ route('inventarioMatrizClinica.agregar',$material->id) }}">Entrada</a>
			
			<a class="btn btn-danger" href="{{ route('inventarioMatrizClinica.reducir',$material->id) }}">Salida</a>

			<a class="btn btn-info" href="{{ route('materialClinica.edit',$material->id) }}">Historial</a>
		</td>

	</tr>
	@endforeach
	
	</table>
	{!! $materiales->render() !!}
	</div>


@endsection