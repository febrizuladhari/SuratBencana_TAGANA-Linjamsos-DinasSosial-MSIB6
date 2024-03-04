@extends('layouts.layout_admin')


@section('title')
    <title>Identitas</title>
@endsection


<!-- Content -->
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Identitas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Status</th>
                            <th>Usia</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($identitas as $key => $identitas)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $identitas->nama }}</td>
                            <td>{{ $identitas->nik }}</td>
                            <td>{{ $identitas->status }}</td>
                            <td>{{ $identitas->usia }}</td>
                            <td>{{ $identitas->jns_kelamin }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editBencanaModal_{{ $identitas->id }}">
                                    <i class="fas fa-edit fa-sm fa-fw mr-2"></i>Edit
                                </button>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="editBencanaModal_{{ $identitas->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Identitas</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">

                                    <!-- Form untuk edit identitas -->
                                    <form id="editIdentitasForm" method="POST" action="{{ route('identitas-update', $identitas->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <!-- Input fields untuk mengedit identitas -->
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $identitas->nama }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="nik">Nik</label>
                                            <input type="text" class="form-control" id="nik" name="nik" value="{{ $identitas->nik }}">
                                        </div> 
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input type="text" class="form-control" id="status" name="status" value="{{ $identitas->status }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="usia">Usia</label>
                                            <input type="text" class="form-control" id="usia" name="usia" value="{{ $identitas->usia }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="jns_kelamin">Jenis Kelamin</label>
                                            <input type="text" class="form-control" id="jns_kelamin" name="jns_kelamin" value="{{ $identitas->jns_kelamin }}">
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
