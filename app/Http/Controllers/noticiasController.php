<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use Carbon\Carbon;

class noticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::orderBy('id', 'DESC')->get();
        return view ("noticias", ['noticias' => $noticias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backofice.nueva_noticia");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $reglas = [
            "title" => "required|string",
            "subtitle" => "required|string",
            //"img_noticia" => "file",
            //"favorite_movie_id" => "required"
        ];
        $mensajes = [
            "string" => "El campo :attribute debe ser un nombre.",
            "required" => "El campo :attribute es necesario.",
        ];

        $this->validate($request, $reglas, $mensajes);

        $now = Carbon::now();
        
        $rutaPreview = $request->file("img_preview")->store("public");
        $nombrePreview = basename($rutaPreview);
        
        
        $rutaImg = $request->file("img_noticia")->store("public");
        $nombreImagen = basename($rutaImg);
        
        $newNoticia = new Noticia();
        
        $newNoticia->title = $request["title"];
        $newNoticia->subtitle = $request["subtitle"];
        $newNoticia->date = $request["fecha"];
        
        $newNoticia->img_preview = $nombrePreview;
        $newNoticia->img_noticia = $nombreImagen;
        
        $newNoticia->save();
        return redirect('nueva_noticia');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
