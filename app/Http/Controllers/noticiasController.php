<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $noticias = Noticia::orderBy('id', 'DESC')->paginate(4);
        return view ("todasLasNoticias", ['noticias' => $noticias]);
    }

    public function listado()
    {
        $noticias = Noticia::orderBy('id', 'DESC')->get();
        return view ("admin/admin", ['noticias' => $noticias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("nueva_noticia");
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
            "img_preview" => "required|file",
            "img_noticia" => "required|file",
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
        $newNoticia->content = $request["content"];
        $newNoticia->date = $request["date"];

        $newNoticia->img_preview = $nombrePreview;
        $newNoticia->img_noticia = $nombreImagen;

        $newNoticia->save();
        return redirect('admin/nueva_noticia');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function verNoticia($id)
    {
            $noticia = Noticia::find($id);
            return view ("noticia", ['noticia' => $noticia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticia = Noticia::find($id);
            return view ("admin.edit", ['noticia' => $noticia]);
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
            $noticia = Noticia::find($id);
            $diff = array_diff($request->toArray(), $noticia->toArray());

            $basename_preview = basename($request->file("img_preview")->store("public"));
            $basename_img = basename($request->file("img_preview")->store("public"));


            if ($request->has('img_preview')) {
                $diff["img_preview"] = $basename_preview;
            }
            if ($request->has('img_noticia')) {
                $diff["img_noticia"] = $basename_img;
            }
            $noticia->update($diff);
            return redirect()->route('admin', ['noticia' => $noticia])->with('mensaje', 'Noticia Actualizada');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $formulario)
    {
        $id = $formulario['id'];
        $noticia = Noticia::find($id);

        $img_preview = $noticia['img_preview'];
        $img_noticia = $noticia['img_noticia'];

        Storage::delete('public/'.$img_preview);
        Storage::delete('public/'.$img_noticia);
        $noticia->delete();

        return redirect('/admin');
    }
}
