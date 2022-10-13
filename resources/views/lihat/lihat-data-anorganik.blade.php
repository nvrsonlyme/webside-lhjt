@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-anorganik.css') }}">
<!--Halaman Organik-->
@section('container')
    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class="uil uil-trees"></i>
                <span class="text">Data Sampah Anorganik Kelurahan {{ $anorganik->kelurahan->name_kel}}</span>
            </div>
        </div>
        {{-- <div class="btn-cetak2">
            <a href="{{ route('cetak-data-organik') }}" target="_blank" class="button-cetak">
                <i class="uil uil-print"></i>
                <span class="link-name">Cetak Data Organik</span>
            </a>
        </div> --}}
    </div>
    {{-- @foreach ($organik as $tampil ) --}}
    <div class="content-main">
        <div class="card-grid2">
            <article class="card">
                <div class="card-body">
                    <h2 align="center">DATA</h2><br>
                    <table class="view2">
                        <tr>
                            <td>Tanggal</td>
                            <td>{{ date('d-m-Y', strtotime($anorganik->tanggal)) }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Lokasi</td>
                            <td>{{ $anorganik->JLokasi }}</td>
                        </tr>
                        <tr>
                            <td>Nama Tempat</td>
                            <td>{{ $anorganik->nama_tempat }}</td>
                        </tr>
                        <tr>
                            <td>RT</td>
                            <td>{{ $anorganik->rt }}</td>
                        </tr>
                        <tr>
                            <td>RW</td>
                            <td>{{ $anorganik->rw }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah KK</td>
                            <td>{{ $anorganik->jml_kk }}</td>
                        </tr>
                        <tr>
                            <td>Bank Sampah / LB3</td>
                            <td>{{ $anorganik->bank_sampah }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $anorganik->alamat }}</td>
                        </tr>
                        <tr>
                            <td>Jalan</td>
                            <td>{{ $anorganik->jalan }}</td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td>{{ $anorganik->kota->name_kota }}</td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td>{{ $anorganik->kecamatan->name_kec }}</td>
                        </tr>
                        <tr>
                            <td>Kelurahan</td>
                            <td>{{ $anorganik->kelurahan->name_kel }}</td>
                        </tr>
                        <tr>
                            <td>Latitude</td>
                            <td>{{ $anorganik->latitude }}</td>
                        </tr>
                        <tr>
                            <td>Longitude</td>
                            <td>{{ $anorganik->longitude }}</td>
                        </tr>
                        <tr>
                            <td>Status Bank Sampah</td>
                            <td>{{ $anorganik->status_banksampah }}</td>
                        </tr>
                        <tr>
                            <td>Waktu Operasional</td>
                            <td>{{ $anorganik->waktu_operasional }}</td>
                        </tr>
                        <tr>
                            <td>Nama Ketua</td>
                            <td>{{ $anorganik->namaKetua }}</td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>{{ $anorganik->no_tlp }}</td>
                        </tr>
                        <tr>
                            <td>Omset Perbulan</td>
                            <td>{{ $anorganik->omset }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Nasabah Laki-Laki</td>
                            <td>{{ $anorganik->jml_nasabah_L }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Nasabah Perempuan</td>
                            <td>{{ $anorganik->jml_nasabah_P }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Tenaga Laki-Laki</td>
                            <td>{{ $anorganik->jml_tenagakerja_L }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Tenaga Perempuan</td>
                            <td>{{ $anorganik->jml_tenagakerja_P }}</td>
                        </tr>
                        <tr>
                            <td>Hasil Dijual Ke</td>
                            <td>{{ $anorganik->hasil_dijual_ke }}</td>
                        </tr>
                        <tr>
                            <td>NO SK</td>
                            <td>{{ $anorganik->no_sk }}</td>
                        </tr>
                        <tr>
                            <td>Struktur Organisasi</td>
                            <td>{{ $anorganik->struktur_organisasi }}</td>
                        </tr>
                        <tr>
                            <td>SK Bank Sampah</td>
                            <td>{{ $anorganik->sk_bank_sampah }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal SK</td>
                            <td>{{ $anorganik->tgl_sk }}</td>
                        </tr>
                        <tr>
                            <td>Ditandatangani Oleh</td>
                            <td>{{ $anorganik->ttdo }}</td>
                        </tr>
                        <tr>
                            <td>Produk Reuse</td>
                            <td>{{ $anorganik->produk_reuse }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Reuse</td>
                            <td>{{ $anorganik->jenis_reuse }}</td>
                        </tr>
                        <tr>
                            <td>Berat Reuse</td>
                            <td>{{ $anorganik->berat_reuse }}</td>
                        </tr>
                    </table>
                </div>
            </article>
            <div class="space"></div>
            <article class="card">
                <div class="card-body">
                    <h2 align="center">MEDIA ANORGANIK</h2><br>
                    <table class="view2">
                        <tr>
                            <td>Yang Mengelola</td>
                            <td>{{ $anorganik->mengelolah }}</td>
                        </tr>
                        <tr>
                            <td>Alat Timbangan</td>
                            <td>{{ $anorganik->alat_timbangan }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Pencatatan</td>
                            <td>{{ $anorganik->jenis_pencatatan }}</td>
                        </tr>
                        <tr>
                            <td>Dibangun Oleh</td>
                            <td>{{ $anorganik->dbangun }}</td>
                        </tr>
                        <tr>
                            <td>Luas Bangunan</td>
                            <td>{{ $anorganik->lbangunan }}</td>
                        </tr>
                        <tr>
                            <td>Daerah Cakupan</td>
                            <td>{{ $anorganik->dcakup }}</td>
                        </tr>
                        <tr>
                            <td>Mesin Press</td>
                            <td>{{ $anorganik->mesin_press }}</td>
                        </tr>
                        <tr>
                            <td>Kondisi Bangunan</td>
                            <td>{{ $anorganik->kondisi_bangunan }}</td>
                        </tr>
                        <tr>
                            <td>Buku Tabungan</td>
                            <td>{{ $anorganik->buku_tabungan }}</td>
                        </tr>
                        <tr>
                            <td>Gudang Penyimpanan</td>
                            <td>{{ $anorganik->gudang_penyimpanan }}</td>
                        </tr>
                        <tr>
                            <td>Alat Angkut</td>
                            <td>{{ $anorganik->a_angkut }}</td>
                        </tr>
                        <tr>
                            <td>Motor</td>
                            <td>{{ $anorganik->motor }}</td>
                        </tr>
                        <tr>
                            <td>Gerobak Motor</td>
                            <td>{{ $anorganik->gmotor }}</td>
                        </tr>
                        <tr>
                            <td>Pick Up</td>
                            <td>{{ $anorganik->pickup }}</td>
                        </tr>
                        <tr>
                            <td>Truck</td>
                            <td>{{ $anorganik->truck }}</td>
                        </tr>
                        <tr>
                            <td>Lainnya</td>
                            <td>{{ $anorganik->lainnya }}</td>
                        </tr>
                        <tr>
                            <td>Unit Lainnya</td>
                            <td>{{ $anorganik->unit1 }}</td>
                        </tr>
                        <tr>
                            <td>JUMLAH ALAT ANGKUT</td>
                            <td>{{ $anorganik->jml_alat }}</td>
                        </tr>
                    </table>
                </div>
            </article>
            <div class="space"></div>
            <article class="card">
                <div class="card-body">
                    <h2 align="center">JUMLAH SAMPAH ANORGANIK</h2><br>
                    <table class="view2">
                        <tr>
                            <td>Jumlah Sampah</td>
                            <td>{{ $anorganik->jml_sampah }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Serdadu</td>
                            <td>{{ $anorganik->jml_serdadu }}</td>
                        </tr>
                    </table>
                </div>
            </article>
            <div class="space"></div>
            <article class="card">
                <div class="card-body">
                    <h2 align="center">JENIS SAMPAH ANORGANIK</h2><br>
                    <table class="view2">
                        <tr>
                            <td>Plastik</td>
                            <td>{{ $anorganik->plastik }}</td>
                        </tr>
                        <tr>
                            <td>Kertas</td>
                            <td>{{ $anorganik->kertas }}</td>
                        </tr>
                        <tr>
                            <td>Besi</td>
                            <td>{{ $anorganik->besi }}</td>
                        </tr>
                        <tr>
                            <td>Logam</td>
                            <td>{{ $anorganik->logam }}</td>
                        </tr>
                        <tr>
                            <td>Lainnya</td>
                            <td>{{ $anorganik->lainnya_anorganik }}</td>
                        </tr>
                        <tr>
                            <td>Unit Lainnya</td>
                            <td>{{ $anorganik->unit2 }}</td>
                        </tr>
                    </table>
                </div>
            </article>
            <div class="button">
                <a href="/anorganik" class="back">Kembali</a>
            </div>
        </div>
    </div>
@endsection



