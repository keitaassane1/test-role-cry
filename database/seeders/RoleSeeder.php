<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Role;

class RoleSeeder extends Seeder
{

    static $roles = [
        'admin',
        'superviseur',
        'agent',
        'consult'
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::$roles as $role) {
            Role::create(
                ['name' => $role , 'guard_name' => 'web'],
            );
        }
    }
}
