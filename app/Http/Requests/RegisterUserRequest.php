<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'string|nullable|max:255',
            'phone_number' => 'string|required|min:8|max:15',
            'email' => [
                'required', 'max:255',
                Rule::unique('app_users', 'email')->where(function ($query) {
                    return $query->where('app_reference', $this->app_reference);
                })
            ],
            'app_reference' => 'required|exists:apps,reference|max:255',
            'password' => 'required|string|max:255',
        ];
    }

    public function bodyParameters()
    {
        return [
            'first_name' => [
                'description' => 'App user first name',
                'example' => 'John',

            ],
            'last_name' => [
                'description' => 'App user last name',
                'example' => 'Doe',

            ],
            'middle_name' => [
                'description' => 'App user last name',
                'example' => '',
            ],
            'email' => [
                'description' => 'App user email',
                'example' => 'johndoe342@gmail.com',
            ],
            'phone_number' => [
                'description' => 'App user phone',
                'example' => '08101209762',
            ],
            'app_reference' => [
                'description' => 'Reference of app that wants to register the user',
            ],
            'password' => [
                'description' => 'User password',
            ],

        ];
    }
}
