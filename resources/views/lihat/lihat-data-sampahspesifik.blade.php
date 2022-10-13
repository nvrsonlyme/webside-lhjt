@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-sampah-spesifik.css') }}">
<!--Halaman Organik-->
@section('container')
    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class="uil uil-trees"></i>
                <span class="text">Data Sampah Spesifik</span>
            </div>
        </div>
        {{-- <div class="btn-cetak2">
            <a href="{{ route('cetak-data-organik') }}" target="_blank" class="button-cetak">
                <i class="uil uil-print"></i>
                <span class="link-name">Cetak Data Organik</span>
            </a>
        </div> --}}
    </div>
    {{-- @foreach ($organik as $tampil ) --}}
    <div class="content-main">
        <div class="card-grid2">
            <article class="card">
                <div class="card-body">
                    <h2 align="center">DATA SAMPAH SPESIFIK</h2><br>
                    <table class="view2">
                        <tr>
                            <td>Tanggal Lapor</td>
                            <td>{{ date('d-m-Y', strtotime($spesifik->tgl_lapor)) }}</td>
                        </tr>
                        <tr>
                            <td>Provinsi</td>
                            <td>{{ $spesifik->provinsi }}</td>
                        </tr>
                        <tr>
                            <td>Kabupaten/Kota</td>
                            <td>{{ $spesifik->kota }}</td>
                        </tr>
                        <tr>
                            <td>Sampah B3</td>
                            <td>{{ $spesifik->sampah_b3 }}</td>
                        </tr>
                        <tr>
                            <td>Sampah LB3</td>
                            <td>{{ $spesifik->sampah_lb3 }}</td>
                        </tr>
                        <tr>
                            <td>Sampah Akibat Bencana</td>
                            <td>{{ $spesifik->sampah_akibat_bencana }}</td>
                        </tr>
                        <tr>
                            <td>Sampah Puing</td>
                            <td>{{ $spesifik->sampah_puing }}</td>
                        </tr>
                        <tr>
                            <td>Sampah Non Periodik</td>
                            <td>{{ $spesifik->sampah_non_periodik }}</td>
                        </tr>
                        <tr>
                            <td>Sampah Yang Secara Teknologi Belum Dapat Diolah</td>
                            <td>{{ $spesifik->sampah_tidak_dapat_diolah }}</td>
                        </tr>
                    </table>
                </div>
            </article>
            <div class="button">
                <a href="/sampah-spesifik" class="back">Kembali</a>
            </div>
        </div>
    </div>
@endsection



