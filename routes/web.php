<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/validate', [LoginController::class, 'validate']);
//$_POST['user'] -> Guarda los datos de campo

Route::get('/dashboard', [LoginController::class, 'dashboard']);

Route::get('/profile', [LoginController::class, 'profile']);