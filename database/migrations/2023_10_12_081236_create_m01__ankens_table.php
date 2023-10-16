<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateM01AnkensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m01__ankens', function (Blueprint $table) {
            $table->string('AnkenId');
            $table->string('AnkenId');
            $table->integer('AnkenNo');
            $table->tinyInteger('SearchStart');
            $table->tinyInteger('SearchEnd');
            $table->string('Cid');
            $table->string('BussinessId');
            $table->string('OyaAnkenNo');
            $table->string('ShoriPcName');
            $table->string('SearchBasho');
            $table->integer('ShekaHoshu');
            $table->integer('MonthKotehi');
            $table->dateTime('AddTime');
            $table->dateTime('UpdateTime');
            $table->string('UpdateName');
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
        Schema::dropIfExists('m01__ankens');
    }
}
