<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrestataireRequest extends FormRequest
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
           
        'first_name' => ['required', 'string', 'min:2', 'max:50'],
        'last_name'  => ['required', 'string', 'min:2', 'max:50'],

        'email' => ['required', 'email', 'max:255', 'unique:users,email'],

        'ville' => ['required', 'string', 'min:2', 'max:100'],

        'phone' => [
            'required',
            'regex:/^(06|07)[0-9]{8}$/'
        ],
        'password' => [
            'required',
            'string',
            'min:8',
            'confirmed' 
        ],

       
        'company_name' => ['required', 'string', 'max:255'],


        'cin' => [
            'required',
            'file',
            'mimes:pdf',
            'max:5120' 
        ],

        'certification' => [
            'required',
            'file',
            'mimes:pdf',
            'max:5120'
        ],

        'terms' => ['accepted'],
   
        ];
    }
}
