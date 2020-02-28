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

    public function enviar_contacto(Request $request)
    {

        $reglas = [
            "apellido" => "required|string",
            "nombre" => "required|string",
            "empresa" => "required|string",
            "cuit" => "required|numeric",
            "localidad" => "required|string",
            "telefono" => "required",
            "email" => "required"
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un nombre.",
            "required" => "El campo :attribute es necesario.",
            "numeric" => "El :attribute debe ser numerico.",
        ];

        $this->validate($request, $reglas, $mensajes);

        $newMail = new ContactEmail();

        $newMail->apellido = $request["apellido"];
        $newMail->nombre = $request["nombre"];
        $newMail->empresa = $request["empresa"];
        $newMail->cuit = $request["cuit"];
        $newMail->localidad = $request["localidad"];
        $newMail->telefono = $request["telefono"];
        $newMail->email = $request["email"];
        $newMail->consulta = $request["consulta"];

        $newMail->save();
        return view('enviado');
    }


    public function precalificacion(Request $request)
    {

        // $reglas = [
        //     "apellido" => "required|string",
        //     "nombre" => "required|string",
        //     "empresa" => "required|string",
        //     "cuit" => "required|numeric",
        //     "localidad" => "required|string",
        //     "telefono" => "required",
        //     "email" => "required"
        // ];

        // $mensajes = [
        //     "string" => "El campo :attribute debe ser un nombre.",
        //     "required" => "El campo :attribute es necesario.",
        //     "numeric" => "El :attribute debe ser numerico.",
        // ];

        // $this->validate($request, $reglas, $mensajes);

        // $newPrecalificacion = new ContactEmail();

        // $newPrecalificacion->bigIncrements('id')->unique();
        // $newPrecalificacion->char('nombre_y_apellido', 255)->nullable();
        // $newPrecalificacion->char('email', 255)->nullable();
        // $newPrecalificacion->char('telefono', 255)->nullable();
        // $newPrecalificacion->char('celular', 40)->nullable();
        // $newPrecalificacion->char('empresa', 255)->nullable();
        // $newPrecalificacion->char('cuit', 40)->nullable();
        // $newPrecalificacion->char('rubro', 255)->nullable();
        // $newPrecalificacion->char('codigo_afip', 255)->nullable();
        // $newPrecalificacion->char('balance', 255)->nullable();
        // $newPrecalificacion->char('nomina', 255)->nullable();
        // $newPrecalificacion->char('actividad', 255)->nullable();
        // $newPrecalificacion->timestamps();


        // $newPrecalificadion->save();
        \Mail::send('emails.contacto', [
            'name' => $request->get("nombre_y_apellido"),
            'mail' => $request->get("email"),
            'mensaje' => $request->get("message")
        ], function ($message) {
            $message->to('elzeke55@gmail.com', "The Music Company")->subject('Solicitud de contacto');
        });
        // return redirect("/")->with("status", "success");
        return view('enviado');
    }

}
