<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactEmail;
use App\ContactPrecalificate;
use Mail;

class ContactoController extends Controller
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


        $subject = "Asunto del correo";
        $for = "elzeke55@gmail.com";
        // dd($request->all());
        Mail::send('email.formulario_de_contacto',$request->all(),
        function($msj) use($subject,$for){
            $msj->from("elzeke55@gmail.com","Mensaje desde el fomulario de contacto de Aval Rural");
            $msj->subject($subject);
            $msj->to($for);
        });

        return view('enviado');
    }


    public function precalificacion(Request $request)
    {

        $reglas = [
            "NombreYApellido" => "required|string",
            "Email" => "required",
            "Telefono" => "required|numeric",
            "Celular" => "required|numeric",
            "Empresa" => "required|string",
            "CUIT" => "required|numeric",
            "Rubro" => "required|string",
            "AFIP" => "required|string",
            "Actividad" => "required|string",
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un nombre.",
            "required" => "El campo :attribute es necesario.",
            "numeric" => "El :attribute debe ser numerico.",
        ];

        $this->validate($request, $reglas, $mensajes);


        $newPrecalificacion = new ContactPrecalificate();

        $newPrecalificacion->nombre_y_apellido = $request["NombreYApellido"];
        $newPrecalificacion->email = $request["Email"];
        $newPrecalificacion->telefono = $request["Telefono"];
        $newPrecalificacion->celular = $request["Celular"];
        $newPrecalificacion->empresa = $request["Empresa"];
        $newPrecalificacion->cuit = $request["CUIT"];
        $newPrecalificacion->rubro = $request["Rubro"];
        $newPrecalificacion->codigo_afip = $request["AFIP"];
        $newPrecalificacion->actividad = $request["Actividad"];

        $rutabalance = $request->file("Balance")->store('precalificaciones/balancesynominas/', 'public');
        $nombrebalance = basename($rutabalance);

        $rutanomina = $request->file("Nomina")->store('precalificaciones/balancesynominas/', 'public');
        $nombrenomina = basename($rutanomina);

        $newPrecalificacion->balance = $nombrebalance;
        $newPrecalificacion->nomina = $nombrenomina;

        $newPrecalificacion->save();

        return view('enviado');
    }

}
