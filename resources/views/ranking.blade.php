@extends('layouts.main')

@section('title', 'WAR - Ranking')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <br>
            <table class="table table-bordered table-striped table-hover table-light table-responsive" id="ranking">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NOME</th>
                        <th scope="col">P</th>
                        <th scope="col">J</th>
                        <th scope="col">V</th>
                        <th scope="col">%</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td scropt="row">{{ $loop->index + 1 }}</td>
                        <td>{{$user->name}}</td>
                        <td>{{number_format($points / 100 * $victories / count($user->eventsAsParticipant) * 100), 1}}</td>
                        <td>{{count($user->eventsAsParticipant)}}</td>
                        <td>{{$victories}}</td>
                        <td>{{number_format($victories / count($user->eventsAsParticipant) * 100), 1}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>

@endsection