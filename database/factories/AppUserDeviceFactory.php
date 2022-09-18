<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\App;




/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppUserDevice>
 */
class AppUserDeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::all()->random();
        $app = App::all()->random();
        return [
            'device_id' => Str::random(10),
            'app_reference' => $app->reference,
            'user_reference' => $user->reference,
            'reference' => Str::uuid()
        ];
    }
}
