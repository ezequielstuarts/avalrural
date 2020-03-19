<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactEmail;
use App\Noticia;
use App\ContactPrecalificate;
use App\Http\resources\ContactEmail as MensajesResource;
use App\Http\resources\Noticias as NoticiasResource;
use App\Http\resources\Precalificacion as PrecalificacionResource;

class ApiController extends Controller
{
    public function show_mensajes()
    {
        $mensajes = ContactEmail::all();
        return MensajesResource::collection($mensajes);
    }

    public function show_mensajes_byid($id)
    {
        $mensajes = ContactEmail::find($id);
        return new MensajesResource($mensajes);
    }

    public function show_noticias()
    {
        $noticias = Noticia::all();
        return NoticiasResource::collection($noticias);
    }

    public function show_noticias_byid($id)
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

    public function show_precalificaciones()
    {
        $precalificaciones = ContactPrecalificate::all();
        return PrecalificacionesResource::collection($precalificaciones);
    }

    public function show_precalificacion_byid($id)
    {
        $precalificacion = ContactPrecalificate::find($id);
        if($precalificacion)
        {
            return new precalificacionResource($precalificacion);
        }
        else
        {
            return response()->json(['Error' => 'El Id: '.$id. ' no contiene informacion'], 404);
        }
    }
}
