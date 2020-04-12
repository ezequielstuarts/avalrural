<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\NoticiaHide;
use App\Mensaje;
use App\Precalificacion;


class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () 
    {
        $noticias = Noticia::all();
        $totalNoticiasVisibles = count(Noticia::orderBy('id', 'ASC')->where('status', 'PUBLISHED')->get());
        
        $totalNoticiasOcultas = count(Noticia::orderBy('id', 'ASC')->where('status', 'DRAFT')->get());
        
        $mensajes = Mensaje::All();
        $totalMensajes = count(Mensaje::get());

        $precalificaciones = Mensaje::All();
        $totalPrecalificaciones = count(Precalificacion::get());

        return view ("admin.admin", [
            'noticias' => $noticias,
            'totalNoticiasVisibles' => $totalNoticiasVisibles,
            'totalNoticiasOcultas' => $totalNoticiasOcultas,
            
            'mensajes' => $mensajes,
            'totalMensajes' => $totalMensajes,

            'precalificaciones' => $precalificaciones,
            'totalPrecalificaciones' => $totalPrecalificaciones

            ]);
        
    }

    
}


