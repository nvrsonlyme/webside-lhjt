@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="css/style-laporan.css">
                    <!--Halaman Laporan-->
@section('container')
<!-- Logo -->
<div class="dash-content">
    <div class="overview">
        <div class="title">
            <i class="uil uil-archive"></i>
            <span class="text">Laporan</span>
        </div>
    </div>
</div>
<!-- end -->
<!-- Form Laporan -->
@if (Auth::user()->role == 'Admin')
<div class="card">
    <div class="card-body">
        <form method="POST">
            <div class="data-class">
                <div class="sub">
                    <div class="select-box">
                    <span class="text">Satpel</span>
                    <select id="select-box1" class="select-side">
                        <option value="" hidden>Pilih Kecamatan</option>
                        <option value="Choice 1">Cakung</option>
                        <option value="Choice 2">Cipayung</option>
                        <option value="Choice 3">Ciracas</option>
                        <option value="Choice 4">Duren Sawit</option>
                        <option value="Choice 5">Jatinegara</option>
                        <option value="Choice 6">Kramat Jati</option>
                        <option value="Choice 7">Makasar</option>
                        <option value="Choice 8">Matraman</option>
                        <option value="Choice 9">Pasar Rebo</option>
                        <option value="Choice 10">Pulogadung</option>
                    </select>
                    </div>
                </div>
                <div class="sub-class">
                    <div class="select-box">
                        <span class="text">Tahun</span>
                        <select id="select-box1" class="select">
                            <option value="" hidden>Pilih Tahun</option>
                            <option value="Choice 1">2022</option>
                            <option value="Choice 2">2023</option>
                        </select>
                    </div>
                    <div class="select-box">
                        <span class="text">Bulan</span>
                        <select id="select-box1" class="select">
                            <option value="" hidden>Pilih Bulan</option>
                            <option value="Choice 1">Januari</option>
                            <option value="Choice 2">Febuari</option>
                        </select>
                    </div>
                </div>
                <div class="sub-class">
                    <div class="card-footer">
                        <a href="#" class="lihat-laporan">Lihat Laporan</a>
                        <a href="#" class="lihat-semua">Lihat Semua Laporan</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- end -->
<div class="card-o">
    <div class="card-body">
        <form method="POST">
            <div class="data-class">

            </div>
        </form>
    </div>
</div>
@else
<div class="card">
    <div class="card-body">
        <form method="POST">
            <div class="data-class">
                <div class="sub-class">
                    <div class="select-box">
                        <span class="text">Tahun</span>
                        <select id="select-box1" class="select">
                            <option value="" hidden>Pilih Tahun</option>
                            <option value="Choice 1">2022</option>
                            <option value="Choice 2">2023</option>
                        </select>
                    </div>
                    <div class="select-box">
                        <span class="text">Bulan</span>
                        <select id="select-box1" class="select">
                            <option value="" hidden>Pilih Bulan</option>
                            <option value="Choice 1">Januari</option>
                            <option value="Choice 2">Febuari</option>
                        </select>
                    </div>
                </div>
                <div class="sub-class">
                    <div class="card-footer">
                        <a href="#" class="lihat-laporan">Lihat Laporan</a>
                        <a href="#" class="lihat-semua">Lihat Semua Laporan</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- end -->
<div class="card-o">
    <div class="card-body">
        <form method="POST">
            <div class="data-class">

            </div>
        </form>
    </div>
</div>
@endif
@endsection
