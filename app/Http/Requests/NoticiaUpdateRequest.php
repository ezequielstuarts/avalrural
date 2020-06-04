<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiaUpdateRequest extends FormRequest
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
    public function rules()
    {
        return [
            'date' => 'required',
            'title' => 'required|unique:noticias,title,' . $this->id,
        ];

        if($this->get('img_miniature'))
            $rules = array_merge($rules, ['img_miniature' => 'image|mimes:jpg,jpeg,png']);
            return $rules;

            if($this->get('img_noticia'))
            $rules = array_merge($rules, ['img_noticia' => 'image|mimes:jpg,jpeg,png']);
            return $rules;
    }
}