<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mensaje;
use App\Http\resources\Mensajes as MensajesResource;

class ApiController extends Controller
{
    public function show()
    {
        $mensajes = Mensaje::all();
        return MensajesResource::collection($mensajes);
    }

    public function showbyid($id)
    {
        $mensajes = Mensaje::find($id);
        return new MensajesResource($mensajes);
    }
}
