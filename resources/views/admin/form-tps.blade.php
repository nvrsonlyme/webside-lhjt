@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-form-tps.css') }}">

                    <!--Halaman B3-->
@section('container')
<div class="dash-content">
    <div class="overview">
        <div class="title">
            <i class="il uil-books"></i>
            <span class="text">Form Data TPS</span>
        </div>
    </div>
</div>
<!-- Isi Data -->
<form action="{{ route('data-tps.store') }}" method="POST">
    @csrf
<div class="card">
    <div class="card-body">
    <div class="data-class">
        <div class="title">
            <span class="praf">Data Umum</span>
        </div>
        <div class="sub">
            <div class="title">
                <label class="text">Nama Fasilitas</label>
                <input name="nama_fasilitas" id="nama-fasilitas" class="form-control-1">
            </div>
        </div>
        <div class="sub-class">
            <div class="select-box">
                <span class="text">Wilayah</span>
                <select id="select-box1" class="select" name="wilayah">
                    <option value="" hidden>Pilih Opsi</option>
                    <option>Ibukota Kabupaten/Kota</option>
                    <option>Non Ibukota Kabupaten</option>
                </select>
            </div>
            <div class="title">
                <label class="text">Alamat</label>
                <input class="form-control-dua" type="text" name="alamat" id="alamat">
            </div>
        </div>
        <div class="sub-class">
            <div class="title">
                <label class="text">Provinsi</label>
                <input class="form-control-dua" type="text" value="DKI Jakarta" name="provinsi" readonly>
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
                <input class="form-control-dua" type="" name="latitude" id="latitude">
            </div>
            <div class="title">
                <label class="text">Longitude</label>
                <input class="form-control-dua" type="" name="longitude" id="longitude">
            </div>
        </div>
        <div class="sub-class">
            <div class="select-box">
                <span class="text">Kategori</span>
                <select id="select-box1" class="select" name="kategori">
                    <option value="" hidden>Pilih Kategori</option>
                    <option>TPA PEMDA(Non Regional)</option>
                    <option>TPA Regional</option>
                </select>
            </div>
            <div class="cari">
                <input type="button" value="Cari Lokasi" class="btn cari" id="get-location">
            </div>
        </div>
        <div class="sub-class">
            <div class="select-box">
                <span class="text">Dikelolah Oleh</span>
                <select id="select-box1" class="select" name="dikelolah">
                    <option value="" hidden>Pilih Opsi</option>
                    <option>Pemda Kab/Kota</option>
                    <option>Swasta</option>
                    <option>Lainnya</option>
                </select>
            </div>
            <div class="title-ket">
                <input class="form-control-dua" type="text" name="detail_pengelola" id="ket"
                placeholder="Isi Dengan Detail Pengelola Fasilitas">
            </div>
        </div>
        <div class="sub-class">
            <div class="title-1">
                <label class="text">Struktur Organisasi</label>
                <div class="upload-file">
                        <input type="file" id="struktur_organisasi" name="struktur_organisasi">
                </div>
            </div>
            <div class="radio-class">
                <div class="title">
                    <label class="text">Ada Izin</label>
                    <div class="radio">
                        <input type="radio" class="form-check-input" id="ada" name="izin" value="Ada" checked>
                        <label class="form-check-label" for="Ada">Ada</label>
                        <input type="radio" class="form-check-input" id="tdkada" name="izin" value="Tidak Ada">
                        <label class="form-check-label" for="Tidak Ada">Tidak Ada</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-class">
            <div class="title">
                <label class="text">Nomor Izin</label>
                <input class="form-control-dua" type="text" name="no_izin" id="nomor-izin">
            </div>
            <div class="select-box">
                <span class="text">Dikeluarkan Oleh</span>
                <select id="select-box1" class="select" name="dikeluarkan_oleh">
                    <option value="" hidden>Pilih Opsi</option>
                    <option>Dinas LH Kab/Kota</option>
                    <option>Dinas LH Provinsi</option>
                    <option>Kementrian Lingkungan Hidup dan Kehutanan</option>
                    <option>Lainnya</option>
                </select>
            </div>
        </div>
        <div class="sub-class">
            <div class="title">
                <label class="text">Upload Izin</label>
                <div class="upload-file">
                        <input type="file" id="upload_izin" name="upload_izin">
                </div>
            </div>
            <div class="title">
                <label class="text">Penjelasan Izin</label>
                <input class="form-control-dua" type="text" name="penjelasan_izin" id="jelas-izin"
                placeholder="Isi Dengan Penjelasan Izin Lingkungan">
            </div>
        </div>
        <div class="sub-class">
            <div class="title">
                <span class="text">Tanggal Awal Operasi</span>
                <input class="form-control-dua" type="date" name="tgl_awal_operasi">
            </div>
            <div class="title">
                <span class="text">Tanggal Akhir Operasi</span>
                <input class="form-control-dua" type="date" name="tgl_akhir_operasi">
            </div>
        </div>
        <div class="sub-class">
            <div class="title">
                <label class="text">Luas Total</label>
                <input class="form-control-dua" type="number" name="luas_ttl" id="luas-ttl"
                placeholder="ha">
            </div>
            <div class="title">
                <label class="text">Jarak Ke Pemukiman</label>
                <input class="form-control-dua" type="number" name="jarak_ke_pemukiman" id="jarak-pem"
                placeholder="Km">
            </div>
        </div>
        <div class="sub-class">
            <div class="title">
                <label class="text">Jarak Ke Badan Air</label>
                <input class="form-control-dua" type="number" name="jarak_ke_badan_air" id="jarak-air"
                placeholder="ha">
            </div>
            <div class="title">
                <label class="text">Jarak Ke Pantai</label>
                <input class="form-control-dua" type="number" name="jarak_ke_pantai" id="jarak-pantai"
                placeholder="Km">
            </div>
        </div>
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
