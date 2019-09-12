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
        //  Manager Role, Leads Module
        for($i = 1; $i <= 4; $i++){ // Roles
            for($k = 1; $k <= 5; $k++){ // Modules
                if($i == 1 && $k == 1){ // Auto Diler for admin
                    Permissions::create([
                        'module_id' => $k,
                        'role_id' => $i,
                        'status' => 1,
                    ]);
                }else if($i > 1 && $k == 1){ // Auto Diler for other
                    Permissions::create([
                        'module_id' => $k,
                        'role_id' => $i,
                        'status' => 0,
                    ]);
                }else if($i == 1 && $k > 1){ // Other modules for admin
                    Permissions::create([
                        'module_id' => $k,
                        'role_id' => $i,
                        'read' => 1,
                        'write' => 1,
                        'delete' => 1,
                    ]);
                }else if($i > 1 && $k > 1){ // Other roles and other modules
                    Permissions::create([
                        'module_id' => $k,
                        'role_id' => $i,
                        'read' => 1,
                        'write' => 0,
                        'delete' => 0,
                    ]);
                }
            }
        }
    }
}
