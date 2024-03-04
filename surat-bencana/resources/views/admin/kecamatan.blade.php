@extends('layouts.layout_admin')


@section('title')
    <title>Kecamatan</title>
@endsection


<!-- Content -->
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kecamatan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Kecamatan</th>
                            <th>Nama Camat</th>
                            <th>NIP Camat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($kecamatans as $key => $kecamatan)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $kecamatan->nama_kecamatan }}</td>
                            <td>{{ $kecamatan->nama_camat }}</td>
                            <td>{{ $kecamatan->nip_camat }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editBencanaModal_{{ $kecamatan->id }}">
                                    <i class="fas fa-edit fa-sm fa-fw mr-2"></i>Edit
                                </button>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="editBencanaModal_{{ $kecamatan->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Kecamatan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">

                                    <!-- Form untuk edit bencana -->
                                    <form id="editKecamatanForm" method="POST" action="{{ route('kecamatan-update', $kecamatan->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <!-- Input fields untuk mengedit bencana -->
                                        <div class="form-group">
                                            <label for="nama_kecamatan">Nama Kecamatan</label>
                                            <input type="text" class="form-control" id="nama_kecamatan" name="nama_kecamatan" value="{{ $kecamatan->nama_kecamatan }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_camat">Nama Camat</label>
                                            <input type="text" class="form-control" id="nama_camat" name="nama_camat" value="{{ $kecamatan->nama_camat }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="nip_camat">NIP Camat</label>
                                            <input type="text" class="form-control" id="nip_camat" name="nip_camat" value="{{ $kecamatan->nip_camat }}">
                                        </div>

                                        {{-- <button type="submit" class="btn btn-primary">Simpan Perubahan</button> --}}
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
