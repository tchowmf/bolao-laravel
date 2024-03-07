@extends('Template.blank')
@section('title', "Pilotos - Bolão F1 Pederneiras")

@section('contents')

    <!-- Page Heading -->
    <div class="d-flex justify-content-between mb-3">
        <h2 class="h3 mb-0 text-gray-800">PILOTOS</h2>
    </div>

    <div class="card">
        <div class="card-body">
            <table id="dataTable" class="table table-bordered">

                <thead>
                    <th>NUMERO</th>
                    <th>NOME</th>
                    <th>SCUDERIA</th>
                    <th>PAIS</th>
                </thead>

                <tbody>
                    @foreach ($drivers as $driver)
                        <tr>
                            <input type="hidden" value="{{ $driver->id }}"/>
                            <td>{{ $driver->number }}</td>
                            <td>{{ $driver->name }}</td>
                            <td>{{ $driver->team }}</td>
                            <td>{{ $driver->country }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection
