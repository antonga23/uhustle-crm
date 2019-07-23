<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editorRole = new Role;
        $editorRole->display_name = 'Manager';
        $editorRole->name = 'manager';
        $editorRole->description = 'System Manager';
        $editorRole->status = 1;
        $editorRole->save();

        $adminRole = new Role;
        $adminRole->name = 'administrator';
        $adminRole->display_name = 'Administrator';
        $adminRole->description = 'System Administrator';
        $adminRole->status = 1;
        $adminRole->save();

        $employeeRole = new Role;
        $employeeRole->name = 'team_leader';
        $employeeRole->display_name = 'Team Leader';
        $employeeRole->description = 'Team Leader';
        $employeeRole->status = 1;
        $employeeRole->save();
        
        $employeeRole = new Role;
        $employeeRole->name = 'agent';
        $employeeRole->display_name = 'Agent';
        $employeeRole->description = 'Agent';
        $employeeRole->status = 1;
        $employeeRole->save();

    }
}
