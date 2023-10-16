<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateM03UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m03_users', function (Blueprint $table) {
            $table->string('UserName');
            $table->integer('UserNo');
            $table->tinyInteger('IsShowJikan');
            $table->dateTime('AddTime');
            $table->dateTime('UpdateTime');
            $table->string('UpdateName');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m03_users');
    }
}
