<?php

use App\SystemSettings;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SystemSettings::create([
            'system_setting' => 1,
            'user_id' => null,
            'setting' => 'auto_dialer',
            'value' => 'no',
            'previous_value' => 'no',
            'modified_by' => 1,
            'applies_to_role' => 2,
        ]);

        SystemSettings::create([
            'system_setting' => 1,
            'user_id' => null,
            'setting' => 'theme',
            'value' => 'default',
            'previous_value' => 'default',
            'modified_by' => 1,
            'applies_to_role' => -1
        ]);
    }
}
