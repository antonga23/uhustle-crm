<?php

use App\Module;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Module::create([
            'tag' => 'leads',
            'display_name' => 'Leads',
        ]);

        Module::create([
            'tag' => 'contacts',
            'display_name' => 'Contacts'
        ]);

        Module::create([
            'tag' => 'users',
            'display_name' => 'Users'
        ]);
    }
}
