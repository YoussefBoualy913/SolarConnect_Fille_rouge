<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateserviceRequest extends FormRequest
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
            'title' => ['sometimes','required','string', 'min:3', 'max:255'],

            'price' => ['sometimes','required','numeric','min:0'],
    
            'description' => ['sometimes','required','string','min:10','max:1000' ],

            'category_id' => ['sometimes', 'required', 'exists:categories,id'],

            'duration_value' => ['sometimes','required','integer','min:1'],

            'duration_unit' => ['sometimes','required','in:minutes,hours,days'],

            'image' => ['sometimes','nullable','image','mimes:jpg,jpeg,png,webp','max:2048',],
        ];
    }
}
