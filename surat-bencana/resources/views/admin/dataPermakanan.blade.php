@extends('layouts.layout_admin')


@section('title')
    <title>Data Permakanan</title>
@endsection


<!-- Content -->
@section('content')

    <!-- Hasil Permakanan -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Data Permakanan</h6>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="{{ route('permakanan-download') }}" class="text-decoration-none">
                        <button type="button" class="btn btn-success mx-1">
                            <i class="fas fa-file-excel mr-2"></i>Export Excel
                        </button>
                    </a>
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
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat KK</th>
                            <th>Alamat Bencana</th>
                            <th>Kelurahan</th>
                            <th>Kecamatan</th>
                            <th>Jenis Bencana</th>
                            <th>Tanggal Bencana</th>
                            <th>Waktu Bencana</th>
                            <th>Bantuan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($keluargas as $keluarga)
                            @foreach ($keluarga->identitas as $identitas)
                                @foreach ($keluarga->bencana as $bencana)
                                    @if ($bencana->tanggal_bencana >= $tanggalAwal && $bencana->tanggal_bencana <= $tanggalAkhir)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $identitas->no_kk }}</td>
                                            <td>{{ $identitas->nik }}</td>
                                            <td>{{ $identitas->nama }}</td>
                                            <td>{{ $identitas->status }}</td>
                                            <td>{{ $identitas->usia }}</td>
                                            <td>{{ $identitas->jns_kelamin }}</td>
                                            <td>{{ $keluarga->alamat }}</td>
                                            <td>{{ $bencana->alamat_bencana }}</td>
                                            <td>{{ $keluarga->kelurahan->nama_kelurahan }}</td>
                                            <td>{{ $keluarga->kelurahan->kecamatan->nama_kecamatan }}</td>
                                            <td>{{ $bencana->jns_bencana }}</td>
                                            <td>{{ date('d-m-Y', strtotime($bencana->tanggal_bencana)) }}</td>
                                            <td>{{ $bencana->waktu_bencana }}</td>
                                            <td>
                                                @foreach ($bencana->bantuan as $bantuan)
                                                    @if ($bantuan->jns_bantuan === 'Permakanan')
                                                        {{ $bantuan->jns_bantuan }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endif
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
