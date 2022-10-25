<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbbarangTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbbarang', function (Blueprint $table) {
            $table->increments('id');
            $table->text('kategori');
            $table->mediumText('namabarang');
            $table->mediumText('tahunperolehan');
            $table->mediumText('asalusul');
            $table->integer('jumlah');
            $table->text('kondisi');
            $table->text('keterangan');
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
        Schema::drop('tbbarang');
    }
}
