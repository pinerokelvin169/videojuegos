<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideojuegosController;


Route::get('/', function () {
    return redirect('/videojuegos');
});

Route::resource('videojuegos', VideojuegosController::class);
