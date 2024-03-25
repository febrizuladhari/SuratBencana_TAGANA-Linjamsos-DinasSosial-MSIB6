@extends('layouts.layout_admin')


@section('title')
    <title>Bantuan</title>
@endsection


<!-- Content -->
@section('content')


    <!-- Bantuan -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Data Bantuan</h6>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="{{ route('tambahBantuan') }}" class="text-decoration-none">
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
                            <th>Bencana</th>
                            <th>Bantuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($detailBantuans as $detailBantuan)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $detailBantuan->bantuan->bencana->keluarga->no_kk }}</td>
                            <td>{{ $detailBantuan->bantuan->bencana->keluarga->alamat }}</td>
                            <td>{{ $detailBantuan->bantuan->bencana->keluarga->kelurahan->nama_kelurahan }}</td>
                            <td>{{ $detailBantuan->bantuan->bencana->keluarga->kelurahan->kecamatan->nama_kecamatan }}</td>
                            <td>{{ $detailBantuan->bantuan->bencana->jns_bencana }}</td>
                            <td>{{ $detailBantuan->bantuan->jns_bantuan }}</td>
                            <td>
                                <button type="button" class="btn btn-primary mx-1" data-toggle="modal" data-target="#editBantuanModal_{{ $detailBantuan->bantuan->id }}">
                                    <i class="fas fa-edit fa-sm fa-fw mr-2"></i>Edit
                                </button>
                                <button type="button" class="btn btn-danger mx-1" data-toggle="modal" data-target="#deleteBantuanModal_{{ $detailBantuan->bantuan->id }}">
                                    <i class="fas fa-trash fa-sm fa-fw mr-2"></i>Hapus
                                </button>
                            </td>
                        </tr>


                        <!-- Modal Edit -->
                        <div class="modal fade" id="editBantuanModal_{{ $detailBantuan->bantuan->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Bantuan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">

                                    <!-- Form untuk edit bantuan -->
                                    <form id="editBantuanForm" method="POST" action="{{ route('bantuan-update', $detailBantuan->bantuan->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="no_kk">Nomor KK</label>
                                            <input value="{{  $detailBantuan->bantuan->bencana->keluarga->no_kk }}" type="text" class="form-control" id="id_bencana" name="id_bencana" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="id_bencana">Bencana</label>
                                            <input value="{{ $detailBantuan->bantuan->bencana->jns_bencana }}" type="text" class="form-control" id="id_bencana" name="id_bencana" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="jns_bantuan">Bantuan</label>
                                            <input id="jns_bantuan" name="jns_bantuan" value="{{ $detailBantuan->bantuan->jns_bantuan }}" type="text" class="form-control" id="id_bencana" name="id_bencana" required>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="jns_bantuan">Bantuan</label>
                                            <select id="jns_bantuan" name="jns_bantuan" class="form-control" required>
                                                <option value="">{{ $detailBantuan->bantuan->jns_bantuan }}</option>
                                                    @foreach($detailBantuans as $pilihBantuan)
                                                        <option value="{{ $pilihBantuan->bantuan->id }}">{{ $pilihBantuan->bantuan->jns_bantuan }}</option>
                                                    @endforeach
                                            </select>
                                        </div> --}}

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
                        <div class="modal fade" id="deleteBantuanModal_{{ $detailBantuan->bantuan->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content p-3">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Hapus Data Bantuan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">

                                    <!-- Form untuk hapus bantuan -->
                                    <form id="editBantuanForm" method="POST" action="{{ route('bantuan-destroy', $detailBantuan->bantuan->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <!-- Input fields untuk mengedit bantuan -->
                                        <div class="form-group">
                                            <label for="jns_bantuan">Bencana</label>
                                            <input type="text" class="form-control" id="jns_bantuan" name="jns_bantuan" value="{{ $detailBantuan->bantuan->bencana->jns_bencana }}" disabled>
                                        <div class="form-group">
                                            <label for="jns_bantuan">Bantuan</label>
                                            <input type="text" class="form-control" id="jns_bantuan" name="jns_bantuan" value="{{ $detailBantuan->bantuan->jns_bantuan }}" disabled>
                                        </div>

                                        <p>Detail bantuan akan ikut terhapus. Harap pastikan Anda telah yakin menghapus data bantuan.</p>

                                        {{-- @foreach($detailBantuan->bantuan as $detail) --}}
                                            <li>{{ $detailBantuan->deskripsi }} : {{ $detailBantuan->jumlah}} buah</li>
                                        {{-- @endforeach --}}

                                        <div class="modal-footer mt-4">

                                            <button type="button" class="btn btn-secondary mt-4" data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-danger mt-4">Hapus</button>
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
