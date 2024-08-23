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
        $promedio = array_sum($calificaciones) / count($calificaciones);

        return view('resultado', ['promedio' => $promedio]);
    }
}
