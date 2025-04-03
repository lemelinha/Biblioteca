<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class BookCreationRequest extends FormRequest
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
            'title' => 'required|string',
            'author_id' => 'required|string',
            'gender_id' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'cover_url' => 'required|url',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'O Título é obrigatório',
            'title.string' => 'O Título deve ser uma string',
            'author.required' => 'O Autor é obrigatório',
            'author.string' => 'O author deve ser uma string',
            'gender.required' => 'O Gênero é obrigatório',
            'gender.string' => 'O Gênero deve ser uma string',
            'price.required' => 'O Preço é obrigatório',
            'price.numeric' => 'O Preço deve ser um número',
            'description.required' => 'A Descrição é obrigatória',
            'description.string' => 'A Descrição deve ser uma string',
            'cover_url.required' => 'A URL da Capa é obrigatória',
            'cover_url.url' => 'A URL da Capa deve ser uma URL válida',
        ];
    }
}
