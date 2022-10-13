@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-pembatasan.css') }}">

                    <!--Halaman Pembatasan-->
@section('container')
<div class="top">
    <i class="uil uil-bars sidebar-toggle"></i>
    <div class="search-box">
        <i class="uil uil-search"></i>
        <form action="{{ route('organik.search') }}" method="GET">
            <input type="search" name="search" placeholder="Search here...">
        </form>
    </div>
    <img src="{{ asset('img/lingkungan-hidup.jpg') }}" alt="">
</div>
<!--Logo Form Organik-->
<div class="dash-content">
    <div class="overview">
        <div class="title">
            <i class="uil uil-comment"></i>
            <span class="text">Data Pembatasan</span>
        </div>
    </div>
</div>
<!--end-->
<!--Button Tambah-->
<div class="up">
    <div class="btn-tambah">
        <a href="{{ route('pembatasan.form-pembatasan') }}" class="button-tambah">
            <i class="uil uil-plus"></i>
            <span class="link-name">Tambah Data Pembatasan</span>
        </a>
    </div>
    <div class="btn-cetak">
        <a href="{{ route('cetak-data-pembatasan') }}" target="_blank" class="button-cetak">
            <i class="uil uil-print"></i>
            <span class="link-name">Cetak Semua Data Pembatasan</span>
        </a>
    </div>
</div>
<!--end-->
<!--Isi-->
@if (Auth::user()->role == 'Admin')
<div class="content-main">
    <div class="card-grid">
        @foreach ($pembatasan as $batas)
        <article class="card">
            <div class="card-header">
                <div>
                    <span><img src=""></span>
                    <h2>Data Pembatasan</h2>
                </div>
            </div>
            <div class="card-body">
                <h3>Data Pembatasan Kecamatan {{ $batas->kecamatan->name_kec }}</h3><br>
                <table class="view">
                    <tr>
                        <td>Lokasi Kegiatan</td>
                        <td>{{ $batas->lokasi_kegiatan }}</td>
                    </tr>
                    <tr>
                        <td>Nama Lokasi</td>
                        <td>{{ $batas->nama_lokasi }}</td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>{{ $batas->kecamatan->name_kec }}</td>
                    </tr>
                    <tr>
                        <td>Kelurahan</td>
                        <td>{{ $batas->kelurahan->name_kel }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a href="/pembatasan/{{ $batas->id }}/lihat" class="lihat-data">Lihat Data</a>
                <a href="/pembatasan/{{ $batas->id }}/ubah" class="ubah">Ubah</a>
                <form action="/pembatasan/{{ $batas->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Hapus" class="hapus">
                </form>
            </div>
        </article>
        @endforeach
    </div>
</div>
@else
<div class="content-main">
    <div class="card-grid">
        @foreach ($pembatasan as $batas)
        <article class="card">
            <div class="card-header">
                <div>
                    <span><img src=""></span>
                    <h2>Data Pembatasan</h2>
                </div>
            </div>
            <div class="card-body">
                <h3>Data Pembatasan Kecamatan {{ $batas->kecamatan->name_kec }}</h3><br>
                <table class="view">
                    <tr>
                        <td>Lokasi Kegiatan</td>
                        <td>{{ $batas->lokasi_kegiatan }}</td>
                    </tr>
                    <tr>
                        <td>Nama Lokasi</td>
                        <td>{{ $batas->nama_lokasi }}</td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>{{ $batas->kecamatan->name_kec }}</td>
                    </tr>
                    <tr>
                        <td>Kelurahan</td>
                        <td>{{ $batas->kelurahan->name_kel }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a href="/pembatasan/{{ $batas->id }}/lihat" class="lihat-data">Lihat Data</a>
                <a href="/pembatasan/{{ $batas->id }}/ubah" class="ubah">Ubah</a>
                <form action="/pembatasan/{{ $batas->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Hapus" class="hapus">
                </form>
            </div>
        </article>
        @endforeach
    </div>
</div>
@endif

<!--end-->

@endsection
