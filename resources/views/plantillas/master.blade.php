<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Clase DWCS - 2021-2022">
    <meta name="generator" content="">
    @yield('title')
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-fixed/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="shortcut icon" type="image/png" href="{{ asset('storage/iconos/logo.jpg') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('storage/iconos/logo.jpg') }}">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <meta name="theme-color" content="#7952b3">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (max-width: 768px) {
            body {
                background-color: #f3f4f6;
            }
            .esp {
                margin-left: 7px;
            }
        }

        @media (max-width: 500px) {
            img {
                width: 40px;
                height: 30px;
            }
        }
        @media (min-width: 500px) {
            img {
                width: 80px;
                height: 70px;
            }
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        body {
            min-height: 75rem;
            padding-top: 4.5rem;
        }
    </style>
    @yield('otherstyles')
</head>

<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://mydmoproject.freeddns.org">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse,#navbarCollapse2" aria-controls="navbarCollapse, navbarCollapse2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Listados
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li class="nav-item">
                                <a class="nav-link active esp" aria-current="page" href="{{ route('digimon.index') }}">Lista de Digimon</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active esp" aria-current="page" href="{{ route('digimon.atributos') }}">Atributos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active esp" aria-current="page" href="{{ route('digimon.tipos') }}">Tipos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active esp" aria-current="page" href="{{ route('digimon.familias') }}">Familias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active esp" aria-current="page" href="{{ route('digimon.rangos') }}">Rangos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active esp" aria-current="page" href="{{ route('tamer.index') }}">Lista de Tamers</a>
                            </li>
                        </ul>
                    </li>
                    @auth 
                    @if(Auth::user()->isadmin === 1) 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Registrar
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li class="nav-item">
                                <a class="nav-link active esp" href="{{ route('digimon.create') }}">Registrar Digimon</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active esp" href="{{ route('tamer.create') }}">Registrar Tamer</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @endauth 
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('digimon.comparador') }}">Digicomparador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('digimon.api') }}">APIREST</a>
                    </li>
                </ul>
                <div class="collapse navbar-collapse" id="navbarCollapse2">
                    <ul class="navbar-nav ms-auto">
                        @auth
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('profile.show') }}">{{ Auth::user()->username }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('register') }}">Registrarse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('login') }}">Conectarse</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="bg-light p-5 rounded">
            @yield('corpse')
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-dark text-white">
        <div class="container">
            <span class="text-muted"><a href="https://dmo.gameking.com/Main/Main.aspx">Página Oficial del juego</a>  |  Proyecto creado sin ánimo de lucro | mydmoproject.freeddns.org | Daniel Fernández </span>
        </div>
    </footer>

    <form method="POST" id="logout-form" action="{{ route('logout') }}">
        @csrf
    </form>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>