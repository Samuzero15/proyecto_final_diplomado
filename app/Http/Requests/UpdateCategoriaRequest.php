<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoriaRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para hacer esta solicitud.
     */
    public function authorize(): bool
    {
        return true;  // Cambiar si necesitas control de acceso a la actualización.
    }

    /**
     * Obtén las reglas de validación que se aplican a la solicitud.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Obtener el ID de la categoría que estamos actualizando
        $categoriaId = $this->route('categoria');  // Esto supone que en la ruta tienes {categoria} como el parámetro de la categoría

        return [
            'nombre' => [
                'required', 
                'string', 
                'max:255', 
                Rule::unique('categorias')->ignore($categoriaId), // Evitar que el nombre sea único, pero ignorando la categoría actual
            ],
            'mostrar' => 'required|in:0,1', // Validación para asegurar que 'mostrar' sea 0 o 1
        ];
    }
}
