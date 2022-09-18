<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\AppUserDevice;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppLoginHistory>
 */
class AppLoginHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()

    {
        $app_user_device = AppUserDevice::all()->random();
        return [
            'app_user_device_reference' => $app_user_device->reference,
            'ip_address' => Str::uuid(),
            'is_successful' => true
        ];
    }
}
