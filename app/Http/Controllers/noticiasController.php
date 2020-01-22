<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class noticiasController extends Controller
{
    public function index()
    {
        $noticias = Noticia::orderBy('id', 'DESC')->paginate(4);
        return view ("todasLasNoticias", ['noticias' => $noticias]);
    }

    public function verNoticia($id)
    {
            $noticia = Noticia::find($id);
            return view ("noticia", ['noticia' => $noticia]);
    }
}
