<?php

use App\Http\Controllers\ContactoController;

Route::get('/contactos', [ContactoController::class, 'index']);
Route::post('/registrar-contacto', [ContactoController::class, 'registrarContacto']);
