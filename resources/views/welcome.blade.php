@extends('layouts.main')

@section('title', 'WAR')

@section('content')

<img src="https://rtec84.s3.amazonaws.com/wg/war-grow.png" class="img-fluid" alt="Imagem responsiva" style="padding: 0.5rem; max-width: 1276px;">
<div id="events-container" class="col-auto">
    <h2>Últimos resultados...</h2>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-auto">
            <div class="card-body">
                <p class="card-date"><ion-icon name="dice"></ion-icon> {{ $event->partida }} <ion-icon name="calendar"></ion-icon> {{ date('d/m/Y', strtotime($event->date)) }}</p>
                <p class="card-date"><ion-icon name="trophy"></ion-icon> {{ ($event->vitoria) }} <ion-icon name="star-outline"></ion-icon> {{ $event->vencedor }}</p>
                <p class="card-date"><ion-icon name="people"></ion-icon> {{ count($event->users) }} PARTICIPANTES</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary btn-sm">Detalhes</a>
            </div>
        </div>
        @endforeach
        @if(count($events) == 0)
            <h2>Não há resultados disponíveis!</h2>
        @endif
    </div>
</div>

@endsection