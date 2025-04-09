<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleItemMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_item_metas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('item_id');
            $table->unsignedInteger('custom_field_id');
            $table->text('custom_field_value');
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
        Schema::dropIfExists('module_item_metas');
    }
}
