<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetalhamentoController;
use App\Http\Controllers\FaturaController;
use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\ReservaEmergenciaController;

Route::get('/', function () {
    return redirect('/home');
});

 
Route::get('home', function () {
    return view('home');
});

Route::resource('receita', ReceitaController::class);
Route::resource('detalhamento', DetalhamentoController::class);
Route::resource('fatura', FaturaController::class);
Route::resource('reservaEmergencia', ReservaEmergenciaController::class);