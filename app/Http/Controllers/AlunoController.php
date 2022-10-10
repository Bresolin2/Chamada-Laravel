<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAlunoFormRequest;
use App\Models\AlunoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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
    
    public function store(StoreUpdateAlunoFormRequest $request) {
        AlunoModel::create($request->only('nome'));

        return redirect()->route('index');
    }
}
