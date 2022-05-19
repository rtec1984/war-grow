@extends('layouts.main')

@section('title', 'WAR - Meus resultados')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus resultados:</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">PARTIDA</th>
                <th scope="col">DATA</th>
                <th scope="col">VITÓRIA</th>
                <th scope="col">VENCEDOR</th>
                <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td scropt="row">{{ $loop->index + 1 }}</td>
                <td>{{ $event->id }}</td>
                <td>{{ $event->partida }}</td>
                <td>{{ date('d/m/Y', strtotime($event->date)) }}</td>
                <td>{{ $event->vitoria }}</td>
                <td>{{ $event->vencedor }}</td>
                <td><a href="/events/{{ $event->id }}" class="btn btn-info btn-sm"><ion-icon name="eye-outline"></ion-icon></a> <a href="/events/edit/{{ $event->id }}" class="btn btn-warning btn-sm edit-btn">
                        <ion-icon name="create-outline"></ion-icon></a>
                    <form action="/events/{{ $event->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
                            <ion-icon name="trash-outline"></ion-icon></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Você ainda não tem resultados, <a href="/events/create">cadastrar resultado!</a></p>
    @endif
</div>
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Resultados que estou participando:</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($eventsasparticipant) > 0)
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">PARTIDA</th>
                <th scope="col">DATA</th>
                <th scope="col">VITÓRIA</th>
                <th scope="col">VENCEDOR</th>
                <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventsasparticipant as $event)
            <tr>
                <td scropt="row">{{ $loop->index + 1 }}</td>
                <td>{{ $event->id }}</td>
                <td>{{ $event->partida }}</td>
                <td>{{ date('d/m/Y', strtotime($event->date)) }}</td>
                <td>{{ $event->vitoria }}</td>
                <td>{{ $event->vencedor }}</td>
                <td><a href="/events/{{ $event->id }}" class="btn btn-info btn-sm"><ion-icon name="eye-outline"></ion-icon></a>
                    <form action="/events/leave/{{ $event->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark btn-sm delete-btn">
                            <ion-icon name="log-out-outline"></ion-icon></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Você ainda não está participando de nenhum resultado, <a href="/">veja todos os resultados!</a></p>
    @endif
</div>
@endsection