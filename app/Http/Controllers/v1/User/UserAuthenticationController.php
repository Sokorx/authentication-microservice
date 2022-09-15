<?php

namespace App\Http\Controllers\v1\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Services\User\AuthenticationService;
use Knuckles\Scribe\Attributes\ResponseFromApiResource;
use App\Models\AppUser;

use App\Http\Requests\RegisterUserRequest;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\AppUserResource;
use Exception;

class UserAuthenticationController extends Controller
{

    public $authentication_service;
    public function __construct(AuthenticationService $authentication_service)
    {
        $this->authentication_service = $authentication_service;
    }




    /**
     * @apiResource 201 App\Http\Resources\AppUserResource
     * @apiResourceModel App\Models\AppUser
     * @responseFile 422 responses/validation.error.json
     * @responseFile 500 responses/server.error.json
     * @apiResourceAdditional message="App user created,verify email." code=201
     */
    public function register(RegisterUserRequest $request)
    {
        try {

            $validated_data  = $request->validated();
            $app_user = $this->authentication_service->createAppUser($validated_data);
            return ApiResponse::validResponse(
                'App user created,verify email.',
                new AppUserResource($app_user),
                201
            );
        } catch (Exception $e) {
            Log::error("Error registering app user", [
                "message" => $e->getMessage(),
                "payload" => $request->all()
            ]);
            return ApiResponse::errorResponse('Server error', 500, $e);
        }
    }
}
