<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsers extends FormRequest
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
            'name' => 'required|max:255',
           
            'password' => 'nullable|confirmed|min:8',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Campo obrigatório!',
           
            'password.min' => 'A Senha deve conter no mínimo 8 caracteres!',
            'password.confirmed' => 'Confirmação deve ser idêntica a senha!',
        ];
    }
    
  
}
