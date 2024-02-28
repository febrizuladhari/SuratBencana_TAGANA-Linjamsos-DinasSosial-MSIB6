@extends('layouts.layout_admin')


@section('title')
    <title>Bencana</title>
@endsection


<!-- Content -->
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Bencana</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No. KK</th>
                            <th>Jenis Bencana</th>
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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editBencanaModal_{{ $bencana->id }}">
                                    <i class="fas fa-edit fa-sm fa-fw mr-2"></i>Edit
                                </button>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="editBencanaModal_{{ $bencana->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
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
                                            <label for="jns_bencana">Jenis Bencana</label>
                                            <input type="text" class="form-control" id="jns_bencana" name="jns_bencana" value="{{ $bencana->jns_bencana }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_bencana">Tanggal Bencana</label>
                                            <input type="date" class="form-control" id="tanggal_bencana" name="tanggal_bencana" value="{{ $bencana->tanggal_bencana }}">
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
