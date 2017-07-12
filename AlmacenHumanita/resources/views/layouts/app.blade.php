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
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger 
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    -->
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Almacén Humanitá
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
                            <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                            
                        @elseif(Auth::user())
                        @if (Auth::user()->can('admin-admin-clinica'))
                        <li class="dropdown">
                      
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Inventario Clínica <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                    <li>

                                        <a href="{{ route('inventarioMatrizClinica.index') }}">
                                            Toma de Muestras  
                                        </a>

                                        <a href="{{ route('inventarioMatrizClinica.indexclinicos') }}">
                                            Clínicos   
                                        </a>

                                    </li>

                            </ul>
                        </li>
                        @endif
                        @if (Auth::user()->can('drop-admin'))

                        <li class="dropdown">
                      
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Administración <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                    <li>
                                        @if (Auth::user()->can('admin-users'))
                                        <a href="{{ route('users.index') }}">
                                            Administrar Sucursales   
                                        </a>
                                        @endif
                                        @if (Auth::user()->can('admin-clinica'))
                                        <a href="{{ route('materialClinica.index') }}">
                                            Administrar Materiales Clínica   
                                        </a>
                                        @endif
                                        @if (Auth::user()->can('admin-papelera'))
                                        <a href="{{ route('materialPapelera.index') }}">
                                            Administrar Materiales Papelería  
                                        </a>
                                        @endif 
                                        @if (Auth::user()->can('admin-proveedores'))
                                        <a href="{{ route('proveedor.index') }}">
                                            Administrar Proveedores  
                                        </a>
                                        @endif
                                    </li>

                            </ul>
                        </li>
                        @endif
                        @if (Auth::user()->can('drop-admin'))
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Administración De Cuentas<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                    <li>
                                        @if (Auth::user()->can('admin-admin'))
                                        <a href="{{ route('root.index') }}">
                                            Cuenta Administrador   
                                        </a>  
                                        @endif
                                        @if (Auth::user()->can('admin-admin-clinica'))
                                        <a href="{{ route('almacenclinica.index') }}">
                                            Almacenista de Clínica   
                                        </a> 
                                        @endif
                                        @if (Auth::user()->can('admin-admin-papelera'))
                                        <a href="{{ route('almacenpapeleria.index') }}">
                                            Almacenista de Papelería  
                                        </a> 
                                        @endif
                                        @if (Auth::user()->can('admin-laboratorio'))
                                        <a href="{{ route('adminlab.index') }}">
                                            Adminstrar Laboratorio  
                                        </a> 
                                        @endif

                                    </li>
                                    
                            </ul>
                        </li>
                        @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesión   
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


