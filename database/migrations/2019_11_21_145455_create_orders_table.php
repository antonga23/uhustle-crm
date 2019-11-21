<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('class_id');
            $table->unsignedInteger('origin_id');
            $table->unsignedInteger('requestor_id');
            $table->text('billing_address');
            $table->text('contact_number');
            $table->text('contact_person');
            $table->double('amount');
            $table->double('vat_mount');
            $table->integer('vat');
            $table->double('total_amount');
            $table->string('status');
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
        Schema::dropIfExists('orders');
    }
}
