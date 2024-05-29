<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return "Login";
});

Route::get('/register', function(){
    return "Register";
});

Route::get('/dashboard', function () {
    return "Panel de control";
});