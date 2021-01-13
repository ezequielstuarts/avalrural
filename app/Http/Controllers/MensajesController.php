<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Mensaje as ResourcesMensaje;
use App\Mensaje;

class MensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getMensajes()
    {
        $mensajes = Mensaje::all();
        $mensajesNoLeidos = Mensaje::where("read", "=", "0")->get();
        return response()->json(['mensajes' => $mensajes, 'mensajesNoLeidos' => $mensajesNoLeidos]);
    }

    // Responder
    public function update(Request $request, Mensaje $mensaje)
    {
        $mensaje->update($request->all());
        return response()->json($mensaje);
    }

    public function read($id)
    {
        $mensaje = Mensaje::find($id);
        $mensaje->read = 1;
        $mensaje->save();
        return response()->json($mensaje);
    }

    public function responder($id)
    {
        $mensaje = Mensaje::find($id);
        if ($mensaje->status) {
            $mensaje->status = 0;
        } else {
            $mensaje->status = 1;
        }
        $mensaje->save();
        return response()->json($mensaje);
    }

    public function destroy($id)
    {
        $mensaje = Mensaje::find($id);
        $mensaje->delete();
        return response()->json(NULL, 204);
    }
}
