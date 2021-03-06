<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ConsultaRequest extends Request
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
            'id_medico'=>'required|numeric|min:1',
            'tipo_consulta'=>'required|string',
            'motivo_consulta'=>'required|string|max:250',
            'historia'=>'string|max:250'
        ];
    }
}
