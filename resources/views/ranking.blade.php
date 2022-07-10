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
                    @forelse($users as $key => $item)
                    <tr>
                        <td scropt="row">{{ $loop->index + 1 }}</td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['points']}}</td>
                        <td>{{$item['games']}}</td>
                        <td>{{$item['victory']}}</td>
                        <td>{{$item['percent']}}</td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>

@endsection