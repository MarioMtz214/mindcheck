<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */

    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id',
        'name',
        'description',
    ];

    /**
     * Get the users associated with the role.
     */

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }

    /**
     * Get the permissions associated with the role.
     */

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_role');
    }

    /**
     * Get the roles associated with the role.
     */

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_role', 'role_id', 'parent_role_id');
    }

    /**
     * Get the roles associated with the role.
     */ 

    public function parentRoles()
    {
        return $this->belongsToMany(Role::class, 'role_role', 'parent_role_id', 'role_id');
    }  
    
}
