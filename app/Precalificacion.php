<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precalificacion extends Model
{
    public $table = "precalificate";
    public $primarykey = "id";
    //public $timestamps = "";
    protected $fillable = ['nombre_y_apellido', 'email', 'telefono', 'celular','empresa', 'cuit', 'rubro', 'codigo_afip', 'balance', 'nomina', 'actividad'];
}
