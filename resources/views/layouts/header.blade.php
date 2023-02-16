<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') Layout</title>
        <!-- Styles -->
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
            }
            header{
                background-color: black;
                color: white;
                display: flex;
                justify-content: space-between;
                padding: 30px;
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
            <h1>LOGO</h1>
            <h2>Login</h2>
        </header>

        <!-- @yield('footer')
        <footer>
            <p>Thomas &copy; 2023</p>
        </footer> -->
    </body>
</html>

