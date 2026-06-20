<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class ProdottoRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=> 'required|min:3',
            'marca'=> 'required',
            'materiale' => 'required',
            'img' => 'required|image' 
        ];
    }
    #[Override]
    public function messages()
    {
        return [
            'title.required'=>'Il nome è obbligatorio',
            'title.min'=>'Il nome richiede più di 3 caratteri',
            'marca.required' =>'La marca è obbligatoria',      
            'materiale.required' => 'Il materiale è obbligatorio',
            'img.required' => "L'immagine è obbligatoria",
            'img.image' => 'Il file deve essere di tipo imagine'
            ];
    }
}
