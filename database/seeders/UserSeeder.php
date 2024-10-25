<?php

namespace Database\Seeders;

use App\Helpers\Core;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $godUser = [
            'code' => Core::generateUserCode(),
            'name' => 'mohsen',
            'email' => 'info@mohsen.sbs',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789')
        ];

        $user = User::query()->updateOrCreate(['email' => $godUser['email']], $godUser);
        $godRole = Role::query()->where('name', Role::GOD_ROLE)->first();
        $user->roles()->sync($godRole->id);
    }
}
