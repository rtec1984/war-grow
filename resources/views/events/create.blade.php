@extends('layouts.main')

@section('title', 'WAR - Cadastrar resultado')

@section('content')

<div id="event-create-container" class="col-auto">
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="date">DATA DA PARTIDA:</label>
      <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <br>
    <div class="form-group">
      <label for="victory">TIPO DE VITÓRIA:</label>
      <select class="form-select" aria-label="victory" id="victory" name="victory" required>
        <option value="">ESCOLHA O TIPO</option>
        <option value="5">TEMPO</option>
        <option value="10">OBJETIVO</option>
      </select>
    </div>
    <br>
    <input type="submit" class="btn btn-primary" value="Cadastrar resultado">
  </form>
</div>

@endsection