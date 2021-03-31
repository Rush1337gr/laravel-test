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
            $table->string('nickname' ,36)->nullable(false)->unique();
            $table->string('email')->nullable(false)->unique();
            $table->string('password')->nullable(false);
            $table->string('status' ,20)->nullable(true);
            $table->string('title',20)->nullable(true);
            $table->string('name',30)->nullable(true);
            $table->string('surname' ,30)->nullable(true);
            $table->date('year_birth')->nullable(true);
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
