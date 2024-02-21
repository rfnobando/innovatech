<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
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
        $rules = [
            'title' => ['required'],
            'subtitle' => ['required'],
            'body' => ['required'],
        ];
    
        if($this->isMethod('post')) {
            // Solo requiere 'image' en el formulario de creación (POST)
            $rules['image'] = ['required'];
        }
    
        return $rules;
    }
}
