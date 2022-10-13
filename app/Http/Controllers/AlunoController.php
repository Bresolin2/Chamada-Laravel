<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAlunoFormRequest;
use App\Models\AlunoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class AlunoController extends Controller
{
    
    public function index(Request $request)
    {
        $filtro = $request->search;
        $alunos = AlunoModel::where(function ($query) use ($filtro) {
            if ($filtro) {
                $query->where('nome', 'LIKE', "%{$filtro}%");
                $query->where('email', "%{$filtro}%");
            }
        })->get();

        return view('index', compact('alunos'));
    }

    public function show($id)
    {
        if (!$alunos = AlunoModel::find($id))
            return redirect()->route('index');

        return view('show', compact('alunos'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(StoreUpdateAlunoFormRequest $request)
    {
        AlunoModel::create($request->only('nome'));
        if ($request->foto) {
            $extension = $request->foto->getClientOriginalExtension();
            $data['foto'] = $request->foto->storeAs('alunos', now() . "{$extension}");
        }

        return redirect()->route('index');
    }

    public function edit($id)
    {
        if (!$alunos = AlunoModel::find($id))
            return redirect()->route('index');

        return view('edit', compact('alunos'));
    }

    public function update(Request $request, $id)
    {
        if (!$alunos = AlunoModel::find($id))
            return redirect()->route('index');

        $data = $request->only('nome', 'email', 'telefone');

        $alunos->update($data);

        return redirect()->route('index');
    }

    public function destroy($id)
    {
        if (!$alunos = AlunoModel::find($id))
            return redirect()->route('index');

        $alunos->delete();

        return redirect()->route('index');
    }
}
