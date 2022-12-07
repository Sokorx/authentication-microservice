<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function givePermissionTo(array $permissions)
    {
        $class_name = get_class($this);
        $reflection_class = new \ReflectionClass($class_name);

        foreach ($permissions as $permission) {
            ModelHasPermission::firstOrCreate([
                'model_id' => $this->id,
                'model_type' => $reflection_class->getName(),
                'permission_id' => Permission::where('name', $permission)
                                    ->first()->id
            ],[
                'model_id' => $this->id,
                'model_type' => $reflection_class->getName(),
                'permission_id' => Permission::where('name', $permission)
                                    ->first()->id
            ]);
        }
    }
}
