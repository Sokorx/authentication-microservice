<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\User\UserAuthenticationController;
use App\Http\Controllers\v1\App\AuthenticationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::group(
    ['prefix' => 'v1'],
    function () {



        /**
         * Authenticated Routes
         */
        Route::middleware('auth:sanctum')->group(function () {

            Route::prefix("users")->group(function () {
                Route::post('/register', [UserAuthenticationController::class, 'register']);
            });
        });

        Route::prefix("apps")->group(function () {
            Route::post('/login', [AuthenticationController::class, 'login']);
        });
    }
);
