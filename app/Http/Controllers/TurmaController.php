<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAlunoFormRequest;
use App\Models\TurmaModel;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    public function index(Request $request)
    {
        $turmas = TurmaModel::paginate(10);
        return view('turma.index', compact('turmas'));
    }

    public function search(Request $request)
    {
        $paginacao = 10;
        $selectFiltro = $request->input("select_filtro");
        $filtro = $request->input("filtro");

        switch ($selectFiltro) {
            case 1:
                $turmass = TurmaModel::where('id', $filtro)->paginate($paginacao);
                break;
            case 2:
                $turmass = TurmaModel::where('nome', 'LIKE', "%{$filtro}%")->paginate($paginacao);
                break;
                // case 5:
                //     $turmass = DB::table('maxirecibo_clientes')
                //         ->leftJoin('maxirecibo_permissions', 'maxirecibo_permissions.id_client', '=', 'maxirecibo_clientes.id')
                //         ->where('maxirecibo_permissions.ativo', $filtro)
                //         ->paginate($paginacao);
                //     break;
        }
        return view('turma.index', compact('turmas'));
    }

    public function create()
    {
        return view('turma.create');
    }

    public function edit($id)
    {
        if (!$turmas = TurmaModel::find($id))
            return redirect()->route('index_turma');

        return view('turma.edit', compact('turmas'));
    }

    public function store(StoreUpdateAlunoFormRequest $request)
    {

        $turmas = TurmaModel::create([
            'nome' => $request->input('nome'),
            'observacoes' => $request->input('observacoes'),
        ]);

        return redirect()->route('index_turma');
    }


    public function update(Request $request, $id)
    {
        if (!$turmas = TurmaModel::find($id)) {
            return redirect()->route('index_turma');
        }
        $turmas->nome = $request->input('nome');
        $turmas->observacao = $request->input('observacao');
        
        $turmas->save();

        return redirect()->route('index_turma');
    }

    public function destroy($id)
    {
        if (!$turmas = TurmaModel::find($id))
            return redirect()->route('index_turma');

        $turmas->delete();

        return redirect()->route('index_turma');
    }
}
