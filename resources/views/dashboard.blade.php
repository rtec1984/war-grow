@extends('layouts.main')

@section('title', 'Meus resultados')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus resultados</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
    @else
    <p>Você ainda não tem resultados, <a href="/events/create">cadastrar resultado</a></p>
    @endif
</div>

@endsection
