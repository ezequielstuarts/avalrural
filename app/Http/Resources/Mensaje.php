<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Mensaje extends JsonResource
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
            'status' => $this->status,
            'read' => $this->read,
            'recibido' => $this->created_at->diffForHumans(),
            'created_at' => $this->created_at->format('d-m-Y')
        ];
    }
}
