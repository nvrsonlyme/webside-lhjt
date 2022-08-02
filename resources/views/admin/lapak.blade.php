@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="css/style-lapak.css">

                    <!--Halaman Lapak-->
@section('container')
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
<div class="btn-tambah">
    <a href="{{ route('lapak.form-lapak') }}" class="button-tambah">
        <i class="uil uil-plus"></i>
        <span class="link-name">Tambah Data Lapak</span>
    </a>
</div>
<!--end-->
<!--Isi-->
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
                <h3>Data Lapak Kelurahan {{ $lapak->kelurahan }}</h3><br>
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
                        <td>{{ $lapak->kecamatan }}</td>
                    </tr>
                    <tr>
                        <td>Kelurahan</td>
                        <td>{{ $lapak->kelurahan }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a href="#" class="lihat-data">Lihat Data</a>
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
<div class="content-main">
    <div class="card-grid">
        <article class="card">
            <div class="card-header">
                <div>
                    <span><img src=""></span>
                    <h3>Lapak</h3>
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
                    <h3>Pengepul</h3>
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
