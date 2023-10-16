<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateM02KeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m02_keywords', function (Blueprint $table) {
            $table->integer('AnkenNo');
            $table->string('Keyword');
            $table->decimal('Ido');
            $table->decimal('Keido');
            $table->integer('KeywordNo');
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
        Schema::dropIfExists('m02_keywords');
    }
}
