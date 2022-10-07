<?php

namespace App\Http\Controllers;

use App\Models\AlunoModel;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index() {
       $alunos = AlunoModel::all();
       
       
    }

    public function show($id) {
        return view('show', $id);
    }
    
}
