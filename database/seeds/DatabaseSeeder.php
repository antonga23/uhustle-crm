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
        $this->call(ClientsTableSeeder::class);
        
        $product = new Product;
        $product->name = 'Insta Essentials';
        $product->type = 'Advertising';
        $product->description = '';
        $product->price = '';
        $product->currency = '$';
        $product->status = 1;
        $product->save();

        $product = new Product;
        $product->name = 'Insta Advice';
        $product->type = 'Advertising';
        $product->description = '';
        $product->price = '';
        $product->currency = '$';
        $product->status = 1;
        $product->save();

        $product = new Product;
        $product->name = 'Insta Fast Growth';
        $product->type = 'Advertising';
        $product->description = '';
        $product->price = '';
        $product->currency = '$';
        $product->status = 1;
        $product->save();
    }
}
