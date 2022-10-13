@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')


    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"><b>Home</b></a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" name="search" id="search" type="search" placeholder="Pesquisar"
                    aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>

    <table class="table">
        <thead>
            <tr>
              <th scope="col"><b>Foto: </b></th>
                <th scope="col"><b> Id:</b> </th>
                <th scope="col"><b> Aluno:</b></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($alunos as $aluno)
                <tr>
                  <td>{{$aluno->foto}}</td>
                    <td>{{ $aluno->id }}</td>
                    <td>{{ $aluno->nome }}</td>
                    <td><a class="btn btn-info" href="{{ route('show', $aluno->id) }}">Detalhes</a></td>
                    <td><a class="btn btn-primary" href="{{ route('edit', $aluno->id) }}">Editar</a></td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-success btn-lg float-right" href="{{ route('create') }}" class="">Cadastrar</a>
    </div>

@endsection
