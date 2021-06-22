<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultaRequest extends FormRequest
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
            'motivo_consulta' => 'required',
            'pa' => 'nullable|numeric',
            'signos_temperatura' => 'nullable|numeric',
            'signos_fc' => 'nullable|numeric',
            'signos_fr' => 'nullable|numeric',
            'signos_saturacion' => 'nullable|numeric',
            'signos_talla_cms' => 'nullable|numeric',
            'peso' => 'nullable|numeric',
        ];
    }

    public function messages()
    {
        return [
            'motivo_consulta.required' => 'El campo Motivo de consulta es obligatorio.',
            'pa.numeric' => 'El campo P.A solo acepta numeros.',
            'signos_temperatura.numeric' => 'El campo Temperatura solo acepta numeros.',
            'signos_fc.numeric' => 'La Frecuencia Cardiaca solo acepta numeros.',
            'signos_fr.numeric' => 'La Frecuencia Respiratoria solo acepta numeros.',
            'signos_saturacion.numeric' => 'La Saturacion de Oxigeno solo acepta numeros.',
            'signos_talla_cms.numeric' => 'La Talla solo acepta numeros.',
            'signos_peso.numeric' => 'El Peso solo acepta numeros.',
        ];
    }
}
