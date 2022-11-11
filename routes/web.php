<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/logIn', [UserController::class, 'logIn']);
Route::post('/logIn', [UserController::class, 'logInPost']);

Route::get('/home', [HomeController::class, 'home']);
Route::get('/home_main', [HomeController::class, 'home_main']);


Route::get('/user/none', [HomeController::class, 'home_main']);

Route::resource('user', UserController::class);
Route::resource('tugas', TugasController::class);
