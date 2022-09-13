@extends('layouts.main')

@section('title', 'WAR - Cadastrar resultado')

@section('content')

<div style="margin-top: 2rem;" id="event-create-container" class="col-auto">
  <form action="/events" id="formResult" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="date">DATA DA PARTIDA:</label>
      <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <br>
    <div class="form-group">
      <label for="players">NÚMERO DE JOGADORES:</label>
      <select class="form-select" aria-label="players" id="players" name="players" required>
        <option value="">ESCOLHA O NÚMERO</option>
        <option value="3">3 JOGADORES</option>
        <option value="4">4 JOGADORES</option>
        <option value="5">5 JOGADORES</option>
        <option value="6">6 JOGADORES</option>
      </select>
      {{-- <br> --}}
      <label for="victory"></label>
{{--       <div class="form-check">
        <input class="form-check-input" type="radio" name="victory" id="victory1" value="5">
        <label class="form-check-label" for="victory1">
          NO TEMPO 5 PONTOS
        </label>
      </div> --}}
      <div class="form-check">
        <input class="form-check-input" type="radio" name="victory" id="victory2" value="10" checked>
        <label class="form-check-label" for="victory2">
          VITÓRIA: 10 PONTOS
        </label>
      </div>
      <input type="submit" id="btnResult" class="btn btn-primary" value="Cadastrar resultado">
  </form>
</div>

<script>
  const Form = document.getElementById('formResult')
  let botao = document.getElementById('btnResult')

  Form.addEventListener('submit', function(){
      botao.setAttribute('disabled', 'disabled')
  })
</script>

@endsection