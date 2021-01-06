<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrecalificateStoreRequest extends FormRequest
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
            "nombre.required" => "El nombre es requerido.",
            "email.required" => "El email es requerido.",
            "cuit.required" => "El cuit es requerido.",
            "cuit.numeric" => "El cuit debe ser numerico.",
            "afip.required" => "El codigo afip es requerido.",
            "afip.numeric" => "El codigo afip debe ser numerico.",
        ];
    }

    public function rules()
    {
        return [
            "nombre" => "required",
            "email" => "required",
            "telefono" => "required|numeric",
            "celular" => "required|numeric",
            "empresa" => "required|string",
            "cuit" => "required|numeric",
            "rubro" => "required",
            "afip" => "required",
        ];
    }
}
