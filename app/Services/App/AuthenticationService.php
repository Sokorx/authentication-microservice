<?php

namespace App\Services\App;

use Illuminate\Support\Facades\Auth;

class AuthenticationService

{

    protected $user_reference;

    public function loginApp(array $data)
    {


        if (!Auth::attempt($data)) {

            return ['login_successful' => false, 'message' => 'invalid login credentials'];
        }

        $app = auth()->user();
        $token = $app->createToken('APP_LOGIN');
        return ['login_successful' => true, 'token' => $token->plainTextToken];
    }
}
