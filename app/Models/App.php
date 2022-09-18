<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\GenerateModelReferenceTrait;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;




class App extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable, GenerateModelReferenceTrait;

    protected $table = 'apps';
    protected $fillable = [
        'name',
        'version',
        'password',
        'reference',
        'allowed_ips'
    ];
}
