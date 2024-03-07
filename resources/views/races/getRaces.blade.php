@extends('Template.blank')
@section('title', "Corridas - Bolão F1 Pederneiras")

@section('contents')

    <!-- Page Heading -->
    <div class="d-flex justify-content-between mb-3">
        <h2 class="h3 mb-0 text-gray-800">Corridas</h2>
    </div>

    <div class="card">
        <div class="card-body">
            <table id="dataTable" class="table table-bordered">

                <thead>
                    <th>NUMERO</th>
                    <th>DATA</th>
                    <th>HORA</th>
                    <th>PAIS/CIDADE</th>
                    <th>CIRCUITO</th>
                    <th>VOLTAS</th>
                </thead>

                <tbody>
                    @foreach ($races as $race)
                        <tr>
                            <input type="hidden" value="{{ $race->id }}"/>
                            <td>{{ $race->id }}</td>
                            <td>{{ $race->date }}</td>
                            <td>{{ $race->time }}</td>
                            <td>{{ $race->country }}</td>
                            <td>{{ $race->city }}</td>
                            <td>{{ $race->laps }}</td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>

@endsection
