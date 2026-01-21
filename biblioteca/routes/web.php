<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

// Rutas para el controlador LibroController
Route::resource('libros', LibroController::class);
