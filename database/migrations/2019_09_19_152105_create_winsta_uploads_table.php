<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWinstaUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winsta_uploads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_assigned_id');
            $table->unsignedInteger('module_id');
            $table->string('file_name');
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
        Schema::dropIfExists('winsta_uploads');
    }
}
