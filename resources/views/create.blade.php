@extends('layouts.app')

@section('title', "Cadastrar Aluno")

@section('content')
    <h1>Cadastrar aluno</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('store')}}" method="POST">
        @csrf
        <input type="text" name="nome" id="nome" placeholder="Nome:" value="{{old('nome')}}">
        <input type="email" name="email" id="email" placeholder="Email:" value="{{old('email')}}">
        <input type="text" name="telefone" id="telefone" placeholder="Telefone:" value="{{old('telefone')}}">
        <button type="submit">Cadastrar</button>
    </form>
@endsection
