<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dash', function () {
    return view('dash');
});

Route::get('/dashMarcas', function () {
    return view('dashMarcas');
});
Route::get('/cadastroMarcas', function () {
    return view('cadastroMarca');
});
Route::get('/editarMarca/{id}', function ($id) {
    return view('editarMarca', ['id' => $id]);
});

Route::get('/dashModelos', function () {
    return view('dashModelos');
});
Route::get('/cadastroModelo', function () {
    return view('cadastroModelo');
});
Route::get('/editarModelo/{id}', function ($id) {
    return view('editarModelo', ['id' => $id]);
});

Route::get('/dashVeiculos', function () {
    return view('dashVeiculos');
});
Route::get('/cadastroVeiculo', function () {
    return view('cadastroVeiculo');
});
Route::get('/editarVeiculo/{id}', function ($id) {
    return view('editarVeiculo', ['id' => $id]);
});

Route::get('/login', function () {
    return view('login');
})->name('login');
