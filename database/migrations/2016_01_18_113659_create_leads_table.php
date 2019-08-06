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
            $table->string('source');
            $table->string('title');
            $table->string('name');
            $table->string('surname');
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->text('description')->nullable();
            $table->string('rating')->nullable();
            $table->integer('status')->nullable();
            $table->integer('deposit')->nullable();
            $table->integer('user_assigned_id')->unsigned();
            $table->integer('user_created_id')->unsigned();
            $table->datetime('contact_date');
            $table->integer('product_id')->unsigned();
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
