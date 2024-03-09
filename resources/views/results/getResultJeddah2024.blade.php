@extends('Template.blank')
@section('title', "Resultados do Bolão - GP Jeddah 2024")

@section('contents')

    <!-- Page Heading -->
    <div class="d-flex justify-content-between mb-3">
        <h2 class="h3 mb-0 text-gray-800">RESULTADOS DO BOLÃO - GP JEDDAH 2024</h2>
    </div>

    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-bordered">

                <thead>
                    <th>POSIÇÃO</th>
                    <th>PARTICIPANTE</th>
                    <th>TOTAL</th>
                    <th>PONTOS</th>
                </thead>

                <tbody>
                    <tr>
                        <td>1º</td>
                        <td>Tchowzin</td>
                        <td>23</td>
                        <td>10 + 8 + 5</td>
                    </tr>

                    <tr>
                        <td>2º</td>
                        <td>Sallasmandra</td>
                        <td>23</td>
                        <td>10 + 8 + 5</td>
                    </tr>

                    <tr>
                        <td>3º</td>
                        <td>Lopes</td>
                        <td>15</td>
                        <td>10 + 5</td>
                    </tr>

                    <tr>
                        <td>4º</td>
                        <td>Vinera</td>
                        <td>00</td>
                        <td>00</td>
                    </tr>

                    <tr>
                        <td>5º</td>
                        <td>Tody</td>
                        <td>00</td>
                        <td>00</td>
                    </tr>

                    <tr>
                        <td>6º</td>
                        <td>Biro</td>
                        <td>00</td>
                        <td>00</td>
                    </tr>

                    <tr>
                        <td>6º</td>
                        <td>Tulhão</td>
                        <td>00</td>
                        <td>00</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

@endsection
