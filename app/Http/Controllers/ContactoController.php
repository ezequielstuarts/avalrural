<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\ContactEmail;
use App\ContactPrecalificate;
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
                "acepta" => "accepted",
                // 'g-recaptcha-response' => new Captcha()
            ],
            $messages
        );

        // $this->Validator($request, $mensajes);

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


            $subject = "Asunto del correo";
            $for = "elzeke55@gmail.com";
            Mail::send('email.formulario_de_contacto',$request->all(),
            function($msj) use($subject,$for){
                $msj->from("elzeke55@gmail.com","Mensaje desde el fomulario de contacto de Aval Rural");
                $msj->subject($subject);
                $msj->to($for);
            });
            
            $response = ['success' => 'Hemos enviado tu mnensaje'];
        }
        return response()->json($response,200);

        
    }


    public function precalificacion(Request $request)
    {

        $messages = [
            "string" => "El campo :attribute debe ser un nombre.",
            "required" => "El campo :attribute es necesario.",
            "numeric" => "El :attribute debe ser numerico.",
        ];
        $Validator = Validator::make(
            $request->all(),
            [
                "NombreYApellido" => "required|string",
                "Email" => "required",
                "Telefono" => "required|numeric",
                "Celular" => "required|numeric",
                "Empresa" => "required|string",
                "CUIT" => "required|numeric",
                "Rubro" => "required|string",
                "AFIP" => "required|string",
                "Actividad" => "required|string",
                "Acepta" => "accepted",
                // 'file' => 'required|mimes:doc,docx,pdf',
            ],
            $messages
        );


        if($Validator->fails()) {
            $response = $Validator->messages();
        } else {
            
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
            
            if(isset($request->file)) {
                $rutabalance = $request->file("Balance")->store('precalificaciones/balancesynominas/', 'public');
                $nombrebalance = basename($rutabalance);

                $rutanomina = $request->file("Nomina")->store('precalificaciones/balancesynominas/', 'public');
                $nombrenomina = basename($rutanomina);

                $newPrecalificacion->balance = $nombrebalance;
                $newPrecalificacion->nomina = $nombrenomina;
            }


            $newPrecalificacion->save();

            $subject = "Asunto del correo";
            $for = "elzeke55@gmail.com";
            Mail::send('email.formulario_de_precalificaciones',$request->all(),
            function($msj) use($subject,$for){
                $msj->from("elzeke55@gmail.com","Mensaje desde el fomulario de contacto de Aval Rural");
                $msj->subject($subject);
                $msj->to($for);
            });
            
            $response = ['success' => 'Hemos enviado tu mnensaje'];
        }
        return response()->json($response,200);
    }

}
