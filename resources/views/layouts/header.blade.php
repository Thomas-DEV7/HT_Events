<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>@yield('title') Layout</title>
        <!-- Styles -->
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
            }
            h2{
                background-color: steelblue;
                padding: 10px;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <!-- componentizando o header -->
        @yield('content')
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img height="50" width="50" src="../../img/logoTh.png" alt="">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a href="" class="nav-link">Eventos</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a href="" class="nav-link"> Criar eventos</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a href="" class="nav-link">Entrar</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a href="" class="nav-link">cadastrar </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- @yield('footer')
        <footer>
            <p>Thomas &copy; 2023</p>
        </footer> -->
    </body>
</html>

