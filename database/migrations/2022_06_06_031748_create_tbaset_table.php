<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbasetTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbaset', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kategori');
            $table->string('namabarang');
            $table->string('tahun');
            $table->string('asal');
            $table->string('jumlah');
            $table->string('kondisi');
            $table->string('keterangan');
            $table->string('foto');
            $table->string('unit');
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
        Schema::drop('tbaset');
    }
}
