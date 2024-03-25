@extends('layouts.layout_admin')


@section('title')
    <title>Detail Data Berita Acara</title>
@endsection


<!-- Content -->
@section('content')

    <!-- Hasil Fiter Data Bansos -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Data Berita Acara</h6>
                </div>
            </div>
        </div>
        <div class="card-body">

            <h5 class="font-weight-bold">Detail Keluarga</h5>
            <div class="table-responsive table-hover">
                <table class="table table-bordered display nowrap" width="100%" cellspacing="0">
                    <thead class="thead-light align-middle">
                        <tr>
                            <th>Nomor KK</th>
                            <th>Alamat</th>
                            <th>Kelurahan</th>
                            <th>Kecamatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $bantuan->bencana->keluarga->no_kk }}</td>
                            <td>{{ $bantuan->bencana->keluarga->alamat }}</td>
                            <td>{{ $bantuan->bencana->keluarga->kelurahan->nama_kelurahan }}</td>
                            <td>{{ $bantuan->bencana->keluarga->kelurahan->kecamatan->nama_kecamatan }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h5 class="font-weight-bold mt-4">Detail Bencana</h5>
            <div class="table-responsive table-hover">
                <table class="table table-bordered display nowrap" width="100%" cellspacing="0">
                    <thead class="thead-light align-middle">
                        <tr>
                            <th>Bencana</th>
                            <th>Alamat Bencana</th>
                            <th>Tanggal Bencana</th>
                            <th>Waktu Bencana</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $bantuan->bencana->jns_bencana }}</td>
                            <td>{{ $bantuan->bencana->alamat_bencana }}</td>
                            <td>{{ date('d-m-Y', strtotime($bantuan->bencana->tanggal_bencana)) }}</td>
                            <td>{{ $bantuan->bencana->waktu_bencana }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h5 class="font-weight-bold mt-4">Detail Bantuan</h5>
            <div class="table-responsive table-hover">
                <table class="table table-bordered display nowrap" width="100%" cellspacing="0">
                    <thead class="thead-light align-middle">
                        <tr>
                            <th>Bantuan</th>
                            <th>Deskripsi</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">{{ $bantuan->jns_bantuan }}</td>
                            <td>
                                @foreach($bantuan->detailbantuan as $detail)
                                    {{ $detail->deskripsi }} <br>
                                @endforeach
                            </td>
                            <td>
                                @foreach($bantuan->detailbantuan as $detail)
                                    {{ $detail->jumlah }} <br>
                                @endforeach
                            </td>
                            <td class="align-middle">
                                <a href="{{ route('beritaAcara-download', ['id' => $bantuan->id]) }}">
                                    <button type="button" class="btn btn-info mx-1">
                                        <i class="fas fa-file-pdf fa-sm fa-fw mr-1"></i>Print
                                    </button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

@endsection


<!-- Script -->
@section('script')

@endsection
