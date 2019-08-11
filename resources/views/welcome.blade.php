<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Repositorio Quero UTS</title>

        <!-- Fonts -->

        <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: #0F2027;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #2C5364, #203A43, #0F2027); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                height: 100vh;
                margin: 0;
            }

            #logoUts{
                background-image: url('https://i.imgur.com/2gueO7g.png');
                background-repeat: no-repeat;
                background-position: 50% 25%;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                padding: 0 25px;
                font-size: 13px;
                letter-spacing: .1rem;
                text-decoration: none;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="logoUts">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                     <a class="text-gray-500" href="{{ route('publications.index') }}">IR AL SISTEMA</a>
                    @else
                        <a class="text-gray-500" href="{{ route('login') }}">Entrar</a>

                        @if (Route::has('register'))
                            <a class="text-gray-500" href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content" >
                <div class="h-64 w-full flex items-center justify-center">

                    <div>
                        <h1 class="text-xl mb-5 font-semibold text-gray-300" >Explora y busca en todas las publicaciones de nuestra universidad </h1>
                        <form method="GET" action="{{ route('publications.index') }}">
                            <input id="q" name="q" class="bg-white text-green-900 text-center text-xl outline-none focus:shadow-outline border border-teal-100 rounded-full py-2 px-4 block w-full appearance-none leading-normal" type="text" placeholder="Introduce tu tema de Interés" value="{{ old('q') }}">
                        </form>
                    </div>
                </div>

                <div class="links mt-10 text-gray-500">
                    <a href="http://www.utsbarquisimeto.edu.ve/">Web</a>
                    <a href="#">Privacidad</a>
                    <a href="#">Ayuda</a>
                    <a href="http://saia.uts.edu.ve/moodle/login/index.php">SAIA</a>
                    <a href="http://www.utsbarquisimeto.edu.ve/paginas/contacto.html">Contáctanos</a>
                </div>
                <div class="links mt-5">
                    <p class="text-gray-500"> &copy; UTS BARQUISIMETO - 2019</p>
                </div>                
            </div>
        </div>
    </body>
</html>
