<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("order_items", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedInteger("order_id");
            $table->string("PartType");
            $table->string("PartCode");
            $table->string("Description");
            $table->unsignedInteger("Priority");
            $table->string("WarehouseName");
            $table->unsignedInteger("Quantity");
            $table->decimal("UnitCost");
            $table->decimal("TaxRate");
            $table->decimal("Vat");
            $table->decimal("Total");
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
        Schema::dropIfExists("order_items");
    }
}
