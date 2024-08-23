<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    private $contactos = [];

    public function index()
    {
        return view('contactos', ['contactos' => $this->contactos]);
    }

    public function registrarContacto(Request $request)
    {
        $contacto = [
            'nombre' => $request->input('nombre'),
            'telefono' => $request->input('telefono'),
            'direccion' => $request->input('direccion')
        ];

        $this->contactos[] = $contacto;

        return view('contactos', ['contactos' => $this->contactos]);
    }
}
