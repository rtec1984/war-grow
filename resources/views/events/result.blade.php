@extends('layouts.main')

@section('title', 'WAR - PARTIDA Nº '. $event->id . ' - ' . date('d/m/Y', strtotime($event->date)))

@section('content')

<div style="margin-top: 2rem;" id="cards-container" class="row">
  <div class="card col-auto">
    <div class="card-body2">
      <p class="card-date">
        <ion-icon name="dice"></ion-icon> PARTIDA Nº {{ $event->id }} <ion-icon name="calendar"></ion-icon> {{
        date('d/m/Y',
        strtotime($event->date)) }}
      </p>
      <p class="card-date">
        <ion-icon name="trophy"></ion-icon> {{ ($event->victory) }} PONTOS <ion-icon name="star-outline"></ion-icon> {{
        $eventOwner['name'] }}
      </p>
      <p class="card-date">
        <ion-icon name="people"></ion-icon> {{ count($event->users) }} PARTICIPANTES
      </p>
      @foreach($event->users as $name)
      <p class="card-date">
        <ion-icon name="person"></ion-icon> {{ $name->name }}
      </p>
      @endforeach
      @if(count($event->users)<($event->players)) @if(!$hasUserJoined) <form action="/events/join/{{ $event->id }}" method="POST">
        @csrf
        <a href="/events/join/{{ $event->id }}" class="btn btn-primary" id="event-submit" onclick="event.preventDefault();
                this.closest('form').submit();">
          Confirmar participação
        </a>
        </form>
        @else
        <p class="msg">Você já está participando deste resultado!</p>
        @endif
        @else
        <p class="msg">Limite de participantes atingido!</p>
        @endif
    </div>
  </div>
</div>

@endsection