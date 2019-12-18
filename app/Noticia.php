<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    public $table = "noticias";
    //public $primarykey = "id";
    //public $timestamps = "";
    protected $fillable = ['title', 'subtitle', 'content', 'date', 'img_preview', 'img_noticia', 'created_at', 'updated_at'];
}


