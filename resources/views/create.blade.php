@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')
<nav class="navbar bg-light">
    <div class="container-fluid">
        <a class="navbar-brand"><b>Cadastrar usuário</b></a>
        <a class="btn btn-outline-primary" href="{{ route('index') }}">Voltar</a>
    </div>
</nav>

@include('includes.validations-form')

    <form action="{{ route('store') }}" method="POST">
        @csrf
        @include('_partials.form')
    </form>
@endsection
