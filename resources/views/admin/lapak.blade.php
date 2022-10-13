@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="css/style-lapak.css">

                    <!--Halaman Lapak-->
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
<!--Logo Form Lapak-->
<div class="dash-content">
    <div class="overview">
        <div class="title">
            <i class="uil uil-clipboard"></i>
            <span class="text">Data Lapak</span>
        </div>
    </div>
</div>
<!--end-->
<!--Button Tambah-->
<div class="up">
<div class="btn-tambah">
    <a href="{{ route('lapak.form-lapak') }}" class="button-tambah">
        <i class="uil uil-plus"></i>
        <span class="link-name">Tambah Data Lapak</span>
    </a>
</div>
<div class="btn-cetak">
    <a href="{{ route('cetak-data-lapak') }}" target="_blank" class="button-cetak">
        <i class="uil uil-print"></i>
        <span class="link-name">Cetak Semua Data Lapak</span>
    </a>
</div>
</div>
<!--end-->
<!--Isi-->
{{-- ADMIN --}}
@if (Auth::user()->role == 'Admin')
<div class="content-main">
    <div class="card-grid">
        @foreach ($lapak as $lapak)
        <article class="card">
            <div class="card-header">
                <div>
                    <span><img src=""></span>
                    <h2>Data Lapak</h2>
                </div>
            </div>
            <div class="card-body">
                <h3>Data Lapak Kelurahan {{ $lapak->kelurahan->name_kel }}</h3><br>
                <table class="view">
                    <tr>
                        <td>Jenis</td>
                        <td>{{ $lapak->jenis }}</td>
                    </tr>
                    <tr>
                        <td>Nama Fasilitas</td>
                        <td>{{ $lapak->nama_fasilitas }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $lapak->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>{{ $lapak->kecamatan->name_kec }}</td>
                    </tr>
                    <tr>
                        <td>Kelurahan</td>
                        <td>{{ $lapak->kelurahan->name_kel }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a href="/lapak/{{ $lapak->id }}/lihat" class="lihat-data">Lihat Data</a>
                <a href="/lapak/{{ $lapak->id }}/ubah" class="ubah">Ubah</a>
                <form action="/lapak/{{ $lapak->id }}" method="POST">
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
{{-- PENGGUNA --}}
<div class="content-main">
    <div class="card-grid">
        @foreach ($lapak as $lapak)
        <article class="card">
            <div class="card-header">
                <div>
                    <span><img src=""></span>
                    <h2>Data Lapak</h2>
                </div>
            </div>
            <div class="card-body">
                <h3>Data Lapak Kelurahan {{ $lapak->kelurahan->name_kel }}</h3><br>
                <table class="view">
                    <tr>
                        <td>Jenis</td>
                        <td>{{ $lapak->jenis }}</td>
                    </tr>
                    <tr>
                        <td>Nama Fasilitas</td>
                        <td>{{ $lapak->nama_fasilitas }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $lapak->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>{{ $lapak->kecamatan->name_kec }}</td>
                    </tr>
                    <tr>
                        <td>Kelurahan</td>
                        <td>{{ $lapak->kelurahan->name_kel }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a href="/lapak/{{ $lapak->id }}/lihat" class="lihat-data">Lihat Data</a>
                <a href="/lapak/{{ $lapak->id }}/ubah" class="ubah">Ubah</a>
                <form action="/lapak/{{ $lapak->id }}" method="POST">
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
