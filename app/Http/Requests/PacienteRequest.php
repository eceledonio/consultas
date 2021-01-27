<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
            'nombres' => 'required',
            'apellidos' => 'required',
            'sexo' => 'required',
            'dob' => 'required',
            'pais' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'nombres.required' => 'El campo Nombres es obligatorio.',
            'apellidos.required' => 'El campo Apellidos es obligatorio.',
            'sexo.required' => 'El campo Sexo es obligatorio.',
            'dob.required' => 'El campo Fecha de nacimiento es obligatorio.',
            'pais.required' => 'El campo Pais de nacimiento es obligatorio.',
        ];
    }
}
