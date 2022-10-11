@extends('layouts.app')

@section('title', 'Informações do Aluno')

@section('content')
    <h1>Detalhes do usuário</h1>

    <ul>
        <b>Nome:</b>
        <li>{{ $alunos->nome }}</li><br>
        <b>Email:</b>
        <li>{{ $alunos->email }}</li><br>
        <b>Telefone:</b>
        <li>{{ $alunos->telefone }}</li><br>
        <b>Foto:</b>
        <li>{{ $alunos->foto }}</li><br><br>
    </ul>

    <form action="{{ route('destroy', $alunos->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Deletar</button>
    </form>


@endsection
