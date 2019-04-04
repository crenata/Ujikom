<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinjamBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam_barangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('peminjam');
            $table->date('tgl_pinjam');
            $table->integer('id_barang');
            $table->string('nama_barang');
            $table->integer('jumlah_barang');
            $table->date('tgl_kembali');
            $table->string('kondisi');
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
        Schema::dropIfExists('pinjam_barangs');
    }
}
