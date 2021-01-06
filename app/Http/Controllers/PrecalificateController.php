<?php

namespace App\Http\Controllers;

use App\ContactPrecalificate;
use App\Http\Requests\PrecalificateStoreRequest;
use App\Jobs\SendPrecalificateEmailClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
Use App\Precalificacion;

// use Mail;

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
    public function store(PrecalificateStoreRequest $request)
    {
        $newPrecalificacion = new ContactPrecalificate();

        $newPrecalificacion->nombre_y_apellido = $request["nombre"];
        $newPrecalificacion->email = $request["email"];
        $newPrecalificacion->telefono = $request["telefono"];
        $newPrecalificacion->celular = $request["celular"];
        $newPrecalificacion->empresa = $request["empresa"];
        $newPrecalificacion->cuit = $request["cuit"];
        $newPrecalificacion->rubro = $request["rubro"];
        $newPrecalificacion->codigo_afip = $request["afip"];
        $newPrecalificacion->actividad = $request["actividad"];
        $files = [];
        
        if ($request->has("balance")) {
            $rutabalance = $request->file("balance")->store('nominas_y_balances/');
            $nombrebalance = basename($rutabalance);
            $newPrecalificacion->balance = $nombrebalance;
            $enviarNomina = storage_path('app/nominas_y_balances/'.$nombrebalance);
            array_push($files, $enviarNomina);
        }
        if ($request->has("nomina")) {
            $rutanomina = $request->file("nomina")->store('nominas_y_balances/');
            $nombrenomina = basename($rutanomina);
            $newPrecalificacion->nomina = $nombrenomina;
            $enviarBalance = storage_path('app/nominas_y_balances/'.$nombrenomina);
            array_push($files, $enviarBalance);
        }

        $newPrecalificacion->save();

        $subject = "Nueva Precalificacion recibida";
        $for = "e.stuarts@mas54.com";
        $client = $request["email"];
        Mail::send('email.formulario_de_precalificaciones',$request->all(),
        function($msj) use($subject,$files,$for,$client){
            $msj->from("e.stuarts@mas54.com","Mensaje desde el fomulario de precalificate de Aval Rural");
            $msj->subject($subject);
            foreach ($files as $file){
                $msj->attach($file);
            }
            $msj->to($for);
            $msj->to($client);
        });
        SendPrecalificateEmailClient::dispatch($request, $request->email);
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
