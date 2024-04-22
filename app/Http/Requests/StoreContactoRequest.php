<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:55|regex:/^[\pL\s]+$/u', // Solo letras del abecedario con o sin acentos, minúsculas o mayúsculas
            'correo_electronico' => 'required|email|unique:contactos|max:40', // Campo 'correo_electronico' requerido, debe ser un correo válido y único en la tabla 'contactos', máximo 255 caracteres
            'telefono' => 'required|digits:10', // Campo 'telefono' requerido y debe tener exactamente 10 dígitos
            'empresa' => 'required|string|max:60', // Campo 'empresa' opcional, de tipo string y máximo 255 caracteres
        ];
    }

   
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede tener más de :max caracteres.',
            'nombre.regex' => 'El nombre solo puede contener letras del abecedario con o sin acentos, minúsculas o mayúsculas.',
            'correo_electronico.required' => 'El correo electrónico es obligatorio.',
            'correo_electronico.email' => 'El correo electrónico debe ser una dirección de correo válida.',
            'correo_electronico.unique' => 'Ya existe un contacto con este correo electrónico.',
            'correo_electronico.max' => 'El correo electrónico no puede tener más de :max caracteres.',
            'telefono.required' => 'El teléfono es obligatorio.',
            'telefono.digits' => 'El teléfono debe tener exactamente :digits dígitos.',
            'empresa.max' => 'El nombre de la empresa no puede tener más de :max caracteres.',
        ];
    }
}
