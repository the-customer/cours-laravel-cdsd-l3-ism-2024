<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            "titre"=> "required|string|min:5|max:100",
            "description"   => "required",
            "image" =>"sometimes|url"
        ];
    }
    public function messages(): array
    {
       return [
        "titre.required"    => "Le titre est requis",
        "image.url"   => "L'image doit etre un url"
        //.....
       ];
    }
}
