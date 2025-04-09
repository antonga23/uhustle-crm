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
            $table->bigIncrements("id");
            $table->unsignedInteger("type")->nullable();
            $table->unsignedInteger("order_class");
            $table->string("billing_address");
            $table->string("contact_number");
            $table->string("contact_email");
            $table->string("contact_name");
            $table->string("related_item")->nullable();
            $table->string("requestor");
            $table->unsignedInteger("requestor_id")->nullable();
            $table->unsignedInteger("requestor_company_id")->nullable();
            $table->string("requesition_notes")->nullable();
            $table->decimal("vat");
            $table->decimal("amount");
            $table->dateTime("request_date");
            $table->integer("priority");
            $table->unsignedInteger("origin_id");
            $table->string("origin_name");
            $table->string("origin_type_name");
            $table->string("tax");
            $table->decimal("tax_percent");
            $table->unsignedInteger("tax_type");
            $table->string("status");
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
