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
                        {{-- <th scope="col">#</th> --}}
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
                        {{-- <td scropt="row">{{ $loop->index + 1  }}</td> --}}
                        <td>{{$user->name}}</td>
                        @if (count($user->eventsAsParticipant) > 0)
                        <td>{{number_format(DB::table('events')->where('user_id', $user->id)->pluck('victory')->sum() /
                            100 * DB::table('events')->where('user_id', $user->id)->select('victory')->count() /
                            count($user->eventsAsParticipant) * 100), 1}}</td>
                        @else
                        <td>0</td>
                        @endif
                        <td>{{count($user->eventsAsParticipant)}}</td>
                        <td>{{$victories = DB::table('events')->where('user_id',
                            $user->id)->select('victory')->count()}}</td>
                        @if (count($user->eventsAsParticipant) > 0)
                        <td>{{number_format($victories / count($user->eventsAsParticipant) * 100), 1}}</td>
                        @else
                        <td>0</td>
                        @endif
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