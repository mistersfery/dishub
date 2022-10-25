<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratmasukTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratmasuk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomorsurat');
            $table->string('asalsurat');
            $table->date('tglsurat');
            $table->text('isiringkas');
            $table->text('keterangan');
            $table->string('file');
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
        Schema::drop('suratmasuk');
    }
}
