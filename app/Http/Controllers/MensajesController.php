<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mensaje;

class MensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensajes = Mensaje::paginate(10);
        $totalMensajes = count(Mensaje::get());
        return view ("email.mensajes", ['mensajes' => $mensajes, 'totalMensajes' => $totalMensajes]);
    }

    public function destroy(Request $formulario)
    {
        $id = $formulario['id'];
        $mensaje = Mensaje::find($id);
        $mensaje->delete();
        return redirect('admin/mensajes')->with('mensaje', 'Mensaje Eliminado');   
    }
}
