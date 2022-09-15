<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\GenerateModelReferenceTrait;
use Illuminate\Support\Str;

class AppUserDevice extends Model
{
    use HasFactory, GenerateModelReferenceTrait;

    protected $table = 'app_user_devices';
    protected $fillable = [
        'device_id',
        'user_reference',
        'app_reference',
        'status',
        'reference'
    ];


    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->reference = (string) Str::uuid();
        });
    }
}
