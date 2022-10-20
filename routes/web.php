<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ChamadaController;
use App\Http\Controllers\TurmaController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::prefix('alunos')->group(function () {
        Route::delete('/delete/{id}', [AlunoController::class, 'destroy'])->name('destroy');
        Route::put('/{id}', [AlunoController::class, 'update'])->name('update');
        Route::get('/editar/{id}', [AlunoController::class, 'edit'])->name('edit');
        Route::get('/index', [AlunoController::class, 'index'])->name('index');
        Route::get('/cadastrar', [AlunoController::class, 'create'])->name('create');
        Route::post('/cadastrado', [AlunoController::class, 'store'])->name('store');
        Route::get('/visualizar/{id}', [AlunoController::class, 'show'])->name('show');
    });
    Route::prefix('turmas')->group(function () {
        Route::delete('/delete/{id}', [TurmaController::class, 'destroy'])->name('destroy_turma');
        Route::put('/{id}', [TurmaController::class, 'update'])->name('update_turma');
        Route::get('/editar/{id}', [TurmaController::class, 'edit'])->name('edit_turma');
        Route::get('/index', [TurmaController::class, 'index'])->name('index_turma');
        Route::get('/cadastrar', [TurmaController::class, 'create'])->name('create_turma');
        Route::post('/cadastrado', [TurmaController::class, 'store'])->name('store_turma');
    });
    Route::prefix('chamada')->group(function() {
        Route::get('/index', [ChamadaController::class, 'index'])->name('index_chamada');
        Route::post('/listarAlunos', [ChamadaController::class, 'listarAlunos'])->name('listarAlunos_chamada');
        Route::post('/salvar_chamada', [ChamadaController::class, 'salvar'])->name('salvar_chamada');
        Route::get('/relatorio', [ChamadaController::class, 'relatorio'])->name('relatorio_chamada');
        Route::post('/relatorios/gera_relatorio', [ChamadaController::class, 'gera_relatorio'])->name('gera_relatorio');
    });
});

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';
