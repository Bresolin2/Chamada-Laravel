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
                <input class="form-control me-2" name="search" id="search" type="search" placeholder="Pesquisar"
                    aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
        </div>
      </nav>
    <table class="table ms-4 me-4">
      <thead>
        <tr>
          <th scope="col"><b> Id:</b> </th>
          <th scope="col"><b> Aluno:</b> </th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        @foreach ($alunos as $aluno)
            <tr>
                <th>{{ $aluno->id }}</th> <br>
                <td>{{ $aluno->nome }}</td>
                <td><a class="btn btn-primary" href="{{ route('edit', $aluno->id) }}">Editar</a></td>
                <td><a class="btn btn-primary" href="{{ route('show', $aluno->id) }}">Detalhes</a></td><br><br>
            </tr>
        @endforeach
      </tbody>
    </table>


    <a class="btn btn-success btn-lg float-right" href="{{ route('create') }}" class="">Cadastrar</a>


@endsection
