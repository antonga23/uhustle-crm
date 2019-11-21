<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('address');
            $table->unsignedInteger('province')->nullable();
            $table->text('city')->nullable();
            $table->text('tell')->nullable();
            $table->text('fax')->nullable();
            $table->text('tax_number')->nullable();
            $table->unsignedInteger('type_id')->nullable();
            $table->text('code')->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
