<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if (request()->isMethod('post')) {
            return [
                'nombre' => 'required|string',
                'img' => 'required|image',
                'precio' => 'required',
                'stock' => 'required',
                'estado' => 'required',
                'categoria_id' => 'required'
            ];
        } else {
            return [
                'nombre' => 'required|string',
                'img' => 'required|image',
                'precio' => 'required',
                'stock' => 'required',
                'estado' => 'required',
                'categoria_id' => 'required'
            ];
        }
    }

    public function messages()
    {
        if (request()->isMethod('post')) {
            return [
                'nombre' => 'Nombre es requerido',
                'img' => 'Imagen es requerido',
                'precio' => 'Precio es requerido',
                'stock' => 'Stock es requerido',
                'estado' => 'Estado es requerido',
                'categoria_id' => 'Este campo es requerido'
            ];
        } else {
            return [
                'nombre' => 'Nombre es requerido',
                'precio' => 'Precio es requerido',
                'stock' => 'Stock es requerido',
                'estado' => 'Estado es requerido',
                'categoria_id' => 'Campo es requerido'
            ];
        }
    }
}
