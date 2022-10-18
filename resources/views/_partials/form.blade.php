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
                value="{{ $alunos->nome ?? old('nome') }}">
        </div>
        <div class="col-sm-5">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" id="email"
                value="{{ $alunos->email ?? old('email') }}">
        </div>
        <div class="col-sm-10">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefone" id="telefone"
                value="{{ $alunos->telefone ?? old('telefone') }}">
            <br>
        </div>
        <div class="col-sm-25">
            <label for="image">Foto:</label>
            <input type="file" class="form-control-file" name="image" id="image"
                value="{{ $alunos->image ?? old('image') }}">
            <br>
        </div>

        <div class="s2-example">
            <p>
                <select name="selTurmas" id="selTurmas" class="js-example-basic-multiple-limit js-states form-control" multiple="multiple">
                    @foreach($turmas as $turma)
                    <option value="{{$turma->id}}">{{$turma->nome}}</option>
                    @endforeach
                </select>
            </p>
        </div>

        <pre data-fill-from=".js-code-placeholder"></pre>

        <script type="text/javascript" class="js-code-placeholder">
            $(".js-example-basic-multiple-limit").select2({
                maximumSelectionLength: 10
            });
        </script>

        {{-- <select class="form-control" multiple="multiple">
            <option selected="selected">orange</option>
            <option>white</option>
            <option selected="selected">purple</option>
          </select> --}}


        <div class="ms-4 mt-4">
            <button class="btn btn-lg btn-custom btn-verde" type="submit">Salvar</button>
        </div>
    </div>
