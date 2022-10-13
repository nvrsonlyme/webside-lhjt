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
        <p align="center"><b>DATA LAPAK</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td align="center">Jenis</td>
                <td align="center">Nama Fasilitas</td>
                <td align="center">Penanggung Jawab</td>
                <td align="center">Telepon/HP</td>
                <td align="center">Wilayah</td>
                <td align="center">Alamat</td>
                <td align="center">Provinsi</td>
                <td align="center">Kabupaten/Kota</td>
                <td align="center">Kecamatan</td>
                <td align="center">Kelurahan/Desa</td>
                <td align="center">Latitude</td>
                <td align="center">Longitude</td>
            </tr>
            @foreach ($datalapak as $cetak)
                <tr>
                    <td>{{ $cetak->jenis }}</td>
                    <td>{{ $cetak->nama_fasilitas }}</td>
                    <td>{{ $cetak->penanggung_jawab }}</td>
                    <td>{{ $cetak->no_hp }}</td>
                    <td>{{ $cetak->wilayah }}</td>
                    <td>{{ $cetak->alamat }}</td>
                    <td>{{ $cetak->provinsi }}</td>
                    <td>{{ $cetak->kota->name_kota }}</td>
                    <td>{{ $cetak->kecamatan->name_kec }}</td>
                    <td>{{ $cetak->kelurahan->name_kel }}</td>
                    <td>{{ $cetak->latitude }}</td>
                    <td>{{ $cetak->longitude }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
