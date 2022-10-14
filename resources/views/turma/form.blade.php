@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif
@csrf

<div class="container">
    <div class="row g-3 me-3 ms-3 mt-3">
        <div class="col-sm-5">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome"
                value="{{ $turmas->nome ?? old('nome') }}">
        </div>
        <div class="col-sm-10">
            <label for="obervacao" class="form-label">Observações:</label>
            <input type="text" class="form-control" name="obervacao" id="obervacao"
                value="{{ $turmas->observacao ?? old('observacao') }}">
            <br>
        </div>
    </div>
    <div class="ms-4 mt-4">
        <button class="btn btn-lg btn-custom btn-verde" type="submit">Editar/Cadastrar</button>
    </div>
</div>
