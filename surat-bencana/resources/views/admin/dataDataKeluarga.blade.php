@extends('layouts.layout_admin')


@section('title')
    <title>Data Keluarga</title>
@endsection


<!-- Content -->
@section('content')

    <!-- Hasil Keluarga -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Data Keluarga</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive table-hover">
                <table id="dataTable" class="table table-bordered display nowrap" width="100%" cellspacing="0">
                    <thead class="thead-light align-middle">
                        <tr>
                            <th>No.</th>
                            <th>Jenis Bencana</th>
                            <th>Alamat Bencana</th>
                            <th>Tanggal Bencana</th>
                            <th>Waktu Bencana</th>

                            <th>Nomor KK</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($keluargasFiltered as $keluarga)
                            @foreach ($keluarga->bencana as $bencana)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $bencana->jns_bencana }}</td>
                                    <td>{{ $bencana->alamat_bencana }}</td>
                                    <td>{{ date('d-m-Y', strtotime($bencana->tanggal_bencana)) }}</td>
                                    <td>{{ $bencana->waktu_bencana }}</td>
                                    <td>{{ $keluarga->no_kk }}</td>
                                    <td>
                                        <a href="">
                                            <button type="button" class="btn btn-info mx-1">
                                                <i class="fas fa-info-circle fa-sm fa-fw mr-1"></i>Detail
                                            </button>
                                        </a>
                                    </td>
                                </tr>
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
