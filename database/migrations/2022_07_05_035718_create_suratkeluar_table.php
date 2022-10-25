<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratkeluarTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratkeluar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomorsurat');
            $table->date('tglsurat');
            $table->string('perihal');
            $table->string('untuk');
            $table->text('isiringkas');
            $table->text('keterangan');
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
        Schema::drop('suratkeluar');
    }
}
