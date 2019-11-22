<?php

use Illuminate\Database\Seeder;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(RolesTablesSeeder::class);
        // $this->call(SourcesTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        // $this->call(LeadsTableSeeder::class);
        // $this->call(SystemSettingsSeeder::class);
        // $this->call(ModuleTableSeeder::class);
        // $this->call(PermissionsTableSeeder::class);
        // $this->call(ApiIntegrationTableSeeder::class);
        // $this->call(CompanyTypeSeeder::class);
        // $this->call(ProductCategoryTableSeeder::class);
        // $this->call(OrderTypeTableSeeder::class);
        // $this->call(OrderClassTableSeeder::class);
        $this->call(ProvinceTableSeeder::class);
    }
}
