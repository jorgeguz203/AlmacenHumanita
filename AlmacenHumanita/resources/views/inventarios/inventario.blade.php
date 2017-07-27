@extends('layouts.app')
@section('content')

<!-- Modal -->
<div id="modal-existencia" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
		<form id="form-existencia" class="form-horizontal" action="{{ route('inventarios.inventario') }}" method="post">
			{{ csrf_field() }}
			<fieldset>

			<!-- Form Name -->
			<legend>Modificar existencia</legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="existencia">Existencia</label>  
			  <div class="col-md-4">
			  <input id="existencia" name="existencia" type="number" placeholder="0" class="form-control input-md" required="">

			  <input id="materia_id" name="materia_id" type="hidden" value="asf" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="button1id"></label>
			  <div class="col-md-8">
			    <button type="button" id="button1id" name="button1id" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
			    <button type="submit" id="guardar" name="guardar" class="btn btn-primary">Guardar</button>
			  </div>
			</div>

			</fieldset>
		</form>
      </div>
    </div>
  </div>
</div>

<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Inventario Toma de Muestras</h2>
	        </div>
	        <hr>
	    </div>
	</div>
<div class="container">
	<!-- Buscador inicia -->
	    
	    	
	    	{!! Form::open(['route' => 'inventarios.inventario', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
  <div class="form-group">
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscador']) !!}

  </div>
  <button type="submit" class="btn btn-primary">Buscar</button>
{!! Form ::Close() !!}
	     <!--Buscador fin  -->

	     </div>

	     <br>

<div class="row">
<div class="col-md-8"> 


	<table class="table table-bordered">
		<tr class="tabla1">

			<th>Nombre</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Editar</th>
			
		</tr>

	@foreach ($materialclinico as $key => $material)
	@if($material->user_id == Auth::user()->id)
	@if($material->area == 'Toma_de_muestras')
	<tr>
		<td>{{ $material->nombre_material }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td id="value-{{ $material->id }}">{{ $material->existencia }}</td>
		<td>
			<a class="btn btn-primary btn-existencia" data-toggle="modal" data-target="#modal-existencia" data-id="{{ $material->id }}">Editar Existencia</a>
		</td>
	@endif
	@endif
	@endforeach
</table>
	</div>



	<div class="col-md-4"> 
	<table class="table table-bordered">
		<tr class="tabla1">

			<th>Solicitudes</th>
		</tr>
	@foreach ($materialclinicos as $key => $materiales)
	@if($materiales->area == 'Toma_de_muestras')
		<td>
			<a class="btn btn-success" href="{{ route('pedidos.pedidosMuestras',$materiales->id) }}">Solicitar Material</a>
			<a class="btn btn-info" href="#">Historial</a>
        
		</td>
	</tr>
	@endif
	@endforeach
	</div>
	
	</div>
	</div>

<script>
$(document).ready(function(){
	$(".btn-existencia").click(function() {
		var id = $(this).data('id');

		$('#existencia').val($('#value-' + id).html());
		$('#materia_id').val(id);

	});
});
</script>
@endsection