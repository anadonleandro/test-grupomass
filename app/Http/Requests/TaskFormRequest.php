<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskFormRequest extends FormRequest
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
            'titulo'      => 'required|unique|max:50',
            'descripcion' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'titulo.required'      => 'El campo TITULO es obligatorio',
            'titulo.unique'        => 'El campo TITULO ya existe',
            'titulo.max'           => '50 caracteres es el máximo permitido',
            'descripcion.required' => 'El campo DESCRIPCION es obligatorio',
            'descripcion.max'      => '255 caracteres es el máximo permitido'
        ];
    }
}
