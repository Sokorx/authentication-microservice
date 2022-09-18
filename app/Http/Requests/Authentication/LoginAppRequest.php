<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class LoginAppRequest extends FormRequest
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
            'password' => 'required|string',

            'reference' => 'required|string|max:255',
        ];
    }

    public function bodyParameters()
    {
        return [

            'reference' => [
                'description' => 'App reference',
            ],
            'password' => [
                'description' => 'App password',
            ],

        ];
    }
}
