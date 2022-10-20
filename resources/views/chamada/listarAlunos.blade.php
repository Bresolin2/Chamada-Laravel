@extends('layouts.app')

@section('title', 'Chamada')

@section('content')

    <nav class="navbar" style="background-color: #000000;">
        <div class="container-fluid">
            <a class="btn btn-lg btn-custom btn-white" href="{{ route('index_chamada') }}"><b><i class="bi bi-arrow-left"></i></i>
                    Voltar</b></a>

            <form class="d-flex" role="search">
                @csrf
                <input class="form-control me-2" name="search" id="search" type="search" placeholder="Pesquisar">
                <button class="btn btn-secondary btn-md float-right" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </nav>

    <form id="salvar" action="{{ route('salvar_chamada') }}" method="POST">
        @csrf

        <head>
            <div class="container mt-4">
                <b>{{ $turma->nome }}</b>
            </div>

                <input hidden type="number" value="{{$turma->id}}" id="idTurma" name="idTurma">

        </head>

        <div class="container mt-4">
            <div class="row g-3 me-3 ms-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Código: </th>
                            <th scope="col">Foto: </th>
                            <th scope="col">Nome: </th>
                            <th scope="col">Presença: </th>
                            <th scope="col">Obs: </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alunos as $aluno)
                            <tr>
                                <td>{{ $aluno->id }}</td>
                                <td>
                                    @if ($aluno->image)
                                        <img style="max-height: 40px;" src="/img/events/{{ $aluno->image }}">
                                    @else
                                        <img src="{{ url('images/favicon.ico') }}">
                                    @endif
                                </td>
                                <td>{{ $aluno->nome }}</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="ck_{{ $aluno->id }}" id="ck"
                                            value="{{ $aluno->id }}">
                                        <label class="form-check-label" for="inlineCheckbox1">Presente</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input id="inp_{{ $aluno->id }}" name="inp_{{ $aluno->id }}" type="text"
                                            class="form-control" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <button class="btn btn-lg btn-custom btn-green" type="submit"> Salvar</button>

            </div>
        </div>
    </form>
@endsection
