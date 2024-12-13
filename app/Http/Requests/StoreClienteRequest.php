<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Nombres' => 'required|string|max:50',
            'Apellidos' => 'required|string|max:50',
            'Correo' => 'required|string|email|max:50',
            'Direccion' => 'required|string|max:255',
            'Contraseña' => 'required|string|min:4|max:20',
        ];
    }
}
