@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"><b>Editar aluno → {{ $alunos->nome }}</b></a>
            <a class="btn btn-outline-primary" href="{{ route('index') }}">Voltar</a>
        </div>
    </nav>

    @include('includes.validations-form')

    <form action="{{ route('update', $alunos->id) }}" method="post">
        @method('PUT')
       @include('_partials.form')
    </form>
@endsection
