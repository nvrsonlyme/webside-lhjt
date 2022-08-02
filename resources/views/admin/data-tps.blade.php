@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-data-tps.css') }}">

                    <!--Halaman Data TPS-->
@section('container')
<!--Logo Form Data TPS-->
<div class="dash-content">
    <div class="overview">
        <div class="title">
            <i class="uil uil-books"></i>
            <span class="text">Data TPS</span>
        </div>
    </div>
</div>
<!--end-->
<!--Button Tambah-->
<div class="btn-tambah">
    <a href="{{ route('data-tps.form-tps') }}" class="button-tambah">
        <i class="uil uil-plus"></i>
        <span class="link-name">Tambah Data TPS</span>
    </a>
</div>
<!--end-->
<!--Isi-->
<div class="content-main">
    <div class="card-grid">
        @foreach ($tps as $tps)
        <article class="card">
            <div class="card-header">
                <div>
                    <span><img src=""></span>
                    <h2>Data TPS</h2>
                </div>
            </div>
            <div class="card-body">
                <h3>Data TPS Kelurahan {{ $tps->kelurahan }}</h3><br>
                <table class="view">
                    <tr>
                        <td>Nama Fasilitas</td>
                        <td>{{ $tps->nama_tps }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $tps->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>{{ $tps->kecamatan }}</td>
                    </tr>
                    <tr>
                        <td>Kelurahan</td>
                        <td>{{ $tps->kelurahan }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a href="#" class="lihat-data">Lihat Data</a>
                <a href="#" class="ubah">Ubah</a>
                <a href="#" class="hapus">Hapus</a>
            </div>
        </article>
        @endforeach
    </div>
</div>
<!--end-->
@endsection
