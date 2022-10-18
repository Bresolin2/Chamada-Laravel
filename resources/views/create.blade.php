@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')
<nav class="navbar" style="background-color: rgb(0, 0, 0);">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: white"><b>Cadastrar Aluno</b></a>
        <a class="btn btn-primary" href="{{ route('index') }}"><i class="bi bi-arrow-90deg-left"></i> Voltar</a>
    </div>
</nav>

@include('includes.validations-form')

    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('_partials.form', compact('turmas'))
    </form>
@endsection
