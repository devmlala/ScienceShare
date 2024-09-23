<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMaterialRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Permitir que todos os usuários possam fazer a requisição
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'fonte_url' => 'nullable|url',
            'subcategories' => 'required|array',
            'subcategories.*' => 'exists:subcategories,id', // Validar cada subcategoria
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O título é obrigatório.',
            'description.required' => 'A descrição é obrigatória.',
            'fonte_url.url' => 'A URL deve ser um link válido.',
            'subcategories.required' => 'Você deve selecionar ao menos uma subcategoria.',
        ];
    }
}
