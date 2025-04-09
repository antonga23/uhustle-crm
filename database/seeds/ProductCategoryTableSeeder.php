<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $item = new ProductCategory;
      $item->name = 'Printer';
      $item->description = 'All kinds of printer';
      $item->status = 1;
      $item->save();

      $item = new ProductCategory;
      $item->name = 'Phone';
      $item->description = 'Voip telephone sets';
      $item->status = 1;
      $item->save();

      $item = new ProductCategory;
      $item->name = 'Part';
      $item->description = 'Item parts';
      $item->status = 1;
      $item->save();
    }
}
