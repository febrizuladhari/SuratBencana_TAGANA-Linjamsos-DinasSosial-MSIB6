@extends('layouts.layout_admin')


@section('title')
    <title>Data Berita Acara</title>
@endsection


<!-- Content -->
@section('content')

    <!-- Hasil Berita Acara -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Data Berita Acara</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive table-hover">
                <table id="dataTable" class="table table-bordered display nowrap" width="100%" cellspacing="0">
                    <thead class="thead-light align-middle">
                        <tr>
                            <th>No.</th>
                            <th>Nomor KK</th>
                            <th>Alamat KK</th>
                            <th>Alamat Bencana</th>
                            <th>Kelurahan</th>
                            <th>Kecamatan</th>
                            <th>Jenis Bencana</th>
                            <th>Tanggal Bencana</th>
                            <th>Waktu Bencana</th>
                            <th>Bantuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($keluargas as $keluarga)
                            @foreach ($keluarga->bencana as $bencana)
                            @foreach ($bencana->bantuan as $bantuan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $keluarga->no_kk }}</td>
                                <td>{{ $keluarga->alamat }}</td>
                                <td>{{ $bencana->alamat_bencana }}</td>
                                <td>{{ $keluarga->kelurahan->nama_kelurahan }}</td>
                                <td>{{ $keluarga->kelurahan->kecamatan->nama_kecamatan }}</td>
                                <td>{{ $bencana->jns_bencana }}</td>
                                <td>{{ date('d-m-Y', strtotime($bencana->tanggal_bencana)) }}</td>
                                <td>{{ $bencana->waktu_bencana }}</td>
                                <td>{{ $bantuan->jns_bantuan }}</td>
                                <td>
                                    <a href="{{ route('beritaAcara-detail', ['id' => $bantuan->id]) }}">
                                        <button type="button" class="btn btn-info mx-1">
                                            <i class="fas fa-info-circle fa-sm fa-fw mr-1"></i>Detail
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @endforeach
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection


<!-- Script -->
@section('script')

@endsection
