@extends('Template.blank')
@section('title', "Vizualizar Palpites - Kart Timer")

@section('contents')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between mb-3">
        <h2 class="h3 mb-0 text-gray-800">PROVAS</h2>
    </div>

    <div class="table-responsive">
        <table style="width: 100%;">
            <style>
                table {
                    width: 100%;
                    border-collapse: separate;
                    border-spacing: 10px;
                    page-break-inside: avoid; /* Evita que a tabela seja dividida entre páginas */
                }

                th, td {
                    width: 50%;
                    height: calc(1.5em + 0.75rem + 2px);
                    padding: 0.375rem 0.75rem;
                    font-size: 1rem;
                    font-weight: 400;
                    line-height: 1.5;
                    color: #6e707e;
                    background-color: #fff;
                    background-clip: padding-box;
                    border: 1px solid #d1d3e2;
                    border-radius: 0.35rem;
                }
            </style>


            <tbody>
                <tr>
                    @foreach($races as $race)
                        <td onclick="location.href='/palpites/{{$race->country}}';" style="cursor: pointer; width: 25%; padding: 10px;">
                            <div>
                                <span style="font-weight: bold;">{{ $race->city }}</span><br>
                                <div style="float: left; height: 80px; width: 10px;"></div>
                                <span style="font-size: 12px">@ {{ $race->country }}</span><br> <!-- IDENTIFICAR AS PISTAS PARA ASSOCIAÇÃO -->
                                <span style="font-size: 12px">{{ $race->laps }} voltas</span><br>
                                <a style="font-size: 12px" ></a>
                            </div>
                        </td>
                        @if($loop->iteration % 4 == 0)
                            </tr><tr>
                        @endif
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>

@endsection
