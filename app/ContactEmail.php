<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactEmail extends Model
{
    public $table = "contact_emails";
    public $primarykey = "id";
    //public $timestamps = "";
    protected $fillable = ['apellido', 'nombre', 'empresa', 'cuit', 'localidad', 'telefono', 'email', 'consulta', 'enviado' ];
}
