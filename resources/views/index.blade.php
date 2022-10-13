@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')

    <nav class="navbar" style="background-color: #422994;">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: white"><b>Home</b></a>
            <div class="ms-4">
                <a class="btn btn-success" href="{{ route('create') }}">Cadastrar</a>
            </div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" name="search" id="search" type="search" placeholder="Pesquisar">
                <button class="btn btn-secondary btn-md float-right" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>


    <div class="row g-3 me-3 ms-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"><b> Foto:</b></th>
                    <th scope="col"><b> Id:</b> </th>
                    <th scope="col"><b> Aluno:</b></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($alunos as $aluno)
                    <tr>
                        <td>
                            @if ($aluno->foto)
                                <img src="{{ url("storage/{$alunos->foto}") }}">
                            @else
                                <img src="{{ url('images/favicon.ico') }}">
                            @endif
                            {{ $aluno->foto }}
                        </td>
                        <td>{{ $aluno->id }}</td>
                        <td>{{ $aluno->nome }}</td>
                        <td><a class="btn btn-info" href="{{ route('show', $aluno->id) }}">Detalhes</a></td>
                        <td><a class="btn btn-primary" href="{{ route('edit', $aluno->id) }}">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
