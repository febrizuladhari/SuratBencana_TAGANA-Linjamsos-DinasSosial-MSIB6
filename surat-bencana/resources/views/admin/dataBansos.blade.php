@extends('layouts.layout_admin')


@section('title')
    <title>Filter Bantuan Sosial</title>
@endsection


<!-- Content -->
@section('content')

    <!-- Hasil Fiter Data Bansos -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Data Bantuan Sosial</h6>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="{{ route('bansos-download') }}" class="text-decoration-none">
                        <button type="button" class="btn btn-success mx-1" data-toggle="modal" data-target="#createDetailBantuanModal">
                            <i class="fas fa-file-excel mr-2"></i>Export Excel
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive table-hover">
                <table id="dataTable" class="table table-bordered display nowrap" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Nomor KK</th>
                            <th>Jenis Bencana</th>
                            <th>Tanggal Bencana</th>
                            <th>Alamat Bencana</th>
                            <th>Alamat KK</th>
                            <th>Kecamatan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($keluargas as $keluarga)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $keluarga->identitas->first()->nama ?? ''  }}</td>
                                <td>{{ $keluarga->identitas->first()->nik ?? '' }}</td>
                                <td>{{ $keluarga->identitas->first()->no_kk ?? '' }}</td>
                                <td>{{ $keluarga->bencana->first()->jns_bencana ?? '' }}</td>
                                <td>{{ date('d-m-Y', strtotime($keluarga->bencana->first()->tanggal_bencana ?? '')) }}</td>
                                <td>{{ $keluarga->alamat }}</td>
                                <td>{{ $keluarga->alamat }}</td>
                                <td>{{ $keluarga->kelurahan->kecamatan->nama_kecamatan ?? '' }}</td>
                            </tr>
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
