<?php

use Illuminate\Database\Seeder;
use App\CompanyType;

class CompanyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $type = new CompanyType;
      $type->name = 'Warehouse';
      $type->description = 'Warehouse';
      $type->status = 1;
      $type->save();

      $type = new CompanyType;
      $type->name = 'Retailer';
      $type->description = 'Retailer';
      $type->status = 1;
      $type->save();

      $type = new CompanyType;
      $type->name = 'Destributor';
      $type->description = 'Destributor';
      $type->status = 1;
      $type->save();
    }
}
