<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => Role::GOD_ROLE,
                'title' => Role::GOD_ROLE
            ],
            [
                'name' => Role::ADMIN_ROLE,
                'title' => Role::ADMIN_ROLE
            ],
            [
                'name' => Role::MANAGER_ROLE,
                'title' => Role::MANAGER_ROLE
            ],
        ];

        foreach ($roles as $role) {
            Role::query()->updateOrCreate(['name' => $role['name']], $role);
        }
    }
}
