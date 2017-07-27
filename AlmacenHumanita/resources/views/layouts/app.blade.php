<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Almacen Humanita</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colores.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery2.2.5.min.js') }}"></script>
</head>
<body bgcolor="#C5F2E7">
    <div id="app">

        <nav class="navbar navbar-default navbar-static-top navVK">
            <div class="container">
                <div class="navbar-header">

                    <a class="navbar-brand" href="{{ url('/') }}">
                         <img src = "/images/logotrans.png" class = "img-rounded" width="120" height="59">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())


                            <li><a href="{{ route('login') }}" class="efecto-drop"><p> Iniciar Sesión </p></a></li>
                            
                        @elseif(Auth::user())

                            @if (Auth::user()->can('admin-laboratorio'))
                                        <li><a href="{{ route('pendientesSucursal.pendienteLab') }}" class="efecto-drop"><p><strong> Pedidos </strong></p></a></li>
                        @endif

                        @if (Auth::user()->can('admin-sucrusal'))

                                                <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <p> <strong>   Inventarios </strong><span class="caret"> </p></span>
                            </a>

                            <ul class="dropdown-menu dropd" role="menu">
                                    <li>

                                        <a href="{{ route('inventarios.inventario') }}" class="efecto-drop">
                                          <p>  Tomas de Muestra </p>  
                                        </a>  

                                        <a href="{{ route('inventarios.inventariopape') }}" class="efecto-drop">
                                          <p>  Papelería   </p>
                                        </a> 



                                    </li>
                                    
                            </ul>
                        </li>
                        @endif
<!-- Aqui kuri          -->


                        @if (Auth::user()->can('admin-sucrusal'))

                                                <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <p> <strong>   Pedidos </strong><span class="caret"> </p></span>
                            </a>

                            <ul class="dropdown-menu dropd" role="menu">
                                    <li>

                                        <a href="{{ route('pendientesSucursal.pendientesClinico') }}" class="efecto-drop">
                                          <p>  Tomas de Muestra </p>  
                                        </a>  

                                        <a href="{{ route('pendientesSucursal.pendientePape') }}" class="efecto-drop">
                                          <p>  Papelería   </p>
                                        </a> 



                                    </li>
                                    
                            </ul>
                        </li>
                        @endif


<!-- Aqui termina -->

                        @if (Auth::user()->can('drop-admin'))

                        <li class="dropdown">
                      
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                 <p> <strong>  Pedidos </strong> <span class="caret"> </p></span>
                            </a>

                            <ul class="dropdown-menu dropd" role="menu">
                                    <li>
                                        @if (Auth::user()->can('admin-clinica'))
                                        <a href="{{ route('pendientesAdmin.pendienteClinico') }}" class="efecto-drop">
                                          <p>  Pedidos de Sucursales  </p> 
                                        </a>
                                        @endif
                                        @if (Auth::user()->can('admin-clinica'))
                                        <a href="{{ route('pendientesAdmin.pendienteLab') }}" class="efecto-drop">
                                          <p>  Pedidos de Laboratorio  </p>
                                        </a>
                                        @endif 
                                        @if (Auth::user()->can('admin-papelera'))
                                        <a href="{{ route('pendientesAdmin.pendientePapeleria') }}" class="efecto-drop">
                                          <p>  Pedidos Papelería  </p>
                                        </a>
                                        @endif
                                    </li>

                            </ul>
                        </li>
                        @endif


                        @if (Auth::user()->can('admin-admin-papelera'))

                            <li class="dropdown">
                      
                            <a href="#" class="dropdown-toggle click" data-toggle="dropdown" role="button" aria-expanded="false">   
                            
                                   <p><strong> Inventario Papelería </strong> <span class="caret"></p></span>
                            </a>

                            <ul class="dropdown-menu dropd" role="menu">
                                    <li>

                                        <a href="{{ route('inventarioMatrizPapeleria.index1') }}" class="efecto-drop">
                                           <p> Papeleria  </p>
                                        </a>

                                        <a href="{{ route('inventarioMatrizPapeleria.index2') }}" class="efecto-drop">
                                         <p>   Limpieza  </p>
                                        </a>

                                        <a href="{{ route('inventarioMatrizPapeleria.index3') }}" class="efecto-drop">
                                          <p>  Cafetería </p> 
                                        </a>

                                        <a href="{{ route('inventarioMatrizPapeleria.index4') }}" class="efecto-drop">
                                          <p>  Impresos  </p>
                                        </a>

                                        <a href="{{ route('inventarioMatrizPapeleria.index5') }}" class="efecto-drop">
                                          <p>  Rayos X </p>
                                        </a>

                                        <a href="{{ route('inventarioMatrizPapeleria.index6') }}" class="efecto-drop">
                                          <p>  Otros  </p>
                                        </a>


                                    </li>

                            </ul>
                        </li>

                         @endif
                        @if (Auth::user()->can('admin-admin-clinica'))
                        <li class="dropdown">

                      
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >
                                  <p> <strong> Inventario Clínica</strong> <span class="caret"></p></span>
                            </a>

                            <ul class="dropdown-menu dropd" role="menu">
                                    <li>

                                        <a href="{{ route('inventarioMatrizClinica.index') }}" class="efecto-drop">
                                         <p>   Toma de Muestras  </p>
                                        </a>

                                        <a href="{{ route('inventarioMatrizClinica.indexclinicos') }}" class="efecto-drop">
                                          <p>  Clínicos   </p>
                                        </a>

                                    </li>

                            </ul>
                        </li>
                        @endif
                        @if (Auth::user()->can('drop-admin'))

                        <li class="dropdown">
                      
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                 <p> <strong>  Administración </strong> <span class="caret"> </p></span>
                            </a>

                            <ul class="dropdown-menu dropd" role="menu">
                                    <li>
                                        @if (Auth::user()->can('admin-users'))
                                        <a href="{{ route('users.index') }}" class="efecto-drop">
                                          <p>  Administrar Sucursales  </p> 
                                        </a>
                                        @endif
                                        @if (Auth::user()->can('admin-clinica'))
                                        <a href="{{ route('materialClinica.index') }}" class="efecto-drop">
                                          <p>  Administrar Materiales Clínica  </p> 
                                        </a>
                                        @endif
                                        @if (Auth::user()->can('admin-papelera'))
                                        <a href="{{ route('materialPapelera.index') }}" class="efecto-drop">
                                          <p>  Administrar Materiales Papelería  </p>
                                        </a>
                                        @endif 
                                        @if (Auth::user()->can('admin-proveedores'))
                                        <a href="{{ route('proveedor.index') }}" class="efecto-drop">
                                          <p>  Administrar Proveedores  </p>
                                        </a>
                                        @endif
                                    </li>

                            </ul>
                        </li>
                        @endif
                        @if (Auth::user()->can('drop-admin'))
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <p> <strong>   Administración De Cuentas </strong><span class="caret"> </p></span>
                            </a>

                            <ul class="dropdown-menu dropd" role="menu">
                                    <li>
                                        @if (Auth::user()->can('admin-admin'))
                                        <a href="{{ route('root.index') }}" class="efecto-drop">
                                          <p>  Cuenta Administrador </p>  
                                        </a>  
                                        @endif
                                        @if (Auth::user()->can('admin-admin-clinica'))
                                        <a href="{{ route('almacenclinica.index') }}" class="efecto-drop">
                                          <p>  Almacenista de Clínica   </p>
                                        </a> 
                                        @endif
                                        @if (Auth::user()->can('admin-admin-papelera'))
                                        <a href="{{ route('almacenpapeleria.index') }}" class="efecto-drop">
                                          <p>  Almacenista de Papelería  </p>
                                        </a> 
                                        @endif
                                        @if (Auth::user()->can('admin-admin-laboratorio'))
                                        <a href="{{ route('adminlab.index') }}" class="efecto-drop">
                                         <p>   Adminstrar Laboratorio  </p>
                                        </a> 
                                        @endif

                                    </li>
                                    
                            </ul>
                        </li>
                        @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   <strong><p> {{ Auth::user()->name }} <span class="caret"> </p> </strong>
                                </a>

                                <ul class="dropdown-menu dropd" role="menu">
                                    <li>
                                        <a class="efecto-drop" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                         <p> <strong>  Cerrar Sesión </strong>  </p>

                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


