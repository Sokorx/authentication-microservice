<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateLoginHistoryRequest extends FormRequest
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

            'device_id' => 'string|required|max:255',
            'ip_address' => 'string|required|max:255',
            'is_successful' => 'boolean|required',
            'user_reference' => 'required|exists:users,reference|max:255',
        ];
    }



    public function bodyParameters()
    {
        return [

            'device_id' => [
                'description' => 'Device id',
            ],

            'is_successful' => [
                'description' => 'Login attempt status',
            ],
            'ip_address' => [
                'description' => 'User ip address',
            ],
            'user_reference' => [
                'description' => 'User reference',
            ],


        ];
    }
}
