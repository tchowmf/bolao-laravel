@extends('Template.blank')
@section('title', "Erro 404 - Page not found")

@section('contents')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- 404 Error Text -->
    <div class="text-center">
        <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">Página não encontrada!</p>
        <p class="text-gray-500 mb-0"><img src="/img/vermelha.png"/> Parece que você encontrou um erro. Bandeira vermelha <img src="/img/vermelha.png"/></p>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>

</div>

@endsection