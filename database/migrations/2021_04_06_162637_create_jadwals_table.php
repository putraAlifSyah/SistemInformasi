<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id('kode_jadwal');
            $table->string('hari');
            $table->string('jam');
            $table->bigInteger('nama_karyawan')->unsigned();
            $table->bigInteger('nama_talent')->unsigned();
            $table->timestamps();
        });

        Schema::table('jadwals', function (Blueprint $table) {
            $table->foreign('nama_karyawan')->references('id_karyawan')->on('datakaryawans')->onUpdate('cascade');
            $table->foreign('nama_talent')->references('id_talent')->on('datatalents')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwals');
    }
}
