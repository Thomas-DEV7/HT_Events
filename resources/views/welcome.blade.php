<!-- componentizando o header -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela inicial</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>

<body>
    <p>aaa</p>
    @extends('layouts.header')
    @section('content')
    @endsection

    @foreach($events as $e)
        <p><b>Nome do evento:</b>{{$e->name}}</p><p><b>Descrição:</b>{{$e->description}} <hr></p>
    @endforeach
</body>

</html>