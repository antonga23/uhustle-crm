<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAssigneeOwnerColumnsToModuleItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('module_items', function (Blueprint $table) {
          $table->unsignedInteger('assignee')->after('module_id')->nullable();
          $table->unsignedInteger('owner')->after('module_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('module_items', function (Blueprint $table) {
            //
        });
    }
}
