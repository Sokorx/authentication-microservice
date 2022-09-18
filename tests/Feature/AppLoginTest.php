<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\App;
use App\Models\User;
use App\Models\AppUser;

use Carbon\Carbon;


class AppLoginTest extends TestCase
{
    /**
     * Test successful login
     *
     * @return void
     */
    public function testSuccessfulAppLogin()
    {

        $app = App::factory()->create();



        $response = $this->postJson(
            "/api/v1/apps/login",
            [


                "password" => 'password',
                "reference" => $app->reference,


            ]

        );

        $response->assertStatus(200)->assertJsonStructure([
            "data" => [
                'token'
            ],
            "message",
            "code"

        ]);
    }
    /**
     * Test incorrect password
     *
     * @return void
     */
    public function testInvalidAppLogin()
    {

        $app = App::factory()->create();



        $response = $this->postJson(
            "/api/v1/apps/login",
            [


                "password" => 'password444',
                "reference" => $app->reference,


            ]

        );

        $response->assertStatus(403)->assertJsonStructure([
            "error_debug",
            "message",
            "code"

        ]);
    }


    /**
     * Test login validation
     *
     * @return void
     */
    public function testLoginValidation()
    {

        $app = App::factory()->create();



        $response = $this->postJson(
            "/api/v1/apps/login",
            [


                "password" => 'password',


            ]

        );

        $response->assertStatus(422)->assertJsonStructure([
            "message",
            "errors",

        ]);
    }
}
