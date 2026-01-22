<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

// Rutas para el controlador LibroController
Route::resource('libros', LibroController::class);

// Ruta para confirmar la eliminación de un libro
Route::get('libros/{libro}/confirm-destroy', [LibroController::class, 'confirmDestroy'])->name('libros.confirm-destroy');