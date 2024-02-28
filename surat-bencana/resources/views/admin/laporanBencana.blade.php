@extends('layouts.layout_admin')


@section('title')
    <title>Data Laporan Bencana</title>
@endsection


<!-- Content -->
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Laporan Berdasarkan Bencana</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Jenis Bencana</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                    </tr>
                </thead>
                <tbody>@foreach($bencana as $key => $data)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $data->jns_bencana }}</td>
                        <td>{{ $data->nama_kelurahan }}</td>
                        <td>{{ $data->nama_kecamatan }}</td>
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