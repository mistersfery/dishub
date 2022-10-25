<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->string('nama');
            $table->string('tempatlahir');
            $table->date('tgllahir');
            $table->string('pangkatgol');
            $table->string('tmtcpns');
            $table->string('tmtpangkatterakhir');
            $table->string('jabatan');
            $table->string('pendidikan');
            $table->string('keterangan');
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
        Schema::drop('pegawai');
    }
}
