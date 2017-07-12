@extends('layouts.app')
@include('layouts._header')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Salida</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('inventarioMatrizClinica.index') }}"> Atrás</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Tuviste un error escribiendo algo :( .<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'SalidaMatrizController.agregaSalida','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cantidad:</strong>
                {!! Form::text('cantidad', null, array('placeholder' => '10','class' => 'form-control')) !!}
            </div>
        </div>
        
       
     </div>

     <div>

            <label for="users">Sucursal:</label>

            <div>

             <select id="users" name="User_id" required>

                      @foreach ($users as $user)
                      @if ($user->id>=5)

                        <option value='{{ $users->id }}'>{{ $users->name }}</option>

                        @endif
                       @endforeach
            </select>

            </div>

        </div>
       
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salida</button>
        </div>
    </div>
    </div>
    {!! Form::close() !!}
@endsection
@include('layouts._footer')
