<title>Criar evento</title>
<style>
    *{
        margin: 0;
        padding:0 ;
    }
    .title{
        text-align: center;

    }
    form{
        padding: 20px;
        border: 2px solid #f2a340;
        border-radius: 10px;
    }
    form button.btn{
        width: 200px;
        background-color: #f2a340;
        border: 1px solid #C28008;
    }
    form button.btn:hover{
        background-color: #C28008;
        border: 1px solid #C28008;
    }
    #event-create-container{
        margin-bottom: 50px;
    }
</style>
<body>
    
@extends('layouts.main')
@section('title', 'criar evento')
@section('content')

<hr>
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1 class="title">Crie seu evento</h1>
    <form action="/events" method="get" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Escolha uma imagem:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Nome do evento:</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea type="text" id="description" name="description" class="form-control" placeholder="O que vai acontecer?"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Local:</label>
            <input type="text" id="city" name="city" class="form-control" placeholder="ex: Cidade - SP">
        </div>
        <div class="form-group">
            <label for="title">Participantes:</label>
            <input type="text" id="parts" name="parts" class="form-control" placeholder="999">
        </div>
        <div class="form-group">
            <label for="title">Privado?</label>
            <select id="private" name="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
</body>