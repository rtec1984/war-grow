@extends('layouts.main')

@section('title', 'WAR')

@section('content')

<img src="https://rtec84.s3.amazonaws.com/wg/war-grow.png" class="img-fluid" alt="Imagem responsiva" style="padding: 0.5rem; max-width: 957px;">
<div id="events-container" class="col-md-6">
    <h4>Últimos resultados...</h4>
    <div id="cards-container" class="row" style="margin-bottom: 3rem;">
        @foreach($events as $event)
        <div class="card col-auto">
            <div class="card-body">
                @if(count($event->users)<($event->players))
                <p class="msg2"><ion-icon name='warning-outline'></ion-icon> INCOMPLETA</p>
                @else
                <p class="msg1"><ion-icon name='checkbox-outline'></ion-icon> COMPLETA</p>
                @endif
                <p class="card-date"><ion-icon name="dice"></ion-icon> PARTIDA Nº {{ $event->id }}</p>
                <p class="card-date"><ion-icon name="calendar"></ion-icon> {{ date('d/m/Y', strtotime($event->date)) }}</p>
                <p class="card-date"><ion-icon name="trophy"></ion-icon> {{ ($event->victory) }} PONTOS</p>
                <p class="card-date"><ion-icon name="people"></ion-icon> {{ ($event->players) }} PARTICIPANTES</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary btn-sm"><ion-icon name='eye-outline'style="font-size: 1.5rem;"></ion-icon></a>
            </div>
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