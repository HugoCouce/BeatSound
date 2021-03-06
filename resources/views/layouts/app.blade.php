<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<div id="container">
    <div id="header">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>
            <script src="{{ asset('js/main.js') }}"></script>

            <!-- Fonts -->
            

            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
        </head>
    </div>

    <div id="body">
        <body>
            <div id="app">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
                        <a class="navbar-brand" href="/"><img src="{{URL::asset('/images/BeatSoundLogo.png')}}" alt="logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav text-uppercase ms-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Inicio</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Productos
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('/product/buy') }}">Todos los productos</a>
                                        <a class="dropdown-item" href="{{ url('/product/buy/vinyl') }}">Vinilos</a>
                                        <a class="dropdown-item" href="{{ url('/product/buy/cd') }}">CD??s</a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="navbar-nav text-uppercase ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Acceso') }}</a>
                                </li>
                                @endif

                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                                @endif
                                @else
                                <li class="nav-item dropdown">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/order/create') }}">Carrito (<?php
                                                                                                    echo (empty($_SESSION['carrito'])) ? 0 : count($_SESSION['carrito']);
                                                                                                    ?>)</a>
                                </li>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombre }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                                    @if (Auth::user()->administrador==1)
                                    <a class="dropdown-item" href="{{ url('/user') }}">
                                        {{ __('Gestionar cuentas') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ url('/product') }}">
                                        {{ __('Gestionar productos') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ url('/order') }}">
                                        {{ __('Gestionar pedidos') }}
                                    </a>

                                    @else
                                    <a class="dropdown-item" href="{{ url('/user/'.Auth::user()->user_dni.'/edit') }}">
                                        {{ __('Editar datos') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/order/customer/'.Auth::user()->user_dni) }}">
                                        {{ __('Ver pedidos') }}
                                    </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesi??n') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </nav>
                </div><br><br>
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </body>
    </div>
    
    <div id="footer">
        <footer>
            @include('footer')
        </footer>
    </div>
</div>

</html>