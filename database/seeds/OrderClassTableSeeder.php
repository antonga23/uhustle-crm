<?php

use Illuminate\Database\Seeder;
use App\OrderClass;

class OrderClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $item = new OrderClass;
      $item->name = 'Inventory';
      $item->description = 'Inventory';
      $item->status = 1;
      $item->save();

      $item = new OrderClass;
      $item->name = 'Other';
      $item->description = 'Other Requsition Types to follow';
      $item->status = 1;
      $item->save();
    }
}
