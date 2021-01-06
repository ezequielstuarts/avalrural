<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiaStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'date.required' => 'La fecha es obligatoria',
            'name.title' => 'El titulo es obligatorio',
            'name.img_preview' => 'La imagen de la noticia es obligatoria.',
            'name.img_noticia' => 'La imagen de la noticia es obligatoria.'
        ];
    }

    public function rules()
    {
        return [
            "date" => "required",
            "title" => "required",
            "img_preview" => "required|file",
            "img_noticia" => "required|file",
        ];
    }
}
