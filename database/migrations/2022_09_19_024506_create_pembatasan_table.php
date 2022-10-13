<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembatasans', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi_kegiatan');
            $table->string('nama_lokasi');
            $table->string('alamat');
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('kota_id');
            $table->integer('kec_id');
            $table->integer('kel_id');
            $table->string('lat');
            $table->string('long');
            $table->integer('botol_sekali_pakai_sebelum');
            $table->integer('botol_sekali_pakai_setelah');
            $table->integer('kotak_plastik_makanan_sebelum');
            $table->integer('kotak_plastik_makanan_setelah');
            $table->string('lainnya');
            $table->integer('lainnya_sebelum');
            $table->integer('lainnya_setelah');
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
        Schema::dropIfExists('pembatasan');
    }
};
