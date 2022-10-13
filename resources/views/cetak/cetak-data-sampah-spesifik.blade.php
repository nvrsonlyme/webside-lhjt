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
        <p align="center"><b>DATA SAMPAH SPESIFIK</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td align="center">Tanggal Lapor</td>
                <td align="center">Provinsi</td>
                <td align="center">Kabupaten/Kota</td>
                <td align="center">Sampah B3</td>
                <td align="center">Sampah LB3</td>
                <td align="center">Sampah Akibat Bencana</td>
                <td align="center">Sampah Puing</td>
                <td align="center">Sampah Non Periodik</td>
                <td align="center">Sampah Yang Secara Teknologi Belum Dapat Diolah</td>
            </tr>
            @foreach ($dataspesifik as $cetak)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($cetak->tgl_lapor)) }}</td>
                    <td>{{ $cetak->provinsi }}</td>
                    <td>{{ $cetak->kota }}</td>
                    <td align="center">{{ $cetak->sampah_b3 }}</td>
                    <td align="center">{{ $cetak->sampah_lb3 }}</td>
                    <td align="center">{{ $cetak->sampah_akibat_bencana }}</td>
                    <td align="center">{{ $cetak->sampah_puing }}</td>
                    <td align="center">{{ $cetak->sampah_non_periodik }}</td>
                    <td align="center">{{ $cetak->sampah_tidak_dapat_diolah }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
