<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('tasks', function (Blueprint $table) {
        $table->string('title')->nullable()->change();
        $table->text('description')->nullable()->change();
        $table->integer('status')->nullable()->change();
        $table->integer('user_assigned_id')->unsigned()->nullable()->change();
        $table->integer('user_created_id')->unsigned()->nullable()->change();
        $table->integer('client_id')->unsigned()->nullable()->change();
        $table->integer('invoice_id')->unsigned()->nullable()->change();
        $table->date('deadline')->nullable()->change();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
