<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mensaje;
use App\ContactPrecalificate;

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

    public function precalificaciones()
    {
        $mensajes = ContactPrecalificate::paginate(10);
        $totalMensajes = count(ContactPrecalificate::get());
        return view ("email.precalificaciones", ['mensajes' => $mensajes, 'totalMensajes' => $totalMensajes]);
    }

    public function destroy_mensaje(Request $formulario)
    {
        $id = $formulario['id'];
        $mensaje = Mensaje::find($id);
        $mensaje->delete();
        return redirect('mensajes')->with('mensaje', 'Mensaje Eliminado');
        
    }
    public function destroy_precalificate(Request $formulario)
    {
        $id = $formulario['id'];
        $mensaje = ContactPrecalificate::find($id);
        $mensaje->delete();
        return redirect('precalificaciones')->with('mensaje', 'Mensaje Eliminado');
        
    }
}
