@extends('layouts.main')

@section('title', 'WAR')

@section('content')

<p>Total de pontos: {{ \App\Models\Event::sum('victory') }}</p>

<p>Total de partidas: {{ \App\Models\Event::count('victory') }}</p>

<p>Total de jogadores: {{ \App\Models\User::count('name') }}</p>


@endsection