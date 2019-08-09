<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('source')->nullable();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('account')->nullable();
            $table->string('rating')->nullable();
            $table->integer('deposit')->nullable();
            $table->integer('user_assigned')->nullable()->unsigned();
            $table->integer('user_created_id')->nullable()->unsigned();
            $table->integer('product_id')->nullable()->unsigned();
            $table->tinyInteger('is_client')->nullable()->default(0);
            $table->integer('status')->nullable();
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('leads');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
