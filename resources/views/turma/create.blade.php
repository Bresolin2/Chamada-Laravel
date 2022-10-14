@extends('layouts.app')

@section('title', 'Cadastrar Turma')

@section('content')
<nav class="navbar" style="background-color: rgb(0, 0, 0);">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: white"><b>Cadastrar Turma</b></a>
        <a class="btn btn-primary" href="{{ route('index_turma') }}">Voltar</a>
    </div>
</nav>

@include('includes.validations-form')

    <form action="{{ route('store_turma') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('turma.form')
    </form>
@endsection
