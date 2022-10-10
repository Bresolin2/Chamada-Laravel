<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/index', [AlunoController::class, 'index'])->name('index');
    Route::get('/alunos/cadastrar', [AlunoController::class, 'create'])->name('create');
    Route::get('/visualizar/{id}', [AlunoController::class, 'show'])->name('show');
    
});

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';
