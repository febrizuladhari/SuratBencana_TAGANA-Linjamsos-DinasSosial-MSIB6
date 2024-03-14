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
            <th style="background-color: #ffffff;"><img class="img-fluid" src="{{ asset('img/logo/logo-color.png') }}" width="75px" alt=""></th>
            <th colspan="2" style="background-color: #ffffff;">
                    BERITA ACARA SERAH TERIMA <br>
                    BANTUAN PAKET  $jns_bantuan <br>
                    YANG TERDAMPAK MUSIBAH/ BENCANA ALAM DAN SOSIAL<br>
                    DI KOTA MEDAN TAHUN ANGGARAN 2024
            </th>
        </tr>        
        <tr style="text-align: justify">
            <td colspan="3">
                Pada hari ini  $hari  tanggal  $tanggal , bertempat di Kota Medan, Kami yang <br>
                bertanda tangan dibawah ini:<br>
                <div class="ml-3">
                    <table style="border-spacing: 0; width: 75%; margin-top: 0; margin-bottom: 0;">
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
                Dalam hal ini bertindak untuk dan atas nama Dinas Sosial Pemerintah Kota Medan untuk selanjutnya disebut sebagai Pihak Pertama.<br>
                <div class="ml-3">
                    <table style="border-spacing: 0; width: 75%; margin-top: 0; margin-bottom: 0;">
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
                <br>
                Dalam hal ini bertindak untuk dan atas nama  $kelurahan   $kecamatan  Pemerintah<br>
                Medan untuk selanjutnya disebut Pihak Kedua.<br>
                <br>
                Pihak PERTAMA dengan ini menyerahkan Bantuan  $jns_bantuan  dari Pemerintah kota Medan untuk masyarakat yang<br>
                terdampak Musibah Bencana Alam dan Sosial  $jns_bencana  tanggal  $tanggal  di  $alamat_kelurahan <br>
                 $kelurahan   $kecamatan  yang bersumber dari APBD TA. 2024 kepada Pihak KEDUA dan Pihak<br>
                KEDUA telah menerima sesuai jumlah tersebut dalam keadaan baik dan utuh dengan rincian sebagai berikut:
            </td>
        </tr>
        <tr style="text-align: justify">
            <td colspan="3">
                <table class="table table-bordered" style="color: black; text-align: center; border: 2px solid black;">
                    <tr>
                        <th style="border: 2px solid black;">Jumlah</th>
                        <th style="border: 2px solid black;">URAIAN BARANG</th>
                        <th style="border: 2px solid black;">SATUAN</th>
                    </tr>
                    <tr>
                        <td style="border: 2px solid black;">2 Paket</td>
                        <td style="border: 2px solid black;"> $deskripsi </td>
                        <td style="border: 2px solid black;">1 PCS</td>
                    </tr>
                </table>
                Untuk didistribusikan dan disalurkan kepada masyarakat yang terdampa Musibah Bencana Alam dan Sosial di Kota Medan.<br>
                Demikian Berita Acara Serah Terima ini diperbuat untuk dapat digunakan sebagaimana mestinya.
            </td>
        </tr>
        <tr style="text-align: center">
            <th colspan="3" style="text-align: center; border: 2px solid black; padding: 4px;">
                BERITA ACARA INI DITANDATANGANI DI MEDAN PADA TANGGAL  $tgl_cetak 
            </th>
        </tr>
        <tr>
            <td rowspan="2" style="border: 2px solid black; padding: 4px;"><br><br><br><br><br><br><br>PARA PIHAK</td>
            <td style="border: 2px solid black; padding: 4px;"><br><br><br>Pihak PERTAMA</td>
            <td style="border: 2px solid black; padding: 4px;"><br><br><br><br>RISNATA SUGIATY TAMBUNAN, SE<hr style="border: 1px solid black;">NIP. 19670927 199603 2 004</td>
        </tr>
        <tr>
            <td style="border: 2px solid black; padding: 4px;"><br><br><br>Pihak KEDUA</td>
            <td style="border: 2px solid black; padding: 4px;"><br><br><br><br>  $nama_lurah  <hr style="border: 1px solid black;">NIP.   $nip_lurah </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center; border: 2px solid black; padding: 4px;">
                <br><br><br><br><br><br>DIKETAHUI OLEH<br>KEPALA DINAS SOSIAL KOTA MEDAN
            </td>
            <td style="border: 2px solid black; padding: 4px;">
                <br><br><br><br>KHOIRUDDIN, S.Sos.,S.E.,M.M<hr style="border: 1px solid black;">NIP. 19701117 199007 1 001
            </td>
        </tr>                
    </table>
</div>
@endsection

<!-- Script -->
@section('script')
<!-- ... (script jika diperlukan) ... -->
@endsection
