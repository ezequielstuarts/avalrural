<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\NoticiaHide;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class noticiasController extends Controller
{
    public function __construct()
    {
        Carbon::setlocale('es');
    }

    public function index()
    {
        $noticias = Noticia::orderBy('date', 'DESC')->paginate(4);
        return view ("todasLasNoticias", ['noticias' => $noticias]);
    }

    public function verNoticia($slug)
    {
            $noticia = Noticia::where('slug', $slug)->first();
            return view ("noticia", ['noticia' => $noticia]);
    }



    public function tablaDeNoticias()
    {
        $totalNoticias = count(Noticia::get());

        $noticias = Noticia::orderBy('date', 'DESC')->get();
        return view ("admin.listadoNoticias", ['noticias' => $noticias, 'totalNoticias' => $totalNoticias]);
    }

    public function create()
    {
        $date = Carbon::now();
        return view('admin.nueva_noticia', ['date' => $date]);
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
            "required" => "Debe ingresar :attribute de la noticia.",
        ];

        $this->validate($request, $reglas, $mensajes);
        
        $carpeta = 'img_noticias';

        $rutaPreview = $request->file("img_preview")->store('imagenes/'.$carpeta, 'public');
        $nombrePreview = basename($rutaPreview);


        $rutaImg = $request->file("img_noticia")->store('imagenes/'.$carpeta, 'public');
        $nombreImagen = basename($rutaImg);

        $newNoticia = new Noticia();

        $newNoticia->title = $request["title"];
        $newNoticia->subtitle = $request["subtitle"];
        $newNoticia->content = $request["content"];
        $newNoticia->date = $request["date"];
        $newNoticia->slug = str_slug($request["title"]);

        $newNoticia->created_at = Carbon::now();

        $newNoticia->img_preview = $nombrePreview;
        $newNoticia->img_noticia = $nombreImagen;
        $newNoticia->modified_by = (auth()->user()->name);


        $newNoticia->save();
        return redirect('/admin');

    }

    public function edit($slug)
    {
        $date = Carbon::now();
        $noticia = Noticia::where('slug', $slug)->first();
        return view ("admin.edit", ['noticia' => $noticia, 'date' => $date]);
    }

    public function update(Request $request, $id)
    {
            $reglas = [
                "title" => "required|string",
                // "subtitle" => "required|string",
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

                $basename_preview = basename($request->file("img_preview")->store('public/imagenes/img_noticias/'));

                $img_preview = $noticia['img_preview'];
                Storage::delete('public/imagenes/img_noticias/'.$img_preview);
                $diff["img_preview"] = $basename_preview;
            }
            if ($request->has('img_noticia')) {
                $basename_img = basename($request->file("img_noticia")->store('public/imagenes/img_noticias'));
                $img_noticia = $noticia['img_noticia'];
                Storage::delete('public/imagenes/img_noticias/'.$img_noticia);
                $diff["img_noticia"] = $basename_img;
            }

            $noticia->modified_by = (auth()->user()->name);
            $diff['slug'] = str_slug($request["title"]);
            $noticia->update($diff);
            return redirect()->route('admin')->with('mensaje', 'Noticia Actualizada');

    }

    public function hide(Request $request, $id)
    {

        $noticia = Noticia::find($id);

        $hideNoticia = new NoticiaHide();

        $hideNoticia->title = $noticia->title;
        $hideNoticia->subtitle = $noticia->subtitle;
        $hideNoticia->content = $noticia->content;
        $hideNoticia->date = $noticia->date;
        $hideNoticia->img_preview = $noticia->img_preview;
        $hideNoticia->img_noticia = $noticia->img_noticia;
        $hideNoticia->slug = $noticia->slug;
        $hideNoticia->modified_by = (auth()->user()->name);

        $hideNoticia->save();
        $noticia->delete();

        return redirect()->route('admin')->with('mensaje', 'Se ocuto la noticia');
    }
}
