<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static{
            position: relative;
            /* left: 3%; */
            border: 1% solid #543535;
        }
    </style>
    <title>Cetak Data</title>

</head>
<body>
    <div class="form-group">
        <p align="center"><b>DATA</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td align="center">Tanggal</td>
                <td align="center">Jenis Lokasi</td>
                <td align="center">Nama Tempat</td>
                <td align="center">RT</td>
                <td align="center">RW</td>
                <td align="center">Jumlah KK</td>
                <td align="center">Alamat</td>
                <td align="center">Jalan</td>
                <td align="center">Kota</td>
                <td align="center">Kecamatan</td>
                <td align="center">Kelurahan</td>
                <td align="center">Latitude</td>
                <td align="center">Longitude</td>
                <td align="center">Nomor SK</td>
                <td align="center">Ditandatangani Oleh</td>
                <td align="center">SK Komposing</td>
                <td align="center">Komposing</td>
                <td align="center">Struktur Organisasi</td>
            </tr>
            @foreach ($dataorganik as $cetak)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($cetak->tanggal)) }}</td>
                    <td>{{ $cetak->JLokasi }}</td>
                    <td>{{ $cetak->nama_tempat }}</td>
                    <td>{{ $cetak->rt }}</td>
                    <td>{{ $cetak->rw }}</td>
                    <td>{{ $cetak->jml_kk }}</td>
                    <td>{{ $cetak->alamat }}</td>
                    <td>{{ $cetak->jalan }}</td>
                    <td>{{ $cetak->kota->name_kota }}</td>
                    <td>{{ $cetak->kecamatan->name_kec }}</td>
                    <td>{{ $cetak->kelurahan->name_kel }}</td>
                    <td>{{ $cetak->latitude }}</td>
                    <td>{{ $cetak->longitude }}</td>
                    <td>{{ $cetak->no_sk }}</td>
                    <td>{{ $cetak->ttdo }}</td>
                    <td>{{ $cetak->sk_komposing }}</td>
                    <td>{{ $cetak->komposing }}</td>
                    <td>{{ $cetak->struktur_organisasi }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="form-group-JmlSampah">
        <p align="center"><b>JUMLAH SAMPAH ORGANIK</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td align="center">Tanggal</td>
                <td align="center">Nama Tempat</td>
                <td align="center">Jumlah Sampah</td>
                <td align="center">Jumlah Serdadu</td>
            </tr>
            @foreach ($dataorganik as $cetak)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($cetak->tanggal)) }}</td>
                    <td>{{ $cetak->nama_tempat }}</td>
                    <td>{{ $cetak->jml_sampah }}</td>
                    <td>{{ $cetak->jml_serdadu }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="form-group-DataSampah">
        <p align="center"><b>DATA SAMPAH ORGANIK</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td colspan="9" align="center"><b>JUMLAH SAMPAH ORGANIK UNTUK PAKAN TERNAK</b></td>
            </tr>
            <tr>
                <td align="center">Tanggal</td>
                <td align="center">Nama Tempat</td>
                <td align="center">Jenis Ternak</td>
                <td align="center">Keterangan Lainnya</td>
                <td align="center">Kategori</td>
                <td align="center">Sisa Makanan</td>
                <td align="center">Kayu, Ranting, Daun</td>
                <td align="center">Total Makanan BSF</td>
                <td align="center">Jumlah Sampah Terkelola</td>
            </tr>
            @foreach ($dataorganik as $cetak)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($cetak->tanggal)) }}</td>
                    <td>{{ $cetak->nama_tempat }}</td>
                    <td>{{ $cetak->Jternak }}</td>
                    <td>{{ $cetak->k_lainnya }}</td>
                    <td>{{ $cetak->kategori }}</td>
                    <td>{{ $cetak->sisa }}</td>
                    <td>{{ $cetak->jenis }}</td>
                    <td>{{ $cetak->tbsf }}</td>
                    <td>{{ $cetak->jml_sampahterkelola }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="form-group-Magot">
        <p align="center"><b>JUMLAH BERAT DAN PAKAN MAGGOT PER BIOPON (BIO)/HARI</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td align="center">Tanggal</td>
                <td align="center">Nama Tempat</td>
                <td align="center">Bio1</td>
                <td align="center">Bio Perhari</td>
                <td align="center">Bio2</td>
                <td align="center">Bio Perhari</td>
                <td align="center">Bio3</td>
                <td align="center">Bio Perhari</td>
                <td align="center">Bio4</td>
                <td align="center">Bio Perhari</td>
                <td align="center">Bio5</td>
                <td align="center">Bio Perhari</td>
                <td align="center">Bio6</td>
                <td align="center">Bio Perhari</td>
                <td align="center">Bio7</td>
                <td align="center">Bio Perhari</td>
                <td align="center">Bio8</td>
                <td align="center">Bio Perhari</td>
                <td align="center">Bio9</td>
                <td align="center">Bio Perhari</td>
                <td align="center">Bio10</td>
                <td align="center">Bio Perhari</td>
                <td align="center">Jumlah Total Biofon</td>
            </tr>
            @foreach ($dataorganik as $cetak)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($cetak->tanggal)) }}</td>
                    <td>{{ $cetak->nama_tempat }}</td>
                    <td>{{ $cetak->bio1 }}</td>
                    <td>{{ $cetak->bio1_1 }}</td>
                    <td>{{ $cetak->bio2 }}</td>
                    <td>{{ $cetak->bio2_1 }}</td>
                    <td>{{ $cetak->bio3 }}</td>
                    <td>{{ $cetak->bio3_1 }}</td>
                    <td>{{ $cetak->bio4 }}</td>
                    <td>{{ $cetak->bio4_1 }}</td>
                    <td>{{ $cetak->bio5 }}</td>
                    <td>{{ $cetak->bio5_1 }}</td>
                    <td>{{ $cetak->bio6 }}</td>
                    <td>{{ $cetak->bio6_1 }}</td>
                    <td>{{ $cetak->bio7 }}</td>
                    <td>{{ $cetak->bio7_1 }}</td>
                    <td>{{ $cetak->bio8 }}</td>
                    <td>{{ $cetak->bio8_1 }}</td>
                    <td>{{ $cetak->bio9 }}</td>
                    <td>{{ $cetak->bio9_1 }}</td>
                    <td>{{ $cetak->bio10 }}</td>
                    <td>{{ $cetak->bio10_1 }}</td>
                    <td>{{ $cetak->tbio }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="form-group-Inti">
        <p align="center"><b>PROSES INTI</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td align="center">Tanggal</td>
                <td align="center">Nama Tempat</td>
                <td align="center">Berat Telur Hasil BSF</td>
                <td align="center">Berat Maggot 1-18 DOL</td>
                <td align="center">Prepupa Masuk Dari Plasma</td>
                <td align="center">Alamat Kirim Plasma</td>
                <td align="center">Kirim Maggot 1-18 DOL Ke Plasma</td>
                <td align="center">Alamat Terima Plasma</td>
            </tr>
            @foreach ($dataorganik as $cetak)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($cetak->tanggal)) }}</td>
                    <td>{{ $cetak->nama_tempat }}</td>
                    <td>{{ $cetak->berat_telur }}</td>
                    <td>{{ $cetak->berat_maggot }}</td>
                    <td>{{ $cetak->prepupa_masuk }}</td>
                    <td>{{ $cetak->alamat_kirim }}</td>
                    <td>{{ $cetak->kirim_maggot }}</td>
                    <td>{{ $cetak->alamat_terima }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="form-group-Plasma">
        <p align="center"><b>PROSES PLASMA</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td align="center">Tanggal</td>
                <td align="center">Nama Tempat</td>
                <td align="center">Larva Di Terima Dari</td>
                <td align="center">Berat Maggot 1-18 DOL</td>
                <td align="center">Prepupa Yang Di Manfaatkan</td>
            </tr>
            @foreach ($dataorganik as $cetak)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($cetak->tanggal)) }}</td>
                    <td>{{ $cetak->nama_tempat }}</td>
                    <td>{{ $cetak->larva_terima }}</td>
                    <td>{{ $cetak->berat_maggot_plasma }}</td>
                    <td>{{ $cetak->prepupa_dimanfaatkan }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="form-group-NonBSF">
        <p align="center"><b>JENIS TERNAK NON BSF</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td colspan="6" align="center"><b>JUMLAH SAMPAH ORGANIK UNTUK BAHAN BAKU KOMPOS</b></td>
            </tr>
            <tr>
                <td align="center">Tanggal</td>
                <td align="center">Nama Tempat</td>
                <td align="center">Sisa Makanan</td>
                <td align="center">Kayu, Ranting, Daun</td>
                <td align="center">Panen Kompos Cair</td>
                <td align="center">Panen Kompos Padat</td>
            </tr>
            @foreach ($dataorganik as $cetak)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($cetak->tanggal)) }}</td>
                    <td>{{ $cetak->nama_tempat }}</td>
                    <td>{{ $cetak->skompos }}</td>
                    <td>{{ $cetak->jns_kompos }}</td>
                    <td>{{ $cetak->pk_cair }}</td>
                    <td>{{ $cetak->pk_padat }}</td>
                </tr>
            @endforeach
        </table>
        <p></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td colspan="6" align="center"><b>JUMLAH SAMPAH ORGANIK UNTUK BAHAN BAKU SUMBER ENERGI</b></td>
            </tr>
            <tr>
                <td align="center">Tanggal</td>
                <td align="center">Nama Tempat</td>
                <td align="center">Sisa Makanan</td>
                <td align="center">Kayu, Ranting, Daun</td>
            </tr>
            @foreach ($dataorganik as $cetak)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($cetak->tanggal)) }}</td>
                    <td>{{ $cetak->nama_tempat }}</td>
                    <td>{{ $cetak->s_energi }}</td>
                    <td>{{ $cetak->jns_energi }}</td>
                </tr>
            @endforeach
        </table>
        <p></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td colspan="4" align="center"><b>JUMLAH TOTAL</b></td>
            </tr>
            <tr>
                <td align="center">Tanggal</td>
                <td align="center">Nama Tempat</td>
                <td align="center">JUMLAH TOTAL SISA MAKANAN</td>
                <td align="center">JUMLAH TOTAL KAYU, RANTING, DAUN</td>
            </tr>
            @foreach ($dataorganik as $cetak)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($cetak->tanggal)) }}</td>
                    <td>{{ $cetak->nama_tempat }}</td>
                    <td>{{ $cetak->jml_skompos }}</td>
                    <td>{{ $cetak->jml_kompos }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="form-group-Plasma">
        <p align="center"><b>MEDIA KOMPOSING</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td align="center">Tanggal</td>
                <td align="center">Nama Tempat</td>
                <td align="center">Tong Komposer</td>
                <td align="center">Bak Beton</td>
                <td align="center">Luas</td>
                <td align="center">Lainnya</td>
                <td align="center">Unit</td>
                <td align="center">Pemanfaatan</td>
                <td align="center">Yang Mengelola</td>
                <td align="center">Jumlah Tenaga Kerja Pria</td>
                <td align="center">Jumlah Tenaga Kerja Wanita</td>
                <td align="center">Alat Timbangan</td>
                <td align="center">Jenis Pencatatan</td>
                <td align="center">Dibangun Oleh</td>
                <td align="center">Luas Bangunan</td>
                <td align="center">Daerah Cakupan</td>
                <td align="center">Mesin Pencacah</td>
                <td align="center">Alat Angkut</td>
                <td align="center">Motor</td>
                <td align="center">Gerobak Motor</td>
                <td align="center">Pick Up</td>
                <td align="center">Truck</td>
                <td align="center">Lainnya</td>
                <td align="center">Unit</td>
                <td align="center">JUMLAH ALAT ANGKUT</td>
            </tr>
            @foreach ($dataorganik as $cetak)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($cetak->tanggal)) }}</td>
                    <td>{{ $cetak->nama_tempat }}</td>
                    <td>{{ $cetak->tong }}</td>
                    <td>{{ $cetak->beton }}</td>
                    <td>{{ $cetak->luas }}</td>
                    <td>{{ $cetak->lain }}</td>
                    <td>{{ $cetak->unit }}</td>
                    <td>{{ $cetak->pemanfaatan }}</td>
                    <td>{{ $cetak->mengelolah }}</td>
                    <td>{{ $cetak->jml_pria }}</td>
                    <td>{{ $cetak->jml_wanita }}</td>
                    <td>{{ $cetak->timbangan }}</td>
                    <td>{{ $cetak->jcatat }}</td>
                    <td>{{ $cetak->dbangun }}</td>
                    <td>{{ $cetak->lbangunan }}</td>
                    <td>{{ $cetak->dcakup }}</td>
                    <td>{{ $cetak->mpencacah }}</td>
                    <td>{{ $cetak->a_angkut }}</td>
                    <td>{{ $cetak->motor }}</td>
                    <td>{{ $cetak->gmotor }}</td>
                    <td>{{ $cetak->pickup }}</td>
                    <td>{{ $cetak->truck }}</td>
                    <td>{{ $cetak->lainnya }}</td>
                    <td>{{ $cetak->unit1 }}</td>
                    <td>{{ $cetak->jml_alat }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
