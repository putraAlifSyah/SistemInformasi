<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatatayangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datatayangans', function (Blueprint $table) {
            $table->id('kode_tayangan');
            $table->string('nama_tayangan');
            $table->bigInteger('kode_jadwal')->unsigned();
            $table->bigInteger('id_talent')->unsigned();
            $table->bigInteger('kode_lembaga')->unsigned();
            $table->string('rating');
            $table->timestamps();
        });

        Schema::table('datatayangans', function (Blueprint $table) {
            $table->foreign('kode_jadwal')->references('kode_jadwal')->on('jadwals');
            $table->foreign('id_talent')->references('id_talent')->on('datatalents');
            $table->foreign('kode_lembaga')->references('kode_lembaga')->on('datalembagas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datatayangans');
    }
}
