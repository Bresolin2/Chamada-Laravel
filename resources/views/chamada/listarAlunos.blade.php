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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
