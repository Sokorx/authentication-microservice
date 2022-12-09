<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Enums\Roles\User as UserRoles;
use App\Enums\Permissions\User as UserPermissions;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::factory(10)->create();
        User::factory(1)->create([
            'email' => 'devops@moniporte.com',
            'user_role' => UserRoles::ADMIN,
        ]);

        $user = User::where('email', 'devops@moniporte.com')->first();
        $user->syncPermissions(UserPermissions::getAllUserPermissions());
    }
}
