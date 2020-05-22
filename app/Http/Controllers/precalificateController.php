<?php

namespace App\Http\Controllers;

use App\Mail\Mensajerecibido;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
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
        $mensajes = Precalificacion::paginate(10);
        $totalMensajes = count(Precalificacion::get());
        return view ("email.precalificaciones", ['mensajes' => $mensajes, 'totalMensajes' => $totalMensajes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $reglas = [
        //     'NombreYApellido' => 'required',
        //     'Email' => 'required',
        //     'Telefono' => 'required',
        //     'Celular' => 'required',
        //     'Empresa' => 'required',
        //     'CUIT' => 'required',
        //     'Rubro' => 'required',
        // ];
        // $mensajes = [
        //     "required" => "El campo :attribute es necesario.",
        // ];


        // $this->validate($request, $reglas, $mensajes);
        $data = array (
        "NombreYApellido" => $request['NombreYApellido'],
        "Email" => $request['Email'],
        "Telefono" => $request['Telefono'],
        "Celular" => $request['Celular'],
        "Empresa" => $request['Empresa'],
        "CUIT" => $request['CUIT'],
        "Rubro" => $request['Rubro'],
        "AFIP" => $request['AFIP'],
        "Balance" => $request['Balance'],
        "Nomina" => $request['Nomina'],
        "Actividad" => $request['Actividad'],
        "Acepta" => $request['Acepta'],
        );
        
        $subject = "Asunto del correo";
        $for = "elzeke55@gmail.com";
        // dd($request->all());
        Mail::send('email.formulario_de_precalificaciones',$request->all(),
        function($msj) use($subject,$for){
            $msj->from("elzeke55@gmail.com","Mensaje desde el fomulario de precalificate de Aval Rural");
            $msj->subject($subject);
            $msj->to($for);
        });
        return view('enviado');
        // return redirect()->route('index')->with('mensaje', 'Hemos enviado su email');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
