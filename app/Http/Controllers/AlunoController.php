<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAlunoFormRequest;
use App\Models\AlunoModel;
use Illuminate\Http\Request;
use App\Models\TurmaModel;

class AlunoController extends Controller
{

    public function index(Request $request)
    {
        $alunos = AlunoModel::paginate(10);
        return view('index', compact('alunos'));
    }

    public function search(Request $request)
    {
        $paginacao = 10;
        $selectFiltro = $request->input("select_filtro");
        $filtro = $request->input("filtro");

        switch ($selectFiltro) {
            case 1:
                $alunos = AlunoModel::where('id', $filtro)->paginate($paginacao);
                break;
            case 2:
                $alunos = AlunoModel::where('nome', 'LIKE', "%{$filtro}%")->paginate($paginacao);
                break;
            case 3:
                $alunos = AlunoModel::where('email', 'LIKE', "%{$filtro}%")->paginate($paginacao);
                break;
            case 4:
                $alunos = AlunoModel::where('telefone', 'LIKE', "%{$filtro}%")->paginate($paginacao);
                break;
        }
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
        $turmas = TurmaModel::get();
        return view('create', compact('turmas'));
    }

    public function store(StoreUpdateAlunoFormRequest $request)
    {
        dd($request->all());

        $aluno = AlunoModel::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone')
        ]);



        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = $aluno->id . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $alunoUpdate = AlunoModel::find($aluno->id);
            $alunoUpdate->image = $aluno->id . "." . $extension;
            $alunoUpdate->save();
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
        if (!$aluno = AlunoModel::find($id)) {
            return redirect()->route('index');
        }

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = $aluno->id . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $aluno->image = $imageName;
        } else {
            $imageName = null;
        }

        $aluno->nome = $request->input('nome');
        $aluno->email = $request->input('email');
        $aluno->telefone = $request->input('telefone');

        $aluno->save();

        return redirect()->route('index');
    }

    public function destroy($id)
    {
        if (!$alunos = AlunoModel::find($id))
            return redirect()->route('index');

        $alunos->delete();

        return redirect()->route('index')->with('message', 'Aluno deletado com sucesso!');
    }
}
