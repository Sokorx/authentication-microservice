<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\GenerateModelReferenceTrait;

class AppLoginHistory extends Model
{
    use HasFactory, GenerateModelReferenceTrait;

    protected $table = 'app_login_history';
    protected $fillable = [
        'app_user_device_reference',
        'ip_address',

    ];
}
