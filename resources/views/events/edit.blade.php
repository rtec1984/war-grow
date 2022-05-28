@extends('layouts.main')

@section('title', 'WAR - Editando: PARTIDA Nº ' . $event->id . ' - ' . date('d/m/Y', strtotime($event->date)))

@section('content')

<div id="event-create-container" class="col-auto">
  <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="date">DATA: {{ date('d/m/Y', strtotime($event->date)) }}</label>
      <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <br>
    <div class="form-group">
      <label for="victory">EDITAR VITÓRIA:</label>
      <select class="form-select" aria-label="victory" id="victory" name="victory" required>
        <option value="">SELECIONE</option>
        <option value="5">TEMPO</option>
        <option value="10">OBJETIVO</option>
      </select>
    </div>
    <br>
    <input type="submit" class="btn btn-primary" value="Editar resultado">
  </form>
</div>

@endsection