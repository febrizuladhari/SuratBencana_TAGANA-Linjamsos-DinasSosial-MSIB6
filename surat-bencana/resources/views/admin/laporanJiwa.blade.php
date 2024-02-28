@extends('layouts.layout_admin')


@section('title')
    <title>Data Laporan Jiwa</title>
@endsection


<!-- Content -->
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Laporan Berdasarkan Jiwa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>Status</th>
                        <th>Alamat</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Jenis Bencana</th>
                    </tr>
                        </thead>
                        <tbody>
                            @foreach($jiwa as $key => $data)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->nik }}</td>
                                <td>{{ $data->jns_kelamin }}</td>
                                <td>{{ $data->usia }}</td>
                                <td>{{ $data->status }}</td>
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