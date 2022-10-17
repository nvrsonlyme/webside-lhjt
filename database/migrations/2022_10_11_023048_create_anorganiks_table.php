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
        Schema::create('anorganiks', function (Blueprint $table) {
            $table->id_anorganik();
            $table->date('tanggal');
            $table->string('JLokasi');
            $table->string('nama_tempat');
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('jml_kk');
            $table->string('bank_sampah');
            $table->string('alamat');
            $table->string('jalan');
            $table->integer('kota');
            $table->integer('kecamatan');
            $table->integer('kelurahan');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('status_banksampah');
            $table->string('waktu_operasional');
            $table->string('namaKetua');
            $table->string('no_tlp');
            $table->string('omset');
            $table->integer('jml_nasabah_L');
            $table->integer('jml_nasabah_P');
            $table->integer('jml_tenagakerja_L');
            $table->integer('jml_tenagakerja_P');
            $table->string('hasil_dijual_ke');
            $table->string('no_sk');
            $table->string('struktur_organisasi');
            $table->string('sk_bank_sampah');
            $table->date('tgl_sk');
            $table->string('ttdo');
            $table->string('produk_reuse');
            $table->string('jenis_reuse');
            $table->integer('berat_reuse');
            $table->string('mengelolah');
            $table->string('alat_timbangan');
            $table->string('jenis_pencatatan');
            $table->string('dbangun');
            $table->integer('lbangunan');
            $table->string('dcakup');
            $table->string('mesin_press');
            $table->string('mpencacah');
            $table->string('kondisi_bagunan');
            $table->string('buku_tabungan');
            $table->string('gudang_penyimpanan');
            $table->string('a_angkut');
            $table->integer('motor');
            $table->integer('gmotor');
            $table->integer('pickup');
            $table->integer('truck');
            $table->string('lainnya');
            $table->integer('unit1');
            $table->integer('jml_alat');
            $table->integer('jml_sampah');
            $table->integer('jml_serdadu');
            $table->integer('plastik');
            $table->integer('kertas');
            $table->integer('besi');
            $table->integer('logam');
            $table->string('lainnya_anorganik');
            $table->integer('unit2');
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
        Schema::dropIfExists('anorganik');
    }
};


