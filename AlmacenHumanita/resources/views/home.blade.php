@extends('layouts.app')

@section('content')


<!-- Modal -->
<div id="modal-existencia" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <form id="form-existencia" class="form-horizontal" action="{{ route('modificaPedidos') }}" method="post">
            {{ csrf_field() }}
            <fieldset>

            <!-- Form Name -->
            <legend>Agregar Varios</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="existencia">Varios:</label>  
              <div class="col-md-4">
              <textarea id="extra" rows="5" cols="220" name="extra" type="text" placeholder="" class="form-control input-lg" required=""></textarea>

              <input id="seccion" name="seccion" type="hidden" value="asf" class="form-control input-md" required="">
                
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



<!-- Modal 2 -->
<div id="modal-pedidos" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">

<form id="form-pedidos" class="form-horizontal" action="{{ route('home') }}" method="post">
{{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend>Solicitar Material</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Cantidad</label>  
  <div class="col-md-4">

    <input id="cantidad" name="cantidad" type="number" placeholder="0" class="form-control input-md" required="">

    <input id="materia_id" name="materia_id" type="hidden" value="asg" class="form-control input-md" required="">

  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <div class="col-md-8">
    <button type="button" id="button1id" name="button1id" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
    <button type="submit" id="save" name="save" class="btn btn-success">Solicitar</button>
  </div>
</div>

</fieldset>
</form>
      </div>
    </div>
  </div>
</div>



<div class="container">

@if (Auth::user()->can('admin-admin-papelera') OR Auth::user()->can('admin-admin-clinica'))
    <div class="row">
        <div class="col-md-6">          
                <div class="panel-body dag" align="center">
                <h3>Pedidos Pendientes</h3>
                </div>
                        <br>

        @if (Auth::user()->can('admin-admin-clinica'))

<strong>Materiales Clínicos</strong>
    <table class="table table-bordered">
     <tr class="tabla1">
            <th>Usuario</th>
            <th>Sección</th>
            <th>Nombre</th>
            <th>Cantidad</th>
        </tr>
    @foreach ($faltante as $key => $faltantes)
    <tr>
        <td>{{ $faltantes->nombre_user }}</td>
        <td>{{ $faltantes->seccion }}</td>
        <td>{{ $faltantes->nombre_material }}</td>
        <td>{{ $faltantes->faltante }}</td>
    </tr>

    @endforeach
    </table>


    @endif

            @if (Auth::user()->can('admin-admin-papelera'))

<strong>Materiales de Papelería</strong>
    <table class="table table-bordered">
     <tr class="tabla1">
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Cantidad</th>
        </tr>
    @foreach ($faltantepape as $key => $faltantes)
    <tr>
        <td>{{ $faltantes->nombre_user }}</td>
        <td>{{ $faltantes->nombre_material }}</td>
        <td>{{ $faltantes->faltante }}</td>
    </tr>

    @endforeach
    </table>


    @endif

    </div>

<div class="col-md-6">
    <div class="panel-body war" align="center">
                    <h3>Material por debajo del mínimo</h3>
                    </div>
                    <br>

<!--tabla clinicos-->

@if (Auth::user()->can('admin-admin-clinica'))
<strong>Materiales Clínicos</strong>
    <table class="table table-bordered">
     <tr class="tabla1">
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Máximo</th>
            <th>Mínimo</th>
            <th>Existencia</th>
        </tr>

    @foreach ($materiales as $key => $material)
    @if($material->existencia <= $material->minimo)
    <tr>
        <td>{{ $material->nombre }}</td>
        <td>{{ $material->descripcion }}</td>
        <td>{{ $material->maximo }}</td>
        <td>{{ $material->minimo }}</td>
        <td>{{ $material->existencia }}</td>
    </tr>
    @endif
    @endforeach
    </table>
@endif
<!--tabla clinicos-->

<!--tabla papelera-->
@if (Auth::user()->can('admin-admin-papelera'))
<strong>Materiales de Papelería</strong>
    <table class="table table-bordered">
     <tr class="tabla1">
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Máximo</th>
            <th>Mínimo</th>
            <th>Existencia</th>
        </tr>

    @foreach ($materialess as $key => $material)
    @if($material->existencia <= $material->minimo)
    <tr>
        <td>{{ $material->nombre }}</td>
        <td>{{ $material->descripcion }}</td>
        <td>{{ $material->maximo }}</td>
        <td>{{ $material->minimo }}</td>
        <td>{{ $material->existencia }}</td>
    </tr>
    @endif
    @endforeach
    </table>
@endif
<!--tabla clinicos-->
        </div>
            
    </div>

@endif


<!--                  sucursales               -->


@if (Auth::user()->can('admin-sucrusal'))
    <div class="row">
        <div class="col-md-6">          
                <div class="panel-body war" align="center">
                <h3>Materiales de Tomas de Muestra por debajo del mínimo</h3>
        </div>
        <br>
            <!--tabla clinicos-->

@if (Auth::user()->can('admin-sucrusal'))
<strong>Materiales Clínicos</strong>
    <table class="table table-bordered">
     <tr class="tabla1">
            <th>Nombre</th>
            <th>Máximo</th>
            <th>Mínimo</th>
            <th>Existencia</th>
        </tr>

    @foreach ($materialclinico as $key => $material)
    @if($material->existencia <= $material->minimo)
    @if($material->user_id == Auth::user()->id)
    @if($material->area == 'Toma_de_muestras')
    <tr>
        <td>{{ $material->nombre_material }}</td>
        <td>{{ $material->maximo }}</td>
        <td>{{ $material->minimo }}</td>
        <td>{{ $material->existencia }}</td>
    </tr>
    @endif
    @endif
    @endif
    @endforeach
    </table>
@endif
<!--tabla clinicos-->
    </div>


<div class="col-md-6">
    <div class="panel-body war" align="center">
                    <h3>Materiales de Papelería que estan debajo del mínimo  </h3>
                    </div>
                    <br>



<!--tabla papelera-->
@if (Auth::user()->can('admin-sucrusal'))
<strong>Materiales de Papelería</strong>
    <table class="table table-bordered">
     <tr class="tabla1">
            <th>Nombre</th>
            <th>Máximo</th>
            <th>Mínimo</th>
            <th>Existencia</th>
        </tr>

    @foreach ($materialpapeleria as $key => $material)
    @if($material->existencia <= $material->minimo)
    @if($material->user_id == Auth::user()->id)
    <tr>
        <td>{{ $material->nombre_material }}</td>
        <td>{{ $material->maximo }}</td>
        <td>{{ $material->minimo }}</td>
        <td>{{ $material->existencia }}</td>
    </tr>
    @endif
    @endif
    @endforeach
    </table>
@endif
<!--tabla clinicos-->
        </div>
            
    </div>
@endif

<!-- laboratorios -->

@if (Auth::user()->can('admin-laboratorio'))

<div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Pedidos de Laboratorios </h2>
                <hr>
            </div>      
        </div>


<h4><strong> Inmunología(1) </strong></h4>
      
    <table class="table table-bordered">
       <tr class="tabla1">
            <th>Nombre del material:</th>
            <th>Descripción:</th>
            <th>Acción:</th>
        </tr>
        
    @foreach ($materiales as $key => $material)
    @if ($material->area == 'Clinicos')
    @if ($material->inmunologia == 'inmunologia')
    <tr>
        <td>{{ $material->nombre }}</td>
        <td>{{ $material->descripcion }}</td>
        <td>
            <a class="btn btn-success btn-pedidos" data-toggle="modal" data-target="#modal-pedidos" data-id="{{ $material->id }}" data-seccion="inmunologia">Solicitar Material</a>
            <a class="btn btn-info" href="{{ route('historialeslab.historialinmunologialab',$material->id) }}">Historial</a>
        
        </td>
    </tr>
    @endif
    @endif
     @endforeach


    
    </table>

    <a class="btn btn-primary btn-varios" data-toggle="modal" data-target="#modal-existencia" data-seccion="inmunologia">Varios</a>   
    <hr>



    <h4><strong> Uroanálisis(2) </strong></h4>
      
    <table class="table table-bordered">
        <tr class="tabla1">
            <th>Nombre del material:</th>
            <th>Descripción:</th>
            <th>Acción:</th>
        </tr>
        
    @foreach ($materiales as $key => $material)
    @if ($material->area == 'Clinicos')
    @if ($material->uroanalisis == 'uroanalisis')
    <tr>
        <td>{{ $material->nombre }}</td>
        <td>{{ $material->descripcion }}</td>
        <td>
            <a class="btn btn-success btn-pedidos" data-toggle="modal" data-target="#modal-pedidos" data-id="{{ $material->id }}" data-seccion="uroanalisis">Solicitar Material</a>
            <a class="btn btn-info" href="{{ route('historialeslab.historialuroanalisislab',$material->id) }}">Historial</a>
        
        </td>
    </tr>
    @endif
    @endif
     @endforeach
    
    </table>

   <a class="btn btn-primary btn-varios" data-toggle="modal" data-target="#modal-existencia" data-seccion="uroanalisis">Varios</a>  
    <hr>

    <h4><strong> Hematología(3) </strong></h4>
      
    <table class="table table-bordered">
       <tr class="tabla1">
            <th>Nombre del material:</th>
            <th>Descripción:</th>
            <th>Acción:</th>
        </tr>
        
    @foreach ($materiales as $key => $material)
    @if ($material->area == 'Clinicos')
    @if ($material->hematologia == 'hematologia')
    <tr>
        <td>{{ $material->nombre }}</td>
        <td>{{ $material->descripcion }}</td>
        <td>
            <a class="btn btn-success btn-pedidos" data-toggle="modal" data-target="#modal-pedidos" data-id="{{ $material->id }}" data-seccion="hematologia">Solicitar Material</a>
            <a class="btn btn-info" href="{{ route('historialeslab.historialhematologialab',$material->id) }}">Historial</a>
        
        </td>
    </tr>
    @endif
    @endif
     @endforeach
    
    </table>
    <a class="btn btn-primary btn-varios" data-toggle="modal" data-target="#modal-existencia" data-seccion="hematologia">Varios</a>    
    <hr>

    <h4><strong> Bacteriología(4) </strong></h4>
      
    <table class="table table-bordered">
        <tr class="tabla1">
            <th>Nombre del material:</th>
            <th>Descripción:</th>
            <th>Acción:</th>
        </tr>
        
    @foreach ($materiales as $key => $material)
    @if ($material->area == 'Clinicos')
    @if ($material->bacteriologia == 'bacteriologia')
    <tr>
        <td>{{ $material->nombre }}</td>
        <td>{{ $material->descripcion }}</td>
        <td>
            <a class="btn btn-success btn-pedidos" data-toggle="modal" data-target="#modal-pedidos" data-id="{{ $material->id }}" data-seccion="bacteriologia">Solicitar Material</a>
            <a class="btn btn-info" href="{{ route('historialeslab.historialbacteriologialab',$material->id) }}">Historial</a>
        
        </td>
    </tr>
    @endif
    @endif
     @endforeach
    
    </table>
       <a class="btn btn-primary btn-varios" data-toggle="modal" data-target="#modal-existencia" data-seccion="bacteriologia">Varios</a> 
    <hr>

    <h4><strong> Bioquímica(5) </strong></h4>
      
    <table class="table table-bordered">
        <tr class="tabla1">
            <th>Nombre del material:</th>
            <th>Descripción:</th>
            <th>Acción:</th>
        </tr>
        
    @foreach ($materiales as $key => $material)
    @if ($material->area == 'Clinicos')
    @if ($material->bioquimica == 'bioquimica')
    <tr>
        <td>{{ $material->nombre }}</td>
        <td>{{ $material->descripcion }}</td>
        <td>
            <a class="btn btn-success btn-pedidos" data-toggle="modal" data-target="#modal-pedidos" data-id="{{ $material->id }}" data-seccion="bioquimica">Solicitar Material</a>
            <a class="btn btn-info" href="{{ route('historialeslab.historialbioquimicalab',$material->id) }}">Historial</a>
        
        </td>
    </tr>
    @endif
    @endif
     @endforeach
    
    </table>

     <a class="btn btn-primary btn-varios" data-toggle="modal" data-target="#modal-existencia" data-seccion="bioquimica">Varios</a>   
    <hr>

        <h4><strong> Hormonas(6) </strong></h4>
      
    <table class="table table-bordered">
        <tr class="tabla1">
            <th>Nombre del material:</th>
            <th>Descripción:</th>
            <th>Acción:</th>
        </tr>
        
    @foreach ($materiales as $key => $material)
    @if ($material->area == 'Clinicos')
    @if ($material->hormonas == 'hormonas')
    <tr>
        <td>{{ $material->nombre }}</td>
        <td>{{ $material->descripcion }}</td>
        <td>
            <a class="btn btn-success btn-pedidos" data-toggle="modal" data-target="#modal-pedidos" data-id="{{ $material->id }}" data-seccion="hormonas">Solicitar Material</a>  

            <a class="btn btn-info" href="{{ route('historialeslab.historialhormonaslab',$material->id) }}">Historial</a>
        
        </td>
    </tr>
    @endif
    @endif
     @endforeach
    
    </table>
    <a class="btn btn-primary btn-varios" data-toggle="modal" data-target="#modal-existencia" data-seccion="hormonas">Varios</a>   
    <hr>

@endif

<script>
$(document).ready(function(){
    $(".btn-pedidos").click(function() {
        var id = $(this).data('id');
        var seccion = $(this).data('seccion');

        $('#cantidad').val($('#value-' + id).html());
        $('#materia_id').val(id);
        $('#seccion').val(seccion);
    });

    $("#form-pedidos").submit(function() {
        var action = $("#form-pedidos").attr('action');

        var token =  $("#form-pedidos").find('input[name="_token"]').val();
        var cantidad = $("#cantidad").val();
        var materia_id = $("#materia_id").val();
        var seccion = $("#seccion").val();



        $.post( action, { _token: token, cantidad: cantidad, materia_id: materia_id, seccion: seccion })
          .done(function( data ) {
            console.log(data);
            $('#value-' + data.id).html(data.cantidad);
            $('#modal-pedidos').modal('hide');
          });

        return false;
    });
});
</script>


<script>
$(document).ready(function(){
    $(".btn-varios").click(function() {
        var seccion = $(this).data('seccion');

        $('#seccion').val(seccion);
    });
});
</script>
</div>
@endsection