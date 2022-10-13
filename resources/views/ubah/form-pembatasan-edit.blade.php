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
<form action="/pembatasan/{{ $pembatasan->id }}" method="POST">
    @method('PUT')
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="data-class">
                <div class="sub-class">
                    <div class="select-box">
                        <label class="text">Lokasi Kegiatan Pembatasan Timbulan Sampah</label>
                        <select class="select" name="lokasi_kegiatan" id="select-box1">
                            <option value="{{ $pembatasan->lokasi_kegiatan }}" hidden>{{ $pembatasan->lokasi_kegiatan }}</option>
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
                        <input class="form-control-side1" type="text" name="nama_lokasi" value="{{ $pembatasan->nama_lokasi }}">
                    </div>
                </div>
                <div class="sub-class">
                    <div class="title">
                        <label class="text">Alamat</label>
                        <input name="alamat" id="alamat" class="form-control-side1" type="text" value="{{ $pembatasan->alamat }}">
                    </div>
                    <div class="title">
                        <label class="text">RT</label>
                        <input name="rt" id="rt" class="form-control-side1" type="number" value="{{ $pembatasan->rt }}">
                    </div>
                </div>
                <div class="sub-class">
                    <div class="title">
                        <label class="text">RW</label>
                        <input name="rw" id="rw" class="form-control-side1" type="number" value="{{ $pembatasan->rw }}">
                    </div>
                    <div class="select-box">
                        <label class="text">Kota</label>
                        <select class="select" name="kota_id" list="select-box1" id="kota-dd">
                            <option value="{{ $pembatasan->kota->kota_id }}" hidden>{{ $pembatasan->kota->name_kota }}</option>
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
                        <select class="select" name="kec_id" list="select-box1" id="kec-dd">
                            <option value="{{ $pembatasan->kecamatan->kec_id }}" hidden>{{ $pembatasan->kecamatan->name_kec }}</option>
                        </select>
                    </div>
                    <div class="select-box">
                        <label class="text">Kelurahan</label>
                        <select class="select" name="kel_id" list="select-box1" id="kel-dd">
                            <option value="{{ $pembatasan->kelurahan->kel_id }}" hidden>{{ $pembatasan->kelurahan->name_kel }}</option>
                        </select>
                    </div>
                </div>
                <div class="sub-class">
                    <div class="title">
                        <label class="text">Latitude</label>
                        <input name="lat" id="latitude" class="form-control-side1" type="number" value="{{ $pembatasan->lat }}" readonly>
                    </div>
                    <div class="title">
                        <label class="text">Longitude</label>
                        <input name="long" id="longitude" class="form-control-side1" type="number" value="{{ $pembatasan->long }}" readonly>
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
                                <input name="botol_sekali_pakai_sebelum" id="Botol_Sekali_Pakai_Sebelum" class="form-control-side1" type="number" value="{{ $pembatasan->botol_sekali_pakai_sebelum }}">
                            </div>
                            <div class="title">
                                <label class="text1">Jumlah Sampah Setelah Ada Pembatasan</label>
                                <input name="botol_sekali_pakai_setelah" id="Botol_Sekali_Pakai_Setelah" class="form-control-side1" type="number" value="{{ $pembatasan->botol_sekali_pakai_setelah }}">
                            </div>
                       </div>
                    </div>
                    <div class="title">
                        <label class="text1">Kotak atau Plastik Makan</label>
                        <div class="sub-class">
                            <div class="title">
                                <label class="text1">Jumlah Sampah Sebelum Ada Pembatasan</label>
                                <input name="kotak_plastik_makanan_sebelum" id="kotak_Plastik_Makanan_Sebelum" class="form-control-side1" type="number" value="{{ $pembatasan->kotak_plastik_makanan_sebelum }}">
                            </div>
                            <div class="title">
                                <label class="text1">Jumlah Sampah Setelah Ada Pembatasan</label>
                                <input name="kotak_plastik_makanan_setelah" id="kotak_Plastik_Makanan_Setelah" class="form-control-side1" type="number" value="{{ $pembatasan->kotak_plastik_makanan_setelah }}">
                            </div>
                       </div>
                    </div>
                        <div class="title">
                            <label class="text1">Lainnya</label>
                        </div>
                        <div class="title">
                            <input name="lainnya" id="lainnya" type="text" class="form-control-side" placeholder="Lainnya" value="{{ $pembatasan->lainnya }}">
                        </div>
                    <div class="sub-class">
                        <div class="title">
                            <label class="text1">Jumlah Sampah Sebelum Ada Pembatasan</label>
                            <input name="lainnya_sebelum" id="Lainnya_Sebelum" class="form-control-side1" type="number" value="{{ $pembatasan->lainnya_sebelum }}">
                        </div>
                        <div class="title">
                            <label class="text1">Jumlah Sampah Setelah Ada Pembatasan</label>
                            <input name="lainnya_setelah" id="Lainnya_Setelah" class="form-control-side1" type="number" value="{{ $pembatasan->lainnya_setelah }}">
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
    <input type="submit" value="Tambah" class="btn Tambah" id="tombol">
    {{-- <input type="button" value="Reset" class="btn Reset"> --}}
</div>
</form>
<!-- end -->
@endsection
@section('sweetalert')
<script>
    $('#tombol').click(function(){
        Swal.fire({
            position: 'middle-center',
            icon: 'success',
            title: 'Data Berhasil Diubah',
            showConfirmButton: false,
            timer: 1500
        })
    });
</script>
@endsection
