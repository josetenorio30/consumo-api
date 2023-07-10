<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);
//ruta para mostrar las publicaiones del usuario consumiendo la funcion show de la clase WelcomeController
Route::get('/usuarios/{id}', [WelcomeController::class, 'show']);

//ruta para mostrar la informacion del usuario al cual le dimos click en la tabla

Route::name('datos')->get('/datos/{id}', [WelcomeController::class, 'datos']);

//ruta para mostrar un post especifico seleccionado desde la vista de todas las publicaiones
Route::name('post')->get('/post/{id}', [WelcomeController::class, 'post']);


