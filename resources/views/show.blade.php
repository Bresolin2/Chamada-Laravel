@extends('layouts.app')

@section('title', 'Informações do Aluno')

@section('content')
    <nav class="navbar" style="background-color: #000000;">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: white"><b>Detalhes do Aluno</b></a>
            <a class="btn btn-primary" href="{{ route('index') }}"><i class="bi bi-arrow-90deg-left"></i> Voltar</a>
        </div>
    </nav>
    <div class="container">
        <div class="row g-3 me-3 ms-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"><b>Id:</b></th>
                        <th scope="col"><b>Foto:</b></th>
                        <th scope="col"><b>Nome:</b></th>
                        <th scope="col"><b>Email:</b></th>
                        <th scope="col"><b>Telefone:</b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $alunos->id }}</th>
                        <td><img style="max-height: 80px;" src="/img/events/{{ $alunos->image }}"></td>
                        <td>{{ $alunos->nome }}</td>
                        <td>{{ $alunos->email }}</td>
                        <td>{{ $alunos->telefone }}</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <form id="frmDelete" action="{{ route('destroy', $alunos->id) }}" method="POST">
            @method('DELETE')
            @csrf

        </form>

        <div class="ms-4">
            <button form="frmDelete" class="btn btn-lg btn-custom btn-vermelho" type="submit"><i
                class="bi bi-trash"></i></button>
        </div>
    </div>
@endsection
