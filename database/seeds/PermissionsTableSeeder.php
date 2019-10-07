<?php

use App\Role;
use App\Module;
use App\Permissions;
use App\PermissionAttributes;
use App\DialerPermissions;
use App\ModuleCustomFields;
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

        $roles = Role::get();

        //  Manager Role, Leads Module
        foreach($roles as $key => $role){ // Roles
            DialerPermissions::create([
                'role_id' => $role->id,
                'disabled' => 1,
                'barge' => 1,
                'whisper' => 1,
            ]);

            $modules = Module::get();
            foreach($modules as $key => $module){ 
                Permissions::create([
                    'module_id' => $module->id,
                    'role_id' => $role->id,
                ]);
            }
        }

        $permissions = Permissions::get();
        foreach($permissions as $key => $permission){ 

            $module_cust_fields = ModuleCustomFields::where(['module_id' => $permission->module_id])->get();
            foreach($module_cust_fields as $i => $field){ 
                PermissionAttributes::create([
                    'permission_id' => $permission->id,
                    'custom_field_id'=>  $field->id,
                    'read' => 1,
                    'write' => 1,
                    'delete' => 1,
                ]);
            }
        }
    }
}
