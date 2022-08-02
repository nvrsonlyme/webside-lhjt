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
        Schema::create('sampah_spesifik', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_lapor');
            $table->string('provinsi');
            $table->string('kota');
            $table->integer('sampah_b3');
            $table->integer('sampah_lb3');
            $table->integer('sampah_akibat_bencana');
            $table->integer('sampah_puing');
            $table->integer('sampah_non_periodik');
            $table->integer('sampah_tidak_dapat_diolah');
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
        Schema::dropIfExists('sampah_spesifik');
    }
};
