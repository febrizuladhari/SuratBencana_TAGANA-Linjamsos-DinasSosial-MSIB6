@extends('layouts.layout_admin')


@section('title')
    <title>Data Laporan Keluarga</title>
@endsection


<!-- Content -->
@section('content')
<!-- Content -->
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Laporan Berdasarkan Keluarga</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>No. KK</th>
                        <th>Kepala Keluarga</th>
                        <th>Alamat</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Jenis Bencana</th>
                    </tr>
                        </thead>
                        <tbody>
                            @foreach($keluarga as $key => $data)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $data->no_kk }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->nama_kelurahan }}</td>
                                <td>{{ $data->nama_kecamatan }}</td>
                                <td>{{ $data->jns_bencana }}</td>
                            </tr>@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection


<!-- Script -->
@section('script')

@endsection
