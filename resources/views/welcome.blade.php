<!-- componentizando o header -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela inicial</title>
    <!-- <link rel="stylesheet" href="/public/css/style.css"> -->
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/9/92/Random_Encounters_%22RE%22_logo.png" type="image/x-icon">
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        min-height: 100vh;
            position: relative;
    }
    header{
        background-color: #fff;
        border-bottom: 1px solid #CCC;
    }
    .row{
        margin: 0;
    }
    .container-fluid{
        padding: 0;
    }
    .btn-primary, a.btn-primary{
        background-color: #f2a340;
        border: 1px solid #C28008;
    }
    .btn-primary, a.btn-primary:hover{
        background-color: #C28008;
        border: 1px solid #C28008;
    }
    #navbar{
        justify-content: space-between;
    }
    #navbar a{
        font-size: 15px;
        color: 757575;
    }
    #navbar a:hover{
        color: #C28008;
    }
    #search-container{
        background-image: url('https://static.vecteezy.com/ti/vetor-gratis/p3/1849553-fundo-ouro-moderno-gratis-vetor.jpg');
        background-size: cover;
        background-position: center;
        height: 400px;
        padding: 50px;
        text-align: center;
        margin-top: 30px;
    }
    #search-container h1{
        color: #f2a340;
        margin-bottom: 30px;
        font-weight: bolder;
    }
    #search-container form{
        width: 60%;
        margin: 0 auto;
    }
    #events-container{
        padding: 50px;
        
    }
    #events-container h2{
        margin-bottom: 10px;
    }
    #events-container .subtitle{
        color: #757575;
        margin-bottom: 30px;
    }
    .cards-container{
        display: flex;
        flex-direction: row;
    }
    #events-container .card{
        flex: 1 1 24%;
        max-width: 25%;
        margin: .5%;
    }
    #event-container .card img{
        max-height: 150px;
        width: 100%;
    }
    .card .card-dsc{
        font-size: 12px;
        color: #C28008;
    }
    .card .card-title{
        color: #212121;
        font-size: 20px;
        margin-bottom: 20px;
    }
    .card .card-participants{
        font-size: 12;
        color: #757575;
    }
</style>
<body>
    @extends('layouts.main')
    @section('title', 'inicial')
    @section('content')
    <div class="col-md-12" id="search-container">
        <h1>Busque um evento</h1>
        <form action="">
        <input type="text" id="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos eventos</h2>
        <p class="subtitle">Veja os próximos eventos</p>
        <div id="cards-container" class="row">
            @foreach($events as $e)
            <div class="card col-md-3">
                <img src="{{$e->image}}" height="150" alt="{{$e->title}}">
                <div class="card-body">
                    
                    <div class="card-title">
                        {{$e->name}}
                    </div>
                    <div class="card-dsc">
                        {{$e->description}}
                    </div>
                    <div class="card-participants">
                        {{$e->parts}} participantes<br>
                        <b>
                        @if($e->private == 0)
                        Aberto ao público
                        @else
                        Evento Privado
                        @endif
                        </b>
                    </div>
                    <a href="/events/{{$e->id}}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection
</body>

</html>