@extends('layouts.app')

@section('title', 'Relatórios')

@section('content')

    <nav class="navbar" style="background-color: #000000;">
        <div class="container-fluid">
            <a class="btn btn-lg btn-custom btn-white" href="{{ route('index_chamada') }}"><b><i
                        class="bi bi-arrow-left"></i></i>
                    Voltar</b></a>

            <form class="d-flex" role="search">
                @csrf
                <input class="form-control me-2" name="search" id="search" type="search" placeholder="Pesquisar">
                <button class="btn btn-secondary btn-md float-right" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </nav>

    <form id="relatorio" action="{{ route('gera_relatorio') }}" method="POST">
        @csrf
        <div class="container mt-4">
            <div class="row g-3 me-3 ms-3">
                <div class="container">
                    <b>Data início: </b><input class="mt-4" id="dataIn" name="dataIn" type="date"
                        value="{{ date('Y-m-d') }}">
                    <b> Data fim: </b><input class="mt-4" id="dataFim" name="dataFim" type="date"
                        value="{{ date('Y-m-d') }}">
                </div>
                <div class="container mt-4">
                    <table>
                        <select name="selTurma" id="selTurma" class="form-control">
                            @foreach ($turmas as $turma)
                                <option value="{{ $turma->id }}" selected>{{ $turma->nome }}</option>
                            @endforeach
                        </select><br>
                        <button class="btn btn-lg btn-custom btn-branco" type="submit"><i class="bi bi-search"> Gerar relatório</i></button>
                    </table>
                </div>
            </div>
        </div>
    </form>
