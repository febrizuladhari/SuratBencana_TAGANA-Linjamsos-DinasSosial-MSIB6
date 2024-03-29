@extends('layouts.layout_admin')


@section('title')
    <title>Keluarga</title>
@endsection


<!-- Content -->
@section('content')

    <!-- Keluarga -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Data Keluarga</h6>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="{{ route('tambahKeluarga') }}" class="text-decoration-none">
                        <button type="button" class="btn btn-info mx-1" data-toggle="modal" data-target="#createDetailBantuanModal">
                            <i class="fas fa-plus fa-sm fa-fw mr-2"></i>Tambah
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display nowrap" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>No.</th>
                            <th>Nomor KK</th>
                            <th>Alamat</th>
                            <th>Kelurahan</th>
                            <th>Kecamatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($keluargas as $key => $keluarga)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $keluarga->no_kk }}</td>
                            <td>{{ $keluarga->alamat }}</td>
                            <td>{{ $keluarga->kelurahan->nama_kelurahan }}</td>
                            <td>{{ $keluarga->kelurahan->kecamatan->nama_kecamatan }}</td>
                            {{-- <td>{{ $keluarga->bencana->jns_bencana }}</td> --}}
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editBencanaModal_{{ $keluarga->id }}">
                                    <i class="fas fa-edit fa-sm fa-fw mr-2"></i>Edit
                                </button>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="editBencanaModal_{{ $keluarga->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Keluarga</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">

                                    <!-- Form untuk edit keluarga -->
                                    <form id="editKeluargaForm" method="POST" action="{{ route('keluarga-update', $keluarga->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <!-- Input fields untuk mengedit keluarga -->
                                        <div class="form-group">
                                            <label for="no_kk">No. KK</label>
                                            <input type="text" class="form-control" id="no_kk" name="no_kk" value="{{ $keluarga->no_kk }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $keluarga->alamat }}">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
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
