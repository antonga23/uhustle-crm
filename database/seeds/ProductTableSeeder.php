<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product;
        $product->name = 'AdsBanc';
        $product->type = 'Advertising';
        $product->description = 'Lorem ipsum dolor imet';
        $product->price = '320';
        $product->currency = '$';
        $product->status = 1;
        $product->save();

        $product = new Product;
        $product->name = 'Winsta';
        $product->type = 'Online Marketting';
        $product->description = 'Lorem ipsum dolor imet';
        $product->price = '230';
        $product->currency = '$';
        $product->status = 1;
        $product->save();
    }
}
