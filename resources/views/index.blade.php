@extends('layouts.app')

@section('title', "Lista de Alunos")

@section('content')
    <h1>Listagem
        <a href="{{route('create')}}">Cadastrar aluno</a>
    </h1>

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
@endsection
