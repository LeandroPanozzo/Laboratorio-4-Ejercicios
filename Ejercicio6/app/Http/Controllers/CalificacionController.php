<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    public function index()
    {
        return view('calificaciones');
    }

    public function calcularPromedio(Request $request)
    {
        $calificaciones = $request->input('calificaciones');
        
        // Convertir las calificaciones a flotantes y calcular el promedio
        if (is_array($calificaciones) && count($calificaciones) > 0) {
            $calificaciones = array_map('floatval', $calificaciones);
            $promedio = array_sum($calificaciones) / count($calificaciones);
        } else {
            $promedio = 0;
        }

        return view('resultado', ['promedio' => $promedio]);
    }
}
