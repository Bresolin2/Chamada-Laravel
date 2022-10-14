@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')
<nav class="navbar" style="background-color: #422994;">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: white"><b>Cadastrar Aluno</b></a>
        <a class="btn btn-primary" href="{{ route('index') }}">Voltar</a>
    </div>
</nav>

@include('includes.validations-form')

    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('_partials.form')
    </form>
@endsection
