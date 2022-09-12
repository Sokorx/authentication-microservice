<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    use HasFactory;
    protected $table = 'app_users';
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'email',
        'app_reference',
        'user_reference',
        'app_reference',
        'password',
        'reference'
    ];
}
