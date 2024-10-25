<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name' => User::USERS_INDEX,
                'title' => 'users.index',
            ], [
                'name' => User::USERS_CREATE,
                'title' => 'users.create',
            ], [
                'name' => User::USERS_EDIT,
                'title' => 'users.edit',
            ], [
                'name' => User::USERS_DELETE,
                'title' => 'users.delete',
            ], [
                'name' => Role::ROLES_INDEX,
                'title' => 'roles.index',
            ], [
                'name' => Role::ROLES_CREATE,
                'title' => 'roles.create',
            ], [
                'name' => Role::ROLES_EDIT,
                'title' => 'roles.edit',
            ], [
                'name' => Role::ROLES_DELETE,
                'title' => 'roles.delete',
            ], [
                'name' => Role::ROLES_ASSIGN,
                'title' => 'roles.assign',
            ], [
                'name' => Permission::PERMISSIONS_INDEX,
                'title' => 'permissions.index',
            ], [
                'name' => Permission::PERMISSIONS_CREATE,
                'title' => 'permissions.create',
            ], [
                'name' => Permission::PERMISSIONS_EDIT,
                'title' => 'permissions.edit',
            ], [
                'name' => Permission::PERMISSIONS_DELETE,
                'title' => 'permissions.delete',
            ], [
                'name' => Permission::PERMISSIONS_ASSIGN,
                'title' => 'permissions.assign',
            ]
        ];

        foreach ($permissions as $permission) {
            Permission::query()->updateOrCreate(['name' => $permission['name']], $permission);
        }

        $godRole = Role::query()->where('name', Role::GOD_ROLE)->first();
        $godRole->permissions()->sync(Permission::all()->pluck('id')->toArray());
    }
}
