@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-form-lapak.css') }}">

                    <!--Halaman Lapak-->
@section('container')
<!-- Logo -->
<div class="dash-content">
    <div class="overview">
        <div class="title">
            <i class="uil uil-clipboard"></i>
            <span class="text">Form Lapak</span>
        </div>
    </div>
</div>
<!-- end -->
<!-- Form Lapak -->
<form action="{{ route('lapak.store') }}" method="POST">
    @csrf
<div class="card">
    <div class="card-body">
            <div class="data-class">
                <div class="sub-class">
                    <div class="select-box">
                        <span class="text">Jenis</span>
                        <select id="select-box1" class="select" name="jenis">
                            <option value="" hidden>Pilih Opsi</option>
                            <option value="Lapak">Lapak</option>
                            <option value="Pengepul">Pengepul</option>
                        </select>
                    </div>
                        <div class="title">
                            <label class="text">Nama Fasilitas</label>
                            <input name="nama_fasilitas" id="nama-fasilitas" class="form-control-dua">
                        </div>
                </div>
                <div class="sub-class">
                    <div class="title">
                        <label class="text">Penanggung Jawab</label>
                        <input class="form-control-dua" type="text" name="penanggung_jawab" id="penanggungjawab">
                    </div>
                    <div class="title">
                        <label class="text">Telepon/HP</label>
                        <input class="form-control-dua" type="number" name="no_hp" id="telp">
                    </div>
                </div>
                <div class="sub-class">
                    <div class="select-box">
                        <span class="text">Wilayah</span>
                        <select id="select-box1" class="select" name="wilayah">
                            <option value="" hidden>Pilih Wilayah</option>
                            <option value="Ibukota Kabupaten/Kota">Ibukota Kabupaten/Kota</option>
                            <option value="Non Ibukota Kabupaten">Non Ibukota Kabupaten</option>
                        </select>
                    </div>
                    <div class="title">
                        <label class="text">Alamat</label>
                        <input class="form-control-dua" type="address" name="alamat" id="alamat">
                    </div>
                </div>
                <div class="sub-class">
                    <div class="title">
                        <label class="text">Provinsi</label>
                        <input class="form-control-dua" type="text" name="provinsi" value="Jakarta" readonly>
                    </div>
                    <div class="title">
                        <label class="text">Kabupaten/Kota</label>
                        <select class="form-control-dua" type="text" name="kota" id="kota-dd">
                            <option value="" hidden>Pilih Kota</option>
                            @foreach ($datas as $kota)
                            <option value="{{$kota->id}}">
                                {{$kota->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="sub-class">
                    <div class="select-box">
                        <span class="text">Kecamatan</span>
                        <select class="form-control-dua" name="kecamatan" id="kec-dd">
                            <option value="" hidden>Pilih Kecamatan</option>
                        </select>
                    </div>
                    <div class="select-box">
                        <span class="text">Kelurahan/Desa</span>
                        <select id="kel-dd" class="form-control-dua" name="kelurahan">
                            <option value="" hidden>Pilih Kelurahan</option>
                        </select>
                    </div>
                </div>
                <div class="sub-class">
                    <div class="title">
                        <label class="text">Latitude</label>
                        <input class="form-control-dua" type="readonly" name="latitude" id="latitude" readonly>
                    </div>
                    <div class="title">
                        <label class="text">Longitude</label>
                        <input class="form-control-dua" type="readonly" name="longitude" id="longitude" readonly>
                    </div>
                </div>
            </div>
            <!-- Button -->
            <div class="sub-class">
            <div class="cari">
                <input type="button" value="Cari Lokasi" class="btn cari" id="get-location">
            </div>
            <div class="button">
                <input type="submit" value="Tambah" class="btn Tambah">
            </div>
        </div>
            <!-- end -->
        </form>
    </div>
</div>
@endsection
