<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/validate', [LoginController::class, 'validate']);
//$_POST['user'] -> Guarda los datos de campo

Route::get('/dashboard', [LoginController::class, 'dashboard']);