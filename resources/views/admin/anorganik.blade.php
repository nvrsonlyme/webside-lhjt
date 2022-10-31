@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="css/style-anorganik.css">

                    <!--Halaman Organik-->
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
            <i class="uil uil-process"></i>
            <span class="text">Data Anorganik</span>
        </div>
    </div>
</div>
<!--end-->
<!--Button Tambah-->
<div class="up">
    <div class="btn-tambah">
        <a href="{{ route('anorganik.form-anorganik') }}" class="button-tambah">
            <i class="uil uil-plus"></i>
            <span class="link-name">Tambah Data Anorganik</span>
        </a>
    </div>
    <div class="btn-cetak">
        <a href="{{ route('cetak-data-anorganik') }}" target="_blank" class="button-cetak">
            <i class="uil uil-print"></i>
            <span class="link-name">Cetak Semua Data Organik</span>
        </a>
    </div>
</div>
<!--end-->
<!--Isi-->
@if (Auth::user()->role == 'Admin')
<div class="content-main">
    <div class="card-grid">
        @foreach ($anorganik as $anorga)
        <article class="card">
            <div class="card-header">
                <div>
                    <span><img src=""></span>
                    <h2>Data Sampah Anorganik</h2>
                </div>
            </div>
            <div class="card-body">
                <h3>Data Anorganik Kelurahan {{ $anorga->kelurahan->name_kel }}</h3><br>
                <table class="view">
                    <tr>
                        <td>Tanggal</td>
                        <td>{{ date('d-m-Y', strtotime($anorga->tanggal)) }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $anorga->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>{{ $anorga->kecamatan->name_kec }}</td>
                    </tr>
                    <tr>
                        <td>Kelurahan</td>
                        <td>{{ $anorga->kelurahan->name_kel }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a href="/anorganik/{{ $anorga->id_anorganik }}/lihat" class="lihat-data">Lihat Data</a>
                <a href="/anorganik/{{ $anorga->id_anorganik }}/ubah" class="ubah">Ubah</a>
                <form action="/anorganik/{{ $anorga->id_anorganik }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Hapus" class="hapus">
                </form>
            </div>
        </article>
        @endforeach
    </div>
</div>
@elseif ($anorganik->user->user_id == Auth::user()->user_id)

{{-- Pengguna --}}
{{-- (Auth::user()->anorganik()) --}}
{{-- (Auth::user()->kecamatan->kec_id) --}}

<div class="content-main">
    <div class="card-grid">
        @foreach ($anorganik as $anorga)
        <article class="card">
            <div class="card-header">
                <div>
                    <span><img src=""></span>
                    <h2>Data Sampah Anorganik</h2>
                </div>
            </div>
            <div class="card-body">
                <h3>Data Anorganik Kelurahan {{ $anorga->kelurahan->name_kel }}</h3><br>
                <table class="view">
                    <tr>
                        <td>Tanggal</td>
                        <td>{{ date('d-m-Y', strtotime($anorga->tanggal)) }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $anorga->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>{{ $anorga->kecamatan->name_kec }}</td>
                    </tr>
                    <tr>
                        <td>Kelurahan</td>
                        <td>{{ $anorga->kelurahan->name_kel }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a href="/anorganik/{{ $anorga->id_anorganik }}/lihat" class="lihat-data">Lihat Data</a>
                <a href="/anorganik/{{ $anorga->id_anorganik }}/ubah" class="ubah">Ubah</a>
                <form action="/anorganik/{{ $anorga->id_anorganik }}" method="POST">
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
