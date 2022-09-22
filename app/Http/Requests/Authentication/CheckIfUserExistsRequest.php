<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CheckIfUserExistsRequest extends FormRequest
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
            'email' => 'required|string|max:255',
            'app_reference' => 'required|exists:apps,reference|max:255',
        ];
    }

    public function bodyParameters()
    {
        return [

            'email' => [
                'description' => 'App user email',
                'example' => 'johndoe342@gmail.com',
            ],

            'app_reference' => [
                'description' => 'Reference of app that wants to register the user',
            ],


        ];
    }
}
