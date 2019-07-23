<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
        
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('user_name');
            $table->string('description')->nullable();
            $table->string('comment_type')->nullable();
            $table->string('source_type');
            $table->unsignedInteger('source_id');
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
        Schema::drop('comments');
    }
}
