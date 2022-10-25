@extends('layouts.main')

@section('title', 'WAR')

@section('content')

<img src="https://rtec84.s3.amazonaws.com/wg/war-grow.png" class="img-fluid" alt="Imagem responsiva" style="padding: 0.5rem; max-width: 957px;">
<div id="events-container" class="col-md-6">
    <div id="cards-container" class="row" style="margin-bottom: 3rem;">
        @foreach($events as $event)
        <div class="card col-auto">
            <a href="/events/{{ $event->id }}" style="text-decoration: none;">
            <div class="card-body">
                @if(count($event->users)<($event->players))
                <p class="msg2"><ion-icon name='warning-outline'></ion-icon> &nbsp;INCOMPLETA</p>
                @else
                <p class="msg1"><ion-icon name='checkbox-outline'></ion-icon> &nbsp;COMPLETA</p>
                @endif
                <p class="card-game"><ion-icon name="dice"></ion-icon> &nbsp;PARTIDA Nº {{ $event->id }}</p>
                <p class="card-game"><ion-icon name="calendar"></ion-icon> &nbsp;{{ date('d/m/Y', strtotime($event->date)) }}</p>
                <p class="card-game"><ion-icon name="trophy"></ion-icon> &nbsp;{{ ($event->victory) }} PONTOS</p>
                <p class="card-game"><ion-icon name="people"></ion-icon> &nbsp;{{ ($event->players) }} JOGADORES</p>
            </div>
        </a>
        </div>

        @endforeach
        @if(count($events) == 0)
            <h4>Não há resultados disponíveis!</h4>
        @endif
    </div>
    <br>
    <br>
</div>

@endsection