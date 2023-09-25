<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


/*
| ==========================
| HOME
| ==========================
*/

Route::get('index', [HomeController::class, 'index']);

Route::get('page/profile', [HomeController::class, 'profile']);
Route::get('page/contact', [HomeController::class, 'contact']);