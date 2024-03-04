@extends('layouts.layout_admin')


@section('title')
    <title>Bencana</title>
@endsection


<!-- Content -->
@section('content')

    <!-- DataTables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Data Bencana</h6>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="{{ route('tambahBencana') }}" class="text-decoration-none">
                        <button type="button" class="btn btn-info mx-1" data-toggle="modal" data-target="#createDetailBantuanModal">
                            <i class="fas fa-plus fa-sm fa-fw mr-2"></i>Tambah
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor KK</th>
                            <th>Bencana</th>
                            <th>Tanggal Bencana</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($bencanas as $bencana)
                        <tr>
                            <td>{{ $bencana->keluarga->no_kk }}</td>
                            <td>{{ $bencana->jns_bencana }}</td>
                            <td>{{ date('d-m-Y', strtotime($bencana->tanggal_bencana)) }}</td>
                            <td>
                                <button type="button" class="btn btn-primary mx-1" data-toggle="modal" data-target="#editBencanaModal_{{ $bencana->id }}">
                                    <i class="fas fa-edit fa-sm fa-fw mr-2"></i>Edit
                                </button>
                                <button type="button" class="btn btn-danger mx-1" data-toggle="modal" data-target="#deleteBencanaModal_{{ $bencana->id }}">
                                    <i class="fas fa-trash fa-sm fa-fw mr-2"></i>Hapus
                                </button>
                            </td>
                        </tr>


                        <!-- Modal Edit -->
                        <div class="modal fade" id="editBencanaModal_{{ $bencana->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Bencana</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">

                                    <!-- Form untuk edit bencana -->
                                    <form id="editBencanaForm" method="POST" action="{{ route('bencana-update', $bencana->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <!-- Input fields untuk mengedit bencana -->
                                        <div class="form-group">
                                            <label for="jns_bencana">Bencana</label>
                                            <input type="text" class="form-control" id="jns_bencana" name="jns_bencana" value="{{ $bencana->jns_bencana }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_bencana">Tanggal Bencana</label>
                                            <input type="date" class="form-control" id="tanggal_bencana" name="tanggal_bencana" value="{{ $bencana->tanggal_bencana }}">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            </div>
                        </div>

                        <!-- Modal Delete -->
                        <div class="modal fade" id="deleteBencanaModal_{{ $bencana->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content p-3">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Hapus Data Bencana</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">

                                    <!-- Form untuk hapus bencana -->
                                    <form id="editBencanaForm" method="POST" action="{{ route('bencana-destroy', $bencana->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <!-- Input fields untuk mengedit bencana -->
                                        <div class="form-group">
                                            <label for="jns_bencana">Bencana</label>
                                            <input type="text" class="form-control" id="jns_bencana" name="jns_bencana" value="{{ $bencana->jns_bencana }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_bencana">Tanggal Bencana</label>
                                            <input type="date" class="form-control" id="tanggal_bencana" name="tanggal_bencana" value="{{ $bencana->tanggal_bencana }}" disabled>
                                        </div>

                                        <div class="modal-footer mt-4">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
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
