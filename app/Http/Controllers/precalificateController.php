<?php

namespace App\Http\Controllers;

use App\Mail\Mensajerecibido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class precalificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        Mail::send('email.welcome', $data, function ($message) {
            $message->from('e.stuarts@gmail.com', 'Desde Aval Formulario de Precalificate');
            $message->to('e.stuarts@gmail.com')->subject('test de envio de email desde aval');
        });

        dd($data);
        return redirect()->route('index')->with('mensaje', 'Hemos enviado su email');
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
        //
    }
}
