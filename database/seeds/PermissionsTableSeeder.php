<?php

use App\Module;
use App\Permissions;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permissions::create([
            'module_id' => 1,
            'role_id' => 1,
            'read' => 1,
            'write' => 1,
            'delete' => 1,
        ]);

        Permissions::create([
            'module_id' => 1,
            'role_id' => 2,
            'read' => 1,
            'write' => 1,
            'delete' => 1,
        ]);

        Permissions::create([
            'module_id' => 1,
            'role_id' => 3,
            'read' => 1,
            'write' => 1,
            'delete' => 1,
        ]);

        Permissions::create([
            'module_id' => 1,
            'role_id' => 4,
            'read' => 1,
            'write' => 1,
            'delete' => 1,
        ]);
    }
}
