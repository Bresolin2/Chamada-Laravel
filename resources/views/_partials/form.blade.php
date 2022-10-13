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


{{-- <form>
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            value="{{ $alunos->nome ?? old('nome') }}">Nome</label>
        <input type="text" name="nome" id="nome"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
            placeholder="Nome:" required="">
    </div>
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            value="{{ $alunos->email ?? old('email') }}">Email</label>
        <input type="email" name="email" id="email"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
            placeholder="Email:" required="">
    </div>
    <div class="mb-6">
        <label fclass="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            value="{{ $alunos->telefone ?? old('telefone') }}">Telefone</label>
        <input type="text" name="telefone" id="telefone"
            class="shadow-sm bg-gray-50 border border-gray-300
            text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
            dark:focus:border-blue-500 dark:shadow-sm-light"
            placeholder="Telefone:" required="">
    </div>

    <button type="button" class="text-black bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Green</button>
</form> --}}
