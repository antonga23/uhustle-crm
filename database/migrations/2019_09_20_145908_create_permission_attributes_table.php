<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('permission_id');
            $table->unsignedInteger('custom_field_id');
            $table->tinyInteger('read')->nullable()->default(0);
            $table->tinyInteger('write')->nullable()->default(0);
            $table->tinyInteger('delete')->nullable()->default(0);
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
        Schema::dropIfExists('permission_attributes');
    }
}
