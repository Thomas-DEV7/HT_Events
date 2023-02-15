<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Page In Laravel</title>
        <!-- Styles -->
        <style>
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>alguma coisa</h1>
        <p>{{ $nome }}</p>
        @if($nome == "Matheus")
            <p>O nome é {{$nome}} e tem {{$idade}} anos, nascido em {{abs($idade - 2023)}}</p>
            <!-- abs() transforma negativo em positivo -->

        @else
            <p>não é matheus</p>
        @endif
        <!-- learn conditionals -->

        @for($i = 0; $i< count($arr); $i++)
            <p>{{$arr[$i]}}-{{$i}}</p> 
            @if($i==2)
                <p>O valor de i é: {{$i}}</p>
            @endif
        @endfor

        <!-- foreach w/ array -->
        <!-- abrindo um php -->
        @php
            $name = "Thomas";
            echo $name;
        @endphp
    </body>
</html>
