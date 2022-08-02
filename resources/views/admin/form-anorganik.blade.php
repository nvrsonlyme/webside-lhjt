@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-form-anorganik.css') }}">

                    <!--Halaman Anorganik-->
@section('container')
    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class="uil uil-process"></i>
                <span class="text">Form Anorganik</span>
            </div>
        </div>
    </div>
    <div class="dash-data">
        <div class="overview">
            <div class="title">
                <i class="uil uil-clipboard-notes"></i>
                <span class="text">Isi Data</span>
            </div>
        </div>
    </div>

    <!--Isi Data-->
    <form action="{{ route('anorganik.store') }}" method="POST">
        @csrf
    <div class="card">
        <div class="card-body">
        <div class="kota-class">
            <div class="sub-class">
                <div class="title">
                    <span class="text">Tanggal</span>
                    <input class="form-control-dua" type="date" name="tanggal">
                </div>
                <div class="title">
                    <span class="text">Jenis Lokasi</span>
                    <select class="form-control-dua" name="Jlokasi" id="Jlokasi">
                        <option value="" hidden>Pilih Lokasi</option>
                        <option value="Masyarakat">Masyarakat</option>
                                <option value="TPS Non 3R">TPS Non 3R</option>
                                <option value="TPS 3R">TPS 3R</option>
                                <option value="Kantor Pemerintahan">Kantor Pemerintahan</option>
                                <option value="Perusahaan Swasta">Perusahaan Swasta</option>
                                <option value="Sekolah">Sekolah</option>
                                <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                                <option value="Fasilitas Umum">Fasilitas Umum</option>
                                <option value="Pasar">Pasar</option>
                                <option value="Retail">Retail</option>
                                <option value="Mall">Mall</option>
                                <option value="Super Market">Super Market</option>
                    </select>
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <label class="text">Nama Tempat</label>
                    <input name="nama_tempat" id="nama-tempat" class="form-control-dua">
                </div>
                <div class="title">
                    <label class="text">RT</label>
                    <input class="form-control-dua" type="number" name="rt" id="rt">
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <label class="text">RW</label>
                    <input class="form-control-dua" type="number" name="rw" id="rw">
                </div>
                <div class="title">
                    <label class="text">Jumlah KK</label>
                    <input class="form-control-dua" type="number" name="jml_kk" id="jml-kk" placeholder="Kepala Keluarga">
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <span class="text">Bank Sampah / LB3</span>
                    <select class="form-control-dua" list="bank" name="bank_sampah" id="bsampah">
                        <option value="" hidden>Pilih Bank Sampah</option>
                        <option>Bank Sampah</option>
                        <option>Limbah B3</option>
                        <option>Bank Sampah dan Limbah B3</option>
                        <option>Bank Sampah dan Lainnya</option>
                        <option>Limbah B3 dan Lainnya</option>
                    </select>
                </div>
                <div class="title">
                    <label class="text">Alamat</label>
                    <input class="form-control-dua" type="text" name="alamat" id="alamat">
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <label class="text">Jalan</label>
                    <input class="form-control-dua" type="text" name="jalan" id="jalan">
                </div>
                <div class=title>
                    <label class="text">Kota</label>
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
                <div class="title">
                    <label class="text">Kecamatan</label>
                    <select class="form-control-dua" list="camat" name="kecamatan" id="kec-dd">
                        <option value="" hidden>Pilih Kecamatan</option>
                    </select>
                </div>
                <div class="title">
                    <label class="text">Kelurahan</label>
                    <select class="form-control-dua" list="Kelurahan" name="kelurahan" id="kel-dd">
                        <option value="" hidden>Pilih Kelurahan</option>
                    </select>
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <label class="text">Latitude</label>
                    <input class="form-control-dua" type="text" name="latitude" id="latitude" readonly>
                </div>
                <div class="title">
                    <label class="text">Longitude</label>
                    <input class="form-control-dua" type="text" name="longitude" id="longitude" readonly>
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <div class="radio-class2">
                        <label class="text">Status Bank Sampah</label>
                        <div class="radio">
                            <input type="radio" class="form-check-input" id="aktif" name="status_banksampah" value="Aktif" checked>
                            <label class="form-check-label" for="Aktif">Aktif</label>
                            <input type="radio" class="form-check-input" id="tdkaktif" name="status_banksampah" value="Tidak Aktif">
                            <label class="form-check-label" for="Tidak Aktif">Tidak Aktif</label>
                        </div>
                    </div>
                </div>
                <div class="cari">
                    <input type="button" value="Cari Lokasi" class="btn cari" id="get-location">
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <label class="text">Waktu Operasional</label>
                    <select class="form-control-dua" name="waktu_operasional" id="wpo">
                        <option value="" hidden>Pilih Waktu Operasional</option>
                        <option value="Setiap hari">Setiap hari</option>
                        <option value="Seminggu dua kali">Seminggu dua kali</option>
                        <option value="Seminggu Sekali">Seminggu Sekali</option>
                        <option value="Dua minggu sekali">Dua minggu sekali</option>
                        <option value="Sebulan Sekali">Sebulan Sekali</option>
                        <option value="Setiap hari kecuali libur">Setiap hari kecuali libur</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="title">
                    <label class="text">Nama Ketua</label>
                    <input class="form-control-dua" type="text" name="namaKetua" id="namaketua">
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <label class="text">No Telp</label>
                    <input class="form-control-dua" type="number" name="no_tlp" id="no-tlp">
                </div>
                <div class="title">
                    <label class="text">Omset Perbulan</label>
                    <input class="form-control-dua" type="number" name="omset" id="omset" placeholder="Rp.">
                </div>
            </div>
            <div class="title-sub">
                <span class="text">Jumlah Nasabah</span>
                <div class="gender">
                    <input class="form-control-pria" type="number" name="jml_nasabah_L" id="pria" placeholder="Laki-Laki">
                    <input class="form-control-wanita" type="number" name="jml_nasabah_P" id="wanita" placeholder="Perempuan">
                </div>
            </div>
            <div class="title-sub">
                <span class="text">Jumlah Tenaga Kerja</span>
                <div class="gender">
                    <input class="form-control-pria" type="number" name="jml_tenagakerja_L" id="pria" placeholder="Laki-Laki">
                    <input class="form-control-wanita" type="number" name="jml_tenagakerja_P" id="wanita" placeholder="Perempuan">
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <span class="text">Hasil Dijual Ke</span>
                    <select class="form-control-dua" name="hasil_dijual_ke" id="hasiljual">
                        <option value="" hidden>Pilih Opsi</option>
                        <option value="Bank Sampah Induk">Bank Sampah Induk</option>
                        <option value="Pengepul/Lapak">Pengepul/Lapak</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="title">
                    <label class="text">NO SK</label>
                    <input class="form-control-dua" type="text" name="no_sk" id="no-sk">
                </div>
            </div>
            <div class="radio-class">
                <div class="title">
                    <label class="text">Struktur Organisasi</label>
                    <div class="radio">
                        <input type="radio" class="form-check-input" id="ada" name="struktur_organisasi" value="Ada" checked>
                        <label class="form-check-label" for="Ada">Ada</label>
                        <input type="radio" class="form-check-input" id="tdkada" name="struktur_organisasi" value="Tidak Ada">
                        <label class="form-check-label" for="Tidak Ada">Tidak Ada</label>
                    </div>
                </div>
                <div class="title">
                    <label class="text">SK Bank Sampah</label>
                    <div class="radio">
                        <input type="radio" class="form-check-input" id="ada" name="sk_bank_sampah" value="Ada" checked>
                        <label class="form-check-label" for="Ada">Ada</label>
                        <input type="radio" class="form-check-input" id="tdkada" name="sk_bank_sampah" value="Tidak Ada">
                        <label class="form-check-label" for="Tidak Ada">Tidak Ada</label>
                    </div>
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <label class="text">Tanggal SK</label>
                    <input class="form-control-dua" type="date" name="tgl_sk" id="tgl-sk">
                </div>
                <div class="title">
                    <label class="text">Ditandatangani Oleh</label>
                    <select class="form-control-dua" name="ttdo" id="ttdo">
                        <option value="" hidden>Pilih Opsi</option>
                            <option value="Walikota">Walikota</option>
                            <option value="Kepala Dinas">Kepala Dinas</option>
                            <option value="Kepala Suku Dinas">Kepala Suku Dinas</option>
                            <option value="Camat">Camat</option>
                            <option value="Lurah">Lurah</option>
                            <option value="Ketua RW">Ketua RW</option>
                            <option value="Ketua RT">Ketua RT</option>
                            <option value="Lainnya">Lainnya</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                    </select>
                </div>
            </div>
            <div class="radio-class">
                <div class="title">
                    <label class="text">Produk Reuse</label>
                    <div class="radio">
                        <input type="radio" class="form-check-input" id="ada" name="produk_reuse" value="Ada" checked>
                        <label class="form-check-label" for="Ada">Ada</label>
                        <input type="radio" class="form-check-input" id="tdkada" name="produk_reuse" value="Tidak Ada">
                        <label class="form-check-label" for="Tidak Ada">Tidak Ada</label>
                    </div>
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <label class="text">Jenis Reuse</label>
                    <input class="form-control-dua" type="text" name="jenis_reuse" id="jreuse">
                </div>
                <div class="title">
                    <label class="text">Berat Reuse</label>
                    <input class="form-control-dua" type="number" name="berat_reuse" id="breuse" placeholder="Kg">
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- end -->
    <div class="dash-kom">
        <div class="overview">
            <div class="title">
                <i class="uil uil-constructor"></i>
                <span class="text">Media Anorganik</span>
            </div>
        </div>
    </div>
    <!-- Media Anorganik -->
    <div class="card-kompo">
        <div class="kota-class">
            <div class="sub-class">
                <div class="title">
                    <span class="text1">Yang Mengelola</span>
                    <select class="form-control-kompo" list="pengelola" name="mengelolah" id="mengelolah">
                        <option value="" hidden>Pilih Opsi</option>
                        <option>Masyarakat</option>
                        <option>Lembaga Masyarakat (KSM, Koperasi, dll)</option>
                    </select>
                </div>
                <div class="title">
                    <span class="text1">Alat Timbangan</span>
                    <select class="form-control-kompo" list="timbangan" name="alat_timbangan" id="alat">
                        <option value="" hidden>Pilih Opsi</option>
                        <option value="Timbangan Gantung">Timbangan Gantung</option>
                        <option value="Timbangan Duduk">Timbangan Duduk</option>
                        <option value="Timbangan Digital">Timbangan Digital</option>
                        <option value="Tidak ada Timbangan">Tidak ada Timbangan</option>
                    </select>
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <span class="text1">Jenis Pencatatan</span>
                    <select class="form-control-kompo" list="catatan" name="jenis_pencatatan" id="jcatat">
                        <option value="" hidden>Pilih Jenis Pencatatan</option>
                        <option value="Manual Book">Manual Book</option>
                        <option value="Manual Book & Komputerisasi">Manual Book & Komputerisasi</option>
                        <option value="Berbasis Sistem Informasi / Aplikasi">Berbasis Sistem Informasi / Aplikasi</option>
                        <option value="Tidak Ada Pencatatan">Tidak Ada Pencatatan</option>
                    </select>
                </div>
                <div class="title">
                    <span class="text1">Dibangun Oleh</span>
                    <select class="form-control-kompo" list="dibangun" name="dbangun" id="dbangun">
                        <option value="" hidden>Pilih Opsi</option>
                        <option value="Pemerintah Pusat">Pemerintah Pusat</option>
                        <option value="Pemerintah Provinsi">Pemerintah Provinsi</option>
                        <option value="Pemerintah Daerah">Pemerintah Daerah</option>
                        <option value="Swadaya Masyarakat">Swadaya Masyarakat</option>
                        <option value="Swasta">Swasta</option>
                        <option value="Donatur/Bantuan Luar Negeri">Donatur/Bantuan Luar Negeri</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <span class="text1">Luas Bangunan</span>
                    <input class="form-control-kompo" type="number" name="lbangunan" id="lbangunan" placeholder="m2">
                </div>
                <div class="title">
                    <span class="text1">Daerah Cakupan</span>
                    <select class="form-control-kompo" list="cakupan" name="dcakup" id="dcakup">
                        <option value="" hidden>Pilih Opsi</option>
                        <option value="Seluruh Perkotaan (Kota)">Seluruh Perkotaan (Kota)</option>
                        <option value="Hanya wilayah Ibukota Kabupaten">Hanya wilayah Ibukota Kabupaten</option>
                        <option value="Hanya wilayah diluar Ibukota Kabupaten">Hanya wilayah diluar Ibukota Kabupaten</option>
                        <option value="Seluruh Wilayah kabupaten (Ibukota dan diluar Ibukota)">Seluruh Wilayah kabupaten (Ibukota dan diluar Ibukota)</option>
                        <option value="Lokasi Tersebut">Lokasi Tersebut</option>
                    </select>
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <span class="text1">Mesin Press</span>
                    <select class="form-control-kompo" list="press" name="mesin_press" id="mpress">
                        <option value="" hidden>Pilih Opsi</option>
                        <option>Ada dan Berfungsi dengan baik</option>
                        <option>Ada, tetapi rusak</option>
                        <option>Tidak Ada</option>
                    </select>
                </div>
                <div class="title">
                    <span class="text1">Mesin Pencacah</span>
                    <select class="form-control-kompo" list="pencacah" name="mpencacah" id="mpencacah">
                        <option value="" hidden>Pilih Opsi</option>
                        <option>Ada dan Berfungsi dengan baik</option>
                        <option>Ada, tetapi rusak</option>
                        <option>Tidak Ada</option>
                    </select>
                </div>
            </div>
            <div class="title-1">
                <span class="text1">Kondisi Bangunan</span>
                <select class="form-control-kompo" list="bangunan" name="kondisi_bangunan" id="kondisibangunan">
                    <option value="" hidden>Pilih Opsi</option>
                    <option>Bangunan Permanen Sendiri</option>
                    <option>Semi permanen</option>
                    <option>Gabung dengan rumah warga/kantor RT/RW atau Pos Kamling</option>
                    <option>Gabung dengan Perkantoran/sejenisnya</option>
                    <option>Lainnya</option>
                </select>
            </div>
            <div class="radio-class">
                <div class="title">
                    <label class="text1">Buku Tabungan</label>
                    <div class="radio">
                        <input type="radio" class="form-check-input" id="ada" name="buku_tabungan" value="Ada" checked>
                        <label class="form-check-label1" for="Ada">Ada</label>
                        <input type="radio" class="form-check-input" id="tdkada" name="buku_tabungan" value="Tidak Ada">
                        <label class="form-check-label1" for="Tidak Ada">Tidak Ada</label>
                    </div>
                </div>
                <div class="title">
                    <label class="text1">Gudang Penyimpanan</label>
                    <div class="radio">
                        <input type="radio" class="form-check-input" id="ada" name="gudang_penyimpanan" value="Ada" checked>
                        <label class="form-check-label1" for="Ada">Ada</label>
                        <input type="radio" class="form-check-input" id="tdkada" name="gudang_penyimpanan" value="Tidak Ada">
                        <label class="form-check-label1" for="Tidak Ada">Tidak Ada</label>
                    </div>
                </div>
                <div class="title">
                    <label class="text1">Alat Angkut</label>
                    <div class="radio">
                        <input type="radio" class="form-check-input" id="ada" name="a_angkut" value="Ada" checked>
                        <label class="form-check-label1" for="Ada">Ada</label>
                        <input type="radio" class="form-check-input" id="tdkada" name="a_angkut" value="Tidak Ada">
                        <label class="form-check-label1" for="Tidak Ada">Tidak Ada</label>
                    </div>
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <span class="text1">Motor</span>
                    <input class="form-control-kompo" type="number" name="motor" id="motor" placeholder="Unit">
                </div>
                <div class="title">
                    <span class="text1">Gerobak Motor</span>
                    <input class="form-control-kompo" type="number" name="gmotor" id="gmotor" placeholder="Unit">
                </div>
            </div>
            <div class="sub-class">
                <div class="title">
                    <span class="text1">Pick Up</span>
                    <input class="form-control-kompo" type="number" name="pickup" id="pickup" placeholder="Unit">
                </div>
                <div class="title">
                    <span class="text1">Truck</span>
                    <input class="form-control-kompo" type="number" name="truck" id="truck" placeholder="Unit">
                </div>
            </div>
            <div class="title-1">
                <span class="text1">Lainnya</span>
                <input class="form-control-luas" type="text" name="lainnya" id="lainnya">
                <input class="form-control-bio" type="number" name="unit1" id="unit1" placeholder="Unit">
            </div>
            <div class="title-1">
                <label class="text-2">JUMLAH ALAT ANGKUT</label><!--Otomatis-->
                <input class="form-control1" type="number" name="jml_alat" id="jml-alat" placeholder="Unit">
            </div>
        </div>
    </div>
    </div>
    <!-- end -->
    <!-- Jumlah Sampah -->
    <div class="card-sd">
        <div class="card-body-sd">
        <div class="kota-class">
            <div class="sub-class">
                <div class="title">
                    <span class="text">Jumlah Sampah</span>
                    <input class="form-control-jingga" type="number" name="jml_sampah" placeholder="Kg/Hari">
                </div>
                <div class="title">
                    <span class="text">Jumlah Serdadu</span><!--Jumlah Sampah - Jumlah Sampah Terkelola (Bisa Koma)-->
                    <input class="form-control-jingga" type="number" name="jml_serdadu" placeholder="Kg/Hari">
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- end -->
<!-- Jenis Sampah Anorganik-->
<div class="card-sd">
    <div class="card-body-sd">
    <div class="kota-class">
        <div class="title">
            <span class="praf">JENIS SAMPAH ANORGANIK</span>
        </div>
        <div class="sub-class">
            <div class="title">
                <span class="text">Plastik</span>
                <input class="form-control-jingga" type="number" name="plastik" placeholder="Kg/Hari">
            </div>
            <div class="title">
                <span class="text">Kertas</span>
                <input class="form-control-jingga" type="number" name="kertas" placeholder="Kg/Hari">
            </div>
        </div>
        <div class="sub-class">
            <div class="title">
                <span class="text">Besi</span>
                <input class="form-control-jingga" type="number" name="besi" placeholder="Kg/Hari">
            </div>
            <div class="title">
                <span class="text">Logam</span>
                <input class="form-control-jingga" type="number" name="logam" placeholder="Kg/Hari">
            </div>
        </div>
        <div class="title-1">
            <span class="text">Lainnya</span>
            <input class="form-control-luas1" type="text" name="lainnya_anorganik" id="lainnya">
            <input class="form-control-bio1" type="number" name="unit2" id="unit2" placeholder="Kg/Hari">
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
