<?php

use Illuminate\Database\Seeder;
use App\LeadSource;

class SourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new LeadSource;
        $product->name = 'Instagram';
        $product->created_at = date('Y-m-d H:i:s');
        $product->updated_at = date('Y-m-d H:i:s');
        $product->save();

        $product = new LeadSource;
        $product->name = 'Facebook';
        $product->created_at = date('Y-m-d H:i:s');
        $product->updated_at = date('Y-m-d H:i:s');
        $product->save();

    }
}
