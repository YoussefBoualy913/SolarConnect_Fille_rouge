<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePrestataireRequest extends FormRequest
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
             'first_name' => ['sometimes','required', 'string', 'min:2', 'max:50'],
        'last_name'  => ['sometimes','required', 'string', 'min:2', 'max:50'],

        'email' => ['sometimes','required', 'email', 'max:255', 'unique:users,email'],

        'ville' => ['sometimes','required', 'string', 'min:2', 'max:100'],

        'phone' => ['sometimes',
            'nullable',
            'regex:/^(06|07)[0-9]{8}$/'
        ],

       
        'company_name' => ['sometimes','nullable', 'string', 'max:255'],


        'cin' => ['sometimes',
            'required',
            'file',
            'mimes:pdf',
            'max:5120' 
        ],

        'certification' => ['sometimes',
            'required',
            'file',
            'mimes:pdf',
            'max:5120'
        ],
        ];
    }
}
