<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CardController;
use App\http\Controllers\ColunaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro_aviso', [ColunaController::class, 'cadastro_html'])->name('cadastro_aviso');