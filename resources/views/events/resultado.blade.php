@extends('layouts.main')

@section('title', $event->partida . ' - ' . date('d/m/Y', strtotime($event->date)))

@section('content')

<div id="cards-container" class="row">
  <div class="card col-md-3">
    <div class="card-body">
      <p class="card-date">
        <ion-icon name="dice"></ion-icon> {{ $event->partida }} <ion-icon name="calendar"></ion-icon> {{ date('d/m/Y',
        strtotime($event->date)) }}
      </p>
      <p class="card-date">
        <ion-icon name="trophy"></ion-icon> {{ ($event->vitoria) }} <ion-icon name="star-outline"></ion-icon> {{
        $event->vencedor }}
      </p>
      <p class="card-date">
        <ion-icon name="people"></ion-icon> {{ count($event->users) }} PARTICIPANTES
      </p>
        @foreach($event->users as $name)
          <p class="card-date"><ion-icon name="person"></ion-icon> {{ $name->name }}</p>
        @endforeach
      @if(!$hasUserJoined)
      <form action="/events/join/{{ $event->id }}" method="POST">
        @csrf
        <a href="/events/join/{{ $event->id }}" class="btn btn-primary" id="event-submit" onclick="event.preventDefault();
                this.closest('form').submit();">
          Confirmar participação
        </a>
      </form>
      @else
      <p class="msg">Você já está participando deste resultado!</p>
      @endif
    </div>
  </div>
</div>

@endsection