<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
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
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre no puede quedar vacío',
            'email.required' => 'El email no puede quedar vacío',
            'email.unique' => 'El email no puede usarse',
            'email.email' => 'El formato de email es incorrecto',
            'password.required' => 'La contraseña no puede quedar vacio',
            'password.confirmed' => 'Las contraseñas no coinciden',
        ];
    }
}
