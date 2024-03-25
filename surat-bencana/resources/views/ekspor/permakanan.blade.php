<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('title')
        <title>TES</title>
        <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon.ico') }}">
    @yield('style')

    <!-- Custom fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Custom styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <div class="table-container">
                    <table class="table">
                        <tr style="text-align: center;">
                            <td colspan="6">DAFTAR TANDA TERIMA NASI BUNGKUS</td>
                        </tr>
                        <tr style="text-align: center;">
                            <td colspan="6">UNTUK KORBAN BENCANA KEBAKARAN TANGGAL </td>
                        </tr>
                        <tr>
                            <td colspan="2">ALAMAT</td>
                            <td colspan="4">: $variabel</td>
                        </tr>
                        <tr>
                            <td colspan="2">KELURAHAN</td>
                            <td colspan="4">: $variabel</td>
                        </tr>
                        <tr>
                            <td colspan="2">KECAMATAN</td>
                            <td colspan="4">: $variabel</td>
                        </tr>
                        <tr>
                            <td colspan="2">HARI</td>
                            <td colspan="4">: <span style="text-transform: uppercase;">{{ \Carbon\Carbon::now()->translatedFormat('l, d F Y'); }}</span></td>
                        </tr>

                        <tr>
                            <th rowspan="2" style="text-align: center;">NO</th>
                            <th rowspan="2" style="text-align: center;">NAMA</th>
                            <th rowspan="2" style="text-align: center;">ALAMAT</th>
                            <th colspan="3" style="text-align: center;">TANDA TANGAN PENERIMA MAKAN</th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">MAKAN PAGI</th>
                            <th style="text-align: center;">MAKAN SIANG</th>
                            <th style="text-align: center;">MAKAN MALAM</th>
                        </tr>

                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($keluargas as $keluarga)
                                @foreach ($keluarga->identitas as $identitas)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $identitas->nama }}</td>
                                    <td>{{ $keluarga->alamat }}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

</body>

</html>
