<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tablaDeNoticias()
    {
        $noticias = Noticia::orderBy('id', 'DESC')->get();
        return view ("admin.admin", ['noticias' => $noticias]);
    }

    public function create()
    {
        return view('admin.nueva_noticia');
    }


    public function store(Request $request)
    {

        $reglas = [
            "date" => "required",
            "title" => "required",
            "img_preview" => "required|file",
            "img_noticia" => "required|file",
        ];
        $mensajes = [
            "required" => "Debe ingresar la :attribute de la noticia.",
        ];

        $this->validate($request, $reglas, $mensajes);

        //$now = Carbon::now();

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
        return redirect('/admin');

    }

    public function edit($id)
    {
        $noticia = Noticia::find($id);
            return view ("admin.edit", ['noticia' => $noticia]);
    }

    public function update(Request $request, $id)
    {
            $reglas = [
                "title" => "required|string",
                "subtitle" => "required|string",
                //"img_preview" => "required|file",
                //"img_noticia" => "required|file",
                //"favorite_movie_id" => "required"
            ];
            $mensajes = [
                "string" => "El campo :attribute debe ser un nombre.",
                "required" => "El campo :attribute es necesario.",
            ];


            $this->validate($request, $reglas, $mensajes);

            $noticia = Noticia::find($id);
            $diff = array_diff($request->toArray(), $noticia->toArray());

            if ($request->has('img_preview')) {
                $basename_preview = basename($request->file("img_preview")->store("public"));
                $img_preview = $noticia['img_preview'];
                Storage::delete('public/'.$img_preview);
                $diff["img_preview"] = $basename_preview;
            }
            if ($request->has('img_noticia')) {
                $basename_img = basename($request->file("img_noticia")->store("public"));
                $img_noticia = $noticia['img_noticia'];
                Storage::delete('public/'.$img_noticia);
                $diff["img_noticia"] = $basename_img;
            }

            $noticia->update($diff);
            return redirect()->route('admin')->with('mensaje', 'Noticia Actualizada');

    }

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
