@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-organik.css') }}">
<link rel="stylesheet" href="{{ asset('dist/sweetalert2.min.css') }}">
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
            <i class="uil uil-trees"></i>
            <span class="text">Data Organik</span>
        </div>
    </div>
</div>
<!--end-->
<!--Button Tambah-->
<div class="up">
    <div class="btn-tambah">
        <a href="{{ route('organik.form-organik') }}" class="button-tambah">
            <i class="uil uil-plus"></i>
            <span class="link-name">Tambah Data Organik</span>
        </a>
    </div>
    <div class="btn-cetak">
        <a href="{{ route('cetak-data-organik') }}" target="_blank" class="button-cetak">
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
        @foreach ($organik as $orga)
        <article class="card">
            <div class="card-header">
                <div>
                    <span><img src=""></span>
                    <h2>Data Sampah Organik</h2>
                </div>
            </div>
            <div class="card-body">
                <h3>Data Organik Kelurahan {{ $orga->kelurahan->name_kel}}</h3><br>
                <table class="view">
                    <tr>
                        <td>Tanggal</td>
                        <td>{{ date('d-m-Y', strtotime($orga->tanggal)) }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $orga->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>{{ $orga->kecamatan->name_kec }}</td>
                    </tr>
                    <tr>
                        <td>Kelurahan</td>
                        <td>{{ $orga->kelurahan->name_kel }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a href="/organik/{{ $orga->id }}/lihat" class="lihat-data">Lihat Data</a>
                <a href="/organik/{{ $orga->id }}/ubah" class="ubah" id="ubah">Ubah</a>
                <form action="/organik/{{ $orga->id }}" method="POST">
                    @csrf
                    @method('#')
                    <input type="submit" value="Hapus" class="hapus" id="delete">
                </form>
            </div>
        </article>
        @endforeach
    </div>
</div>
@else
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
                <h3>Data Organik Kelurahan {{ $orga->kelurahan->name_kel }}</h3><br>
                <table class="view">
                    <tr>
                        <td>Tanggal</td>
                        <td>{{ date('d-m-Y', strtotime($orga->tanggal)) }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $orga->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>{{ $orga->kecamatan->name_kec }}</td>
                    </tr>
                    <tr>
                        <td>Kelurahan</td>
                        <td>{{ $orga->kelurahan->name_kel }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a href="/organik/{{ $orga->id }}/lihat" class="lihat-data">Lihat Data</a>
                <a href="/organik/{{ $orga->id }}/ubah" class="ubah" id="ubah">Ubah</a>
                <form action="/organik/{{ $orga->id }}" method="POST">
                    @csrf
                    @method('#')
                    <input type="submit" value="Hapus" class="hapus" id="delete">
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

