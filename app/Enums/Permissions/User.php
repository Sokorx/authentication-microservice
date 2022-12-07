<?php

namespace App\Enums\Permissions;

use App\Enums\Roles\User as UserRoles;

class User {
    const ADMIN = [
        'create_apps',
        'update_apps',
        'delete_apps',
        'read_apps',

        'create_staff_users',
        'update_staff_users',
        'delete_staff_users',
        'read_staff_users', // Normal staffs only
        'read_admin_staff_users', // Admin staffs only
        'read_all_staff_users', // Both admin staffs and normal staffs
        'grant_admin_role',

        'read_app_users', // App users only
    ];

    const STAFF = [
        'create_apps',
        'update_apps',
        'read_apps',

        'create_staff_users',
        'read_staff_users', // Normal staffs only
        'read_admin_staff_users', // Admin staffs only
        'read_all_staff_users', // Both admin staffs and normal staffs

        'read_app_users', // App users only
    ];

    const INSPECTOR = [
        'read_apps',

        'read_staff_users', // Normal staffs only
        'read_admin_staff_users', // Admin staffs only
        'read_all_staff_users', // Both admin staffs and normal staffs

        'read_app_users', // App users only
    ];

    public static function getUserRolePermissions() : array
    {
        return [
            UserRoles::ADMIN => self::ADMIN,
            UserRoles::STAFF => self::STAFF,
            UserRoles::INSPECTOR => self::INSPECTOR
        ];
    }

    public static function getUserPermissions() : array
    {
        return array_merge (
            self::ADMIN,
            self::STAFF,
            self::INSPECTOR
        );
    }
}
