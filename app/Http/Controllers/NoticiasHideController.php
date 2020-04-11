<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
Use App\NoticiaHide;
Use App\Noticia;

class NoticiasHideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalNoticias = count(NoticiaHide::get());

        $noticias = NoticiaHide::orderBy('date', 'DESC')->get();
        return view ("admin.listadoNoticiasHide", ['noticias' => $noticias, 'totalNoticias' => $totalNoticias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(Request $formulario)
    {
        $id = $formulario['id'];
        $noticia = NoticiaHide::find($id);
        $img_preview = $noticia['img_preview'];
        $img_noticia = $noticia['img_noticia'];

        Storage::delete('public/imagenes/img_noticias/'.$img_preview);
        Storage::delete('public/imagenes/img_noticias/'.$img_noticia);
        $noticia->delete();

        // return redirect('/admin');
        return redirect()->route('admin.noticiasHide')->with('mensaje', 'Se elimino la noticia');
    }

    public function visible( $id)
    {

        $noticiaHide = NoticiaHide::find($id);

        $mostrar = new Noticia();

        $mostrar->title = $noticiaHide->title;
        $mostrar->subtitle = $noticiaHide->subtitle;
        $mostrar->content = $noticiaHide->content;
        $mostrar->date = $noticiaHide->date;
        $mostrar->img_preview = $noticiaHide->img_preview;
        $mostrar->img_noticia = $noticiaHide->img_noticia;
        $mostrar->slug = $noticiaHide->slug;
        $mostrar->modified_by = (auth()->user()->name);

        $mostrar->save();
        $noticiaHide->delete();

        return redirect()->route('admin.noticiasHide')->with('mensaje', 'Ahora se mostrara la noticia');
    }
}
