<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Noticias extends JsonResource
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
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'content' => $this->content,
            'date' => $this->date,
            'img_miniature' => $this->img_miniature,
            'img_noticia' => $this->img_noticia,
            'created_at' => $this->created_at,
            'updated_at'. 'id' => $this->updated_at,
            'modified_by' => $this->modified_by,
        ];
    }
}
