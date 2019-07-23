<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwilliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twillios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('agent_name');
            $table->unsignedInteger('agent_id');
            $table->unsignedInteger('lead_id');
            $table->string('call_sid');
            $table->string('call_status');
            $table->tinyInteger('answered')->nullable()->default(0);
            $table->tinyInteger('sale')->nullable()->default(0);
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
        Schema::dropIfExists('twillios');
    }
}
