@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="css/style-anorganik.css">

                    <!--Halaman Organik-->
@section('container')
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
<div class="btn-tambah">
    <a href="{{ route('anorganik.form-anorganik') }}" class="button-tambah">
        <i class="uil uil-plus"></i>
        <span class="link-name">Tambah Data Anorganik</span>
    </a>
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
                <h3>Data Anorganik Kelurahan {{ $anorga->kelurahan }}</h3><br>
                <table class="view">
                    <tr>
                        <td>Tanggal</td>
                        <td>{{ $anorga->tanggal }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $anorga->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>{{ $anorga->kecamatan }}</td>
                    </tr>
                    <tr>
                        <td>Kelurahan</td>
                        <td>{{ $anorga->kelurahan }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a href="#" class="lihat-data">Lihat Data</a>
                <a href="/anorganik/{{ $anorga->id }}/ubah" class="ubah">Ubah</a>
                <form action="/anorganik/{{ $anorga->id }}" method="POST">
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
                    <h3>Anorganik</h3>
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
                    <h3>Anorganik</h3>
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
