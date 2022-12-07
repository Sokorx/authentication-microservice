<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;
use App\Enums\Permissions\User as UserPermissions;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userPermissions = UserPermissions::getUserPermissions();

        foreach($userPermissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
    }
}
