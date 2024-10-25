<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    public const PERMISSIONS_INDEX = 'permission_index';
    public const PERMISSIONS_CREATE = 'permission_create';
    public const PERMISSIONS_EDIT = 'permission_edit';
    public const PERMISSIONS_DELETE = 'permission_delete';
    public const PERMISSIONS_ASSIGN = 'permissions_assign';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'title',
    ];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'permission_role');
    }
}
