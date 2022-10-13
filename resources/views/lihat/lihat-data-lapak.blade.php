@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-lapak.css') }}">
<!--Halaman Organik-->
@section('container')
    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class="uil uil-trees"></i>
                <span class="text">Data Lapak Kelurahan {{ $lapak->kelurahan->name_kel}}</span>
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
                    <h2 align="center">DATA LAPAK</h2><br>
                    <table class="view2">
                        <tr>
                            <td>Jenis</td>
                            <td>{{ $lapak->jenis }}</td>
                        </tr>
                        <tr>
                            <td>Nama Fasilitas</td>
                            <td>{{ $lapak->nama_fasilitas }}</td>
                        </tr>
                        <tr>
                            <td>Penanggung Jawab</td>
                            <td>{{ $lapak->penanggung_jawab }}</td>
                        </tr>
                        <tr>
                            <td>Telepon/HP</td>
                            <td>{{ $lapak->no_hp }}</td>
                        </tr>
                        <tr>
                            <td>Wilayah</td>
                            <td>{{ $lapak->wilayah }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $lapak->alamat }}</td>
                        </tr>
                        <tr>
                            <td>Provinsi</td>
                            <td>{{ $lapak->provinsi }}</td>
                        </tr>
                        <tr>
                            <td>Kabupaten/Kota</td>
                            <td>{{ $lapak->kota->name_kota }}</td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td>{{ $lapak->kecamatan->name_kec }}</td>
                        </tr>
                        <tr>
                            <td>Kelurahan</td>
                            <td>{{ $lapak->kelurahan->name_kel }}</td>
                        </tr>
                        <tr>
                            <td>Latitude</td>
                            <td>{{ $lapak->latitude }}</td>
                        </tr>
                        <tr>
                            <td>Longitude</td>
                            <td>{{ $lapak->longitude }}</td>
                        </tr>
                    </table>
                </div>
            </article>
            <div class="button">
                <a href="/lapak" class="back">Kembali</a>
            </div>
        </div>
    </div>
@endsection



