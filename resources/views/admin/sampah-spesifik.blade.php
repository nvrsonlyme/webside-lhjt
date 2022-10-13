@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-sampah-spesifik.css') }}">

                    <!--Halaman Sampah Spesifik-->
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
<div class="up">
    <div class="btn-tambah">
        <a href="{{ route('sampah-spesifik.form-sampah-spesifik') }}" class="button-tambah">
            <i class="uil uil-plus"></i>
            <span class="link-name">Tambah Data Sampah Spesifik</span>
        </a>
    </div>
    <div class="btn-cetak">
        <a href="{{ route('cetak-data-sampah-spesifik') }}" target="_blank" class="button-cetak">
            <i class="uil uil-print"></i>
            <span class="link-name">Cetak Semua Data Sampah Spesifik</span>
        </a>
    </div>
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
                        <td>{{ date('d-m-Y', strtotime($spesifik->tgl_lapor)) }}</td>
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
                <a href="/sampahspesifik/{{ $spesifik->id }}/lihat" class="lihat-data">Lihat Data</a>
                <a href="/sampah-spesifik/{{ $spesifik->id }}/ubah" class="ubah">Ubah</a>
                <form action="/sampah-spesifik/{{ $spesifik->id }}" method="POST">
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
                        <td>{{ date('d-m-Y', strtotime($spesifik->tgl_lapor)) }}</td>
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
                <a href="/sampahspesifik/{{ $spesifik->id }}/lihat" class="lihat-data">Lihat Data</a>
                <a href="/sampah-spesifik/{{ $spesifik->id }}/ubah" class="ubah">Ubah</a>
                <form action="/sampah-spesifik/{{ $spesifik->id }}" method="POST">
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
@section('sweetalert')
<script>
    $('#delete').click(function(){
        Swal.fire({
            title: 'Apakah anda yakin ingin menhhapus data ini?',
            text: "Anda tidak akan dapat mengembalikan data ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus Sekarang!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Terhapus!',
                'Data Telah Terhapus.',
                'success'
                )
            }
        })
    });
</script>
@endsection
