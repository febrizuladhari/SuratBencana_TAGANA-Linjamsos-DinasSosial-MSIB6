@extends('layouts.layout_admin')


@section('title')
    <title>Detail Bantuan</title>
@endsection


<!-- Content -->
@section('content')

<!-- DataTables -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Data Detail Bantuan</h6>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="{{ route('tambahDetailBantuan') }}" class="text-decoration-none">
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
                        <th>Bantuan</th>
                        <th>Deskripsi</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($detailBantuans as $detailBantuan)
                    <tr>
                        <td>{{ $detailBantuan->bantuan->bencana->keluarga->no_kk }}</td>
                        <td>{{ $detailBantuan->bantuan->bencana->jns_bencana }}</td>
                        <td>{{ $detailBantuan->bantuan->jns_bantuan }}</td>
                        <td>{{ $detailBantuan->deskripsi}}</td>
                        <td>{{ $detailBantuan->jumlah}}</td>
                        <td>
                            <button type="button" class="btn btn-primary mx-1" data-toggle="modal" data-target="#editDetailBantuanModal_{{ $detailBantuan->id }}">
                                <i class="fas fa-edit fa-sm fa-fw mr-2"></i>Edit
                            </button>
                            <button type="button" class="btn btn-danger mx-1" data-toggle="modal" data-target="#deleteDetailBantuanModal_{{ $detailBantuan->id }}">
                                <i class="fas fa-trash fa-sm fa-fw mr-2"></i>Hapus
                            </button>
                        </td>
                    </tr>

                    <!-- Modal Edit -->
                    <div class="modal fade" id="editDetailBantuanModal_{{ $detailBantuan->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Edit Data Bencana</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">

                                <!-- Form untuk edit detail bantuan -->
                                <form id="editBencanaForm" method="POST" action="{{ route('detailBantuan-update', $detailBantuan->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <!-- Input fields untuk mengedit detail bantuan -->
                                    <div class="form-group">
                                        <label for="jns_bantuan">Bantuan</label>
                                        <input type="text" class="form-control" id="jns_bantuan" name="jns_bantuan" value="{{ $detailBantuan->bantuan->jns_bantuan }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $detailBantuan->deskripsi }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah</label>
                                        <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $detailBantuan->jumlah }}" required>
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
                    <div class="modal fade" id="deleteDetailBantuanModal_{{ $detailBantuan->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content p-3">
                            <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Hapus Detail Bantuan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">

                                <!-- Form untuk hapus detail bantuan -->
                                <form id="editBencanaForm" method="POST" action="{{ route('detailBantuan-destroy', $detailBantuan->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <div class="form-group">
                                        <label for="no_kk">Nomor KK</label>
                                        <input type="text" class="form-control" id="no_kk" name="no_kk" value="{{ $detailBantuan->bantuan->bencana->keluarga->no_kk }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="jns_bencana">Bencana</label>
                                        <input type="text" class="form-control" id="jns_bencana" name="jns_bencana" value="{{ $detailBantuan->bantuan->bencana->jns_bencana }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="jns_bantuan">Bantuan</label>
                                        <input type="text" class="form-control" id="jns_bantuan" name="jns_bantuan" value="{{ $detailBantuan->bantuan->jns_bantuan }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $detailBantuan->deskripsi }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah</label>
                                        <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $detailBantuan->jumlah }}" disabled>
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
