@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="css/style-home.css">
<link rel="stylesheet" href="css/partials/style-alertnotif.css">
                    <!--Halaman Dashboard-->
@section('container')
    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class="uil uil-desktop"></i>
                <span class="text">Dashboard</span>
            </div>
@if (Auth::user()->role == 'Admin')

    <div class="boxes">
        <div class="box box1">
            <i class="uil uil-trees"></i>
            <span class="text">Total Data Organik</span>
            <span class="number">50,120</span>
        </div>
        <div class="box box2">
            <i class="uil uil-process"></i>
            <span class="text">Total Data Anorganik</span>
            <span class="number">20,120</span>
        </div>
        <div class="box box3">
            <i class="uil uil-clipboard"></i>
            <span class="text">Lapak</span>
            <span class="number">10,120</span>
        </div>
        <div class="box box4">
            <i class="uil uil-books"></i>
            <span class="text">Data TPS</span>
            <span class="number">50,120</span>
        </div>
        <div class="box box5">
            <i class="uil uil-comment"></i>
            <span class="text">Pembatasan</span>
            <span class="number">20,120</span>
        </div>
        <div class="box box6">
            <i class="uil uil-gold"></i>
            <span class="text">Sampah Spesifik</span>
            <span class="number">20,120</span>
        </div>
    </div>
</div>
</div>
@else
{{ __('Saya User biasa') }}
<div class="boxes">
    <div class="box box1">
        <i class="uil uil-trees"></i>
        <span class="text">Total Data Organik</span>
        <span class="number">50,120</span>
    </div>
    <div class="box box2">
        <i class="uil uil-process"></i>
        <span class="text">Total Data Anorganik</span>
        <span class="number">20,120</span>
    </div>
    <div class="box box3">
        <i class="uil uil-clipboard"></i>
        <span class="text">Lapak</span>
        <span class="number">10,120</span>
    </div>
    <div class="box box4">
        <i class="uil uil-books"></i>
        <span class="text">Data TPS</span>
        <span class="number">50,120</span>
    </div>
    <div class="box box5">
        <i class="uil uil-comment"></i>
        <span class="text">Pembatasan</span>
        <span class="number">20,120</span>
    </div>
    <div class="box box6">
        <i class="uil uil-gold"></i>
        <span class="text">Sampah Spesifik</span>
        <span class="number">20,120</span>
    </div>
</div>
</div>
</div>
@endif


@endsection
