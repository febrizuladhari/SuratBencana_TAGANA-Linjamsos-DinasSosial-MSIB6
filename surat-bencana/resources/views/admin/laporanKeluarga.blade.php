@extends('layouts.layout_admin')


@section('title')
    <title>Data Laporan Keluarga</title>
@endsection


<!-- Content -->
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Laporan Keluarga</h1>
<p class="mb-4">Data laporan keluarga berdasarkan indikator-indikator yang ada.</p>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Keluarga</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
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
                            {{-- @foreach($dataBencana as $key => $bencana) --}}
                            <tr>
                                {{-- <td>{{ $key + 1 }}</td>
                                <td>{{ $bencana->kecamatan }}</td>
                                <td>{{ $bencana->kelurahan }}</td>
                                <td>{{ $bencana->jenis_bencana }}</td>
                                <td>{{ $bencana->nomor_kk }}</td> --}}
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


<!-- Script -->
@section('script')

@endsection