<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class homeController extends Controller
{

    public function index()
    {
        $noticias = Noticia::orderBy('id', 'DESC')->take(3)->get();
        return view ("home", ['noticias' => $noticias]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
