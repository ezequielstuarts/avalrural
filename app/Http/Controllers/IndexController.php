<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class IndexController extends Controller
{
    public function index()
    {
        $noticias = Noticia::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->take(3)->get();
        return view ("index", ['noticias' => $noticias]);
    }
}
