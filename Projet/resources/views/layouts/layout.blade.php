<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="css/basket.css">

        <title>
            @yield('titrePage')
        </title>
    </head>
    <body>
        <nav class="navbar navbar-expend-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/')}}">Club2Basket</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-link" href="{{url('/clubs')}}">Les Clubs</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('/equipes')}}">Les Équipes</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('/adherents')}}">Les Joueurs</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('/tournois')}}">Les Tournois</a>
                        </li>

                        <li class="nav-item dropdown">
                            @auth
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Bienvenue, {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            @else
                                <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
                            @endauth                            
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header>
            @yield('titreItem')
        </header>
        @yield('contenu')
        <footer class="footer">
            Club2Basket - copyright 3AInfo - 2021
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>