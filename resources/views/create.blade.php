@extends('layouts.app')

@section('content')
    <h1>Cadastrar aluno</h1>

    <form action="{{route('store')}}" method="POST">
        @csrf
        <input type="text" name="nome" id="nome" placeholder="Nome:">
        <input type="email" name="email" id="email" placeholder="Email:">
        <input type="text" name="telefone" id="telefone" placeholder="Telefone:">
        <button type="submit">Cadastrar</button>
    </form>
@endsection
