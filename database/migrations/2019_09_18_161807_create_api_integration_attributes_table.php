<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiIntegrationAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_integration_attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('api_id')->nullable();
            $table->text('key')->nullable();
            $table->text('value')->nullable();
            $table->text('display_name')->nullable();
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
        Schema::dropIfExists('api_integration_attributes');
    }
}
