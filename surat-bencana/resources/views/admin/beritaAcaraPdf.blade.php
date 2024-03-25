<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('title')
        <title>Berita Acara Serah Terima</title>
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

    <style>
        @page {
            size: legal; /* Set ukuran kertas ke legal */
        }

        .table-container {
            width: 7.5in;
            height: 13in;
            /* margin: 20mm; */
        }

        .table-container img {
            max-width: 100%;
            height: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            border: 0; /* Menghilangkan border pada tabel */
        }

        .table th, .table td {
            border: 0; /* Menghilangkan border pada sel-sel */
            padding: 8px; /* Padding untuk sel */
        }

        .table th {
            background-color: #bdbdbd; /* Warna latar belakang untuk judul tabel */
            color: rgb(0, 0, 0); /* Warna teks untuk judul tabel */
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                {{-- <div class="container-fluid"> --}}
                    <div class="table-container">
                        <table class="table table-bordered" style="color: black; font-family: 'Arial, sans-serif'; text-align: center; font-size:12px;border: 1px solid black;">
                            <tr>
                                <td style="border: 1px solid black;"><img class="img-fluid" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/logo/Pemkot(BW).png'))) }}" width="70px" alt=""></td>
                                <td style="border: 1px solid black;" colspan="2" class="align-middle">
                                        <h3 class="font-weight-bold text-uppercase">
                                            BERITA ACARA SERAH TERIMA <br>
                                            BANTUAN PAKET <span style="text-transform: uppercase;">{{ $bantuan->jns_bantuan }}</span> BAGI MASYARAKAT <br>
                                            YANG TERDAMPAK MUSIBAH/BENCANA ALAM DAN SOSIAL<br>
                                            DI KOTA MEDAN TAHUN ANGGARAN
                                            {{ \Carbon\Carbon::now()->translatedFormat('Y') }}
                                        </h3>
                                </td>
                            </tr>
                            <tr>
                                <th style="border: 1px solid black;"></th>
                                <th style="border: 1px solid black;" colspan="2"></th>
                            </tr>
                            <tr style="text-align: justify">
                                <td colspan="3">
                                    <p class="text-justify mb-0">
                                        Pada hari ini <b>{{ \Carbon\Carbon::now()->translatedFormat('l') }}</b> {!! $tanggalSurat !!}, bertempat di Kota Medan, Kami yang bertanda tangan dibawah ini:
                                    </p>
                                    <div class="ml-3">
                                        <table class="font-weight-bold" style="border-spacing: 0; margin-top: 0; margin-bottom: 0; font-weight: bold;">
                                            <tr>
                                                <td style="padding: 4px;">Nama</td>
                                                <td style="padding: 4px;">:</td>
                                                <td style="padding: 4px; padding-left: 0;">RISNATA SUGIATY TAMBUNAN, SE</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 4px;">NIP</td>
                                                <td style="padding: 4px;">:</td>
                                                <td style="padding: 4px; padding-left: 0;">19670927 199603 2 004</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 4px;">JABATAN</td>
                                                <td style="padding: 4px;">:</td>
                                                <td class="text-uppercase" style="padding: 4px; padding-left: 0;">KEPALA BIDANG PERLINDUNGAN DAN JAMINAN SOSIAL</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <p class="text-justify mb-0">
                                        Dalam hal ini bertindak untuk dan atas nama <b>Dinas Sosial</b> Pemerintah Kota Medan untuk selanjutnya disebut sebagai <b>Pihak Pertama</b>.
                                    </p>
                                    <div class="ml-3">
                                        <table class="font-weight-bold" style="border-spacing: 0; margin-top: 0; margin-bottom: 0; font-weight: bold;">
                                            <tr>
                                                <td style="padding: 4px;">Nama</td>
                                                <td style="padding: 4px;">:</td>
                                                <td style="padding: 4px; padding-left: 0;">{{ $bantuan->bencana->keluarga->kelurahan->nama_lurah }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 4px;">NIP</td>
                                                <td style="padding: 4px;">:</td>
                                                <td style="padding: 4px; padding-left: 0;">{{ $bantuan->bencana->keluarga->kelurahan->nip_lurah }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 4px;">JABATAN</td>
                                                <td style="padding: 4px;">:</td>
                                                <td class="text-uppercase" style="padding: 4px; padding-left: 0;">LURAH KELURAHAN <span style="text-transform: uppercase;">{{ $bantuan->bencana->keluarga->kelurahan->nama_kelurahan }}</span></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <p class="text-justify mb-1">
                                        Dalam hal ini bertindak untuk dan atas nama <b>Lurah Kelurahan <span style="text-transform: uppercase;">{{ $bantuan->bencana->keluarga->kelurahan->nama_kelurahan }}</span></b> {{ $bantuan->bencana->keluarga->kelurahan->kecamatan->nama_kecamatan }} Pemerintah Medan untuk selanjutnya disebut <b>Pihak Kedua</b>.
                                    </p>
                                    <p class="text-justify mb-0">
                                        <b>Pihak PERTAMA</b> dengan ini menyerahkan <b>Bantuan {{ $bantuan->jns_bantuan }}</b> dari Pemerintah kota Medan untuk masyarakat yang
                                        terdampak Musibah Bencana Alam dan Sosial  {{ $bantuan->bencana->jns_bencana }}  tanggal  {{ $bantuan->bencana->tanggal_bencana }}  di  {{ $bantuan->bencana->alamat_bencana }}
                                        Kelurahan {{ $bantuan->bencana->keluarga->kelurahan->nama_kelurahan }}  {{ $bantuan->bencana->keluarga->kelurahan->kecamatan->nama_kecamatan }}  yang bersumber dari APBD TA.
                                        {{ \Carbon\Carbon::now()->translatedFormat('Y') }} kepada <b>Pihak KEDUA</b> dan <b>Pihak
                                        KEDUA</b> telah menerima sesuai jumlah tersebut dalam keadaan baik dan utuh dengan rincian sebagai berikut:
                                    </p>
                                </td>
                            </tr>
                            <tr style="text-align: justify">
                                <td colspan="3">
                                    <div class="align-self-center mx-auto col-8">
                                        <table class="table table-bordered font-weight-bold" style="width: 80%; margin: 0 auto; color: black; text-align: center; border: 1px solid black;">
                                            <tr>
                                                <th style="border: 1px solid black;"><b>JUMLAH</b></th>
                                                <th style="border: 1px solid black;"><b>URAIAN BARANG</b></th>
                                                <th style="border: 1px solid black;"><b>SATUAN</b></th>
                                            </tr>
                                            @foreach($bantuan->detailbantuan as $detail)
                                            <tr class="text-uppercase">
                                                <td style="border: 1px solid black;">2 PAKET</td>
                                                <td style="border: 1px solid black;"><span style="text-transform: uppercase;">{{ $detail->deskripsi }}</span></td>
                                                <td style="border: 1px solid black;"><span style="text-transform: uppercase;">{{ $detail->jumlah }} buah</span></td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                    <p class="text-justify mb-0">
                                    Untuk didistribusikan dan disalurkan kepada masyarakat yang terdampa Musibah Bencana Alam dan Sosial di Kota Medan.<br>
                                    Demikian Berita Acara Serah Terima ini diperbuat untuk dapat digunakan sebagaimana mestinya.
                                    </p>
                                </td>
                            </tr>
                            <tr style="text-align: center">
                                <th colspan="3" class="py-2 text-uppercase" style="text-align: center; border: 1px solid black; padding: 4px;">
                                    <b>BERITA ACARA INI DITANDATANGANI DI MEDAN PADA TANGGAL  <span style="text-transform: uppercase;">{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</span></b>
                                </th>
                            </tr>
                            <tr class="font-weight-bold">
                                <td class="align-middle" rowspan="2" style="border: 1px solid black; padding: 4px;"><b>PARA PIHAK</b></td>
                                <td class="align-middle" style="border: 1px solid black; padding: 4px;"><b>Pihak PERTAMA</b></td>
                                <td class="align-bottom" style="border: 1px solid black; padding: 4px;"><p class="mb-0" style="margin-top: 70px;"><b><u>RISNATA SUGIATY TAMBUNAN, SE</u></b></p><b>NIP. 19670927 199603 2 004</b></td>
                            </tr>
                            <tr class="font-weight-bold">
                                <td class="align-middle" style="border: 1px solid black; padding: 4px;"><b>Pihak KEDUA</b></td>
                                <td class="align-bottom" style="border: 1px solid black; padding: 4px;"><p class="mb-0" style="margin-top: 70px;"><b><u>{{ $bantuan->bencana->keluarga->kelurahan->nama_lurah }}</u></b></p><b>NIP. {{ $bantuan->bencana->keluarga->kelurahan->nip_lurah }} </b></td>
                            </tr>
                            <tr class="font-weight-bold">
                                <td class="align-bottom" colspan="2" style="border: 1px solid black; padding: 4px; vertical-align: bottom;">
                                    <b>DIKETAHUI OLEH<br>KEPALA DINAS SOSIAL KOTA MEDAN</b>
                                </td>
                                <td class="align-bottom" style="border: 1px solid black; padding: 4px;">
                                    <p class="mb-0" style="margin-top: 70px;"><b><u>KHOIRUDDIN, S.Sos.,S.E.,M.M</u></b></p><b>NIP. 19701117 199007 1 001</b>
                                </td>
                            </tr>
                        </table>
                    </div>

                {{-- </div> --}}
                <!-- /.container-fluid -->

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
