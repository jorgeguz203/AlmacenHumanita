@extends('layouts.app')
@section('content')


<!-- Modal -->
<div id="modal-existencia" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
		<form id="form-existencia" class="form-horizontal" action="{{ route('inventarios.inventariopape') }}" method="post">
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
	            <h2>Inventario Papelería</h2>
	        </div>
	        <hr>

	    </div>
	</div>


<!-- Buscador inicia -->
	    <div class="pull-left">
	    	
	    	{!! Form::open(['href'=>'http://127.0.0.1:8000/inventariopapeleria', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
  <div class="form-group">
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscador']) !!}

  </div>
  <button type="submit" class="btn btn-primary">Buscar</button>
{!! Form ::Close() !!}
	     <!--Buscador fin  -->
</div>
<div class="container">

	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Papelería</h2>
	        </div>
	        <hr>

	    </div>
	</div>
	
	</div>

	<div class="row">
<div class="col-md-16"> 

	<table class="table table-bordered">
		<tr class="tabla1">
		<th>ID</th>
			<th>Nombre</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Editar</th>
			<th>Historial</th>
			<th>Extraordinarios</th>
		</tr>

	@foreach ($materialpapeleria as $key => $material)
	@if($material->user_id == Auth::user()->id)
	@if ($material->area == 'papeleria')
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $material->nombre_material }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td id="value-{{ $material->id }}">{{ $material->existencia }}</td>
		<td>
			<a class="btn btn-primary btn-existencia" data-toggle="modal" data-target="#modal-existencia" data-id="{{ $material->id }}">Editar Existencia</a>
		</td>



	@foreach ($materialpapelerias as $key => $materiales)
	@if($material->materialpapelera_id == $materiales->id)
	@if($materiales->area == 'papeleria')

		<td>
			<a class="btn btn-info" href="{{ route('inventarios.historialinventariopape',$materiales->id) }}">Historial</a>
		</td>
		<td>
			<a class="btn btn-success" href="{{ route('pedidos.pedidosPape',$materiales->id) }}">Extraordinarios</a>
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


<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Limpieza</h2>
	        </div>
	        <hr>

	    </div>
	</div>


	<div class="row">
<div class="col-md-16"> 

	<table class="table table-bordered">
		<tr class="tabla1">
		<th>ID</th>
			<th>Nombre</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Editar</th>
			<th>Historial</th>
			<th>Extraordinarios</th>
		</tr>

	@foreach ($materialpapeleria as $key => $material)
	@if($material->user_id == Auth::user()->id)
	@if ($material->area == 'limpieza')
	<tr>
		<td>{{ ++$a }}</td>
		<td>{{ $material->nombre_material }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td id="value-{{ $material->id }}">{{ $material->existencia }}</td>
		<td>
			<a class="btn btn-primary btn-existencia" data-toggle="modal" data-target="#modal-existencia" data-id="{{ $material->id }}">Editar Existencia</a>
		</td>



	@foreach ($materialpapelerias as $key => $materiales)
	@if($material->materialpapelera_id == $materiales->id)
	@if($materiales->area == 'limpieza')

		<td>
			<a class="btn btn-info" href="{{ route('inventarios.historialinventariopape',$materiales->id) }}">Historial</a>
		</td>
		<td>
			<a class="btn btn-success" href="{{ route('pedidos.pedidosPape',$materiales->id) }}">Extraordinarios</a>
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




<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Cafetería</h2>
	        </div>
	        <hr>

	    </div>
	</div>


		<div class="row">
<div class="col-md-16"> 

	<table class="table table-bordered">
		<tr class="tabla1">
		<th>ID</th>
			<th>Nombre</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Editar</th>
			<th>Historial</th>
			<th>Extraordinarios</th>
		</tr>

	@foreach ($materialpapeleria as $key => $material)
	@if($material->user_id == Auth::user()->id)
	@if ($material->area == 'cafeteria')
	<tr>
		<td>{{ ++$b }}</td>
		<td>{{ $material->nombre_material }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td id="value-{{ $material->id }}">{{ $material->existencia }}</td>
		<td>
			<a class="btn btn-primary btn-existencia" data-toggle="modal" data-target="#modal-existencia" data-id="{{ $material->id }}">Editar Existencia</a>
		</td>



	@foreach ($materialpapelerias as $key => $materiales)
	@if($material->materialpapelera_id == $materiales->id)
	@if($materiales->area == 'cafeteria')

		<td>
			<a class="btn btn-info" href="{{ route('inventarios.historialinventariopape',$materiales->id) }}">Historial</a>
		</td>
		<td>
			<a class="btn btn-success" href="{{ route('pedidos.pedidosPape',$materiales->id) }}">Extraordinarios</a>
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





<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Impresos</h2>
	        </div>
	        <hr>

	    </div>
	</div>


		<div class="row">
<div class="col-md-16"> 

	<table class="table table-bordered">
		<tr class="tabla1">
		<th>ID</th>
			<th>Nombre</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Editar</th>
			<th>Historial</th>
			<th>Extraordinarios</th>
		</tr>

	@foreach ($materialpapeleria as $key => $material)
	@if($material->user_id == Auth::user()->id)
	@if ($material->area == 'impresos')
	<tr>
	<td>{{ ++$c }}</td>
		<td>{{ $material->nombre_material }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td id="value-{{ $material->id }}">{{ $material->existencia }}</td>
		<td>
			<a class="btn btn-primary btn-existencia" data-toggle="modal" data-target="#modal-existencia" data-id="{{ $material->id }}">Editar Existencia</a>
		</td>



	@foreach ($materialpapelerias as $key => $materiales)
	@if($material->materialpapelera_id == $materiales->id)
	@if($materiales->area == 'impresos')

		<td>
			<a class="btn btn-info" href="{{ route('inventarios.historialinventariopape',$materiales->id) }}">Historial</a>
		</td>
		<td>
			<a class="btn btn-success" href="{{ route('pedidos.pedidosPape',$materiales->id) }}">Extraordinarios</a>
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






<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Rayos X</h2>
	        </div>
	        <hr>

	    </div>
	</div>


		<div class="row">
<div class="col-md-16"> 

	<table class="table table-bordered">
		<tr class="tabla1">
		<th>ID</th>
			<th>Nombre</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Editar</th>
			<th>Historial</th>
			<th>Extraordinarios</th>
		</tr>

	@foreach ($materialpapeleria as $key => $material)
	@if($material->user_id == Auth::user()->id)
	@if ($material->area == 'rayos_x')
	<tr>
	<td>{{ ++$d }}</td>
		<td>{{ $material->nombre_material }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td id="value-{{ $material->id }}">{{ $material->existencia }}</td>
		<td>
			<a class="btn btn-primary btn-existencia" data-toggle="modal" data-target="#modal-existencia" data-id="{{ $material->id }}">Editar Existencia</a>
		</td>



	@foreach ($materialpapelerias as $key => $materiales)
	@if($material->materialpapelera_id == $materiales->id)
	@if($materiales->area == 'rayos_x')

		<td>
			<a class="btn btn-info" href="{{ route('inventarios.historialinventariopape',$materiales->id) }}">Historial</a>
		</td>
		<td>
			<a class="btn btn-success" href="{{ route('pedidos.pedidosPape',$materiales->id) }}">Extraordinarios</a>
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



<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Otros</h2>
	        </div>
	        <hr>

	    </div>
	</div>


		<div class="row">
<div class="col-md-16"> 

	<table class="table table-bordered">
		<tr class="tabla1">
		<th>ID</th>
			<th>Nombre</th>
			<th>Máximo</th>
			<th>Mínimo</th>
			<th>Existencia</th>
			<th>Editar</th>
			<th>Historial</th>
			<th>Extraordinarios</th>
		</tr>

	@foreach ($materialpapeleria as $key => $material)
	@if($material->user_id == Auth::user()->id)
	@if ($material->area == 'otros')
	<tr>
	<td>{{ ++$e }}</td>
		<td>{{ $material->nombre_material }}</td>
		<td>{{ $material->maximo }}</td>
		<td>{{ $material->minimo }}</td>
		<td id="value-{{ $material->id }}">{{ $material->existencia }}</td>
		<td>
			<a class="btn btn-primary btn-existencia" data-toggle="modal" data-target="#modal-existencia" data-id="{{ $material->id }}">Editar Existencia</a>
		</td>



	@foreach ($materialpapelerias as $key => $materiales)
	@if($material->materialpapelera_id == $materiales->id)
	@if($materiales->area == 'otros')

		<td>
			<a class="btn btn-info" href="{{ route('inventarios.historialinventariopape',$materiales->id) }}">Historial</a>
		</td>
		<td>
			<a class="btn btn-success" href="{{ route('pedidos.pedidosPape',$materiales->id) }}">Extraordinarios</a>
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




</div>
	



	<script>
$(document).ready(function(){
	$(".btn-existencia").click(function() {
		var id = $(this).data('id');

		$('#existencia').val($('#value-' + id).html());
		$('#materia_id').val(id);

	});

		$("#form-existencia").submit(function() {
		var action = $("#form-existencia").attr('action');

		var token =  $("#form-existencia").find('input[name="_token"]').val();
		var existencia = $("#existencia").val();
		var materia_id = $("#materia_id").val();


		$.post( action, { _token: token, existencia: existencia, materia_id: materia_id })
		  .done(function( data ) {
		    $('#value-' + data.id).html(data.existencia);
		    $('#modal-existencia').modal('hide');
		  });

		return false;
	});
});
</script>
@endsection