<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/index', [AlunoController::class, 'index'])->name('index');
});


Route::get('/index', function () {
    return view('index');
});

require __DIR__ . '/auth.php';
