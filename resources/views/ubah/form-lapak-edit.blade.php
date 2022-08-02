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
<form action="/lapak/{{ $lapak->id }}" method="POST">
    @method('PUT')
    @csrf
<div class="card">
    <div class="card-body">
            <div class="data-class">
                <div class="sub-class">
                    <div class="select-box">
                        <span class="text">Jenis</span>
                        <select id="select-box1" class="select" name="jenis">
                            <option value="{{ $lapak->jenis }}" hidden>{{ $lapak->jenis }}</option>
                            <option value="Lapak">Lapak</option>
                            <option value="Pengepul">Pengepul</option>
                        </select>
                    </div>
                        <div class="title">
                            <label class="text">Nama Fasilitas</label>
                            <input name="nama_fasilitas" id="nama-fasilitas" class="form-control-dua" value="{{ $lapak->nama_fasilitas }}">
                        </div>
                </div>
                <div class="sub-class">
                    <div class="title">
                        <label class="text">Penanggung Jawab</label>
                        <input class="form-control-dua" type="text" name="penanggung_jawab" id="penanggungjawab" value="{{ $lapak->penanggung_jawab }}">
                    </div>
                    <div class="title">
                        <label class="text">Telepon/HP</label>
                        <input class="form-control-dua" type="number" name="no_hp" id="telp" value="{{ $lapak->no_hp }}">
                    </div>
                </div>
                <div class="sub-class">
                    <div class="select-box">
                        <span class="text">Wilayah</span>
                        <select id="select-box1" class="select" name="wilayah">
                            <option value="{{ $lapak->wilayah }}" hidden>{{ $lapak->wilayah }}</option>
                            <option value="Ibukota Kabupaten/Kota">Ibukota Kabupaten/Kota</option>
                            <option value="Non Ibukota Kabupaten">Non Ibukota Kabupaten</option>
                        </select>
                    </div>
                    <div class="title">
                        <label class="text">Alamat</label>
                        <input class="form-control-dua" type="address" name="alamat" id="alamat" value="{{ $lapak->alamat }}">
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
                            <option value="{{ $lapak->kota }}" hidden>{{ $lapak->kota }}</option>
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
                            <option value="{{ $lapak->kecamatan }}" hidden>{{ $lapak->kecamatan }}</option>
                        </select>
                    </div>
                    <div class="select-box">
                        <span class="text">Kelurahan/Desa</span>
                        <select id="kel-dd" class="form-control-dua" name="kelurahan">
                            <option value="{{ $lapak->kelurahan }}" hidden>{{ $lapak->kelurahan }}</option>
                        </select>
                    </div>
                </div>
                <div class="sub-class">
                    <div class="title">
                        <label class="text">Latitude</label>
                        <input class="form-control-dua" type="readonly" name="latitude" id="latitude" value="{{ $lapak->latitude }}" readonly>
                    </div>
                    <div class="title">
                        <label class="text">Longitude</label>
                        <input class="form-control-dua" type="readonly" name="longitude" id="longitude" value="{{ $lapak->longitude }}" readonly>
                    </div>
                </div>
            </div>
            <!-- Button -->
            <div class="sub-class">
            <div class="cari">
                <input type="button" value="Cari Lokasi" class="btn cari" id="get-location">
            </div>
            <div class="button">
                <input type="submit" value="Simpan" class="btn Tambah">
            </div>
        </div>
            <!-- end -->
        </form>
    </div>
</div>
@endsection
