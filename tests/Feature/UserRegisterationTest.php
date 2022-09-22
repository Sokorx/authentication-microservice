<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\App;
use Laravel\Sanctum\Sanctum;



class UserRegisterationTest extends TestCase
{
    /**
     * Test successfult registration
     *
     * @return void
     */
    public function testSuccessfulRegisteration()
    {

        $app = App::factory()->create();

        Sanctum::actingAs(
            $app
        );


        $response = $this->postJson(
            "/api/v1/users/register",
            [


                "first_name" => 'John',
                "last_name" => 'Doe',
                "middle_name" => '',
                "phone_number" => "08212134565",
                "device_id" => "0444444jjd",
                "email" => "joe@joey.com",
                "password" => "password",
                "app_reference" => $app->reference

            ]



        );

        $response->assertStatus(201)->assertJsonStructure([
            "data" => [
                "reference",
                "first_name",
                "middle_name",
                'last_name',
                "email",
                "app_reference",
                "user_reference",
                "created_at",
                "updated_at",
            ],
            "message",
            "code"

        ]);

        $this->assertEquals([
            'first_name'
            => $response['data']['first_name'],
            'last_name'
            => $response['data']['last_name'],
            'middle_name'
            => $response['data']['middle_name'],
            'email'
            => $response['data']['email'],
            'phone_number'
            => $response['data']['phone_number'],
            'app_reference'
            => $response['data']['app_reference'],

        ], [
            'first_name' => "John",
            'last_name' => "Doe",
            'middle_name' => "",
            'phone_number' => "08212134565",
            "email" => "joe@joey.com",
            "app_reference" => $app->reference
        ]);
    }
    /**
     * Test validation
     *
     * @return void
     */
    public function testRegisterationValidation()
    {

        $app = App::factory()->create();

        Sanctum::actingAs(
            $app
        );

        $response = $this->postJson(
            "/api/v1/users/register",
            [


                "first_name" => 'John',
                "last_name" => 'Doe',
                "middle_name" => '',
                "phone_number" => "08212134565",
                "device_id" => "0444444jjd",
                "password" => "password",
                "app_reference" => $app->reference

            ]



        );

        $response->assertStatus(422)->assertJsonStructure([
            "message", "errors"

        ]);
    }
}
