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
        Schema::create('data_tps', function (Blueprint $table) {
            $table->id();
            $table->string('nama_fasilitas');
            $table->string('wilayah');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('kategori');
            $table->string('dikelolah');
            $table->text('detail_pengelola');
            $table->bigInteger('struktur_organisasi');
            $table->string('izin');
            $table->string('no_izin');
            $table->string('dikeluarkan_oleh');
            $table->bigInteger('upload_izin');
            $table->text('penjelasan_izin');
            $table->date('tgl_awal_operasi');
            $table->date('tgl_akhir_operasi');
            $table->integer('luas_ttl');
            $table->integer('jarak_ke_pemukiman');
            $table->integer('jarak_ke_badan_air');
            $table->integer('jarak_ke_pantai');
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
        Schema::dropIfExists('data_tps');
    }
};
