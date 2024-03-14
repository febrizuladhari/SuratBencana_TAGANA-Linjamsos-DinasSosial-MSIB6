@extends('layouts.layout_admin')


@section('title')
    <title>Identitas</title>
@endsection


<!-- Content -->
@section('content')

    <!-- Identitas -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Data Identitas</h6>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="{{ route('tambahIdentitas') }}" class="text-decoration-none">
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
                    <thead class="thead-light">
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
                                <button type="button" class="btn btn-danger mx-1" data-toggle="modal" data-target="#deleteIdentitasModal_{{ $identitas->id }}">
                                    <i class="fas fa-trash fa-sm fa-fw mr-2"></i>Hapus
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
                                            <label for="nik">NIK</label>
                                            <input type="text" class="form-control" id="nik" name="nik" value="{{ $identitas->nik }}">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="status">Status</label>
                                            <input type="text" class="form-control" id="status" name="status" value="{{ $identitas->status }}">
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select id="status" name="status" class="form-control" required>
                                                <option value="{{ $identitas->status }}">{{ $identitas->status }}</option>
                                                <option value="Kepala Keluarga">Kepala Keluarga</option>
                                                <option value="Istri">Istri</option>
                                                <option value="Anak">Anak</option>
                                                <option value="Anggota Lain">Anggota Lain</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kehamilan">Kehamilan</label>
                                            <select id="kehamilan" name="kehamilan" class="form-control" required>
                                                <option value="{{ $identitas->kehamilan }}">{{ $identitas->kehamilan }}</option>
                                                <option value="Hamil">Hamil</option>
                                                <option value="Tidak Hamil">Tidak Hamil</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="usia">Usia</label>
                                            <input type="number" class="form-control" id="usia" name="usia" value="{{ $identitas->usia }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="jns_kelamin">Jenis Kelamin</label>
                                            <select id="jns_kelamin" name="jns_kelamin" class="form-control" required>
                                                <option value="{{ $identitas->jns_kelamin }}">{{ $identitas->jns_kelamin }}</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
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

                        <!-- Modal Delete -->
                        <div class="modal fade" id="deleteIdentitasModal_{{ $identitas->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content p-3">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Hapus Data Bencana</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">

                                    <!-- Form untuk hapus identitas -->
                                    <form id="deleteIdentitasForm" method="POST" action="{{ route('identitas-destroy', $identitas->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <!-- Input fields untuk mengedit identitas -->
                                        <div class="form-group">
                                            <label for="no_kk">Nomor KK</label>
                                            <input type="text" class="form-control" id="no_kk" name="no_kk" value="{{ $identitas->no_kk }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="nik">NIK</label>
                                            <input type="text" class="form-control" id="nik" name="nik" value="{{ $identitas->nik }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $identitas->nama }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input type="text" class="form-control" id="status" name="status" value="{{ $identitas->status }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="usia">Usia</label>
                                            <input type="number" class="form-control" id="usia" name="usia" value="{{ $identitas->usia }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="jns_kelamin">Jenis Kelamin</label>
                                            <input type="text" class="form-control" id="jns_kelamin" name="jns_kelamin" value="{{ $identitas->jns_kelamin }}" disabled>
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
