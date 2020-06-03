<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticiaHide extends Model
{
    public $table = "noticias_hide";
    public $primarykey = "id";
    //public $timestamps = "";
    protected $fillable = ['title', 'subtitle', 'content', 'date', 'img_miniature', 'img_noticia', 'created_at', 'updated_at'. 'id', 'modified_by', 'slug'];
}
