@extends('layouts.app')

@section('title', 'Lista de Turmas')

@section('content')

<nav class="navbar" style="background-color: #000000;">
    <div class="container-fluid">
        <a class="btn btn-lg btn-custom btn-white" href="{{route('index_turma')}}"><b>Home</b></a>
        <div>
            <a class="btn btn-lg btn-custom btn-black" href="{{route('index')}}">Alunos</a>
        </div>
        <div class="">
            <a class="btn btn-lg btn-custom btn-roxo" href="{{ route('create_turma') }}">Cadastrar</a>
        </div>
        <form class="d-flex" role="search">
            @csrf
            <input class="form-control me-2" name="search" id="search" type="search" placeholder="Pesquisar">
            <button class="btn btn-secondary btn-md float-right" type="submit">Pesquisar</button>
        </form>
    </div>
</nav>

<div class="container">
    <div class="row g-3 me-3 ms-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"><b> Id:</b> </th>
                    <th scope="col"><b> Turma:</b></th>
                    <th scope="col"><b> Observações:</b></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($turmas as $turma)
                    <tr>
                        <td>{{ $turma->id }}</td>
                        <td>{{ $turma->nome }}</td>
                        <td>{{ $turma->observacao}}</td>
                        <td><a class="btn btn-lg btn-custom btn-amarelo" href="{{ route('edit_turma', $turma->id) }}"><i
                                    class="bi bi-pencil-square"></i></a></td>
                        <td>
                            <form id="frmDelete" action="{{ route('destroy_turma', $turma->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-lg btn-custom btn-vermelho" type="submit"><i
                                        class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection