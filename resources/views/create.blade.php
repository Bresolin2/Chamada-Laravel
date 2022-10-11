@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')
    <h1>Cadastrar aluno</h1>

@include('includes.validations-form')

    <form action="{{ route('store') }}" method="POST">
        @csrf
        @include('_partials.form')
    </form>
@endsection
