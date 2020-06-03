<?php

namespace App\Http\Controllers;

use App\Mail\Mensajerecibido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
Use App\Precalificacion;
use Mail;
use Barryvdh\DomPDF\Facade as PDF;
use App\Mail\MensajePrecalificate;



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

    public function show($id)
    {
        $precalificacion = Precalificacion::find($id);
        return $precalificacion;
    }

    public function exportPdf() {
        $precalificaciones = Precalificacion::orderBy('created_at', 'DESC')->get();
        $pdf = PDF::loadView('email.pdf-precalificaciones', compact('precalificaciones'));
        return $pdf->download('precalificaciones-recibidas-avalRural.pdf');
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
                'file' => 'file|image|mimes:doc,docx,pdf',
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

            if($request->hasFile("Balance")) {
                $nombrebalance = "Balance-".str_replace(' ', '-',$request["NombreYApellido"]).'-'.time();
                $extension = $request->file('Balance')->extension();
                $file = $request->file("Balance")->storeAs('public/precalificaciones',$nombrebalance.'.'.$extension);
                $newPrecalificacion->balance = $nombrebalance.'.'.$extension;
            }
            if($request->hasFile("Nomina")) {
                $nombrenomina = "Nomina-".str_replace(' ', '-',$request["NombreYApellido"]).'-'.time();
                $extension = $request->file('Nomina')->extension();
                $file2 = $request->file("Nomina")->storeAs('public/precalificaciones',$nombrenomina.'.'.$extension);
                $newPrecalificacion->nomina = $nombrenomina.'.'.$extension;
            }

            $newPrecalificacion->save();
            $mensaje = $request->all();

            // return new MensajePrecalificate($mensaje,$patch);
            Mail::to('e.stuarts@mas54.com')->send(new MensajePrecalificate($mensaje));

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
        if ($mensaje->balance) {
            Storage::delete('public/precalificaciones/'.$mensaje->balance);
        }
        if ($mensaje->nomina) {
            Storage::delete('public/precalificaciones/'.$mensaje->nomina);
        }

        $mensaje->delete();

        return redirect('admin/precalificaciones')->with('mensaje', 'Mensaje Eliminado');
    }
}
