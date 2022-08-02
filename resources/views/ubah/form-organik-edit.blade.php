@extends('layout.main')
@include('partials.nav')
<link rel="stylesheet" href="{{ asset('css/style-form-organik.css') }}">
<!--Halaman Organik-->
@section('container')
    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class="uil uil-trees"></i>
                <span class="text">Form Organik</span>
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
    <form action="/organik/{{ $organik->id }}" method="POST">
        @method('PUT')
        @csrf
    <!--Isi Data-->
    <div class="card">
        <div class="card-body">
                <div class="data-class">
                    <div class="sub-class">
                        <div class="title">
                            <span class="text">Tanggal</span>
                            <input class="form-control-dua" type="date" name="tanggal" value="{{ $organik->tanggal }}">
                        </div>
                        <div class="select-box">
                            <span class="text">Jenis Lokasi</span>
                            <select class="select" name="Jlokasi" id="select-box1">
                                <option value="{{ $organik->JLokasi }}" hidden>{{ $organik->JLokasi }}</option>
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
                            <input name="nama_tempat" id="nama-tempat" class="form-control-dua" value="{{ $organik->nama_tempat }}">
                        </div>
                        <div class="title">
                            <label class="text">RT</label>
                            <input class="form-control-dua" type="number" name="rt" id="rt" value="{{ $organik->rt }}">
                        </div>
                    </div>
                    <div class="sub-class">
                        <div class="title">
                            <label class="text">RW</label>
                            <input class="form-control-dua" type="number" name="rw" id="rw" value="{{ $organik->rw }}">
                        </div>
                        <div class="title">
                            <label class="text">Jumlah KK</label>
                            <input class="form-control-dua" type="number" name="jml_kk" id="jml-kk"
                                placeholder="Kepala Keluarga" value="{{ $organik->jml_kk }}">
                        </div>
                    </div>
                    <div class="sub-class">
                        <div class="title">
                            <label class="text">Alamat</label>
                            <input class="form-control-dua" type="text" name="alamat" id="alamat" value="{{ $organik->alamat }}">
                        </div>
                        <div class="title">
                            <label class="text">Jalan</label>
                            <input class="form-control-dua" type="text" name="jalan" id="jalan" value="{{ $organik->jalan }}">
                        </div>
                    </div>
                    <div class="sub-class">
                        <div class="select-box">
                            <label class="text">Kota</label>
                            <select class="select" name="kota" list="select-box1" id="kota-dd">
                                <option value="{{ $organik->kota }}" hidden>{{ $organik->kota }}</option>
                                @foreach ($datas as $kota)
                                    <option value="{{ $kota->id }}">
                                        {{ $kota->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="select-box">
                            <label class="text">Kecamatan</label>
                            <select class="select" name="kecamatan" list="select-box1" id="kec-dd">
                                <option value="{{ $organik->kecamatan }}" hidden>{{ $organik->kecamatan }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="sub-class">
                        <div class="select-box">
                            <label class="text">Kelurahan</label>
                            <select class="select" name="kelurahan" list="select-box1" id="kel-dd">
                                <option value="{{ $organik->kelurahan }}" hidden>{{ $organik->kelurahan }}</option>
                            </select>
                        </div>
                        <div class="title">
                            <label class="text">Latitude</label>
                            <input id="latitude" type="text" class="form-control-dua @error('latitude') is-invalid @enderror" name="latitude" value="{{ $organik->latitude }}"  readonly>
                        </div>
                    </div>
                    <div class="sub-class">
                        <div class="title">
                            <label class="text">Longitude</label>
                            <input id="longitude" type="text" class="form-control-dua @error('longitude') is-invalid @enderror" name="longitude" value="{{ $organik->longitude }}" readonly>
                        </div>
                        <div class="title">
                            <label class="text">NO SK</label>
                            <input class="form-control-dua" type="text" name="no_sk" id="no-sk" value="{{ $organik->no_sk }}">
                        </div>
                    </div>
                    <div class="sub-class">
                        <div class="title">
                            <label class="text">Ditandatangani Oleh</label>
                            <select class="form-control-dua" name="ttdo" id="ttdo">
                                <option value="{{ $organik->ttdo }}" hidden>{{ $organik->ttdo }}</option>
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
                        <div class="cari">
                            <input type="button" value="Cari Lokasi" class="btn cari" id="get-location">
                        </div>
                    </div>
                    <div class="sub-class-bottom">
                        <div class="title-radio">
                            <label class="text">SK Komposing</label>
                            <div class="radio">
                                <input type="radio" class="form-check-input" id="ada" name="sk_komposing"
                                    value="Ada" @if ($organik->sk_komposing == "Ada") checked @endif>
                                <label class="form-check-label" for="Ada">Ada</label>
                                <input type="radio" class="form-check-input" id="tdkada" name="sk_komposing"
                                    value="Tidak Ada" @if($organik->sk_komposing == "Tidak Ada") checked @endif>
                                <label class="form-check-label" for="Tidak Ada">Tidak Ada</label>
                            </div>
                        </div>
                        <div class="title-radio">
                            <label class="text">Komposing</label>
                            <div class="radio">
                                <input type="radio" class="form-check-input" id="aktif" name="komposing"
                                    value="Aktif" @if ($organik->komposing == "Aktif") checked @endif>
                                <label class="form-check-label" for="Aktif">Aktif</label>
                                <input type="radio" class="form-check-input" id="tdkaktif" name="komposing"
                                    value="Tidak Aktif" @if ($organik->komposing == "Tidak Aktif") checked @endif>
                                <label class="form-check-label" for="Tidak Aktif">Tidak Aktif</label>
                            </div>
                        </div>
                        <div class="title-radio">
                            <label class="text">Struktur Organisasi</label>
                            <div class="radio">
                                <input type="radio" class="form-check-input" id="ada" name="struktur_organisasi"
                                    value="Ada" @if ($organik->struktur_organisasi == "Ada") checked @endif>
                                <label class="form-check-label" for="Ada">Ada</label>
                                <input type="radio" class="form-check-input" id="tdkada" name="struktur_organisasi"
                                    value="Tidak Ada" @if ($organik->struktur_organisasi == "Tidak Ada") checked @endif>
                                <label class="form-check-label" for="Tidak Ada">Tidak Ada</label>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- end -->
    <!-- Jumlah Sampah -->
    <div class="card-sd">
        <div class="card-body-sd">
            <div class="title-1">
                <span class="text">Jumlah Sampah</span>
                <input class="form-control-blue" type="number" name="jml_sampah" value="{{ $organik->jml_sampah }}" placeholder="Kg/Hari">
            </div>
            <div class="title-1">
                <span class="text">Jumlah Serdadu</span>
                <!--Jumlah Sampah - Jumlah Sampah Terkelola (Bisa Koma)-->
                <input class="form-control-blue" type="number" name="jml_serdadu" value="{{ $organik->jml_serdadu }}" placeholder="Kg/Hari">
            </div>
        </div>
    </div>
    <!-- end -->
    <div class="dash-co">
        <div class="overview">
            <div class="title">
                <i class="uil uil-trees"></i>
                <span class="text">Data Sampah</span>
            </div>
        </div>
    </div>
    <!-- Sampah Organik -->
    <div class="card-o">
        <div class="card-body">
            <div class="data-class">
                <div class="title">
                    <span class="praf">JUMLAH SAMPAH ORGANIK UNTUK PAKAN TERNAK : </span>
                </div>
                <div class="sub-class">
                    <div class="title-sub">
                        <span class="text">Jenis Ternak</span>
                        <select class="form-control-orange" list="ternak" name="Jternak" id="Jternak">
                            <option value="{{ $organik->Jternak }}" hidden>{{ $organik->Jternak }}</option>
                            <option value="BSF">BSF</option>
                            <option value="IKAN">IKAN</option>
                            <option value="UNGGAS">UNGGAS</option>
                            <option value="PETERNAKAN">PETERNAKAN</option>
                            <option value="BSF dan LAINNYA">BSF dan LAINNYA</option>
                        </select>
                    </div>
                    <div class="title-sub">
                        <label class="text">Keterangan Lainnya</label>
                        <input name="k_lainnya" id="k-lainnya" value="{{ $organik->k_lainnya }}" class="form-control-orange">
                    </div>
                </div>
                <div class="sub-class">
                    <div class="title-sub">
                        <span class="text">Kategori</span>
                        <!--Hanya Untuk Jenis BSF-->
                        <select class="form-control-orange" list="kategori" name="kategori" id="kategori">
                            <option value="{{ $organik->kategori }}" hidden>{{ $organik->kategori }}</option>
                            <option value="Inti">Inti</option>
                            <option value="Plasma">Plasma</option>
                        </select>
                    </div>
                    <div class="title-sub">
                        <label class="text">Sisa Makanan</label>
                        <input class="form-control-orange" type="number" name="sisa" id="sisa"
                            placeholder="Kg/Hari" value="{{ $organik->sisa }}">
                    </div>
                </div>
                <div class="sub-class">
                    <div class="title-sub">
                        <label class="text">Kayu, Ranting, Daun</label>
                        <input class="form-control-orange" type="number" name="jenis" id="jenis"
                            placeholder="Kg/Hari" value="{{ $organik->jenis }}">
                    </div>
                    <div class="title-sub">
                        <label class="text">Total Makanan BSF</label>
                        <!--Hanya Untuk BSF-->
                        <input class="form-control-orange" type="number" name="tbsf" id="tbsf"
                            placeholder="Kg/Hari" value="{{ $organik->tbsf }}">
                    </div>
                </div>
                <div class="title-1">
                    <label class="text-1">JUMLAH SAMPAH TERKELOLA :</label>
                    <!--Otomatis-->
                    <input class="form-control-1" type="number" name="jml_sampahterkelola" id="jml-sampah"
                        placeholder="Kg/Hari" value="{{ $organik->jml_sampahterkelola }}">
                </div>
                {{-- SIDE BAR NON BSF --}}
                {{-- IKAN --}}
                <div class="data" id="IKAN">
                    <div class="card-body-side">
                        <div class="data-class">
                            <div class="bio">
                                <div class="title">
                                    <span class="praf">JUMLAH SAMPAH ORGANIK UNTUK BAHAN BAKU KOMPOS : </span>
                                </div>
                                <div class="sub-class-1">
                                    <div class="title-sub">
                                        <label class="text">Sisa Makanan</label>
                                        <input class="form-control-orange" type="number" name="skompos" id="skompos"
                                            placeholder="Kg/Proses" value="{{ $organik->skompos }}">
                                    </div>
                                    <div class="title-sub">
                                        <label class="text">Kayu, Ranting, Daun</label>
                                        <input class="form-control-orange" type="number" name="jns_kompos" id="jns-kompos"
                                            placeholder="Kg/Proses" value="{{ $organik->jns_kompos }}">
                                    </div>
                                </div>
                                <div class="sub-class-1">
                                    <div class="title-sub">
                                        <label class="text">Panen Kompos Cair</label>
                                        <input class="form-control-orange" type="number" name="pk_cair" id="pk-cair"
                                            placeholder="Liter/Panen" value="{{ $organik->pk_cair }}">
                                    </div>
                                    <div class="title-sub">
                                        <label class="text">Panen Kompos Padat</label>
                                        <input class="form-control-orange" type="number" name="pk_padat" id="pk-padat"
                                            placeholder="Kg/Panen" value="{{ $organik->pk_padat }}">
                                    </div>
                                </div>
                                <div class="title">
                                    <span class="praf">JUMLAH SAMPAH ORGANIK UNTUK BAHAN BAKU SUMBER ENERGI : </span>
                                </div>
                                <div class="sub-class-1">
                                    <div class="title-sub">
                                        <label class="text">Sisa Makanan</label>
                                        <input class="form-control-orange" type="number" name="s_energi" id="s-energi"
                                            placeholder="Kg/Proses" value="{{ $organik->s_energi }}">
                                    </div>
                                    <div class="title-sub">
                                        <label class="text">Kayu, Ranting, Daun</label>
                                        <input class="form-control-orange" type="number" name="jns_energi" id="jns-energi"
                                            placeholder="Kg/Proses" value="{{ $organik->jns_energi }}">
                                    </div>
                                </div>
                                <div class="title-1">
                                    <label class="text-1">JUMLAH TOTAL SISA MAKANAN :</label>
                                    <!--Otomatis-->
                                    <input class="form-control-1" type="number" name="jml_skompos" id="jml-skompos"
                                        placeholder="Kg/Hari" value="{{ $organik->jml_skompos }}">
                                </div>
                                <div class="title-1">
                                    <label class="text-1">JUMLAH TOTAL KAYU, RANTING, DAUN :</label>
                                    <!--Otomatis-->
                                    <input class="form-control-1" type="number" name="jml_kompos" id="jml-kompos"
                                        placeholder="Kg/Hari" value="{{ $organik->jml_kompos }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- UNGGAS --}}
                <div class="data" id="UNGGAS">
                    <div class="card-body-side">
                        <div class="data-class">
                            <div class="bio">
                                <div class="title">
                                    <span class="praf">JUMLAH SAMPAH ORGANIK UNTUK BAHAN BAKU KOMPOS : </span>
                                </div>
                                <div class="sub-class-1">
                                    <div class="title-sub">
                                        <label class="text">Sisa Makanan</label>
                                        <input class="form-control-orange" type="number" name="skompos" id="skompos"
                                            placeholder="Kg/Proses" value="{{ $organik->skompos }}">
                                    </div>
                                    <div class="title-sub">
                                        <label class="text">Kayu, Ranting, Daun</label>
                                        <input class="form-control-orange" type="number" name="jns_kompos" id="jns-kompos"
                                            placeholder="Kg/Proses" value="{{ $organik->jns_kompos }}">
                                    </div>
                                </div>
                                <div class="sub-class-1">
                                    <div class="title-sub">
                                        <label class="text">Panen Kompos Cair</label>
                                        <input class="form-control-orange" type="number" name="pk_cair" id="pk-cair"
                                            placeholder="Liter/Panen" value="{{ $organik->pk_cair }}">
                                    </div>
                                    <div class="title-sub">
                                        <label class="text">Panen Kompos Padat</label>
                                        <input class="form-control-orange" type="number" name="pk_padat" id="pk-padat"
                                            placeholder="Kg/Panen" value="{{ $organik->pk_padat }}">
                                    </div>
                                </div>
                                <div class="title">
                                    <span class="praf">JUMLAH SAMPAH ORGANIK UNTUK BAHAN BAKU SUMBER ENERGI : </span>
                                </div>
                                <div class="sub-class-1">
                                    <div class="title-sub">
                                        <label class="text">Sisa Makanan</label>
                                        <input class="form-control-orange" type="number" name="s_energi" id="s-energi"
                                            placeholder="Kg/Proses" value="{{ $organik->s_energi }}">
                                    </div>
                                    <div class="title-sub">
                                        <label class="text">Kayu, Ranting, Daun</label>
                                        <input class="form-control-orange" type="number" name="jns_energi" id="jns-energi"
                                            placeholder="Kg/Proses" value="{{ $organik->jns_energi }}">
                                    </div>
                                </div>
                                <div class="title-1">
                                    <label class="text-1">JUMLAH TOTAL SISA MAKANAN :</label>
                                    <!--Otomatis-->
                                    <input class="form-control-1" type="number" name="jml_skompos" id="jml-skompos"
                                        placeholder="Kg/Hari" value="{{ $organik->jml_skompos }}">
                                </div>
                                <div class="title-1">
                                    <label class="text-1">JUMLAH TOTAL KAYU, RANTING, DAUN :</label>
                                    <!--Otomatis-->
                                    <input class="form-control-1" type="number" name="jml_kompos" id="jml-kompos"
                                        placeholder="Kg/Hari" value="{{ $organik->jml_kompos }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- PETERNAKAN --}}
                <div class="data" id="PETERNAKAN">
                    <div class="card-body-side">
                        <div class="data-class">
                            <div class="bio">
                                <div class="title">
                                    <span class="praf">JUMLAH SAMPAH ORGANIK UNTUK BAHAN BAKU KOMPOS : </span>
                                </div>
                                <div class="sub-class-1">
                                    <div class="title-sub">
                                        <label class="text">Sisa Makanan</label>
                                        <input class="form-control-orange" type="number" name="skompos" id="skompos"
                                            placeholder="Kg/Proses" value="{{ $organik->skompos }}">
                                    </div>
                                    <div class="title-sub">
                                        <label class="text">Kayu, Ranting, Daun</label>
                                        <input class="form-control-orange" type="number" name="jns_kompos" id="jns-kompos"
                                            placeholder="Kg/Proses" value="{{ $organik->jns_kompos }}">
                                    </div>
                                </div>
                                <div class="sub-class-1">
                                    <div class="title-sub">
                                        <label class="text">Panen Kompos Cair</label>
                                        <input class="form-control-orange" type="number" name="pk_cair" id="pk-cair"
                                            placeholder="Liter/Panen" value="{{ $organik->pk_cair }}">
                                    </div>
                                    <div class="title-sub">
                                        <label class="text">Panen Kompos Padat</label>
                                        <input class="form-control-orange" type="number" name="pk_padat" id="pk-padat"
                                            placeholder="Kg/Panen" value="{{ $organik->pk_padat }}">
                                    </div>
                                </div>
                                <div class="title">
                                    <span class="praf">JUMLAH SAMPAH ORGANIK UNTUK BAHAN BAKU SUMBER ENERGI : </span>
                                </div>
                                <div class="sub-class-1">
                                    <div class="title-sub">
                                        <label class="text">Sisa Makanan</label>
                                        <input class="form-control-orange" type="number" name="s_energi" id="s-energi"
                                            placeholder="Kg/Proses" value="{{ $organik->s_energi }}">
                                    </div>
                                    <div class="title-sub">
                                        <label class="text">Kayu, Ranting, Daun</label>
                                        <input class="form-control-orange" type="number" name="jns_energi" id="jns-energi"
                                            placeholder="Kg/Proses" value="{{ $organik->jns_energi }}">
                                    </div>
                                </div>
                                <div class="title-1">
                                    <label class="text-1">JUMLAH TOTAL SISA MAKANAN :</label>
                                    <!--Otomatis-->
                                    <input class="form-control-1" type="number" name="jml_skompos" id="jml-skompos"
                                        placeholder="Kg/Hari" value="{{ $organik->jml_skompos }}">
                                </div>
                                <div class="title-1">
                                    <label class="text-1">JUMLAH TOTAL KAYU, RANTING, DAUN :</label>
                                    <!--Otomatis-->
                                    <input class="form-control-1" type="number" name="jml_kompos" id="jml-kompos"
                                        placeholder="Kg/Hari" value="{{ $organik->jml_kompos }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- SIDE BAR BSF --}}
                {{-- BSF --}}
                <div class="data" id="BSF">
                    <div class="card-body-side">
                        <div class="data-class">
                            <div class="bio">
                                <div class="title">
                                    <span class="praf">JUMLAH BERAT DAN PAKAN MAGGOT PER BIOPON (BIO)/HARI </span>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 1</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio1" id="bio" value="{{ $organik->bio1 }}">
                                    <input class="form-control-bio" type="number" name="bio1_1" id="bio1" value="{{ $organik->bio1_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 2</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio2" id="bio" value="{{ $organik->bio2 }}">
                                    <input class="form-control-bio" type="number" name="bio2_1" id="bio1" value="{{ $organik->bio2_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 3</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio3" id="bio" value="{{ $organik->bio3 }}">
                                    <input class="form-control-bio" type="number" name="bio3_1" id="bio1" value="{{ $organik->bio3_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 4</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio4" id="bio" value="{{ $organik->bio4 }}">
                                    <input class="form-control-bio" type="number" name="bio4_1" id="bio1" value="{{ $organik->bio4_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 5</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio5" id="bio" value="{{ $organik->bio5 }}">
                                    <input class="form-control-bio" type="number" name="bio5_1" id="bio1" value="{{ $organik->bio5_1}}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 6</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio6" id="bio" value="{{ $organik->bio6 }}">
                                    <input class="form-control-bio" type="number" name="bio6_1" id="bio1" value="{{ $organik->bio6_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 7</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio7" id="bio" value="{{ $organik->bio7 }}">
                                    <input class="form-control-bio" type="number" name="bio7_1" id="bio1" value="{{ $organik->bio7_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 8</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio8" id="bio" value="{{ $organik->bio8 }}">
                                    <input class="form-control-bio" type="number" name="bio8_1" id="bio1" value="{{ $organik->bio8_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 9</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio9" id="bio" value="{{ $organik->bio9 }}">
                                    <input class="form-control-bio" type="number" name="bio9_1" id="bio1" value="{{ $organik->bio9_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 10</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio10" id="bio" value="{{ $organik->bio10 }}">
                                    <input class="form-control-bio" type="number" name="bio10_1" id="bio1" value="{{ $organik->bio10_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div>
                                    <div class="tbio">
                                        <label class="text-1">Jumlah Total Biofon</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="tbio" id="tbio" value="{{ $organik->tbio }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- LAINNYA --}}
                <div class="data" id="BSF dan LAINNYA">
                    <div class="card-body-side">
                        <div class="data-class">
                            <div class="bio">
                                <div class="title">
                                    <span class="praf">JUMLAH BERAT DAN PAKAN MAGGOT PER BIOPON (BIO)/HARI </span>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 1</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio1" id="bio" value="{{ $organik->bio1 }}">
                                    <input class="form-control-bio" type="number" name="bio1_1" id="bio1" value="{{ $organik->bio1_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 2</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio2" id="bio" value="{{ $organik->bio2 }}">
                                    <input class="form-control-bio" type="number" name="bio2_1" id="bio1" value="{{ $organik->bio2_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 3</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio3" id="bio" value="{{ $organik->bio3 }}">
                                    <input class="form-control-bio" type="number" name="bio3_1" id="bio1" value="{{ $organik->bio3_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 4</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio4" id="bio" value="{{ $organik->bio4 }}">
                                    <input class="form-control-bio" type="number" name="bio4_1" id="bio1" value="{{ $organik->bio4_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 5</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio5" id="bio" value="{{ $organik->bio5 }}">
                                    <input class="form-control-bio" type="number" name="bio5_1" id="bio1" value="{{ $organik->bio5_1}}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 6</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio6" id="bio" value="{{ $organik->bio6 }}">
                                    <input class="form-control-bio" type="number" name="bio6_1" id="bio1" value="{{ $organik->bio6_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 7</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio7" id="bio" value="{{ $organik->bio7 }}">
                                    <input class="form-control-bio" type="number" name="bio7_1" id="bio1" value="{{ $organik->bio7_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 8</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio8" id="bio" value="{{ $organik->bio8 }}">
                                    <input class="form-control-bio" type="number" name="bio8_1" id="bio1" value="{{ $organik->bio8_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 9</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio9" id="bio" value="{{ $organik->bio9 }}">
                                    <input class="form-control-bio" type="number" name="bio9_1" id="bio1" value="{{ $organik->bio9_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div class="title-2">
                                    <div>
                                        <label class="text">BIO 10</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="bio10" id="bio" value="{{ $organik->bio10 }}">
                                    <input class="form-control-bio" type="number" name="bio10_1" id="bio1" value="{{ $organik->bio10_1 }}"> <label
                                        class="kg">Kg/Hari</label>
                                </div>
                                <div>
                                    <div class="tbio">
                                        <label class="text-1">Jumlah Total Biofon</label>
                                        <!--Otomatis-->
                                    </div>
                                    <input class="form-control-bio" type="number" name="tbio" id="tbio" value="{{ $organik->tbio }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- PROSES INTI --}}
                <div class="data-kategori" id="Inti">
                    <div class="card-body-side">
                        <div class="data-class">
                            <div class="bio">
                                <div class="title">
                                    <span class="praf">PROSES INTI : </span>
                                </div>
                                <div class="sub-class-1">
                                    <div class="title-sub">
                                        <label class="text">Berat Telur Hasil BSF</label>
                                        <input class="form-control-orange" type="number" name="berat_telur"
                                            placeholder="Gram/Panen" value="{{ $organik->berat_telur }}">
                                    </div>
                                    <div class="title-sub">
                                        <label class="text">Berat Maggot 1-18 DOL</label>
                                        <input class="form-control-orange" type="number" name="berat_maggot"
                                            placeholder="Kg/Hari" value="{{ $organik->berat_maggot }}">
                                    </div>
                                </div>
                                <div class="sub-class-1">
                                    <div class="title-sub">
                                        <label class="text">Prepupa Masuk Dari Plasma</label>
                                        <input class="form-control-orange" type="number" name="prepupa_masuk"
                                            placeholder="Liter/Panen" value="{{ $organik->prepupa_masuk }}">
                                    </div>
                                    <div class="title-sub">
                                        <label class="text">Alamat Kirim Plasma</label>
                                        <input class="form-control-orange" type="text" name="alamat_kirim" value="{{ $organik->alamat_kirim }}">
                                    </div>
                                </div>
                                <div class="sub-class-1">
                                    <div class="title-sub">
                                        <label class="text">Kirim Maggot 1-18 DOL Ke Plasma</label>
                                        <input class="form-control-orange" type="number" name="kirim_maggot"
                                            placeholder="Kg/Kirim" value="{{ $organik->kirim_maggot }}">
                                    </div>
                                    <div class="title-sub">
                                        <label class="text">Alamat Terima Plasma</label>
                                        <input class="form-control-orange" type="text" name="alamat_terima" value="{{ $organik->alamat_terima }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- PROSES PLASMA --}}
                <div class="data-kategori" id="Plasma">
                    <div class="card-body-side">
                        <div class="data-class">
                            <div class="bio">
                                <div class="title">
                                    <span class="praf">PROSES PLASMA : </span>
                                </div>
                                <div class="sub-class-1">
                                    <div class="title-sub">
                                        <label class="text">Larva Di Terima Dari</label>
                                        <input class="form-control-orange" type="text" name="larva_terima" value="{{ $organik->larva_terima }}">
                                    </div>
                                    <div class="title-sub">
                                        <label class="text">Berat Maggot 1-18 DOL</label>
                                        <input class="form-control-orange" type="number" name="berat_maggot_plasma"
                                            placeholder="Kg/Hari" value="{{ $organik->berat_maggot_plasma }}">
                                    </div>
                                </div>
                                <div class="sub-class-1">
                                    <div class="title-sub">
                                        <label class="text">Prepupa Yang Di Manfaatkan</label>
                                        <input class="form-control-orange" type="number" name="prepupa_dimanfaatkan"
                                            placeholder="Kg/Hari" value="{{ $organik->prepupa_dimanfaatkan }}">
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <span class="text">Media Komposing</span>
            </div>
        </div>
    </div>
    <!-- Media Komposing -->
    <div class="card-kompo">
        <div class="card-body">
            <div class="data-class">
                <div class="title">
                    <span class="text1">Tong Komposer</span>
                    <input class="form-control-side" type="number" name="tong" id="tong"
                    placeholder="Unit" value="{{ $organik->tong }}">
                </div>
                <div class="title">
                    <span class="text1">Bak Beton</span>
                    <div class="bbeton">
                        <input class="form-control-side1" type="number" name="beton" id="beton"
                            placeholder="Unit" value="{{ $organik->beton }}">
                        <label class="luas">Luas</label>
                        <input class="form-control-side1" type="number" name="luas" id="luas"
                            placeholder="m2" value="{{ $organik->luas }}">
                    </div>
                </div>
                <div class="title">
                    <span class="text1">Lainnya</span>
                    <div class="lainnya">
                        <input class="form-control-luas" type="text" name="lain" id="lain" value="{{ $organik->lain }}">
                        <input class="form-control-side1" type="number" name="unit" id="unit"
                            placeholder="Unit" value="{{ $organik->unit }}">
                    </div>
                </div>
                <div class="sub-class">
                    <div class="title-sub">
                        <span class="text1">Pemanfaatan</span>
                        <select class="form-control-dua" list="pemanfaatan" name="pemanfaatan" id="manfaat">
                            <option value="{{ $organik->pemanfaatan }}" hidden>{{ $organik->pemanfaatan }}</option>
                            <option value="Dijual">Dijual</option>
                            <option value="Diberikan Gratis">Diberikan Gratis</option>
                            <option value="Dijual dan Diberikan Gratis">Dijual dan Diberikan Gratis</option>
                            <option value="Dipakai Untuk Sendiri">Dipakai Untuk Sendiri</option>
                            <option value="Dipakai Untuk Sendiri dan Lain-Lain">Dipakai Untuk Sendiri dan Lain-Lain
                            </option>
                        </select>
                    </div>
                    <div class="title-sub">
                        <span class="text1">Yang Mengelola</span>
                        <select class="form-control-dua" list="pengelola" name="mengelolah" id="mengelolah">
                            <option value="{{ $organik->mengelolah }}" hidden>{{ $organik->mengelolah }}</option>
                            <option>Masyarakat</option>
                            <option>Lembaga Masyarakat (KSM, Koperasi, dll)</option>
                        </select>
                    </div>
                </div>
                <div class="title">
                    <span class="text1">Jumlah Tenaga Kerja</span>
                    <div class="gender">
                        <input class="form-control-luas" type="number" name="jml_pria" id="pria"
                            placeholder="Laki-Laki" value="{{ $organik->jml_pria }}">
                        <input class="form-control-side1" type="number" name="jml_wanita" id="wanita"
                            placeholder="Perempuan" value="{{ $organik->jml_wanita }}">
                    </div>
                </div>
                <div class="sub-class">
                    <div class="title-sub">
                        <span class="text1">Alat Timbangan</span>
                        <select class="form-control-dua" list="timbangan" name="timbangan" id="alat">
                            <option value="{{ $organik->timbangan }}" hidden>{{ $organik->timbangan }}</option>
                            <option value="Timbangan Gantung">Timbangan Gantung</option>
                            <option value="Timbangan Duduk">Timbangan Duduk</option>
                            <option value="Timbangan Digital">Timbangan Digital</option>
                            <option value="Tidak ada Timbangan">Tidak ada Timbangan</option>
                        </select>
                    </div>
                    <div class="title-sub">
                        <span class="text1">Jenis Pencatatan</span>
                        <select class="form-control-dua" list="catatan" name="jcatat" id="jcatat">
                            <option value="{{ $organik->jcatat }}" hidden>{{ $organik->jcatat }}</option>
                            <option value="Manual Book">Manual Book</option>
                            <option value="Manual Book & Komputerisasi">Manual Book & Komputerisasi</option>
                            <option value="Berbasis Sistem Informasi / Aplikasi">Berbasis Sistem Informasi / Aplikasi
                            </option>
                            <option value="Tidak Ada Pencatatan">Tidak Ada Pencatatan</option>
                        </select>
                    </div>
                </div>
                <div class="sub-class">
                    <div class="title-sub">
                        <span class="text1">Dibangun Oleh</span>
                        <select class="form-control-dua" list="dibangun" name="dbangun" id="dbangun">
                            <option value="{{ $organik->dbangun }}" hidden>{{ $organik->dbangun }}</option>
                            <option value="Pemerintah Pusat">Pemerintah Pusat</option>
                            <option value="Pemerintah Provinsi">Pemerintah Provinsi</option>
                            <option value="Pemerintah Daerah">Pemerintah Daerah</option>
                            <option value="Swadaya Masyarakat">Swadaya Masyarakat</option>
                            <option value="Swasta">Swasta</option>
                            <option value="Donatur/Bantuan Luar Negeri">Donatur/Bantuan Luar Negeri</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="title-sub">
                        <span class="text1">Luas Bangunan</span>
                        <input class="form-control-dua" type="number" name="lbangunan" id="lbangunan"
                            placeholder="m2" value="{{ $organik->lbangunan }}">
                    </div>
                </div>
                <div class="sub-class">
                    <div class="title-sub">
                        <span class="text1">Daerah Cakupan</span>
                        <select class="form-control-dua" list="cakupan" name="dcakup" id="dcakup">
                            <option value="{{ $organik->dcakup }}" hidden>{{ $organik->dcakup }}</option>
                            <option value="Seluruh Perkotaan (Kota)">Seluruh Perkotaan (Kota)</option>
                            <option value="Hanya wilayah Ibukota Kabupaten">Hanya wilayah Ibukota Kabupaten</option>
                            <option value="Hanya wilayah diluar Ibukota Kabupaten">Hanya wilayah diluar Ibukota Kabupaten
                            </option>
                            <option value="Seluruh Wilayah kabupaten (Ibukota dan diluar Ibukota)">Seluruh Wilayah
                                kabupaten (Ibukota dan diluar Ibukota)</option>
                            <option value="Lokasi Tersebut">Lokasi Tersebut</option>
                        </select>
                    </div>
                    <div class="title-sub">
                        <span class="text1">Mesin Pencacah</span>
                        <select class="form-control-dua" list="pencacah" name="mpencacah" id="mpencacah">
                            <option value="{{ $organik->mpencacah }}" hidden>{{ $organik->mpencacah }}</option>
                            <option value="Ada dan Berfungsi dengan baik">Ada dan Berfungsi dengan baik</option>
                            <option value="Ada, tetapi rusak">Ada, tetapi rusak</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                        </select>
                    </div>
                </div>
                <div class="title">
                    <label class="text1">Alat Angkut</label>
                    <div class="radio">
                        <input type="radio" class="form-check-input" id="ada" name="a_angkut"
                        value="Ada" @if ($organik->a_angkut == "Ada") checked @endif>
                        <label class="form-check-label1" for="Ada">Ada</label>
                        <input type="radio" class="form-check-input" id="tdkada" name="a_angkut"
                        value="Tidak Ada" @if ($organik->a_angkut == "Tidak Ada") checked @endif>
                        <label class="form-check-label1" for="Tidak Ada">Tidak Ada</label>
                    </div>
                </div>
                <div class="sub-class">
                    <div class="title-sub">
                        <span class="text1">Motor</span>
                        <input class="form-control-dua" type="number" name="motor" id="motor"
                            placeholder="Unit" value="{{ $organik->motor }}">
                    </div>
                    <div class="title-sub">
                        <span class="text1">Gerobak Motor</span>
                        <input class="form-control-dua" type="number" name="gmotor" id="gmotor"
                            placeholder="Unit" value="{{ $organik->gmotor }}">
                    </div>
                </div>
                <div class="sub-class">
                    <div class="title-sub">
                        <span class="text1">Pick Up</span>
                        <input class="form-control-dua" type="number" name="pickup" id="pickup"
                            placeholder="Unit" value="{{ $organik->pickup }}">
                    </div>
                    <div class="title-sub">
                        <span class="text1">Truck</span>
                        <input class="form-control-dua" type="number" name="truck" id="truck"
                            placeholder="Unit" value="{{ $organik->truck }}">
                    </div>
                </div>
                <div class="title">
                    <span class="text1">Lainnya</span>
                    <div class="lainnya">
                        <input class="form-control-luas" type="text" name="lainnya" id="lainnya" value="{{ $organik->lainnya }}">
                        <input class="form-control-side1" type="number" name="unit1" id="unit1"
                            placeholder="Unit" value="{{ $organik->unit1 }}">
                    </div>
                </div>
                <div class="title-1">
                    <label class="text-2">JUMLAH ALAT ANGKUT</label>
                    <!--Otomatis-->
                    <input class="form-control1" type="number" name="jml_alat" id="jml-alat" placeholder="Unit" value="{{ $organik->jml_alat }}">
                </div>
            </div>
        </div>
    </div>
    <!-- Button -->
    <div class="button">
        <input type="submit" value="Simpan" class="btn Tambah">
    </div>
    </form>
    <!-- end -->
@endsection

