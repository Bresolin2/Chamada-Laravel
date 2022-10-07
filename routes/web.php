<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

Route::get('/index', [AlunoController::class, 'index'])->name('index');

Route::get('/', function () {
    return view('welcome');
});
