@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-pembatasan.css') }}">

                    <!--Halaman Pembatasan-->
@section('container')
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
<div class="btn-tambah">
    <a href="{{ route('pembatasan.form-pembatasan') }}" class="button-tambah">
        <i class="uil uil-plus"></i>
        <span class="link-name">Tambah Data Pembatasan</span>
    </a>
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
                <h3>Data Pembatasan Kecamatan {{ $batas->kecamatan }}</h3><br>
                <table class="view">
                    <tr>
                        <td>Tanggal</td>
                        <td>{{ $batas->tgl }}</td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>{{ $batas->kecamatan }}</td>
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
                    <h3>Pembatasan</h3>
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
                    <h3>Pembatasan</h3>
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
