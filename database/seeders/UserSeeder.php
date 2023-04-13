<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
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
        //Create user admin
        $admin = Role::where('role', 'admin')->first();
        $admin->users()->create([
            'name' => 'Admin',
            'email' => 'admin@dev.local',
            'password' => Hash::make('abcd1234')
        ]);

        //Example users
        $users = [
            ['name' => 'Jane Doe', 'email' => 'jane_doe@dev.local', 'password' => Hash::make('abcd1234')],
            ['name' => 'John Doe', 'email' => 'john_doe@dev.local', 'password' => Hash::make('abcd1234')],
        ];

        $customer = Role::where('role','customer')->first();
        $customer->users()->createMany($users);
    }
}
