<?php

use Illuminate\Database\Seeder;
use App\OrderType;

class OrderTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $item = new OrderType;
      $item->name = 'Mantainance Requisition';
      $item->description = 'Mantainance Requisition';
      $item->status = 1;
      $item->save();

      $item = new OrderType;
      $item->name = 'Product Requisition';
      $item->description = 'Product Requisition';
      $item->status = 1;
      $item->save();

      $item = new OrderType;
      $item->name = 'Other';
      $item->description = 'Other Requsition Types to follow';
      $item->status = 1;
      $item->save();
    }
}
