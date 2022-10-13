@extends('layouts.app')

@section('title', 'Informações do Aluno')

@section('content')
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"><b>Detalhes do usuário</b></a>
            <a class="btn btn-outline-primary" href="{{ route('index') }}">Voltar</a>
        </div>
    </nav>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><b>Id:</b></th>
                <th scope="col"><b>Foto:</b></th>
                <th scope="col"><b>Nome:</b></th>
                <th scope="col"><b>Email:</b></th>
                <th scope="col"><b>Telefone:</b></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $alunos->id }}</th>
                <td>{{ $alunos->foto }}</td>
                <td>{{ $alunos->nome }}</td>
                <td>{{ $alunos->email }}</td>
                <td>{{ $alunos->telefone }}</td>
            </tr>
        </tbody>
    </table>
    <form action="{{ route('destroy', $alunos->id) }}" method="POST">
        @method('DELETE')
        @csrf

    </form>

    <div class="d-grid gap-2 d-md-flex">
        <button class="btn btn-outline-danger btn-lg" type="submit">Deletar</button>
    </div>
@endsection
