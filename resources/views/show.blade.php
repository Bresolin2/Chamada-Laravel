@extends('layouts.app')

@section('content')
    <h1>Detalhes do usuário</h1>

    <ul>
        <b>Nome:</b> <li>{{ $alunos->nome }}</li><br>
        <b>Email:</b> <li>{{ $alunos->email }}</li><br>
        <b>Telefone:</b> <li>{{ $alunos->telefone }}</li><br>
        <b>Foto:</b> <li>{{ $alunos->foto }}</li><br><br>
    </ul>
{{-- @endsection --}}
