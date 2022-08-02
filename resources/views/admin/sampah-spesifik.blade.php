@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-sampah-spesifik.css') }}">

                    <!--Halaman Sampah Spesifik-->
@section('container')
<!--Logo Form Sampah Spesifik-->
<div class="dash-content">
    <div class="overview">
        <div class="title">
            <i class="uil uil-gold"></i>
            <span class="text">Data Sampah Spesifik</span>
        </div>
    </div>
</div>
<!--end-->
<!--Button Tambah-->
<div class="btn-tambah">
    <a href="{{ route('sampah-spesifik.form-sampah-spesifik') }}" class="button-tambah">
        <i class="uil uil-plus"></i>
        <span class="link-name">Tambah Data Sampah Spesifik</span>
    </a>
</div>
<!--end-->
<!--Isi-->
@if (Auth::user()->role == 'Admin')
<div class="content-main">
    <div class="card-grid">
        @foreach ($spesifik as $spesifik)
        <article class="card">
            <div class="card-header">
                <div>
                    <span><img src=""></span>
                    <h2>Data Sampah Spesifik</h2>
                </div>
            </div>
            <div class="card-body">
                <h3>Data Sampah Spesifik Provinsi {{ $spesifik->provinsi }}</h3><br>
                <table class="view">
                    <tr>
                        <td>Tanggal Lapor</td>
                        <td>{{ $spesifik->tgl_lapor }}</td>
                    </tr>
                    <tr>
                        <td>Provinsi</td>
                        <td>{{ $spesifik->provinsi }}</td>
                    </tr>
                    <tr>
                        <td>Kota</td>
                        <td>{{ $spesifik->kota }}</td>
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
@else
<div class="content-main">
    <div class="card-grid">
        <article class="card">
            <div class="card-header">
                <div>
                    <span><img src=""></span>
                    <h3>Sampah Spesifik</h3>
                </div>
            </div>
            <div class="card-body">
                <p>Collaboration between designers and developers.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="lihat-data">Lihat Data</a>
                <a href="#" class="ubah">Ubah</a>
                <a href="#" class="hapus">Hapus</a>
            </div>
        </article>
        <article class="card">
            <div class="card-header">
                <div>
                    <span><img src=""></span>
                    <h3>Sampah Spesifik</h3>
                </div>
            </div>
            <div class="card-body">
                <p>Collaboration between designers and developers.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="lihat-data">Lihat Data</a>
                <a href="#" class="ubah">Ubah</a>
                <a href="#" class="hapus">Hapus</a>
            </div>
        </article>
    </div>
</div>
@endif

<!--end-->

@endsection
