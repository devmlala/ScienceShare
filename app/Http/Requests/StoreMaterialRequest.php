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
            'fonte_url' => 'nullable|string', // Modificado para string, pois estamos lidando com o caminho do arquivo
            'subcategories' => 'nullable|array', // Tornar não obrigatório caso não haja subcategorias
            'subcategories.*' => 'exists:subcategories,id', // Validar se as subcategorias existem no banco
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O título é obrigatório.',
            'description.required' => 'A descrição é obrigatória.',
            'fonte_url.string' => 'O caminho do arquivo deve ser uma string válida.',
            'subcategories.required' => 'Você deve selecionar ao menos uma subcategoria.',
            'subcategories.*.exists' => 'A subcategoria selecionada não existe.',
        ];
    }
}
