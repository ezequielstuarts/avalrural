<?php

namespace App\Http\Controllers;

use App\Mail\Mensajerecibido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
Use App\Precalificacion;
use Mail;

class PrecalificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensajes = Precalificacion::orderBy('created_at', 'DESC')->paginate(10);
        $totalMensajes = count(Precalificacion::get());
        return view ("email.precalificaciones", ['mensajes' => $mensajes, 'totalMensajes' => $totalMensajes]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
                'file' => 'mimes:doc,docx,pdf',
            ],
            $messages
        );

        if($Validator->fails()) {
            $response = $Validator->messages();
        } else {
            
            $newPrecalificacion = new Precalificacion();
            $newPrecalificacion->nombre_y_apellido = $request["NombreYApellido"];
            $newPrecalificacion->email = $request["Email"];
            $newPrecalificacion->telefono = $request["Telefono"];
            $newPrecalificacion->celular = $request["Celular"];
            $newPrecalificacion->empresa = $request["Empresa"];
            $newPrecalificacion->cuit = $request["CUIT"];
            $newPrecalificacion->rubro = $request["Rubro"];
            $newPrecalificacion->codigo_afip = $request["AFIP"];
            $newPrecalificacion->actividad = $request["Actividad"];
            
            if($request->file("Balance")) {
                $rutabalance = $request->file("Balance")->store('precalificaciones/balancesynominas/', 'public');
                $nombrebalance = basename($rutabalance);
                $newPrecalificacion->balance = $nombrebalance;
            }
            
            if($request->file("Nomina")) {
                $rutanomina = $request->file("Nomina")->store('precalificaciones/balancesynominas/', 'public');
                $nombrenomina = basename($rutanomina);
                $newPrecalificacion->nomina = $nombrenomina;
            }


            $newPrecalificacion->save();

            $subject = "Contacto de precalificacion de Aval Rural";
            $for = "elzeke55@gmail.com";
            Mail::send('email.formulario_de_precalificaciones',$request->all(),
            function($msj) use($subject,$for){
                $msj->from("elzeke55@gmail.com","Mensaje desde el fomulario de precalificaciones");
                $msj->subject($subject);
                $msj->to($for);
            });
            
            $response = ['success' => 'Hemos enviado tu mnensaje'];
        }
        return response()->json($response,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mensaje = Precalificacion::find($id);
        $mensaje->delete();
        return redirect('admin/precalificaciones')->with('mensaje', 'Mensaje Eliminado');
    }
}
