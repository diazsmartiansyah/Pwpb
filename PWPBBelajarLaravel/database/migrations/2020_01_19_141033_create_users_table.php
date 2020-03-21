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
            $table->bigIncrements('id');
            $table->String('name',25);
            $table->String('companyName',25)->nullable();
            $table->String('username',25)->unique();
            $table->String('password');
            $table->String('phoneNumber',15)->unique()->nullable();
            $table->String('email',100)->unique()->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
        });

        Schema::table('users', function($table){
            $table->String('nama');
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
