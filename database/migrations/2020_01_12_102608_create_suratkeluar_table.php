<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('klasifikasi_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->string('no_surat', 30)->unique();
            $table->string('tujuan_surat', 30);
            $table->string('isi');
            $table->date('tgl_surat');
            $table->date('tgl_catat');
            $table->string('filekeluar', 30);
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
        Schema::dropIfExists('suratkeluar');
    }
}
