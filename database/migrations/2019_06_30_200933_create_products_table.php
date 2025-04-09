<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('supplier_id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('origin_id');
            $table->text('code')->nullable();
            $table->text('name');
            $table->text('description')->nullable();
            $table->double('unit_cost');
            $table->integer('current_stock');
            $table->integer('reserved_stock')->nullable();
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
