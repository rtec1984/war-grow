@extends('layouts.main')

@section('title', 'WAR - Ranking')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-4">
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection