@extends('layouts.app')

@section('title', 'Relatórios')

@section('content')

<nav class="navbar" style="background-color: #000000;">
    <div class="container-fluid">
        <a class="btn btn-lg btn-custom btn-white" href="{{ route('index_chamada') }}"><b><i class="bi bi-arrow-left"></i></i>
                Voltar</b></a>

        <form class="d-flex" role="search">
            @csrf
            <input class="form-control me-2" name="search" id="search" type="search" placeholder="Pesquisar">
            <button class="btn btn-secondary btn-md float-right" type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div>
</nav>

<form id="relatorio" action="{{ route('relatorio_chamada') }}">
    @csrf
</form>