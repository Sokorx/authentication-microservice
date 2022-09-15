<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppPasswordReset extends Model
{
    use HasFactory;
    protected $table = 'app_password_reset';
    protected $fillable = [
        'app_reference',
        'user_reference',
        'token',
        'token_expiry',
    ];
}
