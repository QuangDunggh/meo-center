<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT01RankingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t01_rankings', function (Blueprint $table) {
            $table->string('Seq');
            $table->string('KeywordNo');
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
        Schema::dropIfExists('t01_rankings');
    }
}
