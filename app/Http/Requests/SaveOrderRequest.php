<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveOrderRequest extends FormRequest
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
            'servicio' => 'required',
            'cliente' => 'required',
            'equipo' => 'required',
            'descripcion' => 'required|min:15',
            'costoServicio' => 'required|numeric|min:1|max:100000'
        ];
    }
}
