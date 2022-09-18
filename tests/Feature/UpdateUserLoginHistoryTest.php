<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\App;
use App\Models\User;
use App\Models\AppUser;
use Laravel\Sanctum\Sanctum;



class UpdateUserLoginHistoryTest extends TestCase
{
    /**
     * Test successful update
     *
     * @return void
     */
    public function testSuccessfulUpdate()
    {

        $app = App::factory()->create();
        $user = User::factory()->create([]);
        AppUser::factory()->create([
            'app_reference' => $app->reference,
            'user_reference' => $user->reference,
        ]);

        Sanctum::actingAs(
            $app
        );


        $response = $this->postJson(
            "/api/v1/users/update-login-history",
            [


                "device_id" => '80808080',
                "ip_address" => '191991919',
                "is_successful" => false,
                "user_reference" => $user->reference,

            ]



        );

        $response->assertStatus(200)->assertJsonStructure([
            "data" => [
                "app_user_device_reference",
                "ip_address",
                "is_successful",
                'created_at',
                "updated_at",

            ],
            "message",
            "code"

        ]);

        $this->assertEquals($response['data']['ip_address'], '191991919');
    }


    /**
     * Test validation
     *
     * @return void
     */
    public function testUpdateHistoryLoginValidation()
    {

        $app = App::factory()->create();
        $user = User::factory()->create([]);
        AppUser::factory()->create([
            'app_reference' => $app->reference,
            'user_reference' => $user->reference,
        ]);

        Sanctum::actingAs(
            $app
        );


        $response = $this->postJson(
            "/api/v1/users/update-login-history",
            [


                "device_id" => '80808080',
                "ip_address" => '191991919',
                "is_successful" => false,

            ]



        );

        $response->assertStatus(422)->assertJsonStructure([
            "message", "errors"

        ]);
    }
}
