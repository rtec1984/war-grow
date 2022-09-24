@extends('layouts.main')

@section('title', 'WAR - PARTIDA Nº '. $event->id . ' - ' . date('d/m/Y', strtotime($event->date)))

@section('content')

<div style="margin-top: 2rem;" id="cards-container" class="row">
  <div class="card col-auto">
    <div class="card-body2">
      <p class="card-game"><ion-icon name="dice"></ion-icon>&nbsp; PARTIDA Nº {{ $event->id }}</p>
      <p class="card-game"><ion-icon name="calendar"></ion-icon>&nbsp; {{ date('d/m/Y', strtotime($event->date)) }}</p>
      <p class="card-game"><ion-icon name="trophy"></ion-icon>&nbsp; {{ $eventOwner['name'] }}</p>
      {{-- <p class="card-game"><ion-icon name="people"></ion-icon>&nbsp; {{ count($event->users) }} Confirmados</p> --}}
      @foreach($event->users->sortBy(['name', 'asc']) as $name)
      <p class="card-game"><ion-icon name="person"></ion-icon>&nbsp; {{ $name->name }}</p>
      @endforeach
        @if(count($event->users)<($event->players)) @if(!$hasUserJoined) <form action="/events/join/{{ $event->id }}" id="formJoin" method="POST" style="display: flex; justify-content: center;">
        @csrf
        <input type="submit" id="btnJoin" class="btn btn-primary" value="Confirmar">
        </form>
        @else
        <p class="msg1"><ion-icon name='checkbox-outline'></ion-icon> &nbsp;CONFIRMADA</p>
        @endif
        @else
        <p class="msg1"><ion-icon name='checkbox-outline'></ion-icon> &nbsp;COMPLETA</p>
        @endif
    </div>
  </div>
</div>

<script>
  const Form = document.getElementById('formJoin')
  let botao = document.getElementById('btnJoin')

  Form.addEventListener('submit', function(){
      botao.setAttribute('disabled', 'disabled')
  })
</script>

@endsection