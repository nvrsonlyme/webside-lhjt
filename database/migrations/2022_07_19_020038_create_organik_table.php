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
        Schema::create('organik', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('JLokasi');
            $table->string('nama_tempat');
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('jml_kk');
            $table->string('alamat');
            $table->string('jalan');
            $table->integer('kota');
            $table->integer('kecamatan');
            $table->integer('kelurahan');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('no_sk');
            $table->string('ttdo');
            $table->string('sk_komposing');
            $table->string('komposing');
            $table->string('struktur_organisasi');
            $table->bigInteger('jml_sampah');
            $table->bigInteger('jml_serdadu');
            $table->string('Jternak');
            $table->string('k_lainnya');
            $table->string('kategori');
            $table->bigInteger('sisa');
            $table->bigInteger('jenis');
            $table->bigInteger('tbsf');
            $table->bigInteger('skompos');
            $table->bigInteger('jns_kompos');
            $table->bigInteger('pk_cair');
            $table->bigInteger('pk_padat');
            $table->bigInteger('s_energi');
            $table->bigInteger('jns_energi');
            $table->bigInteger('jml_sampahterkelola');
            $table->bigInteger('jml_skompos');
            $table->bigInteger('jml_kompos');
            $table->integer('bio1');
            $table->integer('bio1_1');
            $table->integer('bio2');
            $table->integer('bio2_1');
            $table->integer('bio3');
            $table->integer('bio3_1');
            $table->integer('bio4');
            $table->integer('bio4_1');
            $table->integer('bio5');
            $table->integer('bio5_1');
            $table->integer('bio6');
            $table->integer('bio6_1');
            $table->integer('bio7');
            $table->integer('bio7_1');
            $table->integer('bio8');
            $table->integer('bio8_1');
            $table->integer('bio9');
            $table->integer('bio9_1');
            $table->integer('bio10');
            $table->integer('bio10_1');
            $table->integer('tbio');
            $table->integer('tong');
            $table->integer('beton');
            $table->integer('luas');
            $table->integer('lain');
            $table->integer('unit');
            $table->string('pemanfaatan');
            $table->string('mengelolah');
            $table->integer('jml_pria');
            $table->integer('jml_wanita');
            $table->string('timbangan');
            $table->string('jcatat');
            $table->string('dbangun');
            $table->integer('lbangunan');
            $table->string('dcakup');
            $table->string('mpencacah');
            $table->string('a_angkut');
            $table->integer('motor');
            $table->integer('gmotor');
            $table->integer('pickup');
            $table->integer('truck');
            $table->string('lainnya');
            $table->integer('unit1');
            $table->integer('jml_alat');
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
        Schema::dropIfExists('organik');
    }
};
