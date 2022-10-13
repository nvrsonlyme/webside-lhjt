<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>{{ config('app.name', 'Jakarta Timur') }}</title>

    <link rel="stylesheet" href="{{ asset('css/style-layout.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
        <section class="dashboard">
            <div class="top">
                <i class="uil uil-bars sidebar-toggle"></i>

                {{-- <div class="search-box">
                    <i class="uil uil-search"></i>
                    <input type="text" placeholder="Search here...">
                </div> --}}
                <img src="{{ asset('img/lingkungan-hidup.jpg') }}" alt="">
            </div>
        <!--Isi Halaman-->
            @yield('container')



        </section>

            {{-- JQuery Code / Ajax --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script>
            $(document).ready(function () {
                $('#kota-dd').on('change', function () {
                    var idKota = this.value;
                    $("#kec-dd").html('');
                    $.ajax({
                        url: "{{url('api/fetch-kecamatan')}}",
                        type: "POST",
                        data: {
                            kota_id: idKota,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                        success: function (result) {
                            $('#kec-dd').html('<option value="" hidden>Pilih Kecamatan</option>');
                            $.each(result.kecamatan, function (key, value) {
                                $("#kec-dd").append('<option value="' + value.kec_id + '">'
                                    + value.name_kec + '</option>');
                            });
                            $('#kel-dd').html('<option value="">Pilih Kelurahan</option>');
                        }
                    });
                });
                $('#kec-dd').on('change', function () {
                    var idKecamatan = this.value;
                    $("#kel-dd").html('');
                    $.ajax({
                        url: "{{url('api/fetch-kelurahan')}}",
                        type: "POST",
                        data: {
                            kec_id: idKecamatan,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                        success: function (res) {
                            $('#kel-dd').html('<option value="" hidden>Pilih Kelurahan</option>');
                            $.each(res.kelurahan, function (key, value) {
                                $("#kel-dd").append('<option value="' + value.kel_id + '">'
                                    + value.name_kel + '</option>');
                            });
                        }
                    });
                });
            });
        </script>
        <script src="{{ asset('../js/script-home.js') }}"></script>
        <script src="{{ asset('js/script-selectbox.js') }}"></script>
        <script src="{{ asset('js/script-location.js') }}"></script>
        <script src="{{ asset('js/script-show.js') }}"></script>

        
</body>
<section class="sweetalert">
    @yield('sweetalert')
    <script src="{{ asset('dist/sweetalert2.all.min.js') }}"></script>
</section>
</html>
