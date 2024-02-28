@extends('layouts.layout_admin')


@section('title')
    <title>Data Laporan Jiwa</title>
@endsection


<!-- Content -->
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Laporan Jiwa</h1>
<p class="mb-4">Data laporan jiwa berdasarkan indikator-indikator yang ada.</p>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Jiwa</div>

                <div class="card-body">
                    <table class="table">
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