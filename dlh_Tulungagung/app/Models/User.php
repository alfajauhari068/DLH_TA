<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function role(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function hasRole(array|string $roles): bool
    {
        $roleNames = collect($roles)
            ->map(fn ($role) => is_string($role) ? $role : (string) $role)
            ->map(fn ($role) => trim($role))
            ->filter()
            ->all();

        if ($roleNames === []) {
            return false;
        }

        $roleName = $this->role?->name ?? $this->getAttribute('role_name') ?? null;

        return in_array($roleName, $roleNames, true);
    }

    public function hasPermission(array|string $permissions): bool
    {
        return $this->hasRole('Administrator');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password',
        'avatar',
        'phone',
        'status',
        'last_login',
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
        'status' => 'boolean',
        'last_login' => 'datetime',
    ];
}
