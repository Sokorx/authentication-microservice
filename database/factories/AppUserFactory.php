<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\App;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppUser>
 */
class AppUserFactory extends Factory
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
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'middle_name' => fake()->name(),
            'email' => fake()->email(),
            'phone_number' => fake()->phoneNumber(),
            'app_reference' => $app->reference,
            'user_reference' => $user->reference,
            'reference' => Str::uuid(),
        ];
    }
}
