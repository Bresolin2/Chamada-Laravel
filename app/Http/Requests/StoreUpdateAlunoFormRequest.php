<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAlunoFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->id ?? '';

        $rules = [
            'nome' => 'required|string|max:100|min:3',
            'email' => [
                'required',
                'email',
                'unique:alunos, email, {$id}, id',
            ]
        ];

        if ($this->method('PUT')) {
            $rules['email'] = [
                'nullable',
                'email',
                'unique:alunos'
            ];
        }

        return $rules;
    }
}
