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
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Nomor KK</th>
                            <th>Jenis Bencana</th>
                            <th>Tanggal Kejadian</th>
                            <th>Alamat Kejadian</th>
                            <th>Alamat KK</th>
                            <th>Kecamatan</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($keluargas as $keluarga)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
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
