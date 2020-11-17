<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token  config('app.name', 'Laravel')  -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('No Localizados') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #e3f2fd;">
            <!--class="navbar navbar-light" style="background-color: #e3f2fd;"-->
            <div class="container">
                <img src="http://fiscaliaguerrero.gob.mx/wp-content/uploads/2018/07/LOG.png" width="90" height="90">
                <div style="display: inline-block;">
                    <h3 style="color: #014799; font-weight: 1000;">FISCALÍA GENERAL</h3>
                    <h4 style="color: #014799; font-weight: bold;">DEL ESTADO DE GUERRERO</h4>
                </div>
                <!--<a class="navbar-brand" href="{{ url('/') }}">{{ __(' No Localizados ') }}</a>-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url ('datosregistros') }}">{{ __('Datos Registro') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url ('datosdesaparecidos') }}">{{ __('Datos Generales') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url ('datosreportantes') }}">{{ __('Datos Reportante') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('Domicilio') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">{{ __('Fotografias') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('Media Filiación') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">{{ __('Salir') }}</a>
                </li>
            </ul>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<br><br><br>
<footer>
    <div class="card-footer text-muted" style="background-color: #4254b5;">
        <div>
            <div class="row">
                <div>
                    <br>
                    <a href="https://fiscaliaguerrero.gob.mx/"><img src="http://fiscaliaguerrero.gob.mx/wp-content/uploads/2018/07/LOG.png" width="100" height="100"></a> </div>
                <div class="card-body">
                    <div class="card-title" style="color:#000000; font-family:fantasy">
                        <h2>Acerca de nosotros</h2>
                    </div>

                    <span class="text-white">Boulevard René Juárez Cisneros S/N Colonia El Potrerito C. P. 39090
                        Chilpancingo de los Bravo, Guerrero. <br>
                        Conmutador 01 (747) 494 2999 - Teléfono para denuncias 01 800 832 7692
                        <br><a href="https://fiscaliaguerrero.gob.mx/aviso-de-privacidad-integral/">
                            <span style="color:yellow">Aviso de Privacidad</span></a></span>
                </div>
                <div class="card-body">
                    <div class="card-title" style="color:#000000; font-family:fantasy">
                        <h2>Síguenos</h2>
                    </div>
                    <a href="https://www.facebook.com/fiscaliaguerrero/"><img src="https://cdn.iconscout.com/icon/free/png-256/facebook-social-media-fb-logo-square-44659.png" width="50" height="50"></a>
                    <a href="https://twitter.com/FGEGuerrero"><img src="https://cdn3.iconfinder.com/data/icons/iconano-social/512/198-Twitter-512.png" width="50" height="50"></a>
                    <a href="https://www.instagram.com/fgeguerrero/"><img src="https://i1.wp.com/alesteplaza.es/wp-content/uploads/2017/05/instagram-logo-1.png?ssl=1" width="50" height="50"></a>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>