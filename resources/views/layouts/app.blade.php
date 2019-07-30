<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <style>

    .card {
        background-color: #FFFFFF;
        -webkit-box-shadow: 0 2px 4px 0 rgba(0,0,0,.05);
        box-shadow: 0 2px 4px 0 rgba(0,0,0,.05);
        border-radius: .5rem;
    }
    .bg-body{
        background-color: #EEF1F4;
    }
    .text-90 {
        color: #3c4b5f;
    }
    .text-80 {
        color: #7c858e;
    }
    .text-black {
        color: #22292f;
    }

    </style>
</head>
<body class="bg-body h-full font-sans antialiased ">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-gray-800 shadow-sm text-gray-100">
            <div class="container">
                <a class="text-gray-100 text-semibold no-underline hover:no-underline hover:text-teal-300" href="{{ url('/') }}">
                    UTS-REPOSITORIO
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mx-10">              
                        <li class="nav-item active">
                            <a class="text-gray-200 text-semibold no-underline hover:no-underline hover:text-teal-300 mx-2" href="{{ route('publications.index') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-gray-200 text-semibold no-underline hover:no-underline hover:text-teal-300 mx-2" href="{{ route('publications.index') }}">Publicaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-gray-200 text-semibold no-underline hover:no-underline hover:text-teal-300 mx-2" href="{{ route('mentors.index') }}">Tutores</a>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->

                    <form method="GET" action="{{ route('publications.index') }}" class="form-inline w-full mx-10 text-center">
                            <input id="q" name="q" class="w-1/2 bg-white text-green-900 text-left outline-none focus:shadow-outline border border-teal-100 rounded-full py-1 px-4 block appearance-none leading-normal" type="search" placeholder="Buscar una publicación" aria-label="Buscar una publicación">
                    </form>

                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="text-gray-100  text-semibold no-underline hover:no-underline hover:text-teal-300" href="{{ route('login') }}">Entrar</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item ml-4">
                                    <a class="text-gray-100  text-semibold no-underline hover:no-underline hover:text-teal-300" href="{{ route('register') }}">Registrarse</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown text-gray-100">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>

        <footer class='text-gray-500 w-full text-center border-t border-grey p-4 pin-b'>
            &copy; UTS BARQUISIMETO - 2019 
        </footer>
    </div>
</body>
</html>
