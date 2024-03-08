@extends('Template.blank')
@section('title', "Ranking Geral - Bolão F1 Pederneiras")

@section('contents')

    <!-- Page Heading -->
    <div class="d-flex justify-content-between mb-3">
        <h2 class="h3 mb-0 text-gray-800">BOLÃO FÓRMULA 1 PEDERNEIRAS - RANKING 2024</h2>
    </div>

    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-bordered">

                <thead>
                    <th>POSIÇÃO</th>
                    <th>NOME</th>
                    <th>PONTOS</th>
                    <th>PALPITES</th>
                </thead>

                <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <input type="hidden" value="{{ $user->id }}"/>
                            <td>{{ $key + 1}}º</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->points }}</td>
                            <td>{{ $user->guesses->count() }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection
