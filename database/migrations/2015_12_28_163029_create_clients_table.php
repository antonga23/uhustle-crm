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
            $table->string('title');
            $table->string('name');
            $table->string('surname');
            $table->string('gender');
            $table->integer('age');
            $table->string('phone_number');
            $table->string('city');
            $table->string('country');
            $table->text('description');
            $table->integer('status');
            $table->integer('user_assigned_id')->unsigned();
            $table->integer('user_created_id')->unsigned();
            $table->integer('lead_id')->unsigned();
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
        Schema::drop('clients');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
