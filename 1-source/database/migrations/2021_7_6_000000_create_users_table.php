<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('user_id',10);
            $table->string('user_name',50);
            $table->string('user_email',50);
            $table->string('user_phone',50)->nullable();
            $table->string('user_password',100);
            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id')->references('type_id')->on('types');
            $table->unsignedBigInteger('group_id')->nullable();
            $table->foreign('group_id')->references('group_id')->on('groups');
            $table->rememberToken()->nullable();
            // $table->integer('status',5);
            // $table->softDeletesTz($column = 'deleted_at', $precision = 0);
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
