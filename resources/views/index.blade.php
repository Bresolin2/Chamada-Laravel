@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')

    <nav class="navbar" style="background-color: #000000;">
        <div class="container-fluid">
            <a class="btn btn-lg btn-custom btn-white" href="{{route('index')}}"><b><i class="bi bi-house"></i></b></a>
            <div>
                <a class="btn btn-lg btn-custom btn-black" href="{{route('index_turma')}}">Turmas</a>
            </div>
            <div class="">
                <a class="btn btn-lg btn-custom btn-roxo" href="{{ route('create') }}"><i class="bi bi-person-plus"></i> Cadastrar</a>
            </div>
            <form class="d-flex" role="search">
                @csrf
                <input class="form-control me-2" name="search" id="search" type="search" placeholder="Pesquisar">
                <button class="btn btn-secondary btn-md float-right" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="row g-3 me-3 ms-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"><b> Foto:</b></th>
                        <th scope="col"><b> Id:</b> </th>
                        <th scope="col"><b> Aluno:</b></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($alunos as $aluno)
                        <tr>
                            <td>
                                @if ($aluno->image)
                                    <img style="max-height: 80px;" src="/img/events/{{ $aluno->image }}">
                                @else
                                    <img src="{{ url('images/favicon.ico') }}">
                                @endif
                            </td>
                            <td>{{ $aluno->id }}</td>
                            <td>{{ $aluno->nome }}</td>
                            <td><a class="btn btn-lg btn-custom btn-azul" href="{{ route('show', $aluno->id) }}"><i
                                        class="bi bi-eye-fill"></i></a></td>
                            <td><a class="btn btn-lg btn-custom btn-amarelo" href="{{ route('edit', $aluno->id) }}"><i
                                        class="bi bi-pencil-square"></i></a></td>
                            <td>
                                <form id="frmDelete" action="{{ route('destroy', $aluno->id) }}" method="POST">
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
