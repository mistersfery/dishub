<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik');
            $table->string('nama');
            $table->string('jeniskelamin');
            $table->string('ttl');
            $table->string('agama');
            $table->string('pendidikanterkahir');
            $table->string('pekerjaan');
            $table->string('statusperkawinan');
            $table->string('hubkeluarga');
            $table->string('kewarganegaraan');
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('ket');
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
        Schema::drop('penduduk');
    }
}
