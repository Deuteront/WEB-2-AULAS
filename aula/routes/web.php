<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;


Route::resource('clientes', ClienteControlador::class);
Route::resource('departamentos', DepartamentosController::class);
Route::resource('produtos', ProdutosController::class);


