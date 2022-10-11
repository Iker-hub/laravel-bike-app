<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BikeEditRequest extends FormRequest
{

    function attributes() {
        return [
            'nombre' => 'nombre de la bicicleta',
            'precio' => 'precio de la bicicleta',
        ];
    }
    
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    function messages() {
        $gte = 'El campo :attribute debe ser mayor o igual que :value';
        $lte = 'El campo :attribute debe ser menor o igual que :value';
        $max = 'El campo :attribute no puede tener más de :max caracteres';
        $min = 'El campo :attribute no puede tener menos de :min caracteres';
        $numeric = 'El campo :attribute debe ser numérico';
        $required = 'El campo :attribute es obligatorio';

        return [
            'nombre.max'      => $max,
            'nombre.min'      => $min,
            'nombre.required' => $required,
            'precio.gte'      => $gte,
            'precio.lte'      => $lte,
            'precio.numeric'  => $numeric,
            'precio.required' => $required,
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required|min:2|max:100',
            'precio' => 'required|numeric|gte:0.00|lte:9999999.99',
        ];
    }
}
