<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


use App\Models\Role; // Agrega esta línea

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

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
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
    ];

    // public function isAdmin() {
    //     return $this->roles()->where('name', 'admin');
    // }
    public function isAdmin(): bool {
        return $this->roles()->where('name', 'admin')->exists();
    }

    public function isStudent() {
        return $this->roles()->where('name', 'student');
    }

    public function isTeacher() {
        return $this->roles()->where('name', 'teacher');
    }

    public function getIsAdminAttribute() {
        return $this->roles()->where('name', 'admin')->exists();
    }
    
    public function getIsStudentAttribute() {
        return $this->roles()->where('name', 'student')->exists();
    }
    
    public function getIsTeacherAttribute() {
        return $this->roles()->where('name', 'teacher')->exists();
    }
    

    // public function roles() {
    //     return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    // }
    public function roles(): BelongsToMany {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }

    public function role(): BelongsTo {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
