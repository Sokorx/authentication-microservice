<?php

namespace App\Http\Requests\Authentication;


use Illuminate\Foundation\Http\FormRequest;

class ResendVerificationMailRequest extends FormRequest
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

            'user_reference' => 'required|exists:users,reference|max:255',
            'app_reference' => 'required|exists:apps,reference|max:255',
        ];
    }

    public function bodyParameters()
    {
        return [

            'user_reference' => [
                'description' => 'Reference of user that wants to  verify their email',
            ],
            'app_reference' => [
                'description' => 'Reference of app that wants to  verify user',
            ],



        ];
    }
}
