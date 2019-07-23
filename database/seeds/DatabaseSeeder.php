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
        $this->call(RolesTablesSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(LeadsTableSeeder::class);
        
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
