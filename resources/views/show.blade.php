@extends('layouts.app')

@section('title', 'Informações do Aluno')

@section('content')
    <nav class="navbar" style="background-color: #422994;">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: white"><b>Detalhes do Aluno</b></a>
            <a class="btn btn-primary" href="{{ route('index') }}">Voltar</a>
        </div>
    </nav>
    
    <div class="row g-3 me-3 ms-3">
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
</div>

    <form action="{{ route('destroy', $alunos->id) }}" method="POST">
        @method('DELETE')
        @csrf

    </form>

    <div class="ms-4">
        <button class="btn btn-outline-danger btn-lg" type="submit">Deletar</button>
    </div>
@endsection
