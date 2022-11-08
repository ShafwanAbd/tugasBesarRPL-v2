<?php

use App\Http\Controllers\TubesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/logIn', [UserController::class, 'logIn']);

Route::get('/home', [TubesController::class, 'home']);
Route::get('/home_main', [TubesController::class, 'home_main']);

Route::resource('user', UserController::class);
Route::resource('tugas', TugasController::class);

