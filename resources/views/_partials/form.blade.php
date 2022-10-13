@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif
@csrf

<div class="row g-3 me-3 ms-3 mt-3">
    <div class="col-sm-5">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $alunos->nome ?? old('nome') }}">
    </div>
    <div class="col-sm-5">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" id="email" value="{{ $alunos->email ?? old('email') }}">
    </div>
    <div class="col-sm-10">
        <label for="telefone" class="form-label">Telefone:</label>
        <input type="text" class="form-control" name="telefone" id="telefone" value="{{ $alunos->telefone ?? old('telefone') }}">
        <br>
    </div>
    <div class="col-sm-20">
        <label for="foto" class="form-label">Foto:</label>
        <input type="file" class="form-control" name="foto" id="foto">
        <br>
    </div>
</div>
<div class="ms-4">
    <button class="btn btn-outline-success" type="submit">Editar/Cadastrar</button>
</div>
