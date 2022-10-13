@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
    <nav class="navbar" style="background-color: #422994;">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: white"><b>Editar aluno → {{ $alunos->nome }}</b></a>
            <a class="btn btn-primary" href="{{ route('index') }}">Voltar</a>
        </div>
    </nav>

    @include('includes.validations-form')

    <form action="{{ route('update', $alunos->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
       @include('_partials.form')
    </form>
@endsection
