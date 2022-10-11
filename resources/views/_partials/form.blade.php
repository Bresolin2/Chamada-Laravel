@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif

@csrf
<input type="text" name="nome" id="nome" placeholder="Nome:" value="{{ $alunos->nome ?? old('nome') }}">
<input type="email" name="email" id="email" placeholder="Email:" value="{{ $alunos->email ?? old('email') }}">
<input type="text" name="telefone" id="telefone" placeholder="Telefone:"
    value="{{ $alunos->telefone ?? old('telefone') }}">
<button type="submit">Editar</button>
