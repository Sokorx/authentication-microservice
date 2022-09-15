<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\GenerateModelReferenceTrait;

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
}
