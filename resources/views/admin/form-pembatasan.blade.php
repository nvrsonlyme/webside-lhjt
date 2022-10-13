@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-form-pembatasan.css') }}">

                    <!--Halaman Pembatasan-->
@section('container')
<div class="dash-content">
    <div class="overview">
        <div class="title">
            <i class="uil uil-comments"></i>
            <span class="text">Form Pembatasan</span>
        </div>
    </div>
</div>

<!--Isi Data-->
<form action="{{ route('pembatasan.store') }}" method="POST">
    @csrf
<div class="card">
    <div class="card-body">
        <div class="data-class">
            <div class="sub-class">
                <div class="select-box">
                    <label class="text">Lokasi Kegiatan Pembatasan Timbulan Sampah</label>
                    <select class="select" name="lokasi_kegiatan" id="select-box1" required>
                        <option value="" hidden>Pilih Lokasi</option>
                        <option value="Sekolah">Sekolah</option>
                        <option value="Perkantoran">Perkantoran</option>
                        <option value="Pasar">Pasar</option>
                        <option value="Fasilitas Pelayanan Kesehatan (RS/Puskesmas/Klinik)">Fasilitas Pelayanan Kesehatan (RS/Puskesmas/Klinik)</option>
                        <option value="Retail Modern/Swalayan/Mini Market">Retail Modern/Swalayan/Mini Market</option>
                        <option value="Tempat Ibadah">Tempat Ibadah</option>
                    </select>
                </div>
                <div class="title">
                    <span class="text">Nama Lokasi</span>
                    <input class="form-control-side1" type="text" name="nama_lokasi" required>
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <label class="text">Alamat</label>
                    <input name="alamat" id="alamat" class="form-control-side1" type="text" required>
                </div>
                <div class="title">
                    <label class="text">RT</label>
                    <input name="rt" id="rt" class="form-control-side1" type="number" required>
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <label class="text">RW</label>
                    <input name="rw" id="rw" class="form-control-side1" type="number" required>
                </div>
                <div class="select-box">
                    <label class="text">Kota</label>
                    <select class="select" name="kota_id" list="select-box1" id="kota-dd" required>
                        <option value="" hidden>Pilih Kota</option>
                        @foreach ($datas as $kota)
                            <option value="{{ $kota->kota_id }}">
                                {{ $kota->name_kota }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="sub-class">
                <div class="select-box">
                    <label class="text">Kecamatan</label>
                    <select class="select" name="kec_id" list="select-box1" id="kec-dd" required>
                        <option value="" hidden>Pilih Kecamatan</option>
                    </select>
                </div>
                <div class="select-box">
                    <label class="text">Kelurahan</label>
                    <select class="select" name="kel_id" list="select-box1" id="kel-dd" required>
                        <option value="" hidden>Pilih Kelurahan</option>
                    </select>
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <label class="text">Latitude</label>
                    <input name="lat" id="latitude" class="form-control-side1" type="number" readonly>
                </div>
                <div class="title">
                    <label class="text">Longitude</label>
                    <input name="long" id="longitude" class="form-control-side1" type="number" readonly>
                </div>
            </div>
            <div class="sub-class">
                <div class="cari">
                    <input type="button" value="Cari Lokasi" class="btn cari" id="get-location">
                </div>
            </div>
            <!-- side body -->
            <div class="card-body-side">
            <div class="data-class">
                <div class="title">
                    <label class="text1">Botol Sekali Pakai</label>
                    <div class="sub-class">
                        <div class="title">
                            <label class="text1">Jumlah Sampah Sebelum Ada Pembatasan</label>
                            <input name="botol_sekali_pakai_sebelum" id="Botol_Sekali_Pakai_Sebelum" class="form-control-side1" type="number" required>
                        </div>
                        <div class="title">
                            <label class="text1">Jumlah Sampah Setelah Ada Pembatasan</label>
                            <input name="botol_sekali_pakai_setelah" id="Botol_Sekali_Pakai_Setelah" class="form-control-side1" type="number" required>
                        </div>
                   </div>
                </div>
                <div class="title">
                    <label class="text1">Kotak atau Plastik Makan</label>
                    <div class="sub-class">
                        <div class="title">
                            <label class="text1">Jumlah Sampah Sebelum Ada Pembatasan</label>
                            <input name="kotak_plastik_makanan_sebelum" id="kotak_Plastik_Makanan_Sebelum" class="form-control-side1" type="number" required>
                        </div>
                        <div class="title">
                            <label class="text1">Jumlah Sampah Setelah Ada Pembatasan</label>
                            <input name="kotak_plastik_makanan_setelah" id="kotak_Plastik_Makanan_Setelah" class="form-control-side1" type="number" required>
                        </div>
                   </div>
                </div>
                    <div class="title">
                        <label class="text1">Lainnya</label>
                    </div>
                    <div class="title">
                        <input name="lainnya" id="lainnya" type="text" class="form-control-side" placeholder="Lainnya">
                    </div>
                <div class="sub-class">
                    <div class="title">
                        <label class="text1">Jumlah Sampah Sebelum Ada Pembatasan</label>
                        <input name="lainnya_sebelum" id="Lainnya_Sebelum" class="form-control-side1" type="number">
                    </div>
                    <div class="title">
                        <label class="text1">Jumlah Sampah Setelah Ada Pembatasan</label>
                        <input name="lainnya_setelah" id="Lainnya_Setelah" class="form-control-side1" type="number">
                    </div>
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
