<?php

namespace App\Http\Controllers\v1\App;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Services\App\AuthenticationService;

use App\Http\Requests\Authentication\LoginAppRequest;
use Illuminate\Support\Facades\Log;
use Exception;

class AuthenticationController extends Controller
{

    public $authentication_service;
    public function __construct(AuthenticationService $authentication_service)
    {
        $this->authentication_service = $authentication_service;
    }


    /**
     * Login App
     * @response 200 {
     *  "message": 'Login successfull',
     *  "data": {
     *  "token":"########"
     *  },
     *  "code": 200
     * }
     * @response 403 {
     * "message": "invalid login credentials",
     *`"code": 403,
     *"error_debug": null
     * }
     * @responseFile 422 responses/validation.error.json
     * @responseFile 500 responses/server.error.json
     */
    public function login(LoginAppRequest $request)
    {
        try {

            $validated_data  = $request->validated();
            $response = $this->authentication_service->loginApp($validated_data);

            if (!$response['login_successful']) {
                return ApiResponse::errorResponse($response['message'], 403, null);
            }
            return ApiResponse::validResponse(
                'Login successfull',
                ['token' => $response['token']],
                200
            );
        } catch (Exception $e) {
            Log::error("Error logging in  app", [
                "message" => $e->getMessage(),
            ]);
            return ApiResponse::errorResponse('Server error', 500, $e);
        }
    }
}
