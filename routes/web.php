<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;


Route::get('/', function () {
    return redirect('/expenses');
});

 
Route::resource('expenses', ExpenseController::class);