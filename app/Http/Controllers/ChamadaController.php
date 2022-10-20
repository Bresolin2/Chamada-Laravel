<?php

namespace App\Http\Controllers;

use App\Models\ChamadaModel;
use App\Models\TurmaModel;
use Illuminate\Http\Request;

class ChamadaController extends Controller
{
    public function index(Request $request)
    {
        $turmas = TurmaModel::get();
    
        return view('chamada.index', compact('turmas'));
    }

    public function listarAlunos(Request $request) {

        $id_turma = $request->input('selTurma');
        
        $turma = TurmaModel::find($id_turma);
        $alunos = $turma->alunos;
        
        return view('chamada.listarAlunos', compact('alunos', 'turma'));
    }
}
