<?php

namespace App\Enums\Permissions;

use App\Enums\Roles\User as UserRoles;

class User {
    // APP PERMISSIONS
    const CREATE_APPS = 'create_apps';
    const UPDATE_APPS = 'update_apps';
    const DELETE_APPS = 'delete_apps';
    const READ_APPS = 'read_apps';

    //STAFF PERMISSIONS
    const CREATE_STAFF_USERS = 'create_staff_users';
    const UPDATE_STAFF_USERS = 'update_staff_users';
    const DELETE_STAFF_USERS = 'delete_staff_users';
    const READ_STAFF_USERS = 'read_staff_users'; // Normal staffs only
    const READ_ADMIN_STAFF_USERS = 'read_admin_staff_users'; // Admin staffs only
    const READ_ALL_STAFF_USERS = 'read_all_staff_users'; // Both admin staffs and normal staffs
    const READ_APP_USERS = 'read_app_users'; // App users only

    //ADMIN PERMISSIONS
    const GRANT_ADMIN_ROLE = 'grant_admin_role';

    public static function getAdminRolePermissions(): array
    {
        return [
            self::CREATE_APPS,
            self::UPDATE_APPS,
            self::DELETE_APPS,
            self::READ_APPS,

            self::CREATE_STAFF_USERS,
            self::UPDATE_STAFF_USERS,
            self::DELETE_STAFF_USERS,
            self::READ_STAFF_USERS,
            self::READ_ADMIN_STAFF_USERS,
            self::READ_ALL_STAFF_USERS,
            self::READ_APP_USERS,

            self::GRANT_ADMIN_ROLE,
        ];
    }

    public static function getStaffRolePermissions(): array
    {
        return [
            self::CREATE_APPS,
            self::UPDATE_APPS,
            self::READ_APPS,

            self::CREATE_STAFF_USERS,
            self::READ_STAFF_USERS,
            self::READ_ADMIN_STAFF_USERS,
            self::READ_ALL_STAFF_USERS,
            self::READ_APP_USERS,
        ];
    }

    public static function getSpectatorRolePermissions(): array
    {
        return [
            self::READ_APPS,
            self::READ_STAFF_USERS,
            self::READ_ADMIN_STAFF_USERS,
            self::READ_ALL_STAFF_USERS,
            self::READ_APP_USERS,
        ];
    }

    public static function getUserPermissionsByRole() : array
    {
        return [
            UserRoles::ADMIN => self::getAdminRolePermissions(),
            UserRoles::STAFF => self::getStaffRolePermissions(),
            UserRoles::SPECTATOR => self::getSpectatorRolePermissions()
        ];
    }

    public static function getAllUserPermissions() : array
    {
        return self::getAdminRolePermissions();
    }
}
