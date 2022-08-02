@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-form-pembatasan.css') }}">

                    <!--Halaman Pembatasan-->
@section('container')
<div class="dash-content">
    <div class="overview">
        <div class="title">
            <i class="uil uil-comments"></i>
            <span class="text">Form KBRL</span>
        </div>
    </div>
</div>

<!--Isi Data-->
<form action="{{ route('pembatasan.store') }}" method="POST">
    @csrf
<div class="card">
    <div class="card-body">
    <div class="data-class">
        <div class="title">
            <label class="text">Kecamatan</label>
            <input name="kecamatan" id="kecamatan" class="form-control-side1">
        </div>
        <div class="title">
            <span class="text">Tanggal</span>
            <input class="form-control-side1" type="date" name="tgl">
        </div>
        <div class="title">
            <label class="text">Jumlah Retail</label>
            <input name="jml_retail" id="jml-retail" class="form-control-side1" type="number" placeholder="Lokasi">
        </div>
        <!-- side body -->
            <div class="card-body-side">
            <div class="data-class">
                <div class="title">
                    <label class="text1">1. Apakah perusahaan retail menerapkan program kantong plastik berbayar?</label>
                    <div class="radio">
                        <input type="radio" class="form-check-input" id="ada" name="P1" value="Ya" checked>
                        <label class="form-check-label" for="Ya">Ya</label>
                        <input type="radio" class="form-check-input" id="tdk" name="P1" value="Tidak">
                        <label class="form-check-label" for="Tidak">Tidak</label>
                    </div>
                </div>
                <div class="title">
                    <label class="text1">2. Apakah perusahaan retail masih menyediakan kantong plastik sekali pakai?</label>
                    <div class="radio">
                        <input type="radio" class="form-check-input" id="ada" name="P2" value="Ya" checked>
                        <label class="form-check-label" for="Ya">Ya</label>
                        <input type="radio" class="form-check-input" id="tdk" name="P2" value="Tidak">
                        <label class="form-check-label" for="Tidak">Tidak</label>
                    </div>
                </div>
                <div class="title">
                    <label class="text1">3. Apakah perusahaan retail menyediakan kantong belanja ramah lingkungan?</label>
                    <div class="radio">
                        <input type="radio" class="form-check-input" id="ada" name="P3" value="Ya" checked>
                        <label class="form-check-label" for="Ya">Ya</label>
                        <input type="radio" class="form-check-input" id="tdk" name="P3" value="Tidak">
                        <label class="form-check-label" for="Tidak">Tidak</label>
                    </div>
                </div>

                <div class="title">
                    <label class="text1">4. Jumlah kantong belanja ramah lingkungan yang dijual/diberikan ke konsumen</label>
                    <input name="P4" id="jml-jualkantong" class="form-control-side" type="text" placeholder="Lembar/Bulan">
                </div>
                <div class="title">
                    <label class="text1">5. Jumlah Kantong Belanja Sekali Pakai Yang Tidak Diberikan kepada konsumen Bulan ini</label>
                    <input name="P5" id="jml-sekalipakai" class="form-control-side" type="text" placeholder="Lembar/Bulan">
                </div>
                <div class="title">
                    <label class="text1">6. Berat total Kantong Belanja yang tidak diberikan kepada Konsumen pada Bulan ini</label>
                    <input name="P6" id="brt-kantongbelanja" class="form-control-side" type="text" placeholder="Gram">
                </div>
                <div class="title">
                    <label class="text1">7. Total Pengurangan Kantong Belanja Sekali Pakai pada Bulan ini</label>
                    <input name="P7" id="ttl-pengurangan" class="form-control-side" type="text" placeholder="Kilogram">
                </div>
            </div>
        </div>
        <!-- end -->
    </div>

</div>
</div>
<!-- end -->
<!-- Button -->
<div class="button">
    <input type="submit" value="Tambah" class="btn Tambah">
    {{-- <input type="button" value="Reset" class="btn Reset"> --}}
</div>
</form>
<!-- end -->
@endsection
