<?php

use Illuminate\Database\Seeder;
use App\Tax;

class TaxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $type = new Tax;
      $type->tax_type = 'VAT';
      $type->percentage = '15';
      $type->save();
    }
}
