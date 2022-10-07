<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index() {
        return view('index');
    }

    public function show($id) {
        return view('show', $id);
    }
}
