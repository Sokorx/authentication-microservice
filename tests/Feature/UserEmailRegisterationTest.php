<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\App;
use App\Models\User;
use App\Models\AppUser;

use Carbon\Carbon;


class UserEmailVerificationTest extends TestCase
{
    /**
     * Test successfult verification
     *
     * @return void
     */
    public function testSuccessfulVerification()
    {

        $app = App::factory()->create();
        $user = User::factory()->create();
        $app_user = AppUser::factory()->create([
            'user_reference' => $user->reference,
            'app_reference' => $app->reference,
            'verification_token' => "1234",
            'verification_token_expiry' => Carbon::now()->addMinutes(10),
        ]);


        $response = $this->postJson(
            "/api/v1/users/verify-email",
            [


                "verification_token" => '1234',
                "app_reference" => $app->reference,
                "user_reference" => $user->reference,


            ]

        );

        $response->assertStatus(200)->assertJsonStructure([
            "data",
            "message",
            "code"

        ]);

        $app_user->refresh();

        $this->assertNotNull($app_user->verified_at);
    }


    /**
     * Test successfult verification
     *
     * @return void
     */
    public function testExpiredVerificationToken()
    {

        $app = App::factory()->create();
        $user = User::factory()->create();
        $app_user = AppUser::factory()->create([
            'user_reference' => $user->reference,
            'app_reference' => $app->reference,
            'verification_token' => "1234",
            'verification_token_expiry' => Carbon::now()->subMinutes(10),
        ]);


        $response = $this->postJson(
            "/api/v1/users/verify-email",
            [


                "verification_token" => '1234',
                "app_reference" => $app->reference,
                "user_reference" => $user->reference,


            ]

        );

        $response->assertStatus(403)->assertJsonStructure([
            "message",
            "error_debug",
            "code"

        ]);
    }


    /**
     * Test validation error
     *
     * @return void
     */
    public function testEmailVerificationValidation()
    {

        $app = App::factory()->create();
        $user = User::factory()->create();
        AppUser::factory()->create([
            'user_reference' => $user->reference,
            'app_reference' => $app->reference,
            'verification_token' => "1234",
            'verification_token_expiry' => Carbon::now()->subMinutes(10),
        ]);

        $response = $this->postJson(
            "/api/v1/users/verify-email",
            [


                "app_reference" => $app->reference,
                "user_reference" => $user->reference,


            ]



        );

        $response->assertStatus(422)->assertJsonStructure([
            "message", "errors"

        ]);
    }
}
