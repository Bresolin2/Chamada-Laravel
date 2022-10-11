@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
    <h1>Editar aluno → {{ $alunos->nome }}</h1>

    @include('includes.validations-form')

    <form action="{{ route('update', $alunos->id) }}" method="post">
        @method('PUT')
       @include('_partials.form')
    </form>
@endsection
