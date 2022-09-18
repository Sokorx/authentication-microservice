<?php

namespace App\Http\Controllers\v1\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Services\User\AuthenticationService;
use App\Services\User\UserService;

use App\Http\Requests\Authentication\RegisterUserRequest;
use App\Http\Requests\Authentication\UpdateLoginHistoryRequest;
use App\Http\Requests\Authentication\VerifyEmailRequest;
use App\Http\Requests\Authentication\ResendVerificationMailRequest;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\AppUserResource;
use App\Http\Resources\AppLoginHistoryResource;
use Exception;

class UserAuthenticationController extends Controller
{

    public $authentication_service;
    public $user_service;
    public function __construct(AuthenticationService $authentication_service, UserService $user_service)
    {
        $this->authentication_service = $authentication_service;
        $this->user_service = $user_service;
    }


    /**
     * Register App User
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

    /**
     * Update login history
     * @apiResource 200 App\Http\Resources\AppLoginHistoryResource
     * @apiResourceModel App\Models\AppLoginHistory
     * @responseFile 422 responses/validation.error.json
     * @responseFile 500 responses/server.error.json
     * @apiResourceAdditional message="Login history updated" code=200
     */
    public function updateLoginHistory(UpdateLoginHistoryRequest $request)
    {
        try {

            $validated_data  = $request->validated();
            $login_history = $this->user_service->updateAppUserLoginHistory($validated_data);
            return ApiResponse::validResponse(
                'Login history updated',
                new AppLoginHistoryResource($login_history),
                200
            );
        } catch (Exception $e) {
            Log::error("Error updating login history", [
                "message" => $e->getMessage(),
                "payload" => $request->all()
            ]);
            return ApiResponse::errorResponse('Server error', 500, $e);
        }
    }


    /**
     * Verify Email for App User
     * @response 200 {
     *  "message": 'App user verified successfull',
     *  "data": null,
     *  "code": 200
     * }
     * @response 403 {
     * "message": "Expired verification token",
     *`"code": 403,
     *"error_debug": null
     * }
     * @responseFile 422 responses/validation.error.json
     * @responseFile 500 responses/server.error.json
     */
    public function verifyEmail(VerifyEmailRequest $request)
    {
        try {

            $validated_data  = $request->validated();
            $response = $this->authentication_service->verifyAppUserEmail($validated_data);

            if (!$response['verified']) {
                return ApiResponse::errorResponse($response['message'], 403, null);
            }
            return ApiResponse::validResponse(
                $response['message'],
                null,
                200
            );
        } catch (Exception $e) {
            Log::error("Error verifying app user", [
                "message" => $e->getMessage(),
                "payload" => $request->all()
            ]);
            return ApiResponse::errorResponse('Server error', 500, $e);
        }
    }

    /**
     * Resend app user verification email
     * @response 200 {
     *  "message": 'Verification mail has been resent.',
     *  "data": null,
     *  "code": 200
     * }
     * @response 403 {
     * "message": "App user already verified",
     *`"code": 403,
     *"error_debug": null
     * }
     * @responseFile 422 responses/validation.error.json
     * @responseFile 500 responses/server.error.json
     */
    public function resendVerificationMail(ResendVerificationMailRequest $request)
    {
        try {

            $validated_data  = $request->validated();
            $response = $this->authentication_service->resendAppUserVerificationMail($validated_data);

            if (!$response['sent_email']) {
                return ApiResponse::errorResponse($response['message'], 403, null);
            }
            return ApiResponse::validResponse(
                $response['message'],
                null,
                200
            );
        } catch (Exception $e) {
            Log::error("Error resending verification mail", [
                "message" => $e->getMessage(),
                "payload" => $request->all()
            ]);
            return ApiResponse::errorResponse('Server error', 500, $e);
        }
    }
}
