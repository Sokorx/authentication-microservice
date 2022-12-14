<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\GenerateModelReferenceTrait;

class App extends Model
{

    use HasFactory, GenerateModelReferenceTrait;

    protected $table = 'apps';
    protected $fillable = [
        'name',
        'version',
        'reference'
    ];
}
