<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    public $table = "noticias";
    //public $primarykey = "id";
    //public $timestamps = "";
    public $guarded = ['title', 'subtitle', 'date', 'img_preview', 'img_noticia'];
}
