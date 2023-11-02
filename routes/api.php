<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ModelosController;
use App\Http\Controllers\VeiculosController;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    Route::get('me', 'me');
});

Route::controller(MarcasController::class)->group(function (){
    Route::post('registrarMarca','create');
    Route::post('editarMarca','update');
    Route::post('deletarMarca','destroy');
});

Route::controller(ModelosController::class)->group(function (){
    Route::post('registrarModelo','create');
    Route::post('editarModelo','update');
    Route::post('deletarModelo','destroy');
});

Route::controller(VeiculosController::class)->group(function (){
    Route::post('registrarVeiculo','create');
    Route::post('editarVeiculo','update');
    Route::post('deletarVeiculo','destroy');
});
