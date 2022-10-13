@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-organik.css') }}">
<!--Halaman Organik-->
@section('container')
    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class="uil uil-trees"></i>
                <span class="text">Data Sampah Organik Kelurahan {{ $organik->kelurahan->name_kel}}</span>
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
                            <td>{{ date('d-m-Y', strtotime($organik->tanggal)) }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Lokasi</td>
                            <td>{{ $organik->JLokasi }}</td>
                        </tr>
                        <tr>
                            <td>Nama Tempat</td>
                            <td>{{ $organik->nama_tempat }}</td>
                        </tr>
                        <tr>
                            <td>RT</td>
                            <td>{{ $organik->rt }}</td>
                        </tr>
                        <tr>
                            <td>RW</td>
                            <td>{{ $organik->rw }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah KK</td>
                            <td>{{ $organik->jml_kk }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $organik->alamat }}</td>
                        </tr>
                        <tr>
                            <td>Jalan</td>
                            <td>{{ $organik->jalan }}</td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td>{{ $organik->kota->name_kota }}</td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td>{{ $organik->kecamatan->name_kec }}</td>
                        </tr>
                        <tr>
                            <td>Kelurahan</td>
                            <td>{{ $organik->kelurahan->name_kel }}</td>
                        </tr>
                        <tr>
                            <td>Latitude</td>
                            <td>{{ $organik->latitude }}</td>
                        </tr>
                        <tr>
                            <td>Longitude</td>
                            <td>{{ $organik->longitude }}</td>
                        </tr>
                        <tr>
                            <td>NO SK</td>
                            <td>{{ $organik->no_sk }}</td>
                        </tr>
                        <tr>
                            <td>Ditandatangani Oleh</td>
                            <td>{{ $organik->ttdo }}</td>
                        </tr>
                        <tr>
                            <td>SK Komposing</td>
                            <td>{{ $organik->sk_komposing }}</td>
                        </tr>
                        <tr>
                            <td>Komposing</td>
                            <td>{{ $organik->komposing }}</td>
                        </tr>
                        <tr>
                            <td>Struktur Organisasi</td>
                            <td>{{ $organik->struktur_organisasi }}</td>
                        </tr>
                    </table>
                </div>
            </article>
            <div class="space"></div>
            <article class="card">
                <div class="card-body">
                    <h2 align="center">JUMLAH SAMPAH ORGANIK</h2><br>
                    <table class="view2">
                        <tr>
                            <td>Jumlah Sampah</td>
                            <td>{{ $organik->jml_sampah }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Serdadu</td>
                            <td>{{ $organik->jml_serdadu }}</td>
                        </tr>
                    </table>
                </div>
            </article>
            <div class="space"></div>
            <article class="card">
                <div class="card-body">
                    <h2 align="center">DATA SAMPAH ORGANIK</h2><br>
                    <h3>JUMLAH SAMPAH ORGANIK UNTUK PAKAN TERNAK</h3>
                    <table class="view2">
                        <tr>
                            <td>Jenis Ternak</td>
                            <td>{{ $organik->Jternak }}</td>
                        </tr>
                        <tr>
                            <td>Keterangan Lainnya</td>
                            <td>{{ $organik->k_lainnya }}</td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>{{ $organik->kategori }}</td>
                        </tr>
                        <tr>
                            <td>Sisa Makanan</td>
                            <td>{{ $organik->sisa }}</td>
                        </tr>
                        <tr>
                            <td>Kayu, Ranting, Daun</td>
                            <td>{{ $organik->jenis }}</td>
                        </tr>
                        <tr>
                            <td>Total Makanan BSF</td>
                            <td>{{ $organik->tbsf }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Sampah Terkelola</td>
                            <td>{{ $organik->jml_sampahterkelola }}</td>
                        </tr>
                    </table><br>
                    <h2 align="center">JENIS TERNAK NON BSF</h2><br>
                    <h3>JUMLAH SAMPAH ORGANIK UNTUK BAHAN BAKU KOMPOS</h3>
                    <table class="view2">
                        <tr>
                            <td>Sisa Makanan</td>
                            <td>{{ $organik->skompos }}</td>
                        </tr>
                        <tr>
                            <td>Kayu, Ranting, Daun</td>
                            <td>{{ $organik->jns_kompos }}</td>
                        </tr>
                        <tr>
                            <td>Panen Kompos Cair</td>
                            <td>{{ $organik->pk_cair }}</td>
                        </tr>
                        <tr>
                            <td>Panen Kompos Padat</td>
                            <td>{{ $organik->pk_padat }}</td>
                        </tr>
                    </table><br>
                    <h3>JUMLAH SAMPAH ORGANIK UNTUK BAHAN BAKU SUMBER ENERGI</h3><br>
                    <table class="view2">
                        <tr>
                            <td>Sisa Makanan</td>
                            <td>{{ $organik->s_energi }}</td>
                        </tr>
                        <tr>
                            <td>Kayu, Ranting, Daun</td>
                            <td>{{ $organik->jns_energi }}</td>
                        </tr>
                        <tr>
                            <td>JUMLAH TOTAL SISA MAKANAN</td>
                            <td>{{ $organik->jml_skompos }}</td>
                        </tr>
                        <tr>
                            <td>JUMLAH TOTAL KAYU, RANTING, DAUN</td>
                            <td>{{ $organik->jml_kompos }}</td>
                        </tr>
                    </table>
                </div>
            </article>
            <div class="space"></div>
            <article class="card">
                <div class="card-body">
                    <h2 align="center">JUMLAH BERAT DAN PAKAN MAGGOT PER BIOPON (BIO)/HARI</h2><br>
                    <table class="view2">
                        <tr>
                            <td>BIO 1</td>
                            <td>{{ $organik->bio1 }}</td>
                            <td>{{ $organik->bio1_1 }}</td>
                        </tr>
                        <tr>
                            <td>BIO 2</td>
                            <td>{{ $organik->bio2 }}</td>
                            <td>{{ $organik->bio_1 }}</td>
                        </tr>
                        <tr>
                            <td>BIO 3</td>
                            <td>{{ $organik->bio3 }}</td>
                            <td>{{ $organik->bio3_1 }}</td>
                        </tr>
                        <tr>
                            <td>BIO 4</td>
                            <td>{{ $organik->bio4 }}</td>
                            <td>{{ $organik->bio4_1 }}</td>
                        </tr>
                        <tr>
                            <td>BIO 5</td>
                            <td>{{ $organik->bio5 }}</td>
                            <td>{{ $organik->bio5_1 }}</td>
                        </tr>
                        <tr>
                            <td>BIO 6</td>
                            <td>{{ $organik->bio6 }}</td>
                            <td>{{ $organik->bio6_1 }}</td>
                        </tr>
                        <tr>
                            <td>BIO 7</td>
                            <td>{{ $organik->bio7 }}</td>
                            <td>{{ $organik->bio7_1 }}</td>
                        </tr>
                        <tr>
                            <td>BIO 8</td>
                            <td>{{ $organik->bio8 }}</td>
                            <td>{{ $organik->bio8_1 }}</td>
                        </tr>
                        <tr>
                            <td>BIO 9</td>
                            <td>{{ $organik->bio9 }}</td>
                            <td>{{ $organik->bio9_1 }}</td>
                        </tr>
                        <tr>
                            <td>BIO 10</td>
                            <td>{{ $organik->bio10 }}</td>
                            <td>{{ $organik->bio10_1 }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Total Biofon</td>
                            <td colspan="2">{{ $organik->tbio }}</td>
                        </tr>
                    </table>
                </div>
            </article>
            <div class="space"></div>
            <article class="card">
                <div class="card-body">
                    <h2 align="center">PROSES INTI</h2><br>
                    <table class="view2">
                        <tr>
                            <td>Berat Telur Hasil BSF</td>
                            <td>{{ $organik->berat_telur }}</td>
                        </tr>
                        <tr>
                            <td>Berat Maggot 1-18 DOL</td>
                            <td>{{ $organik->berat_maggot }}</td>
                        </tr>
                        <tr>
                            <td>Prepupa Masuk Dari Plasma</td>
                            <td>{{ $organik->prepupa_masuk }}</td>
                        </tr>
                        <tr>
                            <td>Alamat Kirim Plasma</td>
                            <td>{{ $organik->alamat_kirim }}</td>
                        </tr>
                        <tr>
                            <td>Kirim Maggot 1-18 DOL Ke Plasma</td>
                            <td>{{ $organik->kirim_maggot }}</td>
                        </tr>
                        <tr>
                            <td>Alamat Terima Plasma</td>
                            <td>{{ $organik->alamat_terima }}</td>
                        </tr>
                    </table>
                </div>
            </article>
            <div class="space"></div>
            <article class="card">
                <div class="card-body">
                    <h2 align="center">PROSES PLASMA</h2><br>
                    <table class="view2">
                        <tr>
                            <td>Larva Di Terima Dari</td>
                            <td>{{ $organik->larva_terima }}</td>
                        </tr>
                        <tr>
                            <td>Berat Maggot 1-18 DOL</td>
                            <td>{{ $organik->berat_maggot_plasma }}</td>
                        </tr>
                        <tr>
                            <td>Prepupa Yang Di Manfaatkan</td>
                            <td>{{ $organik->prepupa_dimanfaatkan }}</td>
                        </tr>
                    </table>
                </div>
            </article>
            <div class="space"></div>
            <article class="card">
                <div class="card-body">
                    <h2 align="center">MEDIA KOMPOSING</h2><br>
                    <table class="view2">
                        <tr>
                            <td>Tong Komposeri</td>
                            <td>{{ $organik->larva_terima }}</td>
                        </tr>
                        <tr>
                            <td>Bak Beton</td>
                            <td>{{ $organik->tong }}</td>
                        </tr>
                        <tr>
                            <td>Luas Bak Beton</td>
                            <td>{{ $organik->luas }}</td>
                        </tr>
                        <tr>
                            <td>Lainnya</td>
                            <td>{{ $organik->lain }}</td>
                        </tr>
                        <tr>
                            <td>Unit Lainnya</td>
                            <td>{{ $organik->unit }}</td>
                        </tr>
                        <tr>
                            <td>Pemanfaatan</td>
                            <td>{{ $organik->pemanfaatan }}</td>
                        </tr>
                        <tr>
                            <td>Yang Mengelola</td>
                            <td>{{ $organik->mengelolah }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Tenaga Kerja Laki-laki</td>
                            <td>{{ $organik->jml_pria }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Tenaga Kerja Perempuan</td>
                            <td>{{ $organik->jml_wanita }}</td>
                        </tr>
                        <tr>
                            <td>Alat Timbangan</td>
                            <td>{{ $organik->timbangan }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Pencatatan</td>
                            <td>{{ $organik->jcatat }}</td>
                        </tr>
                        <tr>
                            <td>Dibangun Oleh</td>
                            <td>{{ $organik->dbangun }}</td>
                        </tr>
                        <tr>
                            <td>Luas Bangunan</td>
                            <td>{{ $organik->lbangunan }}</td>
                        </tr>
                        <tr>
                            <td>Daerah Cakupan</td>
                            <td>{{ $organik->dcakup }}</td>
                        </tr>
                        <tr>
                            <td>Mesin Pencacah</td>
                            <td>{{ $organik->mpencacah }}</td>
                        </tr>
                        <tr>
                            <td>Alat Angkut</td>
                            <td>{{ $organik->a_angkut }}</td>
                        </tr>
                        <tr>
                            <td>Motor</td>
                            <td>{{ $organik->motor }}</td>
                        </tr>
                        <tr>
                            <td>Gerobak Motor</td>
                            <td>{{ $organik->gmotor }}</td>
                        </tr>
                        <tr>
                            <td>Pick Up</td>
                            <td>{{ $organik->pickup }}</td>
                        </tr>
                        <tr>
                            <td>Truck</td>
                            <td>{{ $organik->truck }}</td>
                        </tr>
                        <tr>
                            <td>Lainnya</td>
                            <td>{{ $organik->lainnya }}</td>
                        </tr>
                        <tr>
                            <td>Unit Lainnya</td>
                            <td>{{ $organik->unit1 }}</td>
                        </tr>
                        <tr>
                            <td>JUMLAH ALAT ANGKUT</td>
                            <td>{{ $organik->jml_alat }}</td>
                        </tr>
                    </table>
                </div>
            </article>
            <div class="button">
                <a href="/organik" class="back">Kembali</a>
            </div>
        </div>
    </div>
@endsection



