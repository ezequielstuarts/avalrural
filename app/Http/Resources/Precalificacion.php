<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Precalificacion extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toJson($request)
    {
        return [
            'id'=> $this->id,
            'nombre_y_apellido'=> $this->nombre_y_apellido,
            'email'=> $this->email,
            'telefono'=> $this->telefono,
            'celular' => $this->celular,
            'empresa' => $this->empresa,
            'cuit'=> $this->cuit,
            'rubro'=> $this->rubro,
            'codigo_afip'=> $this->codigo_afip,
            'balance'=> $this->balance,
            'nomina'=> $this->nomina,
            'actividad'=> $this->actividad,
        ];
    }
}

