<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\ContactEmail;
use Mail;
use App\Rules\Captcha;


class ContactoController extends Controller
{

    public function index()
    {
        return view ("contacto");
    }

    public function enviar_contacto(Request $request)
    {
        $messages = [
            "string" => "El :attribute debe ser un nombre.",
            "required" => "Debe complear el campo :attribute.",
            "numeric" => "El :attribute debe ser numérico.",
            "accepted" => "Debe aceptar los términos y condiciones.",
        ];

        $Validator = Validator::make(
            $request->all(),
            [
                "apellido" => "required|string",
                "nombre" => "required|string",
                "empresa" => "required|string",
                "consulta" => "required|string",
                "cuit" => "required|numeric",
                "localidad" => "required|string",
                "telefono" => "required",
                "email" => "required|email",
                "terminosYcondiciones" => "accepted",
                "g-recaptcha-response" => new Captcha()
            ],
            $messages
        );


        if($Validator->fails()) {
            $response = $Validator->messages();
        } else {
            
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


            $subject = "Mensaje desde el fomulario de contacto de Aval Rural";
            $for = "elzeke55@gmail.com";
            Mail::send('email.formulario_de_contacto',$request->all(),
            function($msj) use($subject,$for){
                $msj->from("elzeke55@gmail.com","Menaje desde el fomulario de contacto de Aval Rural");
                $msj->subject($subject);
                $msj->to($for);
            });
            
            $response = ['success' => 'Hemos enviado tu mnensaje'];
        }
        return response()->json($response,200);

        
    }

}
