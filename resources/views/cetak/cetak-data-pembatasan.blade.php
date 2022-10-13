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
                <td align="center">Lokasi Kegiatan Pembatasan Timbulan Sampah</td>
                <td align="center">Nama Lokasi</td>
                <td align="center">Alamat</td>
                <td align="center">RT</td>
                <td align="center">RW</td>
                <td align="center">Kota</td>
                <td align="center">Kecamatan</td>
                <td align="center">Kelurahan</td>
                <td align="center">Latitude</td>
                <td align="center">Longitude</td>
            </tr>
            @foreach ($datapembatasan as $cetak)
                <tr>
                    <td>{{ ($cetak->lokasi_kegiatan) }}</td>
                    <td>{{ $cetak->nama_lokasi }}</td>
                    <td>{{ $cetak->alamat }}</td>
                    <td align="center">{{ $cetak->rt }}</td>
                    <td align="center">{{ $cetak->rw }}</td>
                    <td>{{ $cetak->kota->name_kota }}</td>
                    <td>{{ $cetak->kecamatan->name_kec }}</td>
                    <td>{{ $cetak->kelurahan->name_kel }}</td>
                    <td align="center">{{ $cetak->lat }}</td>
                    <td align="center">{{ $cetak->long }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="form-group">
        <p align="center"><b>DATA PEMBATASAAN</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td colspan="2" align="center">Botol Sekali Pakai</td>
                <td colspan="2" align="center">Kotak atau Plastik Makan</td>
                <td colspan="3" align="center">Lainnya</td>
            </tr>
            <tr>
                <td align="center">Jumlah Sampah Sebelum Ada Pembatasan</td>
                <td align="center">Jumlah Sampah Setelah Ada Pembatasan</td>
                <td align="center">Jumlah Sampah Sebelum Ada Pembatasan</td>
                <td align="center">Jumlah Sampah Setelah Ada Pembatasan</td>
                <td align="center">Jenis Sampah Lainnya</td>
                <td align="center">Jumlah Sampah Sebelum Ada Pembatasan</td>
                <td align="center">Jumlah Sampah Setelah Ada Pembatasan</td>
            </tr>
            @foreach ($datapembatasan as $cetak)
                <tr>
                    <td align="center">{{ ($cetak->botol_sekali_pakai_sebelum) }}</td>
                    <td align="center">{{ $cetak->botol_sekali_pakai_setelah }}</td>
                    <td align="center">{{ $cetak->kotak_plastik_makanan_sebelum }}</td>
                    <td align="center">{{ $cetak->kotak_plastik_makanan_setelah }}</td>
                    <td>{{ $cetak->lainnya }}</td>
                    <td align="center">{{ $cetak->lainnya_sebelum }}</td>
                    <td align="center">{{ $cetak->lainnya_setelah }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
