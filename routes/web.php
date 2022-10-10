<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {

    Route::put('/{id}', [AlunoController::class, 'update'])->name('update');
    Route::get('/editar/{id}', [AlunoController::class, 'edit'])->name('edit');
    Route::get('/index', [AlunoController::class, 'index'])->name('index');
    Route::get('/cadastrar', [AlunoController::class, 'create'])->name('create');
    Route::post('/cadastrado', [AlunoController::class, 'store'])->name('store');
    Route::get('/visualizar/{id}', [AlunoController::class, 'show'])->name('show');
    
});

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';
