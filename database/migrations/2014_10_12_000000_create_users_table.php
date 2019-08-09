<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('client_id')->nullable()->default(0);
            $table->unsignedInteger('lead_id')->nullable()->default(0);
            $table->string('name');
            $table->string('lastname');
            $table->string('nickname')->nullable();
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('work_number')->nullable();
            $table->string('personal_number')->nullable();
            $table->string('avatar')->nullable();
            $table->string('rating')->nullable();
            $table->boolean('notifications')->default(true);
            $table->string('password', 60);
            $table->unsignedInteger('activated')->default(0);
            $table->timestamp('email_verified_at');
            $table->string('api_token', 80)->unique()->nullable()->default(null);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
