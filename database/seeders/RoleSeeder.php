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
            ['role' => 'admin', 'create' => TRUE, 'update' => TRUE,'delete' => TRUE, 'special' => TRUE],
            ['role' => 'customer' ,'update' => TRUE],
            ['role' => 'user','create'=>TRUE, 'create' => TRUE, 'update' => TRUE, 'delete'=>TRUE]
        ];

        foreach($roles as $r)
        {
            Role::create($r);
        }
    }
}
