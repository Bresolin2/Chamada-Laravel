@extends('layouts.app')

@section('title', 'Selecionar Turma')

@section('content')

    <nav class="navbar" style="background-color: #000000;">
        <div class="container-fluid">
            <a class="btn btn-lg btn-custom btn-white" href="{{ route('index') }}"><b><i class="bi bi-arrow-left"></i> Voltar</b></a>
            <div>
                <a class="btn btn-lg btn-custom btn-orange" href="{{ route('index_turma') }}"><i class="bi bi-people"></i> Turmas</a>
            </div>
            <div>
                <a class="btn btn-lg btn-custom btn-roxo" href="{{ route('create') }}"><i class="bi bi-person-plus"></i>
                    Cadastrar</a>
            </div>
            <form class="d-flex" role="search">
                @csrf
                <input class="form-control me-2" name="search" id="search" type="search" placeholder="Pesquisar">
                <button class="btn btn-secondary btn-md float-right" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </nav>

    <div class="container">
        <b>Data: </b><input class="mt-4" id="inpdata" name="inpdata" type="date" value="{{ date('Y-m-d') }}">
    </div>

    <div class="container mt-4">
        <div class="row g-3 me-3 ms-3">
            <form action="{{ route('listarAlunos_chamada') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <select name="selTurma" id="selTurma" class="form-control">
                    @foreach ($turmas as $turma)
                        <option value="{{ $turma->id }}" selected>{{ $turma->nome }}</option>
                    @endforeach
                </select><br>
                <button class="btn btn-lg btn-custom btn-brown" type="submit">Pesquisar</button>
            </form>
        </div>
    </div>
@endsection
