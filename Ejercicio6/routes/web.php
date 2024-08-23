<?php

use App\Http\Controllers\CalificacionController;

Route::get('/calificaciones', [CalificacionController::class, 'index']);
Route::post('/calcular-promedio', [CalificacionController::class, 'calcularPromedio']);

