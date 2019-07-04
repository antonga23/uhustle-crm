<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
        \DB::table('users')->insert(array (
            0 => array (
                    'role_id' => 4,
                    'name' => 'Yongama',
                    'lastname' => 'Sobambela',
                    'email' => 'sobambela@gmail.com',
                    'password' => bcrypt('admin123'),
                    'address' => '',
                    'work_number' => '0210000000000',
                    'personal_number' => '0670000000000',
                    'avatar' => '',
                    'activated' => 1,
                    'email_verified_at' => now(),
                    'remember_token' => Str::random(10)
                ),
        ));
    
        \DB::table('users')->insert(array (
            0 => array (
                    'role_id' => 1,
                    'name' => 'Super',
                    'lastname' => 'Admin',
                    'email' => 'admin@uhustle.com',
                    'password' => bcrypt('admin123'),
                    'address' => '',
                    'work_number' => '0210000000000',
                    'personal_number' => '0670000000000',
                    'avatar' => '',
                    'activated' => 1,
                    'email_verified_at' => now(),
                    'remember_token' => Str::random(10)
                ),
        ));
    }
}
