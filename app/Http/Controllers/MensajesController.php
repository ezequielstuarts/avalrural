<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mensaje;
use Barryvdh\DomPDF\Facade as PDF;



class MensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensajes = Mensaje::orderBy('created_at', 'DESC')->paginate(10);
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
    
    public function show($id)
    {
        $mensaje = Mensaje::find($id);
        return $mensaje;
    }

    public function exportPdf() {
        $mensajes = Mensaje::orderBy('created_at', 'DESC')->get();
        $pdf = PDF::loadView('email.pdf-mensajes', compact('mensajes'));
        return $pdf->download('mensajes-recibidos-avalRural.pdf');
    }
}
