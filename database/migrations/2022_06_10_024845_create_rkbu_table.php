<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRkbuTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rkbu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kategori');
            $table->string('namabarang');
            $table->string('tahun');
            $table->string('jumlah');
            $table->string('keterangan');
            $table->string('status');
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
        Schema::drop('rkbu');
    }
}
