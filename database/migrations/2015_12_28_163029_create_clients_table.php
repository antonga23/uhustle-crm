<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('source');
            $table->string('title');
            $table->string('name');
            $table->string('surname');
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('account')->nullable();
            $table->string('rating')->nullable();
            $table->integer('deposit')->nullable();
            $table->integer('user_assigned')->unsigned();
            $table->integer('user_created_id')->unsigned();
            $table->datetime('contact_date');
            $table->integer('product_id')->unsigned();
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
        Schema::drop('clients');
    }
}
