@extends('layouts.layout_surat')

@section('title')
    <title>Berita Acara Serah Terima</title>
@endsection

<!-- Styles -->
@section('style')
<style>
    .table-container {
        width: 216mm; /* Lebar kertas F4 */
        height: 330mm; /* Tinggi kertas F4 */
        margin: 20mm; /* Margin dari tepi kertas */
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
@endsection

<!-- Content -->
@section('content')
<div class="table-container">
    <table class="table table-bordered" style="color: black; font-family: 'Times New Roman'; text-align: center; font-size:16px">
        <tr>
            <td><img class="img-fluid" src="{{ asset('img/logo/Pemkot (BW).png') }}" width="80px" alt=""></td>
            <td colspan="2" class="align-middle">
                    <h5 class="font-weight-bold">
                        BERITA ACARA SERAH TERIMA <br>
                        BANTUAN PAKET  $jns_bantuan <br>
                        YANG TERDAMPAK MUSIBAH/ BENCANA ALAM DAN SOSIAL<br>
                        DI KOTA MEDAN TAHUN ANGGARAN 2024
                    </h5>
            </td>
        </tr>
        <tr>
            <th></th>
            <th colspan="2"></th>
        </tr>
        <tr style="text-align: justify">
            <td colspan="3">
                <p class="text-justify">
                    Pada hari ini  <b>$hari</b> tanggal <b>$tanggal</b> bulan <b>$bulan</b>, bertempat di Kota Medan, Kami yang bertanda tangan dibawah ini:
                </p>
                <div class="ml-3">
                    <table class="font-weight-bold" style="border-spacing: 0; width: 75%; margin-top: 0; margin-bottom: 0;">
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
                            <td style="padding: 4px; padding-left: 0;">KEPALA BIDANG PERLINDUNGAN DAN JAMINAN SOSIAL</td>
                        </tr>
                    </table>
                </div>
                <p class="text-justify mb-0">
                    Dalam hal ini bertindak untuk dan atas nama Dinas Sosial Pemerintah Kota Medan untuk selanjutnya disebut sebagai <b>Pihak Pertama</b>.
                </p>
                <div class="ml-3">
                    <table class="font-weight-bold" style="border-spacing: 0; width: 75%; margin-top: 0; margin-bottom: 0;">
                        <tr>
                            <td style="padding: 4px;">Nama</td>
                            <td style="padding: 4px;">:</td>
                            <td style="padding: 4px; padding-left: 0;">$nama_kelurahan</td>
                        </tr>
                        <tr>
                            <td style="padding: 4px;">NIP</td>
                            <td style="padding: 4px;">:</td>
                            <td style="padding: 4px; padding-left: 0;">$nip_lurah</td>
                        </tr>
                        <tr>
                            <td style="padding: 4px;">JABATAN</td>
                            <td style="padding: 4px;">:</td>
                            <td style="padding: 4px; padding-left: 0;">$Kelurahan</td>
                        </tr>
                    </table>
                </div>
                <p class="text-justify mb-0">
                    Dalam hal ini bertindak untuk dan atas nama <b>$kelurahan</b> $kecamatan Pemerintah Medan untuk selanjutnya disebut <b>Pihak Kedua</b>.
                </p>
                <p class="text-justify mb-0">
                    <b>Pihak PERTAMA</b> dengan ini menyerahkan Bantuan <b>$jns_bantuan</b> dari Pemerintah kota Medan untuk masyarakat yang
                    terdampak Musibah Bencana Alam dan Sosial  $jns_bencana  tanggal  $tanggal  di  $alamat_kelurahan
                    $kelurahan   $kecamatan  yang bersumber dari APBD TA. 2024 kepada <b>Pihak KEDUA</b> dan <b>Pihak
                    KEDUA</b> telah menerima sesuai jumlah tersebut dalam keadaan baik dan utuh dengan rincian sebagai berikut:
                </p>
            </td>
        </tr>
        <tr style="text-align: justify">
            <td colspan="3">
                <table class="table table-bordered font-weight-bold" style="color: black; text-align: center; border: 1px solid black;">
                    <tr>
                        <th style="border: 1px solid black;">JUMLAH</th>
                        <th style="border: 1px solid black;">URAIAN BARANG</th>
                        <th style="border: 1px solid black;">SATUAN</th>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">2 PAKET</td>
                        <td style="border: 1px solid black;"> $deskripsi </td>
                        <td style="border: 1px solid black;">1 PCS</td>
                    </tr>
                </table>
                <p class="text-justify mb-0">
                Untuk didistribusikan dan disalurkan kepada masyarakat yang terdampa Musibah Bencana Alam dan Sosial di Kota Medan.<br>
                Demikian Berita Acara Serah Terima ini diperbuat untuk dapat digunakan sebagaimana mestinya.
                </p>
            </td>
        </tr>
        <tr style="text-align: center">
            <th colspan="3" class="py-2" style="text-align: center; border: 1px solid black; padding: 4px;">
                BERITA ACARA INI DITANDATANGANI DI MEDAN PADA TANGGAL  $tgl_cetak
            </th>
        </tr>
        <tr class="font-weight-bold">
            <td class="align-middle" rowspan="2" style="border: 1px solid black; padding: 4px;">PARA PIHAK</td>
            <td class="align-middle" style="border: 1px solid black; padding: 4px;">Pihak PERTAMA</td>
            <td class="align-bottom" style="border: 1px solid black; padding: 4px;"><p class="mb-0" style="margin-top: 70px;"><u>RISNATA SUGIATY TAMBUNAN, SE</u></p>NIP. 19670927 199603 2 004</td>
        </tr>
        <tr class="font-weight-bold">
            <td class="align-middle" style="border: 1px solid black; padding: 4px;">Pihak KEDUA</td>
            <td class="align-bottom" style="border: 1px solid black; padding: 4px;"><p class="mb-0" style="margin-top: 70px;"><u>$nama_lurah</u></p>NIP. $nip_lurah </td>
        </tr>
        <tr class="font-weight-bold">
            <td class="align-bottom" colspan="2" style="text-align: center; border: 1px solid black; padding: 4px;">
                DIKETAHUI OLEH<br>KEPALA DINAS SOSIAL KOTA MEDAN
            </td>
            <td class="align-bottom" style="border: 1px solid black; padding: 4px;">
                <p class="mb-0" style="margin-top: 70px;"><u>KHOIRUDDIN, S.Sos.,S.E.,M.M</u></p>NIP. 19701117 199007 1 001
            </td>
        </tr>
    </table>
</div>

@endsection

<!-- Script -->
@section('script')
<!-- ... (script jika diperlukan) ... -->
@endsection
