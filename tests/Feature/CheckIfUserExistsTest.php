<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\App;
use App\Models\AppUser;
use App\Models\User;
use Laravel\Sanctum\Sanctum;



class CheckIfUserExistsTest extends TestCase
{
    /**
     * Test user exists
     *
     * @return void
     */
    public function testUserExists()
    {

        $app = App::factory()->create();
        $user = User::factory()->create();
        $app_user = AppUser::factory()->create([
            'app_reference' => $app->reference,
            'user_reference' => $user->reference,
        ]);

        Sanctum::actingAs(
            $app
        );


        $response = $this->postJson(
            "/api/v1/users/user-check",
            [



                "email" => $app_user->email,
                "app_reference" => $app->reference

            ]



        );


        $response->assertStatus(200)->assertJsonStructure([
            "data" => [
                "app_user_exists",
                "app_user",

            ],
            "message",
            "code"

        ]);

        $this->assertEquals(
            $response['data']['app_user_exists'],
            true
        );
        $this->assertEquals(
            $response['data']['app_user']['reference'],
            $app_user['reference']
        );
    }


    /**
     * Test user does not  exist
     *
     * @return void
     */
    public function testUserDoesNotExist()
    {

        $app = App::factory()->create();
        $user = User::factory()->create();
        AppUser::factory()->create([
            'app_reference' => $app->reference,
            'user_reference' => $user->reference,
        ]);

        Sanctum::actingAs(
            $app
        );


        $response = $this->postJson(
            "/api/v1/users/user-check",
            [



                "email" => 'joe@gmail.com',
                "app_reference" => $app->reference

            ]



        );

        $response->assertStatus(200)->assertJsonStructure([
            "data" => [
                "app_user_exists",
                "app_user",

            ],
            "message",
            "code"

        ]);

        $this->assertEquals(
            $response['data']['app_user_exists'],
            false
        );
        $this->assertEquals(
            !!$response['data']['app_user'],
            false
        );
    }
}
