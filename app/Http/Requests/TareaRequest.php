<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TareaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'finalizada' => 'nullable|numeric|min:0|max:1',
            'urgencia' => 'required|numeric|min:0|max:2',
            'fecha_limite' => 'required|date-format:Y-m-d\TH:i'
        ];
    }
}
