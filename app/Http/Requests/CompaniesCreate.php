<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompaniesCreate extends FormRequest
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
            'nombre' =>  'required',
            'slug' =>  'required|unique:companies',
            'descripcion' =>  'required',
            'status' =>  'required',
        ];

    }
    public function messages()
    {
        return [
            'nombre.required' =>  'Ingresá el nombre de la empresa',
            'slug.required' =>  'Ingresá el slug de la empresa',
            'slug.unique' =>  'El slug debe ser único',
            'descripcion.required' =>  'Ingresá la descripción de la empresa',
            'status.required' =>  'Debés seleccionar un estatus',
        ];
    }
}
