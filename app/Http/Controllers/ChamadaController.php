<?php

namespace App\Http\Controllers;

use App\Models\ChamadaModel;
use App\Models\TurmaModel;
use Illuminate\Http\Request;

class ChamadaController extends Controller
{
    public function index(Request $request)
    {
        $chamadas = ChamadaModel::paginate(10);
    
        $turmas = TurmaModel::get();
    

        return view('chamada.index', compact('chamadas', 'turmas'));
    }

    public function listarAlunos() {
        
    }
}
