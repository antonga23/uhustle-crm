<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product;
        $product->name = 'Insta Essentials';
        $product->type = 'Advertising';
        $product->description = 'Turn your social media pages in to a clients generating machine!';
        $product->price = 149;
        $product->currency = '$';
        $product->status = 1;
        $product->created_at = date('Y-m-d H:i:s');
        $product->updated_at = date('Y-m-d H:i:s');
        $product->save();

        $product = new Product;
        $product->name = 'Insta Advice';
        $product->type = 'Advertising';
        $product->description = 'Turn your social media pages in to a clients generating machine!';
        $product->price = 299;
        $product->currency = '$';
        $product->status = 1;
        $product->created_at = date('Y-m-d H:i:s');
        $product->updated_at = date('Y-m-d H:i:s');
        $product->save();

        $product = new Product;
        $product->name = 'Insta FastGrowth';
        $product->type = 'Advertising';
        $product->description = 'Turn your social media pages in to a clients generating machine!';
        $product->price = 499;
        $product->currency = '$';
        $product->status = 1;
        $product->created_at = date('Y-m-d H:i:s');
        $product->updated_at = date('Y-m-d H:i:s');
        $product->save();
    }
}
