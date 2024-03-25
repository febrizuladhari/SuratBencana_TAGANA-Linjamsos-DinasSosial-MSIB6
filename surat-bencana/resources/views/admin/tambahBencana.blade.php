@extends('layouts.layout_admin')


@section('title')
    <title>Tambah Bencana</title>
@endsection


<!-- Content -->
@section('content')

<!-- DataTables -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Bencana</h6>
            </div>
        </div>
    </div>

    <div class="card-body">

        <!-- Form untuk tambah bencana -->
        <form id="createBencanaForm" method="POST" action="{{ route('bencana-store') }}" class="m-5">
            @csrf
            <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <select type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                    <option value="">Pilih Kecamatan</option>
                    @foreach ($kecamatan as $pilihKecamatan)
                        <option value="{{ $pilihKecamatan->id }}">{{ $pilihKecamatan->nama_kecamatan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_kelurahan">Kelurahan</label>
                <select id="id_kelurahan" name="id_kelurahan" class="form-control" required>
                    <option value="">Pilih Kelurahan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="id_keluarga">Keluarga</label>
                <select id="id_keluarga" name="id_keluarga" class="form-control" required>
                    <option value="">Pilih Keluarga</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jns_bencana">Bencana</label>
                <input type="text" class="form-control" id="jns_bencana" name="jns_bencana" required>
            </div>
            <div class="form-group">
                <label for="alamat_bencana">Alamat Bencana</label>
                <input type="text" class="form-control" id="alamat_bencana" name="alamat_bencana" required>
            </div>
            <div class="form-group">
                <label for="tanggal_bencana">Tanggal Bencana</label>
                <input type="date" class="form-control" id="tanggal_bencana" name="tanggal_bencana" required>
            </div>
            <div class="form-group">
                <label for="waktu_bencana">Waktu Bencana</label>
                <input type="time" class="form-control" id="waktu_bencana" name="waktu_bencana" required>
            </div>
            <div class="modal-footer mt-4">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-info">Tambah</button>
            </div>
        </form>

        {{-- Script Dynamic Dropdown --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function(){
                    $('#kecamatan').change(function(){
                        var kecamatanID = $(this).val();
                        if(kecamatanID){
                            $.ajax({
                                type:"GET",
                                url:"{{ url('/getKelurahan') }}",
                                data: {kecamatanID: kecamatanID},
                                dataType: 'JSON',
                                success:function(res){
                                    if(res){
                                        $("#id_kelurahan").empty();
                                        // $("#id_keluarga").empty();
                                        $("#id_kelurahan").append('<option>---Pilih Kelurahan---</option>');
                                        // $("#id_keluarga").append('<option>---Pilih Keluarga---</option>');
                                        $.each(res,function(id,nama_kelurahan){
                                            $("#id_kelurahan").append('<option value="'+id+'">'+nama_kelurahan+'</option>');
                                        });
                                    }else{
                                    $("#id_kelurahan").empty();
                                    // $("#id_keluarga").empty();
                                    }
                                }
                            });
                        }else{
                            $("#id_kelurahan").empty();
                            // $("#id_keluarga").empty();
                        }
                    });

                    $('#id_kelurahan').change(function(){
                        var kelurahanID = $(this).val();
                        if(kelurahanID){
                            $.ajax({
                                type:"GET",
                                url:"{{ url('/getKeluarga') }}",
                                data: {kelurahanID: kelurahanID},
                                dataType: 'JSON',
                                success:function(res){
                                    if(res){
                                        $("#id_keluarga").empty();
                                        $("#id_keluarga").append('<option>---Pilih Keluarga---</option>');
                                        $.each(res,function(index, keluarga){
                                            $("#id_keluarga").append('<option value="'+keluarga.id+'">'+keluarga.no_kk+ ' - '+keluarga.alamat+ '</option>');
                                        });
                                    }else{
                                    $("#id_keluarga").empty();
                                    }
                                }
                            });
                        }else{
                            $("#id_keluarga").empty();
                        }
                    });

                    $('#id_keluarga').change(function(){
                        var keluargaID = $(this).val();
                        if(keluargaID){
                            $.ajax({
                                type:"GET",
                                url:"{{ url('/getBencana') }}",
                                data: {keluargaID: keluargaID},
                                dataType: 'JSON',
                                success:function(res){
                                    if(res){
                                        $("#id_bencana").empty();
                                        $("#id_bencana").append('<option>---Pilih Bencana---</option>');
                                        $.each(res,function(id,jns_bencana){
                                            $("#id_bencana").append('<option value="'+id+'">'+jns_bencana+'</option>');
                                        });
                                    }else{
                                    $("#id_bencana").empty();
                                    }
                                }
                            });
                        }else{
                            $("#id_bencana").empty();
                        }
                    });

            });
        </script>
    </div>
</div>

@endsection


<!-- Script -->
@section('script')

@endsection
