@extends('Template.blank')
@section('title', "Pilotos - Bolão F1 Pederneiras")

@section('contents')

    <!-- Page Heading -->
    <div class="d-flex justify-content-between mb-3">
        <h2 class="h3 mb-0 text-gray-800">ENVIAR PALPITES - GP JEDDAH 2024</h2>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body table-responsive">
            <form method="post" action="">
                @CSRF
                <input type="hidden" name="race_id" value="2"/>

                <label class="form-label">Participante</label>
                <select name='user_id' class="form-control">
                    <option value="1">Tchowzin</option>
                    <option value="2">Vinera</option>
                    <option value="3">Lopes</option>
                    <option value="4">Tody</option>
                    <option value="5">Biro</option>
                    <option value="6">Tulhão</option>
                    <option value="7">Sallasmandra</option>
                </select>

                <br><label class="form-label">Código</label>
                <input class="form-control" name="code" placeholder="Digite o codigo cadastrado" value="">
                
                <br><br><label class="form-label">POLE POSITION<sup> 5 pontos</sup></label>
                <select name='pole' class="form-control">
                @foreach ($drivers as $driver)
                    <option value="{{ $driver->name }}">{{ $driver->name }}</option>
                @endforeach
                </select>

                <br><br><label class="form-label">PÓDIO)</label>
                <br><label class="form-label">PRIMEIRO<sup> 10 pontos</sup></label>
                <select name='first' class="form-control">
                @foreach ($drivers as $driver)
                    <option value="{{ $driver->name }}">{{ $driver->name }}</option>
                @endforeach
                </select>

                <br><label class="form-label">SEGUNDO<sup> 8 pontos</sup></label>
                <select name='second' class="form-control">
                @foreach ($drivers as $driver)
                    <option value="{{ $driver->name }}">{{ $driver->name }}</option>
                @endforeach
                </select>

                <br><label class="form-label">TERCEIRO<sup> 6 pontos</sup></label>
                <select name='third' class="form-control">
                @foreach ($drivers as $driver)
                    <option value="{{ $driver->name }}">{{ $driver->name }}</option>
                @endforeach
                </select>
                
                <br><input type="submit" class="btn btn-success" value="Enviar Palpite">
            </form>
        </div>
    </div>
@endsection