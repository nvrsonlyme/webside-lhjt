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
                <td align="center">Bank Sampah / LB3</td>
                <td align="center">Alamat</td>
                <td align="center">Jalan</td>
                <td align="center">Kota</td>
                <td align="center">Kecamatan</td>
                <td align="center">Kelurahan</td>
                <td align="center">Latitude</td>
                <td align="center">Longitude</td>
                <td align="center">Status Bank Sampah</td>
                <td align="center">Waktu Operasional</td>
                <td align="center">Nama Ketua</td>
                <td align="center">No Telp</td>
                <td align="center">Omset Perbulan</td>
                <td align="center">Jumlah Nasabah Pria</td>
                <td align="center">Jumlah Nasabah Wanita</td>
                <td align="center">Jumlah Tenaga Kerja Pria</td>
                <td align="center">Jumlah Tenaga Kerja Wanita</td>
                <td align="center">Hasil Dijual Ke</td>
                <td align="center">NO SK</td>
                <td align="center">Struktur Organisasi</td>
                <td align="center">SK Bank Sampah</td>
                <td align="center">Tanggal SK</td>
                <td align="center">Ditandatangani Oleh</td>
                <td align="center">Produk Reuse</td>
                <td align="center">Jenis Reuse</td>
                <td align="center">Berat Reuse</td>
            </tr>
            @foreach ($dataanorganik as $cetak)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($cetak->tanggal)) }}</td>
                    <td>{{ $cetak->JLokasi }}</td>
                    <td>{{ $cetak->nama_tempat }}</td>
                    <td>{{ $cetak->rt }}</td>
                    <td>{{ $cetak->rw }}</td>
                    <td>{{ $cetak->jml_kk }}</td>
                    <td>{{ $cetak->bank_sampah }}</td>
                    <td>{{ $cetak->alamat }}</td>
                    <td>{{ $cetak->jalan }}</td>
                    <td>{{ $cetak->kota->name_kota }}</td>
                    <td>{{ $cetak->kecamatan->name_kec }}</td>
                    <td>{{ $cetak->kelurahan->name_kel }}</td>
                    <td>{{ $cetak->latitude }}</td>
                    <td>{{ $cetak->longitude }}</td>
                    <td>{{ $cetak->status_banksampah }}</td>
                    <td>{{ $cetak->waktu_operasional }}</td>
                    <td>{{ $cetak->namaKetua }}</td>
                    <td>{{ $cetak->no_tlp }}</td>
                    <td>{{ $cetak->omset }}</td>
                    <td>{{ $cetak->jml_nasabah_L }}</td>
                    <td>{{ $cetak->jml_nasabah_P }}</td>
                    <td>{{ $cetak->jml_tenagakerja_L }}</td>
                    <td>{{ $cetak->jml_tenagakerja_P }}</td>
                    <td>{{ $cetak->hasil_dijual_ke }}</td>
                    <td>{{ $cetak->no_sk }}</td>
                    <td>{{ $cetak->struktur_organisasi }}</td>
                    <td>{{ $cetak->sk_bank_sampah }}</td>
                    <td>{{ $cetak->tgl_sk }}</td>
                    <td>{{ $cetak->ttdo }}</td>
                    <td>{{ $cetak->produk_reuse }}</td>
                    <td>{{ $cetak->jenis_reuse }}</td>
                    <td>{{ $cetak->berat_reuse }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="form-group-MediaAnorganik">
        <p align="center"><b>MEDIA ANORGANIK</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td align="center">Tanggal</td>
                <td align="center">Nama Tempat</td>
                <td align="center">Yang Mengelola</td>
                <td align="center">Alat Timbangan</td>
                <td align="center">Jenis Pencatatan</td>
                <td align="center">Dibangun Oleh</td>
                <td align="center">Luas Bangunan</td>
                <td align="center">Daerah Cakupan</td>
                <td align="center">Mesin Press</td>
                <td align="center">Mesin Pencacah</td>
                <td align="center">Kondisi Bangunan</td>
                <td align="center">Buku Tabungan</td>
                <td align="center">Gudang Penyimpanan</td>
                <td align="center">Alat Angkut</td>
                <td align="center">Motor</td>
                <td align="center">Gerobak Motor</td>
                <td align="center">Pick Up</td>
                <td align="center">Truck</td>
                <td align="center">Lainnya</td>
                <td align="center">Unit</td>
                <td align="center">JUMLAH ALAT ANGKUT</td>
            </tr>
            @foreach ($dataanorganik as $cetak)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($cetak->tanggal)) }}</td>
                    <td>{{ $cetak->nama_tempat }}</td>
                    <td>{{ $cetak->mengelolah }}</td>
                    <td>{{ $cetak->alat_timbangan }}</td>
                    <td>{{ $cetak->jenis_pencatatan }}</td>
                    <td>{{ $cetak->dbangun }}</td>
                    <td>{{ $cetak->lbangunan }}</td>
                    <td>{{ $cetak->dcakup }}</td>
                    <td>{{ $cetak->mesin_press }}</td>
                    <td>{{ $cetak->mpencacah }}</td>
                    <td>{{ $cetak->kondisi_bangunan }}</td>
                    <td>{{ $cetak->buku_tabungan }}</td>
                    <td>{{ $cetak->gudang_penyimpanan }}</td>
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
    <div class="form-group-JmlSampah">
        <p align="center"><b>JUMLAH SAMPAH ANORGANIK</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td align="center">Tanggal</td>
                <td align="center">Nama Tempat</td>
                <td align="center">Jumlah Sampah</td>
                <td align="center">Jumlah Serdadu</td>
            </tr>
            @foreach ($dataanorganik as $cetak)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($cetak->tanggal)) }}</td>
                    <td>{{ $cetak->nama_tempat }}</td>
                    <td>{{ $cetak->jml_sampah }}</td>
                    <td>{{ $cetak->jml_serdadu }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="form-group-JnsSampah">
        <p align="center"><b>JENIS SAMPAH ANORGANIK</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td align="center">Tanggal</td>
                <td align="center">Nama Tempat</td>
                <td align="center">Plastik</td>
                <td align="center">Kertas</td>
                <td align="center">Besi</td>
                <td align="center">Logam</td>
                <td align="center">Lainnya</td>
                <td align="center">Unit</td>
            </tr>
            @foreach ($dataanorganik as $cetak)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($cetak->tanggal)) }}</td>
                    <td>{{ $cetak->nama_tempat }}</td>
                    <td>{{ $cetak->plastik }}</td>
                    <td>{{ $cetak->kertas }}</td>
                    <td>{{ $cetak->besi }}</td>
                    <td>{{ $cetak->logam }}</td>
                    <td>{{ $cetak->lainnya_anorganik }}</td>
                    <td>{{ $cetak->unit2 }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
