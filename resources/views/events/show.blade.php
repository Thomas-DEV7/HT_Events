@extends('layouts.main')
    @section('title', 'Titulo')
    @section('content')
    <hr>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<style>
    .align{
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .small{
        font-size: 10px;
        font-weight: 700;
        
    }
    .body{
        padding: 50px;
        padding-bottom: 100px;
    }
    img.img-fluid{
        border-radius: 30px;
        border: 3px solid #000;
    }
    .event-desc{
        margin: 20px;
    }
    .btn-primary, a.btn-primary{
        background-color: #f2a340;
        border: 1px solid #C28008;
    }
    .btn-primary, a.btn-primary:hover{
        background-color: #C28008;
        border: 1px solid #C28008;
    }
</style>

    <div class="col-md-10 offset-md1 body">
        <div class="row">
            <div class="col-md6" id="image-container">
                <img src="{{$event->image}}" width="500" class="img-fluid" alt="">
            </div>
            <div class="col-md-6" id="info-container">
                <h1 class="align"><ion-icon name="globe-outline"></ion-icon> {{$event->name}}</h1>
                    
                <p class="event-city align"><ion-icon name="location-outline"></ion-icon>{{$event->city}}</p>
                <p class="event-private align">
                    @if($event->private == 0)
                        <ion-icon name="eye-outline"></ion-icon> Evento público
                    @else
                    <ion-icon name="eye-off-outline"></ion-icon> Evento privado
                    @endif
                </p>
                <p><ion-icon name="star-outline"></ion-icon> Dono</p>
                <p class="small">Publicação: {{$event->created_at}}</p>
                @if($event->updated_at != null)
                <p class="small">alterado: {{$event->updated_at}}</p>
                @else
                <p></p>
                @endif
                <a href="#" class="btn btn-primary">Confirmar presença</a>
            </div>
        </div>
        <p class="event-desc align"><ion-icon name="arrow-forward-outline"></ion-icon><b>Sobre o evento:</b></p> <p>{{$event->description}}</p>
    </div>
    
@endsection