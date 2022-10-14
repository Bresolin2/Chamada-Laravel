@extends('layouts.app')

@section('title', 'Editar Turma')

@section('content')
    <nav class="navbar" style="background-color: #000;">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: white"><b>Editar Turmas → {{ $turmas->nome }}</b></a>
            <a class="btn btn-primary" href="{{ route('index_turmas') }}">Voltar</a>
        </div>
    </nav>

    @include('includes.validations-form')

    <form action="{{ route('update_turma', $turmas->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
       @include('form')
    </form>
@endsection
