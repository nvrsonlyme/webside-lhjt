@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-form-sampah-spesifik.css') }}">

                    <!--Halaman B3-->
@section('container')
<div class="dash-content">
    <div class="overview">
        <div class="title">
            <i class="il uil-gold"></i>
            <span class="text">Form Sampah Spesifik</span>
        </div>
    </div>
</div>
<!-- Isi Data -->
<form action="{{ route('sampah-spesifik.store') }}" method="POST">
    @csrf
<div class="card">
    <div class="card-body">
    <div class="data-class">
        <div class="sub-class">
            <div class="title">
                <span class="text">Tanggal Lapor</span>
                <input class="form-control-dua" type="date" name="tgl_lapor" required>
            </div>
            <div class="title">
                <span class="text">Provinsi</span>
                <input class="form-control-dua" type="text" value="DKI Jakarta" name="provinsi" readonly>
            </div>
        </div>
        <div class="sub-class">
            <div class="title">
                <span class="text">Kabupaten/Kota</span>
                <input class="form-control-dua" type="text" value="Kota Adm. Jakarta Timur" name="kota" readonly>
            </div>
            <div class="title">
                <span class="text">Sampah B3</span>
                <input class="form-control-dua" type="number" placeholder="Ton" name="sampah_b3">
            </div>
        </div>
        <div class="sub-class">
            <div class="title">
                <span class="text">Sampah LB3</span>
                <input class="form-control-dua" type="number" placeholder="Ton" name="sampah_lb3">
            </div>
            <div class="title">
                <span class="text">Sampah Akibat Bencana</span>
                <input class="form-control-dua" type="number" placeholder="Ton" name="sampah_akibat_bencana">
            </div>
        </div>
        <div class="sub-class">
            <div class="title">
                <span class="text">Sampah Puing</span>
                <input class="form-control-dua" type="number" placeholder="Ton" name="sampah_puing">
            </div>
            <div class="title">
                <span class="text">Sampah Non Periodik</span>
                <input class="form-control-dua" type="number" placeholder="Ton" name="sampah_non_periodik">
            </div>
        </div>
            <div class="title-1">
                <span class="text">Sampah Yang Secara Teknologi Belum Dapat Diolah</span>
                <input class="form-control-dua" type="number" placeholder="Ton" name="sampah_tidak_dapat_diolah">
            </div>
        </div>
    </div>
    </div>
</div>
<!-- end -->
<!-- Button -->
<div class="button">
    <input type="submit" value="Tambah" class="btn Tambah">
</div>
</form>
<!-- end -->
@endsection
