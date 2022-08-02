@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-organik.css') }}">

                    <!--Halaman Organik-->
@section('container')
<!--Logo Form Organik-->
<div class="dash-content">
    <div class="overview">
        <div class="title">
            <i class="uil uil-trees"></i>
            <span class="text">Data Organik</span>
        </div>
    </div>
</div>
<!--end-->
<!--Button Tambah-->
<div class="btn-tambah">
    <a href="{{ route('organik.form-organik') }}" class="button-tambah">
        <i class="uil uil-plus"></i>
        <span class="link-name">Tambah Data Organik</span>
    </a>
</div>
<!--end-->
<!--Isi-->
@if (Auth::user()->role == 'Admin')
<div class="content-main">
    <div class="card-grid">
        @foreach ($organik as $orga)
        <article class="card">
            <div class="card-header">
                <div>
                    <span><img src=""></span>
                    <h2>Data Sampah Organik</h2>
                </div>
            </div>
            <div class="card-body">
                <h3>Data Organik Kelurahan {{ $orga->kelurahan }}</h3><br>
                <table class="view">
                    <tr>
                        <td>Tanggal</td>
                        <td>{{ $orga->tanggal }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $orga->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>{{ $orga->kecamatan }}</td>
                    </tr>
                    <tr>
                        <td>Kelurahan</td>
                        <td>{{ $orga->kelurahan }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a href="#" class="lihat-data">Lihat Data</a>
                <a href="/organik/{{ $orga->id }}/ubah" class="ubah">Ubah</a>
                <form action="/organik/{{ $orga->id }}" method="POST">
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
                    <h3>Organik</h3>
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
                    <h3>Organik</h3>
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
