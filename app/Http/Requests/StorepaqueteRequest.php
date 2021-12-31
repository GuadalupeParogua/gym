<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorepaqueteRequest extends FormRequest
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
            'nombre' => 'required|max:20',
            'descripcion' => 'nullable|max:50',
            'precio' => 'required',
            'duracion' => 'required', //tipo fecha (hasta que fecha durara el paquete)
            'estado',
        ];
    }
}
