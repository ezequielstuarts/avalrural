<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Mensajes extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'apellido' => $this->apellido,
            'nombre' => $this->nombre,
            'empresa' => $this->empresa,
            'cuit' => $this->cuit,
            'localidad' => $this->localidad,
            'telefono' => $this->telefono,
            'email' => $this->email,
            'consulta' => $this->consulta,
            'recibido' => $this->created_at,
        ];
    }
}
