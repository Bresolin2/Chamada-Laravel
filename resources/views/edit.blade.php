@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
    <h1>Editar aluno → {{ $alunos->nome }}</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('update', $alunos->id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="nome" id="nome" placeholder="Nome:" value="{{ $alunos->nome }}">
        <input type="email" name="email" id="email" placeholder="Email:" value="{{ $alunos->email }}">
        <input type="text" name="telefone" id="telefone" placeholder="Telefone:" value="{{ $alunos->telefone }}">
        <button type="submit">Editar</button>
    </form>
@endsection
