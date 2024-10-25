<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    public const GOD_ROLE = 'god';
    public const ADMIN_ROLE = 'admin';
    public const MANAGER_ROLE = 'manager';

    public const ROLES_INDEX = 'roles_index';
    public const ROLES_CREATE = 'roles_create';
    public const ROLES_DELETE = 'roles_delete';
    public const ROLES_EDIT = 'roles_edit';
    public const ROLES_ASSIGN = 'roles_assign';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'title',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'role_user');
    }

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'permission_role');
    }
}
