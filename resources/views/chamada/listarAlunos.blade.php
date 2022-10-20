@extends('layouts.app')

@section('title', 'Chamada')

@section('content')

    <nav class="navbar" style="background-color: #000000;">
        <div class="container-fluid">
            <a class="btn btn-lg btn-custom btn-white" href="{{ route('index_chamada') }}"><b><i class="bi bi-backspace"></i>
                    Voltar</b></a>

            <form class="d-flex" role="search">
                @csrf
                <input class="form-control me-2" name="search" id="search" type="search" placeholder="Pesquisar">
                <button class="btn btn-secondary btn-md float-right" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </nav>

    <head>
        <div class="container mt-4">
            <b>{{ $turma->nome }}</b>
        </div>
        <div class="container">
            <b>Data: </b><input id="inpdata" type="date">
        </div>

    </head>

    <div class="container mt-4">
        <div class="row g-3 me-3 ms-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Código: </th>
                        <th scope="col">Nome: </th>
                        <th scope="col">Presença: </th>
                        <th scope="col">Obs: </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alunos as $aluno)
                        <tr>
                            <td>{{ $aluno->id }}</td>
                            <td>{{ $aluno->nome }}</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="ck_{{ $aluno->id }}"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Presente</label>
                                </div>
                            </td>
                            <td>
                                <div class="input-group input-group-sm">
                                    <input id="inp_{{ $aluno->id }}" type="text" class="form-control"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </td>
                        </tr>
                </tbody>
            </table>
            <form id="salvar" action="{{ route('salvar_chamada', $aluno->id) }}" method="POST">
                <button class="btn btn-lg btn-custom btn-green" type="submit"> Salvar</button>
            </form>
            @endforeach
        </div>
    </div>
@endsection
