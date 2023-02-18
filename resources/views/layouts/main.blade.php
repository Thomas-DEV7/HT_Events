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
            div#flex{
                display: flex;
            }
            footer{
                text-align: center;
                background-color: #353533;
                color: #fff;
                padding: 50px;
                
            }
        </style>
    </head>
    <body>
        <!-- componentizando o header -->
        
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <div id="flex" class="">
                    <a href="/" class="navbar-brand">
                        <img height="70" width="90" src="https://cdn.freebiesupply.com/logos/large/2x/random-logo-png-transparent.png" alt="">
                    </a>
                    </div>
                    <div id="flex">
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
                    
                </div>
            </nav>
        </header>
        @yield('content')
        <footer>Ht Eventos &copy; 2023 | Contrate (11)98899-0121</footer>
    </body>
</html>

