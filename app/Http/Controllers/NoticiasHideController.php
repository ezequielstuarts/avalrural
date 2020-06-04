<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
Use App\NoticiaHide;
Use App\Noticia;

class NoticiasHideController extends Controller
{

    public function index()
    {
        $totalNoticias = count(Noticia::get());
        $noticias = Noticia::orderBy('date', 'DESC')->where('status', 'DRAFT')->get();
        return view ("admin.listadoNoticiasHide", ['noticias' => $noticias, 'totalNoticias' => $totalNoticias]);
    }

    public function visible( $id)
    {
        $noticia = Noticia::find($id);
        $noticia->status = 'PUBLISHED';
        $noticia->modified_by = (auth()->user()->name);
        $noticia->save();

        return redirect()->route('admin.noticiasHide')->with('mensaje', 'Ahora se mostrara la noticia');
    }

    public function destroy(Request $formulario)
    {
        $id = $formulario['id'];
        $noticia = Noticia::find($id);
        if ($noticia->img_miniature){
            Storage::delete('public/imagenes/img_noticias/'.$noticia->img_miniature);
        }
        if ($noticia->img_noticia){
            Storage::delete('public/imagenes/img_noticias/'.$noticia->img_noticia);
        }
        $noticia->delete();
        return redirect()->route('admin.noticiasHide')->with('mensaje', 'Se elimino la noticia');
    }
}
