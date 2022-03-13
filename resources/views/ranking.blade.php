@extends('layouts.main')

@section('title', 'Ranking')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-12">
            <br>
            <table class="table table-bordered table-striped table-hover table-dark table-responsive-xl" id="ranking">

                <thead>
                    <tr>
                        <th scope="col">POSIÇÃO</th>
                        <th scope="col">NOME</th>
                        <th scope="col">PONTUAÇÃO</th>
                        <th scope="col">ELIMINAÇÕES CAUSADAS</th>
                        <th scope="col">ELIMINAÇÕES SOFRIDAS</th>
                        <th scope="col">JOGOS</th>
                        <th scope="col">VITÓRIAS</th>
                        <th scope="col">APROVEITAMENTO</th>
                        <th scope="col">DETALHES</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <th scope="row">1</th>
                        <td>Teste</td>
                        <td>100</td>
                        <td>10</td>
                        <td>0</td>
                        <td>10</td>
                        <td>5</td>
                        <td>50%</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Fulano</td>
                        <td>90</td>
                        <td>0</td>
                        <td>0</td>
                        <td>10</td>
                        <td>5</td>
                        <td>50%</td>
                        <td>y</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Beltrano</td>
                        <td>10</td>
                        <td>1</td>
                        <td>10</td>
                        <td>20</td>
                        <td>5</td>
                        <td>5%</td>
                        <td>z</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection