<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatakaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datakaryawans', function (Blueprint $table) {
            $table->id('id_karyawan');
            $table->string('nama_karyawan');
            $table->bigInteger('kode_lembaga')->unsigned();
            $table->string('jabatan');
            $table->text('alamat');
            $table->string('no_telpon');
            $table->string('jam_kerja');
            $table->string('gaji_pokok');
            $table->timestamps();
        });

        Schema::table('datakaryawans', function (Blueprint $table) {
            $table->foreign('kode_lembaga')->references('kode_lembaga')->on('datalembagas')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datakaryawans');
    }
}
