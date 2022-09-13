@extends('layouts.main')

@section('title', 'WAR - Editando: PARTIDA Nº ' . $event->id . ' - ' . date('d/m/Y', strtotime($event->date)))

@section('content')

<div style="margin-top: 2rem;" id="event-create-container" class="col-auto">
  <form action="/events/update/{{ $event->id }}" id="formEdit" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="date">DATA: {{ date('d/m/Y', strtotime($event->date)) }}</label>
      <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <br>
    <div class="form-group">
      <label for="players">Nº DE JOGADORES: {{$event->players}}</label>
      <select class="form-select" aria-label="players" id="players" name="players" required>
        <option value="">ESCOLHA O NÚMERO</option>
        <option value="3">3 JOGADORES</option>
        <option value="4">4 JOGADORES</option>
        <option value="5">5 JOGADORES</option>
        <option value="6">6 JOGADORES</option>
      </select>
        <br>
        {{-- <label for="victory">TIPO DE VITÓRIA: {{$event->victory}} PONTOS</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="victory" id="victory1" value="5">
          <label class="form-check-label" for="victory1">
            NO TEMPO 5 PONTOS
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="victory" id="victory2" value="10" checked>
          <label class="form-check-label" for="victory2">
            NO OBJETIVO 10 PONTOS
          </label>
        </div> --}}
    <input type="submit" id="btnEdit" class="btn btn-primary" value="Editar resultado">
  </form>
</div>

<script>
  const Form = document.getElementById('formEdit')
  let botao = document.getElementById('btnEdit')

  Form.addEventListener('submit', function(){
      botao.setAttribute('disabled', 'disabled')
  })
</script>

@endsection