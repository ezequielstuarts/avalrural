<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Noticia;
use App\Http\resources\Noticias as NoticiasResource;

use App\Mensaje;
use App\Http\resources\Mensaje as MensajeResource;

use App\Precalificacion;
use App\Http\resources\Precalificacion as PrecalificacionResource;

class ApiController extends Controller
{
    public function getNoticias()
    {
        $noticias = Noticia::all();
        if($noticias)
        {
            return NoticiasResource::collection($noticias);
        }
        else
        {
            return response()->json(['Error' => 'Algo salió mal'], 404);
        }
        
    }

    public function getNoticia($id)
    {
        $noticias = Noticia::find($id);
        if($noticias)
        {
            return new NoticiasResource($noticias);
        }
        else
        {
            return response()->json(['Error' => 'El Id: '.$id. ' no contiene ninguna noticia'], 404);
        }
    }

    public function getPrecalificaciones()
    {
        $precalificaciones = Precalificacion::all();
        if($precalificaciones)
        {
            return PrecalificacionResource::collection($precalificaciones);
        }
        else
        {
            return response()->json(['Error' => 'Algo salió mal'], 404);
        }
        
    }
    public function getPrecalificacion($id)
    {
        $precalificacion = Precalificacion::find($id);
        if($precalificacion)
        {
            return new PrecalificacionResource($precalificacion);
        }
        else
        {
            return response()->json(['Error' => 'El Id: '.$id. ' no contiene ningun mensaje'], 404);
        }
    }
    
    
    public function getMensajes()
    {
        $mensajes = Mensaje::all();
        if($mensajes)
        {
            return MensajeResource::collection($mensajes);
        }
        else
        {
            return response()->json(['Error' => 'Algo salió mal'], 404);
        }
    }
    public function getMensaje($id)
    {
        $mensaje = Mensaje::find($id);
        if($mensaje)
        {
            return new mensajeResource($mensaje);
        }
        else
        {
            return response()->json(['Error' => 'El Id: '.$id. ' no contiene ningun mensaje'], 404);
        }
    }

}
