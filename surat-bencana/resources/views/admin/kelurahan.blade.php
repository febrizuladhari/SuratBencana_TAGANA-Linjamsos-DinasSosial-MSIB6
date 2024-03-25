@extends('layouts.layout_admin')


@section('title')
    <title>Kelurahan</title>
@endsection


<!-- Content -->
@section('content')


    <!-- DataTables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kelurahan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display nowrap" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>No.</th>
                            <th>Kelurahan</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Kecamatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($kelurahans as $kelurahan)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $kelurahan->nama_kelurahan }}</td>
                            <td>{{ $kelurahan->nip_lurah }}</td>
                            <td>{{ $kelurahan->nama_lurah }}</td>
                            <td>{{ $kelurahan->kecamatan ? $kelurahan->kecamatan->nama_kecamatan : 'Data Tidak Berelasi' }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editKelurahanModal_{{ $kelurahan->id }}">
                                    <i class="fas fa-edit fa-sm fa-fw mr-2"></i>Edit
                                </button>
                            </td>
                        </tr>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="editKelurahanModal_{{ $kelurahan->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Keluharan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">

                                    <!-- Form untuk edit bencana -->
                                    <form id="editKelurahanForm" method="POST" action="{{ route('kelurahan-update', $kelurahan->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <!-- Input fields untuk mengedit bencana -->
                                        <div class="form-group">
                                            <label for="nip_lurah">NIP</label>
                                            <input type="text" class="form-control" id="nip_lurah" name="nip_lurah" value="{{ $kelurahan->nip_lurah }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_lurah">Nama Lurah</label>
                                            <input type="text" class="form-control" id="nama_lurah" name="nama_lurah" value="{{ $kelurahan->nama_lurah }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_kelurahan">Nama Kelurahan</label>
                                            <input type="text" class="form-control" id="nama_kelurahan" name="nama_kelurahan" value="{{ $kelurahan->nama_kelurahan }}">
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
