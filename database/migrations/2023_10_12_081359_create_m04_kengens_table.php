<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateM04KengensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m04_kengens', function (Blueprint $table) {
            $table->integer('UserNo');
            $table->integer('AnkenNo');
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
        Schema::dropIfExists('m04_kengens');
    }
}