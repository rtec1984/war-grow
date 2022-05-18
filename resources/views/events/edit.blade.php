@extends('layouts.main')

@section('title', 'WAR - Editando: ' . $event->partida . ' - ' . date('d/m/Y', strtotime($event->date)))

@section('content')

<div id="event-create-container" class="col-auto offset-md-1">
  <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="partida">EDITAR PARTIDA:</label>
      <select class="form-select" aria-label="partida" id="partida" name="partida" required>
        <option value="">{{ $event->partida }}</option>
        <option value="PARTIDA 01">PARTIDA 01</option>
        <option value="PARTIDA 02">PARTIDA 02</option>
        <option value="PARTIDA 03">PARTIDA 03</option>
        <option value="PARTIDA 04">PARTIDA 04</option>
        <option value="PARTIDA 05">PARTIDA 05</option>
        <option value="PARTIDA 06">PARTIDA 06</option>
        <option value="PARTIDA 07">PARTIDA 07</option>
        <option value="PARTIDA 08">PARTIDA 08</option>
        <option value="PARTIDA 09">PARTIDA 09</option>
        <option value="PARTIDA 10">PARTIDA 10</option>
        <option value="PARTIDA 11">PARTIDA 11</option>
        <option value="PARTIDA 12">PARTIDA 12</option>
        <option value="PARTIDA 13">PARTIDA 13</option>
        <option value="PARTIDA 14">PARTIDA 14</option>
        <option value="PARTIDA 15">PARTIDA 15</option>
        <option value="PARTIDA 16">PARTIDA 16</option>
        <option value="PARTIDA 17">PARTIDA 17</option>
        <option value="PARTIDA 18">PARTIDA 18</option>
        <option value="PARTIDA 19">PARTIDA 19</option>
        <option value="PARTIDA 20">PARTIDA 20</option>
        <option value="PARTIDA 21">PARTIDA 21</option>
        <option value="PARTIDA 22">PARTIDA 22</option>
        <option value="PARTIDA 23">PARTIDA 23</option>
        <option value="PARTIDA 24">PARTIDA 24</option>
        <option value="PARTIDA 25">PARTIDA 25</option>
        <option value="PARTIDA 26">PARTIDA 26</option>
        <option value="PARTIDA 27">PARTIDA 27</option>
        <option value="PARTIDA 28">PARTIDA 28</option>
        <option value="PARTIDA 29">PARTIDA 29</option>
        <option value="PARTIDA 30">PARTIDA 30</option>>
      </select>
    </div>
    <br>
    <div class="form-group">
      <label for="date">EDITAR DATA:</label>
      <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <br>
    <div class="form-group">
      <label for="vitoria">EDITAR VITÓRIA:</label>
      <select class="form-select" aria-label="vitoria" id="vitoria" name="vitoria" required>
        <option value="">{{ ($event->vitoria) }}</option>
        <option value="TEMPO">TEMPO</option>
        <option value="OBJETIVO">OBJETIVO</option>
      </select>
    </div>
    <br>
    <input type="submit" class="btn btn-primary" value="Editar resultado">
  </form>
</div>

@endsection