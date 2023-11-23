<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            // "email" => ["required","email"],
                "email" => "required|email",
                "mdp"   => "required|min:6|max:25"
        ];
    }

    public function messages(): array
    {
        return [
            "email.required"    => "Breukh : L'email est requis!",
            "email.email"    => "L'email est invalide!!!",
            "mdp.required"  => "Le mot de passe est requis",
            "mdp.min"  => "Le mot de passe doit avoir au min 6 caracteres",
            "mdp.max"  => "Le mot de passe doit avoir au max 25 caracteres",
        ];
    }
}
