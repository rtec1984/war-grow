@extends('layouts.main')

@section('title', 'WAR')

@section('content')

<img src="https://rtec84.s3.amazonaws.com/wg/war-grow.png" class="img-fluid" alt="Imagem responsiva" style="padding: 0.5rem; max-width: 957px;">
<div id="events-container" class="col-md-10">
    <h2>Os dez últimos resultados...</h2>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-auto">
            <div class="card-body">
                <p class="card-date"><ion-icon name="dice"></ion-icon> PARTIDA Nº {{ $event->id }}</p>
                <p class="card-date"><ion-icon name="calendar"></ion-icon> {{ date('d/m/Y', strtotime($event->date)) }}</p>
                <p class="card-date"><ion-icon name="trophy"></ion-icon> {{ ($event->vitoria) }} PONTOS</p>
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