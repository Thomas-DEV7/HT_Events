@extends('layouts.main')
@section('title', 'criar evento')
@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Nome do evento:</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea type="text" id="dsc" name="dsc" class="form-control" placeholder="O que vai acontecer?">
        </div>
        <div class="form-group">
            <label for="title">city</label>
            <input type="text" id="city" name="city" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Privado?</label>
            <select id="private" name="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Envia</button>
    </form>
</div>
@endsection