<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactEmail;

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

        //$this->validate($request, $reglas, $mensajes);

        $newMail = new ContactEmail();

        $newMail->apellido = $request["apellido"];
        $newMail->nombre = $request["nombre"];
        $newMail->empresa = $request["empresa"];
        $newMail->cuit = $request["cuit"];
        $newMail->localidad = $request["localidad"];
        $newMail->telefono = $request["telefono"];
        $newMail->email = $request["email"];
        $newMail->consulta = $request["consulta"];

        //dd($newMail);
        $newMail->save();

        return view('enviado');


    }

}
