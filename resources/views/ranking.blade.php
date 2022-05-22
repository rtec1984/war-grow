@extends('layouts.main')

@section('title', 'WAR - Ranking')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-6 offset-md-1">
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

                    <tr>
                        <th scope="row">1</th>
                        <td>Primeiro lugar</td>
                        <td>100</td>
                        <td>10</td>
                        <td>10</td>
                        <td>100%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection