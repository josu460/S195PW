<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarLibro extends FormRequest
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
        return [
            'isbn' => 'required|min:13|max:50',
            'titulo' => 'required|min:5|max:150',
            'autor' => 'required|min:5|max:150',
            'pagina' => 'required|integer|min:1|max:1000',
            'anou' => 'required|integer|min:4|max:2024',
            'editorial' => 'required|min:5|max:150',
            'email' => 'required|email:rfc,dns'
        ];
    }
}
