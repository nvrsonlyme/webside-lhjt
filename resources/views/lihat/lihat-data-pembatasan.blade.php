@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-pembatasan.css') }}">
<!--Halaman Organik-->
@section('container')
    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class="uil uil-trees"></i>
                <span class="text">Data Pembatasan</span>
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
                            <td>Lokasi Kegiatan Pembatasan Timbulan Sampah</td>
                            <td>{{ ($pembatasan->lokasi_kegiatan) }}</td>
                        </tr>
                        <tr>
                            <td>Nama Lokasi</td>
                            <td>{{ $pembatasan->nama_lokasi }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $pembatasan->alamat }}</td>
                        </tr>
                        <tr>
                            <td>RT</td>
                            <td>{{ $pembatasan->rt }}</td>
                        </tr>
                        <tr>
                            <td>RW</td>
                            <td>{{ $pembatasan->rw }}</td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td>{{ $pembatasan->kota->name_kota }}</td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td>{{ $pembatasan->kecamatan->name_kec }}</td>
                        </tr>
                        <tr>
                            <td>Kelurahan</td>
                            <td>{{ $pembatasan->kelurahan->name_kel }}</td>
                        </tr>
                        <tr>
                            <td>Latitude</td>
                            <td>{{ $pembatasan->lat }}</td>
                        </tr>
                        <tr>
                            <td>Longitude</td>
                            <td>{{ $pembatasan->long }}</td>
                        </tr>
                    </table>
                </div>
            </article>
            <div class="space"></div>
            <article class="card">
                <div class="card-body">
                    <h2 align="center">DATA PEMBATASAN</h2><br>
                    <table class="view2">
                        <tr>
                            <td colspan="2" align="center"><b>BOTOL SEKALI PAKAI</b></td>
                        </tr>
                        <tr>
                            <td>Jumlah Sampah Sebelum Ada Pembatasan</td>
                            <td>{{ $pembatasan->botol_sekali_pakai_sebelum }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Sampah Setelah Ada Pembatasan</td>
                            <td>{{ $pembatasan->botol_sekali_pakai_setelah }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><b>KOTAK ATAU PLASTIK MAKAN</b></td>
                        </tr>
                        <tr>
                            <td>Jumlah Sampah Sebelum Ada Pembatasan</td>
                            <td>{{ $pembatasan->kotak_plastik_makanan_sebelum }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Sampah Setelah Ada Pembatasan</td>
                            <td>{{ $pembatasan->kotak_plastik_makanan_setelah }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><b>LAINNYA</b></td>
                        </tr>
                        <tr>
                            <td>Jumlah Sampah Sebelum Ada Pembatasan</td>
                            <td>{{ $pembatasan->lainnya_sebelum }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Sampah Setelah Ada Pembatasan</td>
                            <td>{{ $pembatasan->lainnya_setelah }}</td>
                        </tr>
                    </table>
                </div>
            </article>
            <div class="button">
                <a href="/pembatasan" class="back">Kembali</a>
            </div>
        </div>
    </div>
@endsection



