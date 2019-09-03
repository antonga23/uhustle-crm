<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('system_setting')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('setting')->nullable();
            $table->string('value')->nullable();
            $table->string('previous_value')->nullable();
            $table->tinyInteger('modified_by')->nullable();
            $table->integer('applies_to_role')->nullable();
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
        Schema::dropIfExists('system_settings');
    }
}
