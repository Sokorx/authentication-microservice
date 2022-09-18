<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\GenerateModelReferenceTrait;
use Illuminate\Support\Str;


class AppUser extends Model
{
    use HasFactory, GenerateModelReferenceTrait;

    protected $table = 'app_users';
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'email',
        'app_reference',
        'user_reference',
        'app_reference',
        'phone_number',
        'reference',

    ];
    protected $hidden = [
        'password',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->reference = (string) Str::uuid();
        });
    }
}
