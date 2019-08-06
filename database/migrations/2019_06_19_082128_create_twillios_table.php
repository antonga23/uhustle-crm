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
            $table->string('lead_name')->nullable();
            $table->string('lead_country')->nullable();
            $table->date('call_date_created')->nullable();
            $table->string('call_duration')->nullable();
            $table->string('call_from')->nullable();
            $table->string('call_to')->nullable();
            $table->string('call_price')->nullable();
            $table->string('has_call_back')->nullable();
            $table->string('call_sid')->nullable();
            $table->string('call_status')->nullable();
            $table->tinyInteger('answered')->nullable()->default(0);
            $table->text('recording')->nullable();
            $table->tinyInteger('sale')->nullable()->default(0);
            $table->tinyInteger('twilio_imported')->nullable()->default(0);
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
