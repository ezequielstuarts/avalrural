<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{

    public function index()
    {
        return view ("contacto");
    }

    public function enviar(Request $request)
    {

        $reglas = [
            "Apellido" => "required|string",
            "Nombre" => "required|string",
            "Empresa" => "required|string",
            "CUIT" => "required|numeric",
            "Localidad" => "required|string",
            "Telefono" => "required|numeric",
            "Email" => "required",
            "Acepta" => "required",
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un nombre.",
            "required" => "El campo :attribute es necesario.",
            "numeric" => "El :attribute dene ser numerico."
        ];

        $this->validate($request, $reglas, $mensajes);



        return redirect()->route('contacto')->with('mensaje', 'El formulario ha sido enviado');;
        // Apellido
        // Nombre
        // Empresa
        // CUIT
        // Localidad
        // Telefono
        // Email
        // Consulta








    }

}
