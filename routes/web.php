<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/usuarios/{id}', [WelcomeController::class, 'show']);


Route::name('datos')->get('/datos/{id}', [WelcomeController::class, 'datos']);
Route::name('post')->get('/post/{id}', [WelcomeController::class, 'post']);


