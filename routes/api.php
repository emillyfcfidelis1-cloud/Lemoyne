<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ColunaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/funcionario_cadastro', [FuncionarioController::class, 'funcionario_cadastro'])->name('funcionario_cadastro');
Route::get('/ver_funcionario', [FuncionarioController::class, 'ver_funcionario'])->name('ver_funcionario');
Route::get('/listar_funcionario', [FuncionarioController::class, 'listar_funcionario'])->name('listar_funcionario');
Route::put('/alterar_funcionario', [FuncionarioController::class, 'alterar_funcionario'])->name('alterar_funcionario');
Route::delete('/deletar_funcionario', [FuncionarioController::class, 'deletar_funcionario'])->name('deletar_funcionario');
Route::post('/coluna_cadastro', [ColunaController::class, 'coluna_cadastro'])->name('coluna_cadastro');

