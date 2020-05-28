<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\NoticiaHide;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class NoticiasController extends Controller
{
    public function __construct()
    {
        Carbon::setlocale('es');
    }

    public function index()
    {
        $noticias = Noticia::orderBy('date', 'DESC')->where('status', 'PUBLISHED')->paginate(4);
        return view ("todasLasNoticias", ['noticias' => $noticias]);
    }

    public function verNoticia($slug)
    {
            $noticia = Noticia::where('slug', $slug)->first();
            return view ("noticia", ['noticia' => $noticia]);
    }
    
    public function show($slug)
    {
        $noticia = Noticia::where('slug', $slug)->first();
        return view ("admin.verNoticia", ['noticia' => $noticia]);
    }

    public function tablaDeNoticias()
    {
        $totalNoticias = count(Noticia::get());

        $noticias = Noticia::orderBy('date', 'DESC')->where('status', 'PUBLISHED')->get();
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
        
        $carpeta = 'imagenes/img_noticias';

        $newNoticia = new Noticia();
        $newNoticia->title = $request["title"];
        $newNoticia->subtitle = $request["subtitle"];
        $newNoticia->content = $request["content"];
        $date = Carbon::createFromFormat('d-m-Y', $request->date)->toDateString();
        $newNoticia->date = $date;
        $newNoticia->slug = str_slug($request["title"]);
        $newNoticia->created_at = Carbon::now();
        $newNoticia->modified_by = (auth()->user()->name);

        $rutaPreview = $request->file("img_preview")->store($carpeta, 'public');
        $nombrePreview = basename($rutaPreview);
        $rutaImg = $request->file("img_noticia")->store($carpeta, 'public');
        $nombreImagen = basename($rutaImg);

        $newNoticia->img_preview = $nombrePreview;
        $newNoticia->img_noticia = $nombreImagen;

        $newNoticia->save();
        return redirect()->route('admin.noticias');

    }

    public function edit($id)
    {
        $now = Carbon::now();
        $noticia = Noticia::find($id);
        // $dateNoticia = $noticia->date;
        
        return view ("admin.edit", ['noticia' => $noticia, 'now' => $now]);
    }

    public function update(Request $request, $id)
    {
            $reglas = [
                "title" => "required|string",
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

            if ($diff['date']) {
                $date = Carbon::createFromFormat('d-m-Y', $request->date)->toDateTimeString();
                $diff['date'] = $date;
            }

            $noticia->modified_by = (auth()->user()->name);
            $diff['slug'] = str_slug($request["title"]);
            $noticia->update($diff);
            return redirect()->route('admin.noticias.show', $noticia->slug)->with('mensaje', 'Noticia Actualizada');

    }

    public function hide(Request $request, $id)
    {
        $noticia = Noticia::find($id);
        $noticia->status = 'DRAFT';
        $noticia->modified_by = (auth()->user()->name);
        $noticia->save();
        return redirect()->route('admin.noticias')->with('mensaje','Hemos ocultado la noticia.');
    }

}
