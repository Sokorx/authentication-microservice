<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppLoginHistory extends Model
{
    use HasFactory;
    protected $table = 'app_login_history';
    protected $fillable = [
        'app_user_device_reference',
        'ip_address',

    ];
}
