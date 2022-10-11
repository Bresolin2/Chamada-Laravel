@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')

    {{-- <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
        <form action="{{ route('index') }}" method="get">
                <input type="text" name="search" id="search" placeholder="Pesquisar">
                <button class="btn btn-green">Pesquisar</button>
            </form>
        </div>
    </nav> --}}

    <nav class="navbar bg-light">
        <div class="container-fluid">
          <a class="navbar-brand"></a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" name="search" id="search" type="search" placeholder="Pesquisar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
          </form>
        </div>
      </nav>

        <ul>
            @foreach ($alunos as $aluno)
                <li>
                    <b> Id:</b> {{ $aluno->id }} <br>
                    <b> Aluno:</b> {{ $aluno->nome }}
                    | <a href="{{ route('edit', $aluno->id) }}">Editar</a>
                    | <a href="{{ route('show', $aluno->id) }}">Detalhes</a><br><br>
                </li>
            @endforeach
        </ul>

        <a class="btn btn-primary" href="{{ route('create') }}" class="">Cadastrar aluno</a>

    
@endsection
