<?php

namespace App\Enums\Roles;

class User {
    const ADMIN = 'admin';
    const STAFF = 'staff';
    const SPECTATOR = 'spectator';

    public static function getUserRoles() : array
    {
        return [
            self::ADMIN,
            self::STAFF,
            self::SPECTATOR
        ];
    }
}
