<?php

namespace App\Http\Controllers;

use App\Models\AlunoModel;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index() {
       $alunos = AlunoModel::all();
        return view('index', compact('alunos'));
    }

    public function show($id) {
        if(!$alunos = AlunoModel::find($id))
          return redirect()->route('index');

        return view('show', compact('alunos'));
    }

    public function create() {
        return view('create');
    }
    
}
