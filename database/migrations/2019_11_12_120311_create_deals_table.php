<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('lead_id')->nullable();
            $table->unsignedInteger('agent_id')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('deal_name')->nullable();
            $table->date('closing_date')->nullable();
            $table->string('type')->nullable();
            $table->string('lead_source')->nullable();
            $table->string('amount')->nullable();
            $table->string('description')->nullable();
            $table->string('stage')->nullable();
            $table->string('probability')->nullable();
            $table->string('expected_revenue')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_number')->nullable();
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
        Schema::dropIfExists('deals');
    }
}
