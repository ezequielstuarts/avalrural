<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Noticia;
use App\Http\resources\Noticias as NoticiasResource;

use App\Mensaje;
use App\Http\resources\Mensaje as MensajesResource;

use App\ContactPrecalificate;
use App\Http\resources\Precalificacion as PrecalificacionResource;

class ApiController extends Controller
{
    public function show_mensajes()
    {
        $mensajes = Mensaje::all();
        return MensajesResource::collection($mensajes);
    }



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

}
