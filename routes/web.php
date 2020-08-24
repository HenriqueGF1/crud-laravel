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

Route::get("/usuario", "UsuarioController@index");

Route::get("/usuario/cadastrar", "UsuarioController@create");
Route::post("/usuario/novo", "UsuarioController@store");

Route::get("/usuario/editar/{id}", "UsuarioController@editar");
Route::put("/usuario/update/{id}", "UsuarioController@update");

Route::get("/usuario/remover/{id}", "UsuarioController@delete");

Route::fallback(function () {
    return "<h1>Erro Na Rota</h1>";
});
